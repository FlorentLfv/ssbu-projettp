<?php require_once(APP_ROOT . 'controllers/profileCtrl.php'); ?>

<div class="container-fluid">
    <!-- Titre page -->
    <h1 class="col-12 display-1 text-center mt-3 mb-5 fw-bold" id="titlePage">Profil</h1>
</div>
<?php require_once(APP_ROOT . 'views/parts/nav.php') ?>
<div class="container">
    <div class="row">
        <!-- Contenu page -->
        <form action="#" method="POST">
            <div class="row">
                <!-- Modification pseudo -->
                <div class="form-group col-4 offset-1 mt-3">
                    <label for="pseudo" class="text-left mb-3 labelTextSize">Modifier votre pseudo :</label>
                    <input type="text" name="pseudo" id="pseudo" class="form-control" value="<?= $_SESSION['user']['pseudo'] ?>" />
                    <p class="text-danger text-center"><?= isset($formErrors['pseudo']) ? $formErrors['pseudo'] : '' ?></p>
                </div>
                <!-- Modification mail -->
                <div class="form-group col-4 offset-2 mt-3">
                    <label for="mail" class="text-left mb-3 labelTextSize">Modifier votre adresse mail :</label>
                    <input type="text" name="mail" id="mail" class="form-control" value="<?= !empty($_POST['mail']) ? $_POST['mail'] : '' ?>" />
                    <p class="text-danger text-center"><?= isset($formErrors['mail']) ? $formErrors['mail'] : '' ?></p>
                </div>
            </div>
            <!-- Modification perso -->
            <div class="form-group col-4 offset-4">
                <label for="mainCharacter" class="text-left mb-3 labelTextSize">Votre personnage principal :</label>
                <select name="mainCharacter" id="mainCharacter" class="form-select">
                    <option value="default" selected disabled>Choisissez un personnage</option>
                </select>
                <p class="text-danger text-center"><?= isset($formErrors['mainCharacter']) ? $formErrors['mainCharacter'] : '' ?></p>
            </div>
            <div class="row">
                <!-- Modification code postal ville tournois -->
                <div class="form-group col-4 offset-1">
                    <label for="zipCode" class="text-left mb-3 labelTextSize">Saisissez le code postal de votre ville de tournois :</label>
                    <input type="text" class="form-control text-left mb-3" name="zipCode" id="zipCode" value="<?= (isset($_POST['zipCode'])) ? $_POST['zipCode'] : '' ?>" />
                    <p class="text-danger text-center"><?= isset($formErrors['zipCode']) ? $formErrors['zipCode'] : '' ?></p>
                </div>
                <!-- Modification ville tournois -->
                <div class="form-group col-4 offset-2">
                    <label for="city" class="text-left mb-3 labelTextSize">Choisissez votre ville de tournois :</label>
                    <select class="form-select mb-3" name="city" id="city">
                        <option value="<?= (isset($_POST['city'])) ? $_POST['city'] : '' ?>" selected disabled>Veuillez entrer un code postal</option>
                    </select>
                    <p class="text-danger text-center "><?= isset($formErrors['city']) ? $formErrors['city'] : '' ?></p>
                </div>
            </div>
            <div class="row">
                <!-- Modification mot de passe -->
                <h2 class="text-center">Modifier votre mot de passe</h2>
                <div class="form-group col-4 offset-1">
                    <label for="lastPassword" class="text-left mb-3 labelTextSize">Tapez votre mot de passe actuel :</label>
                    <input type="password" name="lastPassword" id="lastPassword" class="form-control" />
                    <p class="text-danger text-center"><?= isset($formErrors['lastPassword']) ? $formErrors['lastPassword'] : '' ?></p>
                </div>
                <div class="form-group col-4 offset-2">
                    <label for="newPassword" class="text-left mb-3 labelTextSize">Tapez votre nouveau mot de passe :</label>
                    <input type="password" name="newPassword" id="newPassword" class="form-control" />
                    <p class="text-danger text-center"><?= isset($formErrors['newPassword']) ? $formErrors['newPassword'] : '' ?></p>
                </div>
            </div>
            <input type="submit" class="col-4 offset-4 mb-5" name="updateButton" id="updateButton" value="Modifier les informations" />
            <input type="submit" class="col-4 offset-4 mb-5" name="deleteButton" id="deleteButton" value="Supprimer votre compte" />
            <p><?= isset($messageUpdate) ? $messageUpdate : '' ?></p>
        </form>
    </div>
</div>