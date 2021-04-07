<?php
require(__DIR__ . '../../models/characters.php');

$character = new Character();
$charactersList = $character->getCharactersNameList();