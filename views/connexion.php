<?php require_once(APP_ROOT . 'controllers/connexionCtrl.php'); ?>

<?php if (isset($_SESSION['user'])) : ?>
    <div class="container">
        <div class="row">
            
            <h1 class="text-center display-1 mt-4 fw-bold">Erreur</h1>
            <p class="text-center h3 mb-5">Vous êtes déjà connecté(e)</p>

            <p class="text-center h3 mt-5">Veuillez cliquer sur ce bouton pour retourner sur la page d'accueil</p>
            <a href="/home" class="redPanel col-2 mt-2 offset-5 h3">Accueil</a>
        </div>
    </div>
<?php else : ?>
    <?php require_once('parts/nav.php') ?>
    <!-- Formulaire -->
    <div class="container">
        <div class="row">
            <div class="col-4 offset-1">
                <form action="#" method="POST">
                    <!-- Partie inscription -->
                    <h2 class="text-center mt-3 display-3 mb-3">Inscription</h2>
                    <!-- Champ pseudo -->
                    <div class="form-group">
                        <label for="pseudo" class="text-left mb-3 labelTextSize">Votre pseudo :</label>
                        <input type="text" name="pseudo" id="pseudo" class="form-control col-2" value="<?= !empty($_POST['pseudo']) ? $_POST['pseudo'] : '' ?>" />
                        <p class="text-danger text-center "><?= isset($formErrors['pseudo']) ? $formErrors['pseudo'] : '' ?></p>
                    </div>
                    <!-- Champ adresse mail -->
                    <div class="form-group">
                        <label for="emailSignUp" class="text-left mb-3 labelTextSize">Votre adresse mail :</label>
                        <input type="text" name="emailSignUp" id="emailSignUp" class="form-control" value="<?= !empty($_POST['emailSignUp']) ? $_POST['emailSignUp'] : '' ?>" />
                        <p class="text-danger text-center "><?= isset($formErrors['emailSignUp']) ? $formErrors['emailSignUp'] : '' ?></p>
                    </div>
                    <!-- Champ mot de passe -->
                    <div class="form-group">
                        <label for="passwordSignUp" class="text-left mb-3 labelTextSize">Votre mot de passe :</label>
                        <input type="password" name="passwordSignUp" id="passwordSignUp" class="form-control" />
                        <p class="text-danger text-center "><?= isset($formErrors['passwordSignUp']) ? $formErrors['passwordSignUp'] : '' ?></p>
                    </div>
                    <!-- Champ confirmation mot de passe -->
                    <div class="form-group">
                        <label for="confirmPassword" class="text-left mb-3 labelTextSize">Confirmer votre mot de passe :</label>
                        <input type="password" name="confirmPassword" id="confirmPassword" class="form-control" />
                        <p class="text-danger text-center "><?= isset($formErrors['confirmPassword']) ? $formErrors['confirmPassword'] : '' ?></p>
                    </div>
                    <!-- Code postal ville tournois -->
                    <div class="form-group">
                        <label for="zipCode" class="text-left mb-3 labelTextSize">Saisissez le code postal de votre ville de tournois :</label>
                        <input type="text" class="form-control text-left mb-3" name="zipCode" id="zipCode" value="<?= (isset($_POST['zipCode'])) ? $_POST['zipCode'] : '' ?>" />
                        <p class="text-danger text-center "><?= isset($formErrors['zipCode']) ? $formErrors['zipCode'] : '' ?></p>
                    </div>
                    <!-- Ville tournois -->
                    <div class="form-group">
                        <label for="city" class="text-left mb-3 labelTextSize">Choisissez votre ville de tournois :</label>
                        <select class="form-select mb-3" name="city" id="city">
                            <option value="" selected disabled>Veuillez entrer un code postal</option>
                        </select>
                        <p class="text-danger text-center "><?= isset($formErrors['city']) ? $formErrors['city'] : '' ?></p>
                    </div>
                    <!-- Liste personnages -->
                    <div class="form-group">
                        <label for="mainCharacter" class="text-left mb-3 labelTextSize">Votre personnage principal :</label>
                        <select name="mainCharacter" id="mainCharacter" class="form-select">
                            <option value="default" selected disabled>Choisissez un personnage</option>
                        </select>
                        <p class="text-danger text-center "><?= isset($formErrors['mainCharacter']) ? $formErrors['mainCharacter'] : '' ?></p>
                    </div>
                    <!-- Bouton inscription -->
                    <input type="submit" name="signUpButton" id="signUpButton" class="btn btn-danger" value="S'inscrire" />
                </form>
                <p><?= isset($messageSignUp) ? $messageSignUp : '' ?></p>
            </div>
            <div class="col-4 offset-2">
                <form action="#" method="POST">
                    <!-- Partie connexion -->
                    <h2 class="text-center mt-3 display-3 mb-3">Connexion</h2>
                    <!-- Champ pseudo -->
                    <div class="form-group">
                        <label for="emailSignIn" class="text-left col-5 mb-3 labelTextSize">Votre adresse mail :</label>
                        <input type="text" name="emailSignIn" id="emailSignIn" class="form-control mb-3 col-5" value="<?= !empty($_POST['emailSignIn']) ? $_POST['emailSignIn'] : '' ?>" />
                        <?php if (isset($_POST['signInButton'])) : ?>
                            <p class="text-danger text-center "><?= isset($formErrors['emailSignIn']) ? $formErrors['emailSignIn'] : '' ?></p>
                        <?php endif; ?>
                    </div>
                    <!-- Champ mot de passe -->
                    <div class="form-group">
                        <label for="passwordSignIn" class="text-left col-5 mb-3 labelTextSize">Votre mot de passe :</label>
                        <input type="password" name="passwordSignIn" id="passwordSignIn" class="form-control mb-3 col-5" value="<?= !empty($_POST['passwordSignIn']) ? $_POST['passwordSignIn'] : '' ?>" />
                        <?php if (isset($_POST['signInButton'])) : ?>
                            <p class="text-danger text-center "><?= isset($formErrors['passwordSignIn']) ? $formErrors['passwordSignIn'] : '' ?></p>
                        <?php endif; ?>
                    </div>
                    <!-- Bouton connexion -->
                    <input type="submit" name="signInButton" id="signInButton" class="btn btn-danger" value="Se connecter" />
                </form>
                <p><?= isset($messageSignIn) ? $messageSignIn : '' ?></p>
            </div>
        </div>
    </div>
<?php endif; ?>