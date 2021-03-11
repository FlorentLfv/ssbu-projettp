<?php
require('database.php');
class User extends Database
{
    public $idUser = 0;
    public $pseudo = '';
    public $mail = '';
    public $password = '';

    /**
     * méthode pour ajouter un utilisateur
     * requête préparée, marqueur nominatif
     * @return bool
     */

    // possibilité de faire inner join pour intégrer ville tournoi ?
    public function addUser()
    {
        // on définit la requête pour ajouter un utilisateur qu'on stocke dans $query
        $query = 'INSERT INTO `6d5ghg_users` (`pseudo`, `mail`, `password`) VALUES (:pseudo, :mail, :password);';
        $pdoStatement = $this->pdo->prepare($query);
        // on attribue la valeur de :pseudo à l'attribut pseudo
        $pdoStatement->bindValue(':pseudo', $this->pseudo, PDO::PARAM_STR);
        // on attribue la valeur de :mail à l'attribut mail
        $pdoStatement->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        // on attribue la valeur de :password à l'attribut password
        $pdoStatement->bindValue(':password', $this->password, PDO::PARAM_STR);
        // on exécute la méthode pour insérer les données dans la bdd
        return $pdoStatement->execute();
    }
}