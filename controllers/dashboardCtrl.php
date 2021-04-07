<?php
require(__DIR__ . '../../models/characters.php');
require(__DIR__ . '../../models/nationalityplayer.php');
require(__DIR__ . '../../models/topplayers.php');
require(__DIR__ . '../../models/comment.php');
require(__DIR__ . '../../models/gifframedata.php');
require(__DIR__ . '../../models/framedata.php');

$formErrors = array();
$character = new Character();
$charactersList = $character->getCharactersNameList();
$nationality = new Nationality();
$nationalityList = $nationality->getNationalityList();
$comment = new Comment();
$commentList = $comment->getCommentsListAdmin();
$frameData = new FrameData();
$frameDataList = $frameData->getMoveDataList();

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

if (isset($_POST['framedataButton']))
{
    $frameData->moveName = $_POST['moveName'];
    $frameData->frameStartup = $_POST['frameStartUp'];
    $frameData->onShield = $_POST['onShield'];
    $frameData->activeFrame = $_POST['activeFrame'];
    $frameData->totalFrame = $_POST['totalFrame'];
    $frameData->frameLandingLag = $_POST['frameLandingLag'];
    $frameData->frameShieldLag = $_POST['frameShieldLag'];
    $frameData->frameShieldStun = $_POST['frameShieldStun'];
    $frameData->multipleHitbox = $_POST['multipleHitbox'];
    $frameData->idCharacters = $_POST['characterName'];
    $frameData->addMoveData();
}

if (isset($_POST['gifFrameDataButton']))
{
    $gifFrameData = new GifFrameData();
    $gifFrameData->nameGifFrameData = $_POST['nameGifFrameData'];
    $gifFrameData->titleGifFrameData = $_POST['titleGifFrameData'];
    $gifFrameData->altNameGifFrameData = $_POST['altNameGifFrameData'];
    $gifFrameData->pathGifFrameData = $_POST['pathGifFrameData'];
    $gifFrameData->idFrameData = $_POST['moveName'];
    $gifFrameData->addGifFrameData();
}