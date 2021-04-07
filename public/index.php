<?php
// on appelle les fichiers
require_once(__DIR__ . '../../config/config.php');
require_once(__DIR__ . '../../models/database.php');

//si il n'y a pas d'action dans le get on appelle le fichier header.php
if (!isset($_GET['action']))
{
    require_once(APP_ROOT . 'views/parts/header.php');
}

//on fait un else, elseif pour renvoyer vers les différentes pages du site
//si le get de view est vide ou égal à home alors on appelle la vue home.php
if (empty($_GET['view']) || $_GET['view'] === 'home')
{
    require(APP_ROOT . 'views/home.php');
}
//si le get de view est égal à connexion et qu'il n'y a pas de $_SESSION alors on appelle la vue connexion.php
elseif ($_GET['view'] === 'connexion' && empty($_SESSION['user']))
{
    require(APP_ROOT . 'views/connexion.php');
}
//si le get de view est égal à listePersonnages alors on appelle la vue charactersList.php
elseif ($_GET['view'] === 'listePersonnages')
{
    require(APP_ROOT . 'views/charactersList.php');
}
//si le get de view est égal à personnage alors on appelle la vue character.php
elseif ($_GET['view'] === 'personnage')
{
    require(APP_ROOT . 'views/character.php');
}
//si le get de view est égal à frameData alors on appelle la vue frameData.php
elseif ($_GET['view'] === 'frameData')
{
    require(APP_ROOT . 'views/frameData.php');
}
//si le get de view est égal à guides alors on appelle la vue guides.php
elseif ($_GET['view'] === 'guides')
{
    require(APP_ROOT . 'views/guides.php');
}
//si le get de view est égal à map alors on appelle la vue map.php
elseif ($_GET['view'] === 'map')
{
    require(APP_ROOT . 'views/map.php');
}
//si le get de view est égal à patchNotesFR alors on appelle la vue patchNotesFR.php
elseif ($_GET['view'] === 'patchNotesFR')
{
    require(APP_ROOT . 'views/patchNotesFr.php');
}
//si le get de view est égal à patchNotesEN alors on appelle la vue patchNotesEN.php
elseif ($_GET['view'] === 'patchNotesEN')
{
    require(APP_ROOT . 'views/patchNotesEn.php');
}
//si le get de view est égal à tierLists alors on appelle la vue tierLists.php
elseif ($_GET['view'] === 'tierLists')
{
    require(APP_ROOT . 'views/tierLists.php');
}
//si le get de view est égal à tournois alors on appelle la vue tournament.php
elseif ($_GET['view'] === 'tournois')
{
    require(APP_ROOT . 'views/tournament.php');
}
//si le get de view est égal à dashboard et que $_SESSION n'est pas vide alors on appelle la vue dashboardAdmin.php
elseif ($_GET['view'] === 'dashboard' && !empty($_SESSION['user']))
{
    require(APP_ROOT . 'views/dashboardAdmin.php');
}
//si le get de view est égal à logout et que $_SESSION n'est pas vide alors on appelle la vue logout.php
elseif ($_GET['view'] === 'logout' && !empty($_SESSION['user']))
{
    require(APP_ROOT . 'views/logout.php');
}
//si le get de view est égal à profile et que $_SESSION n'est pas vide alors on appelle la vue profile.php
elseif ($_GET['view'] === 'profile' && !empty($_SESSION['user']))
{
    require(APP_ROOT . 'views/profile.php');
}
//si le get de view est égal à ajax et que le get de action est égal à getZipCode alors on appelle le controller ajax.php
elseif ($_GET['view'] === 'ajax' && $_GET['action'] === 'getZipCode')
{
    require(APP_ROOT . 'controllers/ajax.php');
}
//si le get de view est égal à deleted et que $_SESSION n'existe pas alors on appelle la vue deleted.php
elseif ($_GET['view'] === 'deleted' && !isset($_SESSION['user']))
{
    require(APP_ROOT . 'views/deleted.php');
}
//si le get de view est égal à signedUp et que $_SESSION n'existe pas alors on appelle la vue signedUp.php
elseif ($_GET['view'] === 'signedUp' && !isset($_SESSION['user']))
{
    require(APP_ROOT . 'views/signedUp.php');
}
//si le get de view est égal à modifiedUser et que $_SESSION n'est pas vide alors on appelle la vue modifiedUser.php
elseif ($_GET['view'] === 'modifiedUser' && !empty($_SESSION['user']))
{
    require(APP_ROOT . 'views/modifiedUser.php');
}
//sinon on appelle la vue 404.php
else
{
    require(APP_ROOT . 'views/404.php');
}

//si le get de action n'existe pas alors on appelle l'élément footer.php
if (!isset($_GET['action']))
{
    require_once(APP_ROOT . 'views/parts/footer.php');
}