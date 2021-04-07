<?php
require(__DIR__ . '../../models/characters.php');
require(__DIR__ . '../../models/framedata.php');

// on vérifie si il y a un idCharacter dans URL et si c'est un chiffre
if (isset($_GET['idCharacter']) && is_numeric($_GET['idCharacter']))
{
    $idCorrect = $_GET['idCharacter'];
    $character = new Character();
    $character->idCharacter = $idCorrect;
    $charactersInfos = $character->getCharacterInfos();
    $frameData = new FrameData();
    $frameData->idCharacters = $idCorrect;
    $frameDataInfos = $frameData->getMoveData();
}