<?php
require(__DIR__ . '../../models/user.php');
// Déclaration d'un tableau vide pour enregistrer les erreurs de formulaire
$formErrors = array();

//Vérification envoi formulaire inscription
if (isset($_POST['signUpButton']))
{
    $user = new User();
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
var_dump($_POST);
    if (empty($formErrors))
    {
        if ($user->addUser())
        {
            
            $message = 'Vous êtes inscrit';
        }
        else
        {
            var_dump($user->addUser());
            $message = 'Un problème est survenu lors de l\'inscription';
        }
    }
    // Vérification personnage
    /* if (!empty($_POST['mainCharacter']))
    {
        $mainCharacter = $_POST['mainCharacter'];
    }
    elseif (!empty($_POST['mainCharacter']) && $_POST['mainCharacter'] == 'choose')
    {
        $formErrors['mainCharacter'] = 'Vous n\'avez pas précisé votre personnage principal.';
    }
    else
    {
        $formErrors['mainCharacter'] = 'Votre personnage n\'existe pas (ou pas encore).';
    } */
}

// PARTIE CONNEXION

// Vérification adresse mail connexion
/* if (!empty($_POST['emailSignIn']) && filter_var(FILTER_VALIDATE_EMAIL))
{
    $emailSignIn = $_POST['emailSignIn'];
}
elseif (empty($_POST['emailSignIn']))
{
    $formErrors['emailSignIn'] = 'Vous n\'avez pas renseigné votre adresse mail.';
}
else
{
    $formErrors['emailSignIn'] = 'Votre adresse mail n\'est pas correcte.';
}

// Vérification mot de passe connexion
if (!empty($_POST['passwordSignIn']))
{
    $passwordSignIn = htmlentities($_POST['passwordSignIn']);
}
elseif (isset($_POST['passwordSignIn']) && empty($_POST['passwordSignIn']))
{
    $formErrors['passwordSignIn'] = 'Vous n\'avez pas renseigné votre adresse mail.';
}
else
{
    $formErrors['passwordSignIn'] = 'Votre adresse mail n\'est pas correcte.';
}
 */