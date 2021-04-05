<?php
require(__DIR__ . '../../models/characters.php');
require(__DIR__ . '../../models/nationalityplayer.php');

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

if (isset($_POST['nationalityButton']))
{
    $nationality->nameNationality = $_POST['nationalityName'];
    $nationality->addNationality();
}