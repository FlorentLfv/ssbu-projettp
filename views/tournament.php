<div class="container-fluid">
    <!-- Titre page -->
    <h1 class="col-12 display-1 text-center mt-3 mb-5 fw-bold">Tournois</h1>
</div>
<?php require_once(APP_ROOT . 'views/parts/nav.php') ?>
<!-- Contenu page -->
<div class="container">
    <div class="row mb-5">
        <h2 class="col-12 text-center display-3 mt-3">Explications</h2>
        <div>
            <h3>Les règles</h3>
            <p>
                En tournoi, les règles sont différentes du jeu original,
                au revoir les règles du party game sympathique entre amis ou en famille.
                Les tournois se déroulent dans ce qu'on appelle des "brackets" ou des "arbres" pour les plus francophones.
                Il y en a généralement 2 :
            </p>
            <ul class="col-10 offset-1">
                <li>
                    L'arbre winner, les joueurs s'affrontent pour avancer dans l'arbre. Dès qu'ils perdent un set, ils sont éliminés
                    du tournoi ou, s'il y a un arbre loser, sont envoyés dans l'arbre loser.
                </li>
                <img class="col-12 mt-2" src="../assets/img/winnerbracket.png" alt="Exemple winner bracket pour 16 joueurs" title="Exemple winner bracket pour 16 joueurs" />
                <li class="mt-4">
                    L'arbre loser, c'est un arbre en parallèle de l'arbre winner considéré comme une deuxième chance
                    pour finir premier du tournoi. En cas de défaite, c'est l'élimination du joueur et une fin de tournoi.
                </li>
                <img class="col-12 mt-2" src="../assets/img/loserbracket.png" alt="Exemple loser bracket pour 16 joueurs" title="Exemple loser bracket pour 16 joueurs" />
            </ul>
            <p>Un set est un ensemble de combats ou de "parties jouées". Il y en a 2 types en tournoi :<p>
            <ul class="col-10 offset-1">
                <li>
                    Le BO3 ou "best of 3", est un set qui se passe en 3 combats maximum.
                    Le gagnant du set est celui qui remporte 2 combats. Il est plutôt utilisé en début et moitié de tournoi.
                </li>
                <li>
                    Le BO5 ou "best of 5", est un set qui se passe en 5 combats maximum.
                    Le gagnant du set est celui qui remporte 3 combats. Il est plutôt utilisé en fin de tournoi.
                </li>
            </ul>
            </p>
            <p>
                Les règles d'un tournoi peuvent varier légèrement d'un tournoi à l'autre, mais respecteront en
                général les règles suivantes :
            </p>
            <ul class="col-10 offset-1">
                <li>Les combats se déroulent en 1 contre 1. Chaque joueur a 3 vies par parties. Les objets sont désactivés. Le temps limite est de 7 ou minutes selon le tournoi.</li>
                <li>
                    Tous les personnages peuvent être joués, cependant concernant les combattant miis, il peut y avoir des restrictions
                    par rapport aux coups spéciaux selon les tournois auxquels vous participez : vous pouvez être obligé
                    de jouer seulement les coups spéciaux de base ou vous pouvez les changer mais vous devrez dire quels coups vous avez
                    modifié à votre adversaire.
                </li>
                <li>Avant et entre chaque partie vous devrez choisir la map sur laquelle vous affronterez votre adversaire.</li>
            </ul>
        </div>
        <div>
            <h3>Les map pool</h3>
            <img class="col-6 offset-3 mb-2"src="../assets/img/blzmappool.png" alt="Exemple map pool BlastZone" title="Exemple map pool BlastZone" />
            <p>
                Toutes les maps ne sont pas éligibles à un environnement compétitif, soit à cause de leur 
                taille, soit à cause de leur disposition. Chaque map choisie aura également ses évènements désactivés. 
                C'est pour cela qu'une liste de maps est choisie par les organisateurs de tournois (ou TO, "Tournament Organizer").
                Cette liste peut varier d'un tournoi à l'autre mais ressemblera généralement à celle ci-dessus.
            </p>
            <p>
                Afin de ne pas toujours jouer sur la même map qui peut avantager ou désavantager un personnage, les joueurs 
                doivent faire un pierre feuille ciseaux au début du set pour définir le joueur qui va "ban" certaines 
                maps en premier, c'est à dire empêcher l'adversaire de choisir une map pour la partie en cours, le deuxième 
                joueur va ensuite en ban d'autres puis le premier joueur va choisir entre les maps restantes qui n'ont pas 
                été bannies. A la fin de chaque partie, le perdant devra ban certaines maps puis l'autre joueur choisira 
                une map qui n'est pas ban.
            </p>
        </div>
        <h2 class="col-12 text-center display-3 mt-3">Les sites de tournois</h2>
        <p>Il existe plusieurs sites pour s'inscrire à des tournois. Les plus connus sont :</p>
        <ul class="col-10 offset-1">
            <li>Challonge : <a class="ms-3" href="https://challonge.com/fr"><img src="../assets/img/challongeLogo.svg" alt="Logo Challonge" title="Logo Challonge" /></a></li>
            <li class="mt-3">Smash.gg : <a href="https://smash.gg/"><img src="../assets/img/smashGGLogo.svg" alt="Logo Smash.gg" title="Logo Smash.gg" /></a></li>
            <li class="mt-3">NiceCactus : <a href="https://app.nicecactus.gg/game/super-smash-bros-ultimate"><img src="../assets/img/nicecactusLogo.svg" alt="Logo NiceCactus" title="Logo Nicecactus" /></a></li>
        </ul>
        <h2 class="col-12 text-center display-3 mt-3">Présentation d'une association</h2>
        <p>
            En tant qu'adhérent de l'association BlastZone j'aimerai leur faire un petit coucou. En temps normal,
            cette association propose des sessions chaque vendredi soir de 18h à 23h. 
            Elle organise également 2 tournois par mois sous forme de "bi-weekly", c'est à dire toutes les 2 semaines.
        </p>
        <img class="col-4 offset-4 mb-3" src="../assets/img/h6asRcBM_400x400.png" alt="Logo BlastZone" title="Logo BlastZone" />
        <p>
            Je laisse leur twitter et leur facebook pour les personnes qui habitent aux alentours d'Amiens et qui 
            seraient intéressées, en espérant vous y rencontrer et pourquoi pas vous faire progresser.
        </p>
        <ul class="col-10 offset-1">
            <li><a href="https://twitter.com/blastzone_?lang=fr"><img class="me-3" src="../assets/img/Twitter_Bird.svg" alt="Twitter BlastZone" title="Twitter BlastZone" /></a>: Leur Twitter</li>
            <li><a href="https://www.facebook.com/BlastZoneAsso/"><img class="me-3" src="../assets/img/Facebook_icon_2013.svg" alt="Facebook BlastZone" title="Facebook BlastZone" /></a>: Leur facebook</li>
        </ul>
    </div>
</div>