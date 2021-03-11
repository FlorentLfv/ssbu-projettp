<?php
// on instancie l'objet Database
class Database
{
    // on définit l'attribut pdo avec une valeur null
    protected $pdo = null;
    // on déclare la méthode __construct pour établir une liaison avec bdd
    public function __construct(){
        // on essaye de se connecter à la bdd
        try {
            $this->pdo = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_HOST, DB_USER, DB_PASSWORD, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
            //sinon on récupère le message d'erreur dans $e
        } catch (Exception $e ){
            die($e->getMessage());
        }
    }
}