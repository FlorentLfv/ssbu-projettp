<?php
require(__DIR__ . '../../models/characters.php');
require(__DIR__ . '../../models/nationalityplayer.php');
require(__DIR__ . '../../models/topplayers.php');

$formErrors = array();
$character = new Character();
$charactersList = $character->getCharactersNameList();
$nationality = new Nationality();
$nationalityList = $nationality->getNationalityList();

if (isset($_POST['characterButton']))
{
    $character->name = $_POST['characterName'];
    $character->pathImgCharacter = $_POST['characterImg'];
    $character->presentation = $_POST['characterPresentation'];
    $character->originFranchise = $_POST['characterFranchise'];
    $character->strengths = $_POST['characterStrengths'];
    $character->weaknesses = $_POST['characterWeaknesses'];
    $character->addCharacter();
}

if (isset($_POST['topPlayerButton']))
{
    $topPlayer = new TopPlayer();
    $topPlayer->pseudoPlayer = $_POST['topPlayerPseudo'];
    $topPlayer->photoTopPlayerName = $_POST['topPlayerPhotoName'];
    $topPlayer->photoTopPlayerPath = $_POST['topPlayerPhotoPath'];
    $topPlayer->idCharacters = $_POST['characterName'];
    $topPlayer->idNationality = $_POST['nationalityName'];
    $topPlayer->addTopPlayer();
}

if (isset($_POST['nationalityButton']))
{
    $nationality->nameNationality = $_POST['nationalityName'];
    $nationality->addNationality();
}