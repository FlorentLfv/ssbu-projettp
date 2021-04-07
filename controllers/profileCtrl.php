<?php
require(__DIR__ . '../../models/user.php');
require(__DIR__ . '../../models/cityoftournament.php');
require(__DIR__ . '../../models/characters.php');

$formErrors = array();
$user = new User();
$city = new CityOfTournament();
$user->idUser = $_SESSION['user']['idUser'];
$userInfo = $user->getUserInfo();
$character = new Character();
$charactersNameList = $character->getCharactersNameList();
//Vérification envoi formulaire inscription
if (isset($_POST['updateButton']))
{

    //Vérification pseudo
    if (!empty($_POST['pseudo']))
    {
        $user->pseudo = htmlentities($_POST['pseudo']);
    }
    else
    {
        $formErrors['pseudo'] = 'Vous n\'avez pas renseigné votre pseudo';
    }

    // Vérification adresse mail inscription
    if (!empty($_POST['mail']))
    {
        $user->mail = filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL);
    }
    else
    {
        $formErrors['mail'] = 'Vous n\'avez pas renseigné votre adresse mail';
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

    //Vérification ancien mot de passe
    if (!empty($_POST['lastPassword']))
    {
        $user->password = htmlentities($_POST['lastPassword']);
    }
    elseif (empty($_POST['lastPassword']))
    {
        $formErrors['lastPassword'] = 'Vous n\'avez pas renseigné votre mot de passe';
    }
    else
    {
        $formErrors['lastPassword'] = 'Votre mot de passe n\'est pas correct';
    }

    // Vérification nouveau mot de passe
    if (!empty($_POST['newPassword']))
    {
        $user->password = htmlentities($_POST['newPassword']);
        $user->password = password_hash($_POST['newPassword'], PASSWORD_BCRYPT);
    }
    else
    {
        $formErrors['newPassword'] = 'Vous n\'avez pas renseigné votre nouveau mot de passe';
    }

    // Vérification nouveau mot de passe
    if (!empty($_POST['confirmNewPassword']))
    {
        if ($_POST['confirmNewPassword'] !== $_POST['newPassword'])
        {
            $formErrors['confirmNewPassword'] = 'Le mot de passe ne correspond pas à celui que vous avez tapé';
        }
    }
    else
    {
        $formErrors['confirmNewPassword'] = 'Vous n\'avez pas retapé votre nouveau mot de passe';
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

    //Exécution de la méthode updateUserInfo
    if (empty($formErrors))
    {
        if ($user->updateUserInfo())
        {
            header('Location:/modifiedUser');
            exit;
        }
        else
        {
            $messageUpdate = 'Un problème est survenu lors des modifications de vos informations';
        }
    }
}

// Suppression du compte
if (isset($_POST['deleteButton']))
{
    $user->deleteUser();
    session_destroy();
    header('Location:/deleted');
    exit;
}
