<div class="container">
    <div class="row">
        <?php if (isset($_SESSION['user']) && $_GET['view'] === 'connexion') : ?>
            <h1 class="text-center display-1 mt-4 fw-bold">Erreur</h1>
            <p class="text-center h3 mb-5">Vous êtes déjà connecté(e)</p>
            <p class="text-center h3 mt-5">Veuillez cliquer sur ce bouton pour retourner sur la page d'accueil</p>
            <a href="/home" class="redPanel col-2 mt-2 offset-5 h3">Accueil</a>
        <?php elseif (!isset($_SESSION['user']) && $_GET['view'] === 'profile') : ?>
            <h1 class="text-center display-1 mt-4 fw-bold">Erreur</h1>
            <p class="text-center h3 mb-5">Vous n'êtes pas encore connecté(e)</p>
            <p class="text-center h3 mt-5">Veuillez cliquer sur ce bouton pour retourner sur la page d'accueil</p>
            <a href="/home" class="redPanel col-2 mt-2 offset-5 h3">Accueil</a>
        <?php else : ?>
            <h1 class="text-center display-1 mt-4 fw-bold">Erreur 404</h1>
            <p class="text-center h3 mb-5">La page que vous recherchez n'existe pas (ou pas encore)</p>
            <p class="text-center h3 mt-5">Veuillez cliquer sur ce bouton pour retourner sur la page d'accueil</p>
            <a href="/home" class="redPanel col-2 mt-2 offset-5 h3">Accueil</a>
        <?php endif; ?>
    </div>
</div>