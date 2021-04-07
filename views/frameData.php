<?php require_once(APP_ROOT . 'controllers/framedataCtrl.php'); ?>
<div class="container-fluid">
    <!-- Titre page -->
    <h1 class="col-12 display-1 text-center mt-3 mb-5 fw-bold">Frame<br />Data</h1>
</div>
<?php require_once(APP_ROOT . 'views/parts/nav.php') ?>
<div class="container">
    <div class="row mb-5">
        <!-- Contenu page -->
        <?php foreach ($frameDataInfos as $frameData) : ?>
            <div class="card col-xl-3 offset-xl-1 col-sm-4 offset-sm-1 mt-3" style="width: 18rem;">
                <div class="card-body">
                    <h3><?= $frameData->moveName ?></h3>
                </div>
                <img src="<?= $frameData->pathGifFrameData ?>" alt="<?= $frameData->altNameGifFrameData ?>" title="<?= $frameData->titleGifFrameData ?>" />
                <p></p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Commence à la frame <?= $frameData->frameStartup ?></li>
                    <li class="list-group-item"><?= $frameData->onShield ?> frames sur le bouclier</li>
                    <li class="list-group-item">Coup actif entre les frames <?= $frameData->activeFrame ?></li>
                    <li class="list-group-item"><?= $frameData->totalFrame ?> frames totales</li>
                    <li class="list-group-item"><?= $frameData->frameLandingLag ?> frames de lag à l'atterrissage</li>
                    <li class="list-group-item"><?= $frameData->frameShieldLag ?> frames de lag sur bouclier</li>
                    <li class="list-group-item"><?= $frameData->frameShieldStun ?> frames de stun sur bouclier</li>
                    <li class="list-group-item"><?= $frameData->multipleHitbox ?> <br />(si le coup a plusieurs hitboxes, lesquelles sont concernées)</li>
                </ul>
            </div>
        <?php endforeach; ?>
    </div>
</div>