<?php
// on appelle les fichiers
require_once(__DIR__ . '../../config/config.php');
require_once(__DIR__ . '../../models/database.php');

//si il n'y a pas d'action dans le get on appelle le fichier header.php
if (!isset($_GET['action'])){
    require_once(APP_ROOT . 'views/parts/header.php');
}

//refaire en switch
if (empty($_GET['view']) || $_GET['view'] === 'home'){
    require(APP_ROOT . 'views/home.php');
}
elseif ($_GET['view'] === 'connexion' && empty($_SESSION['user'])){
    require(APP_ROOT . 'views/connexion.php');
}
elseif ($_GET['view'] === 'listePersonnages'){
    require(APP_ROOT . 'views/charactersList.php');
}
elseif ($_GET['view'] === 'personnage'){
    require(APP_ROOT . 'views/character.php');
}
elseif ($_GET['view'] === 'frameData'){
    require(APP_ROOT . 'views/frameData.php');
}
elseif ($_GET['view'] === 'guides'){
    require(APP_ROOT . 'views/guides.php');
}
elseif ($_GET['view'] === 'map'){
    require(APP_ROOT . 'views/map.php');
}
elseif ($_GET['view'] === 'patchNotes'){
    require(APP_ROOT . 'views/patchNotes.php');
}
elseif ($_GET['view'] === 'tierLists'){
    require(APP_ROOT . 'views/tierLists.php');
}
elseif ($_GET['view'] === 'tournois'){
    require(APP_ROOT . 'views/tournament.php');
}
elseif ($_GET['view'] === 'dashboard' && !empty($_SESSION['user'])){
    require(APP_ROOT . 'views/dashboardAdmin.php');
}
elseif ($_GET['view'] === 'logout' && !empty($_SESSION['user'])){
    require(APP_ROOT . 'views/logout.php');
}
elseif ($_GET['view'] === 'profile' && !empty($_SESSION['user'])){
    require(APP_ROOT . 'views/profile.php');
}
elseif ($_GET['view'] === 'ajax' && $_GET['action'] === 'getZipCode') {
    require(APP_ROOT . 'controllers/ajax.php');
}
elseif ($_GET['view'] === 'deleted' && !isset($_SESSION['user'])){
    require(APP_ROOT . 'views/deleted.php');
}
elseif ($_GET['view'] === 'signedUp' && !isset($_SESSION['user'])){
    require(APP_ROOT . 'views/signedUp.php');
}
elseif ($_GET['view'] === 'modifiedUser' && !empty($_SESSION['user'])){
    require(APP_ROOT . 'views/modifiedUser.php');
}
else {
    require(APP_ROOT . 'views/404.php');
}

if (!isset($_GET['action'])){
    require_once(APP_ROOT . 'views/parts/footer.php');
}