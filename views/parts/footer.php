<?php 
if (isset($_SESSION['user'])) : 
require_once(APP_ROOT . 'controllers/footerCtrl.php');
?>
    <footer class="col-12">
        <!-- Footer commentaire -->
        <form action="#" method="POST">
            <div class="row pt-4 pb-2 bg-danger text-white">
                <div class="col-4 offset-1">
                    <p class="h3 fw-bold"><u>Commentaires</u></p>
                    <p class="mt-3">
                        Un avis ? Une suggestion ? Tu peux t’exprimer librement.<br />(En restant
                        respectueux bien évidemment) :
                    </p>
                </div>
                <div class="col-6">
                    <div class="mb-2 col-6 form-group">
                        <input class="form-control" type="text" name="titleComment" id="titleComment" placeholder="Titre du commentaire :" />
                    </div>
                    <!-- Input commentaire -->
                    <div class="mb-2">
                        <textarea class="form-control" placeholder="Votre commentaire :" aria-label="With textarea" name="commentContent"></textarea>
                    </div>
                    <!-- Bouton footer -->
                    <div class="col-3 offset-9 mb-3">
                        <input type="submit" name="commentButton" id="commentButton" value="Envoyer le commentaire" />
                    </div>
                </div>
            </div>
        </form>
    </footer>
<?php endif; ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<?php if ($_GET['view'] === 'connexion' || $_GET['view'] === 'profile') : ?>
    <script src="/assets/js/main.js"></script>
<?php endif; ?>
</body>

</html>