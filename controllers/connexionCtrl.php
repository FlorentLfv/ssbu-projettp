<?php
// Déclaration d'un tableau vide pour enregistrer les erreurs de formulaire
$formErrors = array();

//Vérification pseudo
if (!empty($_POST['pseudo']) && filter_var(FILTER_SANITIZE_STRING))
{
    $pseudo = $_POST['pseudo'];
}
elseif (empty($_POST['pseudo']))
{
    $formErrors['pseudo'] = 'Vous n\'avez pas renseigné votre pseudo.';
}
else
{
    $formErrors['pseudo'] = 'Votre pseudo n\'est pas correct.';
}

// Vérification adresse mail inscription
if (isset($_POST['emailSignUp']) && filter_var(FILTER_VALIDATE_EMAIL))
{
    $emailSignUp = $_POST['emailSignUp'];
}
elseif (empty($_POST['emailSignUp']))
{
    $formErrors['emailSignUp'] = 'Vous n\'avez pas renseigné votre adresse mail.';
}
else
{
    $formErrors['emailSignUp'] = 'Votre adresse mail n\'est pas correcte.';
}

// Vérification mot de passe inscription
if (isset($_POST['passwordSignUp']))
{
    $passwordSignUp = htmlentities($_POST['passwordSignUp']);
}
elseif (empty($_POST['passwordSignUp']))
{
    $formErrors['passwordSignUp'] = 'Vous n\'avez pas renseigné votre adresse mail.';
}
else
{
    $formErrors['passwordSignUp'] = 'Votre adresse mail n\'est pas correcte.';
}

//Vérification confirmation mdp
if (isset($_POST['confirmPassword']) && isset($_POST['confirmPassword']) == isset($_POST['passwordSignIn']))
{
    $confirmPasswordSignUp = $_POST['confirmPassword'];
}
elseif (empty($_POST['confirmPassword']))
{
    $formErrors['confirmPassword'] = 'Vous n\'avez pas retapé votre mot de passe.';
}
else
{
    $formErrors['confirmPassword'] = 'Votre mot de passe ne correspond pas';
}

// Vérification personnage
if (isset($_POST['mainCharacter']) && isset($_POST['mainCharacter']) == 'choose')
{
    $mainCharacter = $_POST['mainCharacter'];
}
elseif (empty($_POST['mainCharacter']))
{
    $formErrors['mainCharacter'] = 'Vous n\'avez pas précisé votre personnage principal.';
}
else
{
    $formErrors['mainCharacter'] = 'Votre personnage n\'existe pas (ou pas encore).';
}

// PARTIE CONNEXION

// Vérification adresse mail connexion
if (isset($_POST['emailSignIn']) && filter_var(FILTER_VALIDATE_EMAIL))
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
if (isset($_POST['passwordSignIn']))
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