<?php require_once(APP_ROOT . 'controllers/connexionCtrl.php'); ?>
<?php require_once('parts/nav.php') ?>
<!-- Formulaire -->
<div class="container">
    <div class="row">
        <div class="col-6">
            <form action="#" method="POST">
                <!-- Partie inscription -->
                <h2 class="text-center mt-3 display-3 mb-3">Inscription</h2>
                <!-- Champ pseudo -->
                <div class="form-group">
                    <label for="pseudo" class="text-left col-5 mb-3 labelTextSize">Votre pseudo :</label>
                    <input type="text" name="pseudo" id="pseudo" class="col-5" value="<?= !empty($_POST['pseudo']) ? $_POST['pseudo'] : '' ?>" />
                    <p class="text-danger text-center "><?= isset($formErrors['pseudo']) ? $formErrors['pseudo'] : '' ?></p>
                </div>
                <!-- Champ adresse mail -->
                <div class="form-group">
                    <label for="emailSignUp" class="text-left col-5 mb-3 labelTextSize">Votre adresse mail :</label>
                    <input type="text" name="emailSignUp" id="emailSignUp" class="col-5" value="<?= !empty($_POST['emailSignUp']) ? $_POST['emailSignUp'] : '' ?>" />
                    <p class="text-danger text-center "><?= isset($formErrors['emailSignUp']) ? $formErrors['emailSignUp'] : '' ?></p>
                </div>
                <!-- Champ mot de passe -->
                <div class="form-group">
                    <label for="passwordSignUp" class="text-left col-5 mb-3 labelTextSize">Votre mot de passe :</label>
                    <input type="password" name="passwordSignUp" id="passwordSignUp" class="col-5" value="<?= !empty($_POST['passwordSignUp']) ? $_POST['passwordSignUp'] : '' ?>" />
                    <p class="text-danger text-center "><?= isset($formErrors['passwordSignUp']) ? $formErrors['passwordSignUp'] : '' ?></p>
                </div>
                <!-- Champ confirmation mot de passe -->
                <div class="form-group">
                    <label for="confirmPassword" class="text-left col-5 mb-3 labelTextSize">Confirmer votre mot de passe :</label>
                    <input type="password" name="confirmPassword" id="confirmPassword" class="col-5" value="<?= !empty($_POST['confirmPassword']) ? $_POST['confirmPassword'] : '' ?>" />
                    <p class="text-danger text-center "><?= isset($formErrors['confirmPassword']) ? $formErrors['confirmPassword'] : '' ?></p>
                </div>
                <!-- Champ ville tournoi -->
                <div class="form-group">
                    <label for="cityOfTournament" class="text-left col-5 mb-3 labelTextSize">Votre ville de tournois :</label>
                    <input type="password" name="cityOfTournament" id="cityOfTournament" class="col-5" value="<?= !empty($_POST['cityOfTournament']) ? $_POST['cityOfTournament'] : '' ?>" />
                    <p class="text-danger text-center "><?= isset($formErrors['cityOfTournament']) ? $formErrors['cityOfTournament'] : '' ?></p>
                </div>
                <!-- Liste personnages -->
                <div class="form-group">
                    <label for="mainCharacter" class="text-left col-5 mb-3 labelTextSize">Votre personnage principal :</label>
                    <select name="mainCharacter" id="mainCharacter">
                        <option selected disabled value="choose">Choisissez un personnage</option>
                    </select>
                    <p class="text-danger text-center "><?= isset($formErrors['mainCharacter']) ? $formErrors['mainCharacter'] : '' ?></p>
                </div>
                <!-- Bouton inscription -->
                <input type="submit" name="signUpButton" id="signUpButton" class="btn btn-danger" value="S'inscrire" />
            </form>
            <p><?= isset($message) ? $message : '' ?></p>
        </div>
        <div class="col-6">
            <form action="#" method="POST">
                <!-- Partie connexion -->
                <h2 class="text-center mt-3 display-3 mb-3">Connexion</h2>
                <!-- Champ pseudo -->
                <div class="form-group">
                    <label for="emailSignIn" class="text-left col-5 mb-3 labelTextSize">Votre adresse mail :</label>
                    <input type="text" name="emailSignIn" id="emailSignIn" class="col-5" value="<?= !empty($_POST['emailSignIn']) ? $_POST['emailSignIn'] : '' ?>" />
                    <?php if (isset($_POST['signInButton'])) : ?>
                        <p class="text-danger text-center "><?= isset($formErrors['emailSignIn']) ? $formErrors['emailSignIn'] : '' ?></p>
                    <?php endif; ?>
                </div>
                <!-- Champ mot de passe -->
                <div class="form-group">
                    <label for="passwordSignIn" class="text-left col-5 mb-3 labelTextSize">Votre mot de passe :</label>
                    <input type="password" name="passwordSignIn" id="passwordSignIn" class="col-5" value="<?= !empty($_POST['passwordSignIn']) ? $_POST['passwordSignIn'] : '' ?>" />
                    <?php if (isset($_POST['signInButton'])) : ?>
                        <p class="text-danger text-center "><?= isset($formErrors['passwordSignIn']) ? $formErrors['passwordSignIn'] : '' ?></p>
                    <?php endif; ?>
                </div>
                <!-- Bouton connexion -->
                <input type="submit" name="signInButton" id="signInButton" class="btn btn-danger" value="Se connecter" />
            </form>
        </div>
    </div>
</div>