<?php require_once(APP_ROOT . 'controllers/characterCtrl.php'); ?>
<div class="container-fluid">
    <!-- Titre page -->
    <h1 class="col-12 display-1 text-center mt-3 mb-5 fw-bold" id="titlePage"><?= $charactersInfos->name ?></h1>
</div>
<?php require_once('parts/nav.php') ?>
<div class="container mb-5">
    <div class="row">
        <!-- Contenu page -->
        <img src="<?= $charactersInfos->pathImgCharacter ?>" class="text-center col-4 offset-4" alt="<?= $charactersInfos->name ?>" title="<?= $charactersInfos->name ?>" />
        <h2 class="text-center mt-3 display-3"><strong>Présentation et historique</strong></h2>
        <p><?= $charactersInfos->presentation ?></p>
        <h2 class="text-center mt-3 display-3"><strong>Avant un match</strong></h2>
        <p class="text-center mt-3">Ce petit "mémo" rapide peut servir avant d'affronter le personnage.</p>
        <h3 class="mt-3 display-5"><strong>Forces</strong></h3>
        <p><?= $charactersInfos->strengths ?></p>
        <h3 class="mt-3 display-5"><strong>Faiblesses</strong></h3>
        <p><?= $charactersInfos->weaknesses ?></p>
        <div class="col-6 offset-3 mt-3 redPanel">
            <h2><a href="/frameData&idCharacter=<?= $charactersInfos->idCharacter ?>">Accéder à la frame data du perso</a></h2>
        </div>
        <h3 class="mt-3 display-5 text-center"><strong>Top Players</strong></h3>
        <h4 class="text-center mt-4"><?= $topPlayerInfos->pseudoPlayer ?></h4>
        <img class="col-4 offset-4" src="<?= $topPlayerInfos->photoTopPlayerPath ?>" alt="<?= $topPlayerInfos->photoTopPlayerName ?>" title="<?= $topPlayerInfos->photoTopPlayerName ?>" />
        <p class="text-center"><?= $topPlayerInfos->nameNationality ?></p>
        <h2 class="text-center mt-3">Guides</h2>
        <p class="text-center h3 mt-3">Veuillez cliquer sur ce bouton pour choisir un autre personnage</p>
        <a href="/listePersonnages" class="redPanel col-4 mt-2 offset-4 h3">Personnages</a>
    </div>
</div>