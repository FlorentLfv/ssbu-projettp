<?php
require(__DIR__ . '../../models/user.php');
require(__DIR__ . '../../models/cityoftournament.php');
require(__DIR__ . '../../models/characters.php');

// Déclaration d'un tableau vide pour enregistrer les erreurs de formulaire
$formErrors = array();
$character = new Character();
$charactersNameList = $character->getCharactersNameList();

//Vérification envoi formulaire inscription
if (isset($_POST['signUpButton']))
{
    $user = new User();
    $city = new CityOfTournament();
    //Vérification pseudo
    if (!empty($_POST['pseudo']))
    {
        $user->pseudo = htmlentities($_POST['pseudo']);
    }
    else
    {
        $formErrors['pseudo'] = 'Vous n\'avez pas renseigné votre pseudo.';
    }

    // Vérification adresse mail inscription
    if (!empty($_POST['emailSignUp']))
    {
        $user->mail = filter_var($_POST['emailSignUp'], FILTER_VALIDATE_EMAIL);
    }
    else
    {
        $formErrors['emailSignUp'] = 'Vous n\'avez pas renseigné votre adresse mail.';
    }

    // Vérification mot de passe inscription
    if (!empty($_POST['passwordSignUp']))
    {
        $user->password = htmlentities($_POST['passwordSignUp']);
        $user->password = password_hash($_POST['passwordSignUp'], PASSWORD_BCRYPT);
    }
    else
    {
        $formErrors['passwordSignUp'] = 'Vous n\'avez pas renseigné votre mot de passe.';
    }

    //Vérification confirmation mdp
    if (!empty($_POST['confirmPassword']))
    {
        if ($_POST['passwordSignUp'] !== $_POST['confirmPassword'])
        {
            $formErrors['confirmPassword'] = 'Le mot de passe ne correspond pas à celui que vous avez tapé';
        }
    }
    else
    {
        $formErrors['confirmPassword'] = 'Veuillez confirmer votre mot de passe';
    }

    //Vérification code postal
    if (!empty($_POST['zipCode']))
    {
        $city->cityName = htmlentities($_POST['zipCode']);
    }
    else
    {
        $formErrors['zipCode'] = 'Vous n\'avez pas renseigné un code postal';
    }

    //Vérification ville
    if (!empty($_POST['city']))
    {
        $user->idCity = htmlentities($_POST['city']);
    }
    else
    {
        $formErrors['city'] = 'Vous n\'avez pas renseigné votre ville de tournois';
    }

    // Vérification personnage
    if (!empty($_POST['mainCharacter']))
    {
        $user->idCharacters = htmlentities($_POST['mainCharacter']);
    }
    elseif (!empty($_POST['mainCharacter']) && $_POST['mainCharacter'] == 'choose')
    {
        $formErrors['mainCharacter'] = 'Vous n\'avez pas précisé votre personnage principal.';
    }
    else
    {
        $formErrors['mainCharacter'] = 'Votre personnage n\'existe pas (ou pas encore).';
    }

    //Vérification et exécution de la méthode addUser
    if (empty($formErrors))
    {
        if (!$user->checkEmail())
        {
            $user->addUser();
            header('Location:/signedUp');
        }
        else
        {
            $messageSignUp = 'Cette adresse mail est déjà utilisée';
        }
    }
}

// PARTIE CONNEXION
if (isset($_POST['signInButton']))
{
    $user = new User();
    // Vérification adresse mail connexion
    if (!empty($_POST['emailSignIn']) && filter_var(FILTER_VALIDATE_EMAIL))
    {
        $user->mail = $_POST['emailSignIn'];
    }
    elseif (empty($_POST['emailSignIn']))
    {
        $formErrors['emailSignIn'] = 'Vous n\'avez pas renseigné votre adresse mail';
    }
    else
    {
        $formErrors['emailSignIn'] = 'Votre adresse mail n\'est pas correcte';
    }

    // Vérification mot de passe connexion
    if (!empty($_POST['passwordSignIn']))
    {
        $user->password = htmlentities($_POST['passwordSignIn']);
    }
    elseif (isset($_POST['passwordSignIn']) && empty($_POST['passwordSignIn']))
    {
        $formErrors['passwordSignIn'] = 'Vous n\'avez pas renseigné votre mot de passe';
    }
    else
    {
        $formErrors['passwordSignIn'] = 'Votre mot de passe n\'est pas correct';
    }

    //Pas d'erreur dans la saisie du formulaire
    if (empty($formErrors))
    {
        $userInfo = $user->getUserConnexion();
        if ($userInfo !== false)
        {
            $isGoodPassword = password_verify($user->password, $userInfo->password);
            if ($isGoodPassword)
            {
                $_SESSION['user']['pseudo'] = $userInfo->pseudo;
                $_SESSION['user']['idUser'] = $userInfo->idUser;
                header('location:/home');
                exit;
            }
            else
            {
                $messageSignIn = 'Votre mot de passe et/ou votre courriel sont incorrecte';
            }
        }
    }
}
