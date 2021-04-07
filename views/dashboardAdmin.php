<?php
require_once(APP_ROOT . 'controllers/dashboardCtrl.php');
?>
<div class="container-fluid">
    <!-- Titre page -->
    <h1 class="col-12 display-1 text-center mt-3 mb-5 fw-bold" id="titlePage">Dashboard</h1>
</div>
<?php require_once(APP_ROOT . 'views/parts/nav.php') ?>
<div class="container mb-5">
    <div class="row">
        <!-- Contenu page -->
        <h2>Ajouter un personnage</h2>
        <form action="#" method="POST" class="mb-5">
            <div class="form-group col-6 mb-3">
                <label for="characterName">Le nom du personnage :</label>
                <input type="text" name="characterName" id="characterName" class="form-control" />
            </div>
            <div class="form-group col-6 mb-3">
                <label for="characterImg">Chemin image du personnage :</label>
                <input type="text" name="characterImg" id="characterImg" class="form-control" />
            </div>
            <div class="form-group col-6 mb-3">
                <label for="characterPresentation">Présentation du personnage :</label>
                <input type="text" name="characterPresentation" id="characterPresentation" class="form-control" />
            </div>
            <div class="form-group col-6 mb-3">
                <label for="characterFranchise">Franchise d'origine du personnage :</label>
                <input type="text" name="characterFranchise" id="characterFranchise" class="form-control" />
            </div>
            <div class="form-group col-6 mb-3">
                <label for="characterStrengths">Forces du personnage :</label>
                <input type="text" name="characterStrengths" id="characterStrengths" class="form-control" />
            </div>
            <div class="form-group col-6 mb-3">
                <label for="characterWeaknesses">Faiblesses du personnage :</label>
                <input type="text" name="characterWeaknesses" id="characterWeaknesses" class="form-control" />
            </div>
            <input type="submit" name="characterButton" id="characterButton" value="Ajouter un personnage" />
        </form>

        <h2>Ajouter guides</h2>
        <form action="#" method="POST" class="mb-5">
            <div class="form-group col-6 mb-3">
                <label for="guideImg">Chemin images du guide :</label>
                <input type="text" name="guideImg" id="guideImg" class="form-control" />
            </div>
            <div class="form-group col-6 mb-3">
                <label for="guideVideos">Chemin vidéos du guide :</label>
                <input type="text" name="guideVideos" id="guideVideos" class="form-control" />
            </div>
            <div class="form-group col-6">
                <label for="characterName">Le personnage concerné :</label>
                <select name="characterName" id="characterName" class="form-select">
                    <option value="default" selected disabled>Choisissez un personnage</option>
                    <?php foreach ($charactersList as $character) : ?>
                        <option value="<?= $character->idCharacter ?>"><?= $character->name ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <input type="submit" name="guideButton" id="guideButton" />
        </form>

        <h2>Ajouter une matchup chart</h2>
        <form action="#" method="POST" class="mb-5">
            <div class="form-group col-6 mb-3">
                <label for="guideImg">Chemin image matchup chart :</label>
                <input type="text" name="guideImg" id="guideImg" class="form-control" />
            </div>
            <div class="form-group col-6 mb-3">
                <label for="guideVideos">Titre matchup chart :</label>
                <input type="text" name="guideVideos" id="guideVideos" class="form-control" />
            </div>
            <div class="form-group col-6 mb-3">
                <label for="guideVideos">Titre alternatif matchup chart :</label>
                <input type="text" name="guideVideos" id="guideVideos" class="form-control" />
            </div>
            <div class="form-group col-6 mb-3">
                <label for="characterName">Le personnage concerné :</label>
                <select name="characterName" id="characterName" class="form-select">
                    <option value="default" selected disabled>Choisissez un personnage</option>
                    <?php foreach ($charactersList as $character) : ?>
                        <option value="<?= $character->idCharacter ?>"><?= $character->name ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <input type="submit" name="muChartButton" id="muChartButton" />
        </form>

        <h2>Ajouter un top player</h2>
        <form action="#" method="POST" class="mb-5">
            <div class="form-group col-6 mb-3">
                <label for="topPlayerPseudo">Pseudo du top player :</label>
                <input type="text" name="topPlayerPseudo" id="topPlayerPseudo" class="form-control" />
            </div>
            <div class="form-group col-6 mb-3">
                <label for="topPlayerPhotoName">Nom photo du top player :</label>
                <input type="text" name="topPlayerPhotoName" id="topPlayerPhotoName" class="form-control" />
            </div>
            <div class="form-group col-6 mb-3">
                <label for="topPlayerPhotoPath">Chemin de la photo du top player :</label>
                <input type="text" name="topPlayerPhotoPath" id="topPlayerPhotoPath" class="form-control" />
            </div>
            <div class="form-group col-6 mb-3">
                <label for="characterName">Le personnage qu'il joue :</label>
                <select name="characterName" id="characterName" class="form-select">
                    <option value="default" selected disabled>Choisissez un personnage</option>
                    <?php foreach ($charactersList as $character) : ?>
                        <option value="<?= $character->idCharacter ?>"><?= $character->name ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group col-6 mb-3">
                <label for="nationalityName">Sa nationalité :</label>
                <select name="nationalityName" id="nationalityName" class="form-select">
                    <option value="default" selected disabled>Choisissez une nationalité</option>
                    <?php foreach ($nationalityList as $nationality) : ?>
                        <option value="<?= $nationality->idNationality ?>"><?= $nationality->nameNationality ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <input type="submit" name="topPlayerButton" id="topPlayerButton" />
        </form>

        <h2>Ajouter une nationalité</h2>
        <form action="#" method="POST" class="mb-5">
            <div class="form-group col-6 mb-3">
                <label for="nationalityName">Nationalité :</label>
                <input type="text" name="nationalityName" id="nationalityName" class="form-control" />
            </div>
            <input type="submit" name="nationalityButton" id="nationalityButton" />
        </form>

        <h2>Ajouter la frame data d'un coup</h2>
        <form action="#" method="POST">
            <div class="form-group col-6 mb-3">
                <label for="moveName">Nom du coup :</label>
                <input type="text" name="moveName" id="moveName" class="form-control" />
            </div>
            <div class="form-group col-6 mb-3">
                <label for="frameStartUp">Start up :</label>
                <input type="text" name="frameStartUp" id="frameStartUp" class="form-control" />
            </div>
            <div class="form-group col-6 mb-3">
                <label for="onShield">On shield :</label>
                <input type="text" name="onShield" id="onShield" class="form-control" />
            </div>
            <div class="form-group col-6 mb-3">
                <label for="activeFrames">Frames actives :</label>
                <input type="text" name="activeFrames" id="activeFrames" class="form-control" />
            </div>
            <div class="form-group col-6 mb-3">
                <label for="totalFrames">Frames totales :</label>
                <input type="text" name="totalFrames" id="totalFrames" class="form-control" />
            </div>
            <div class="form-group col-6 mb-3">
                <label for="frameLandingLag">Frames de landing lag :</label>
                <input type="text" name="frameLandingLag" id="frameLandingLag" class="form-control" />
            </div>
            <div class="form-group col-6 mb-3">
                <label for="frameShieldLag">Frames de shield lag :</label>
                <input type="text" name="frameShieldLag" id="frameShieldLag" class="form-control" />
            </div>
            <div class="form-group col-6 mb-3">
                <label for="frameShieldStun">Frames de shield stun :</label>
                <input type="text" name="frameShieldStun" id="frameShieldStun" class="form-control" />
            </div>
            <div class="form-group col-6 mb-3">
                <label for="multipleHitbox">Hitbox multiples :</label>
                <input type="text" name="multipleHitbox" id="multipleHitbox" class="form-control" />
            </div>
            <div class="form-group col-6 mb-3">
                <label for="characterName">Le personnage concerné :</label>
                <select name="characterName" id="characterName" class="form-select">
                    <option value="default" selected disabled>Choisissez un personnage</option>
                    <?php foreach ($charactersList as $character) : ?>
                        <option value="<?= $character->idCharacter ?>"><?= $character->name ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <input type="submit" name="framedataButton" id="framedataButton" />
        </form>
    </div>
</div>