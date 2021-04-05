<?php
require(__DIR__ . '../../models/characters.php');

$formErrors = array();
$character = new Character();
$charactersList = $character->getCharactersNameList();

if (isset($_POST['characterButton'])){
    $character->addCharacter();
}