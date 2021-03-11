<?php require_once(APP_ROOT . 'controllers/connexionCtrl.php'); ?>
<div class="container-fluid">
    <!-- Titre page -->
    <h1 class="col-12 display-1 text-center mt-3 mb-5 fw-bold">Connexion / Inscription</h1>
</div>
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
                    <label for="pseudo" class="text-left col-5 mb-3">Votre pseudo :</label>
                    <input type="text" name="pseudo" id="pseudo" class="col-5" />
                    <?php if (isset($_POST['signUpButton'])) : ?>
                        <p class="text-danger text-center "><?= isset($formErrors['pseudo']) ? $formErrors['pseudo'] : '' ?></p>
                    <?php endif; ?>
                </div>
                <!-- Champ adresse mail -->
                <div class="form-group">
                    <label for="emailSignUp" class="text-left col-5 mb-3">Votre adresse mail :</label>
                    <input type="text" name="emailSignUp" id="emailSignUp" class="col-5" />
                    <?php if (isset($_POST['signUpButton'])) : ?>
                        <p class="text-danger text-center "><?= isset($formErrors['emailSignUp']) ? $formErrors['emailSignUp'] : '' ?></p>
                    <?php endif; ?>


                </div>
                <!-- Champ mot de passe -->
                <div class="form-group">
                    <label for="passwordSignUp" class="text-left col-5 mb-3">Votre mot de passe :</label>
                    <input type="password" name="passwordSignUp" id="passwordSignUp" class="col-5" />
                    <?php if (isset($_POST['signUpButton'])) : ?>
                        <p class="text-danger text-center "><?= isset($formErrors['passwordSignUp']) ? $formErrors['passwordSignUp'] : '' ?></p>
                    <?php endif; ?>

                </div>
                <!-- Champ confirmation mot de passe -->
                <div class="form-group">
                    <label for="confirmPassword" class="text-left col-5 mb-3">Confirmer votre mot de passe :</label>
                    <input type="password" name="confirmPassword" id="confirmPassword" class="col-5" />
                    <?php if (isset($_POST['signUpButton'])) : ?>
                        <p class="text-danger text-center "><?= isset($formErrors['confirmPassword']) ? $formErrors['confirmPassword'] : '' ?></p>
                    <?php endif; ?>

                </div>
                <!-- Liste personnages -->
                <div class="form-group">
                    <label for="mainCharacter" class="text-left col-5 mb-3">Votre personnage principal :</label>
                    <select name="mainCharacter" id="mainCharacter">
                        <option selected value="choose">Choisissez un personnage</option>
                    </select>
                    <?php if (isset($_POST['signUpButton'])) : ?>
                        <p class="text-danger text-center "><?= isset($formErrors['mainCharacter']) ? $formErrors['mainCharacter'] : '' ?></p>
                    <?php endif; ?>

                </div>
                <!-- Bouton inscription -->
                <input type="submit" name="signUpButton" id="signUpButton" class="btn btn-success" value="S'inscrire" />
            </form>
        </div>
        <div class="col-6">
            <form action="#" method="POST">
                <!-- Partie connexion -->
                <h2 class="text-center mt-3 display-3 mb-3">Connexion</h2>
                <!-- Champ pseudo -->
                <div class="form-group">
                    <label for="emailSignIn" class="text-left col-5 mb-3">Votre adresse mail :</label>
                    <input type="text" name="emailSignIn" id="emailSignIn" class="col-5" />
                    <?php if (isset($_POST['signInButton'])) : ?>
                        <p class="text-danger text-center "><?= isset($formErrors['emailSignIn']) ? $formErrors['emailSignIn'] : '' ?></p>
                    <?php endif; ?>
                </div>
                <!-- Champ mot de passe -->
                <div class="form-group">
                    <label for="passwordSignIn" class="text-left col-5 mb-3">Votre mot de passe :</label>
                    <input type="password" name="passwordSignIn" id="passwordSignIn" class="col-5" />
                    <?php if (isset($_POST['signInButton'])) : ?>
                        <p class="text-danger text-center "><?= isset($formErrors['passwordSignIn']) ? $formErrors['passwordSignIn'] : '' ?></p>
                    <?php endif; ?>
                </div>
                <!-- Bouton connexion -->
                <input type="submit" name="signInButton" id="signInButton" class="btn btn-success" value="Se connecter" />
            </form>
        </div>
    </div>
</div>