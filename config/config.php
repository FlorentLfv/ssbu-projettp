<?php
// on initie une session vide
session_start();
// on définit l'adresse de la bdd
define('DB_HOST', 'localhost');
// on définit le nom de la bdd
define('DB_NAME', 'qresgch_ssbu');
// on définit le nom d'utilisateur de la bdd
define('DB_USER', 'root');
// on définit le mot de passe de la bdd
define('DB_PASSWORD', '');

// on définit APP_ROOT afin de raccourcir les chemins d'accès
define('APP_ROOT', dirname(__DIR__) . '/');