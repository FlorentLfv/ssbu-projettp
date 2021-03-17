<div class="container">
    <div class="row">
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
            <h1 class="text-center display-1 mt-4 fw-bold">Erreur 404</h1>
            <p class="text-center h3 mb-5">La page que vous recherchez n'existe pas (ou pas encore)</p>
            <p class="text-center h3 mt-5">Veuillez cliquer sur ce bouton pour retourner sur la page d'accueil</p>
            <a href="/home" class="redPanel col-2 mt-2 offset-5 h3">Accueil</a>
        <?php endif; ?>
    </div>
</div>