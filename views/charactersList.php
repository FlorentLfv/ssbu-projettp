<?php require_once(APP_ROOT . 'controllers/characterListCtrl.php'); ?>
<div class="container-fluid">
    <!-- Titre page -->
    <h1 class="col-12 display-1 text-center mt-3 mb-5 fw-bold" id="titlePage">Personnages</h1>
</div>
<?php require_once(APP_ROOT . 'views/parts/nav.php') ?>
<div class="container mb-5">
    <div class="row">
        <?php foreach ($charactersList as $character) :?>
            <div class="col-4 redPanel mt-3">
                <h3><a href="/personnage&idCharacter=<?= $character->idCharacter ?>" id="<?= $character->idCharacter ?>"><?= $character->name ?></a></h3>
            </div>
        <?php endforeach; ?>
    </div>
</div>