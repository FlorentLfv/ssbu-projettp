<div class="container-fluid">
    <!-- Titre page -->
    <h1 class="col-12 display-1 text-center mt-3 mb-5 fw-bold" id="titlePage">Dashboard</h1>
</div>
<?php require_once(APP_ROOT . 'views/parts/nav.php') ?>
<div class="container">
    <div class="row">
        <!-- Contenu page -->
        <h2>Ajouter un personnage</h2>
        <form action="#" method="POST">
            <div class="form-group col-6">
                <label for="characterName">Le nom du personnage :</label>
                <input type="text" name="characterName" id="characterName" class="form-control"/>
            </div>
            <div class="form-group col-6">
                <label for="characterImg">Image du personnage :</label>
                <input type="file" name="characterImg" id="characterImg" class="form-control" />
            </div>
            <input type="submit" name="characterButton" id="characterButton" />
        </form>
    </div>
</div>