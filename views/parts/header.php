<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <title>Super Smash : Ultimate Guide FR</title>
    <link rel="shortcut icon" href="assets/img/SmashBall.svg" />
</head>

<body>
    <!-- Header -->
    <div class="container-fluid">
        <div class="row">
            <!-- Logo jeu -->
            <img src="../assets/img/logo ssbu.png" id="gameLogo" class="col-4 mt-4 mb-4" alt="Logo Super Smash Bros Ultimate" />
            <?php if (isset($_SESSION['user'])) : ?>
                <div class="dropdown">
                    <button class="btn btn-danger dropdown-toggle col-2 offset-10" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <?= $_SESSION['user']['pseudo'] ?>
                    </button>
                    <ul class="dropdown-menu bg-danger text-center" aria-labelledby="dropdownMenuButton1">
                        <li>
                            <!-- Bouton dashboard admin -->
                            <a href="/dashboard">Dashboard</a>
                        </li>
                        <hr />
                        <li>
                            <!-- Bouton profil -->
                            <a href="/profile">Profil</a>
                        </li>
                        <hr />
                        <li>
                            <!-- Bouton connexion/inscription -->
                            <a href="/logout">Déconnexion</a>
                        </li>
                    </ul>
                </div>
            <?php else : ?>
                <!-- Bouton connexion/inscription -->
                <a href="/connexion" class="btn btn-danger col-2 offset-6 mb-auto">Connexion / Inscription</a>
            <?php endif; ?>