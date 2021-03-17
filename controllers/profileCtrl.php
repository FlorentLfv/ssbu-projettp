<?php
require(__DIR__ . '../../models/user.php');
require(__DIR__ . '../../models/cityoftournament.php');

$formErrors = array();

//Vérification envoi formulaire inscription
if (isset($_POST['updateButton']))
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

    //Exécution de la méthode updateUserInfo

    if (empty($formErrors))
    {
        $user->idUser = $_SESSION['user']['idUser'];
        $user->updateUserInfo();
        if ($user->updateUserInfo())
        {
            $messageUpdate = 'Vos informations ont été modifiées';
        }
        else
        {
            $messageUpdate = 'Un problème est survenu lors des modifications de vos informations';
        }
    }
}

if (isset($_POST['deleteButton']))
{
    $user = new User();
    $user->idUser = $_SESSION['user']['idUser'];
    $user->deleteUser();
    session_destroy();
    header('Location:/deleted');
    exit;
}
