<?php
require_once(__DIR__ . '../../config/config.php');
require_once(APP_ROOT . 'views/parts/header.php');

if (empty($_GET['view']) || $_GET['view'] === 'home'){
    require(APP_ROOT . 'views/home.php');
}
elseif ($_GET['view'] === 'connexion'){
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
elseif ($_GET['view'] === 'statsGénérales'){
    require(APP_ROOT . 'views/generalStats.php');
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
elseif ($_GET['view'] === '404') {
    require(APP_ROOT . 'views/404.php');
}
else {
    header('Location:/404');
}

require_once(APP_ROOT . 'views/parts/footer.php');