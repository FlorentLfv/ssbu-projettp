<?php
require(__DIR__ . '../../models/characters.php');
require(__DIR__ . '../../models/topplayers.php');

// on vérifie si il y a un idCharacter dans URL et si c'est un chiffre
if (isset($_GET['idCharacter']) && is_numeric($_GET['idCharacter']))
{
    // on stocke le get idCharacter dans une variable
    $idCorrect = $_GET['idCharacter'];
    // on instancie la classe Character
    $character = new Character();
    // on attribue à idCharacter la valeur de la variable
    $character->idCharacter = $idCorrect;
    // on stocke la méthode getCharacterInfos dans une variable
    $charactersInfos = $character->getCharacterInfos();
    // si idCharacter n'existe pas on renvoie sur page 404
    if (!$charactersInfos)
    {
        header("Location:/404");
        exit;
    }
    // on instancie la classe TopPlayer
    $topPlayer = new TopPlayer();
    $topPlayer->idCharacters = $idCorrect;
    $topPlayerInfos = $topPlayer->getTopPlayerInfos();
}