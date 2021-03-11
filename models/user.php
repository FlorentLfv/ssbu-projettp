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

    public function addUser()
    {
        $query = 'INSERT INTO `6d5ghg_users` (`pseudo`, `mail`, `password`) VALUES (:pseudo, :mail, :password);';
        $pdoStatement = $this->pdo->prepare($query);
        $pdoStatement->bindValue(':pseudo', $this->pseudo, PDO::PARAM_STR);
        $pdoStatement->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        $pdoStatement->bindValue(':password', $this->password, PDO::PARAM_STR);
        return $pdoStatement->execute();
    }
}