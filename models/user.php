<?php
class User extends Database
{
    // Déclaration des attributs
    public $idUser = 0;
    public $pseudo = '';
    public $mail = '';
    public $password = '';
    public $idCity = null;

    /**
     * méthode pour ajouter un utilisateur
     * requête préparée, marqueur nominatif
     * @return bool
     */

    public function addUser()
    {
        // on définit la requête pour ajouter un utilisateur qu'on stocke dans $query
        $query = 'INSERT INTO `6d5ghg_users` (`pseudo`, `mail`, `password`, `idCity`) VALUES (:pseudo, :mail, :password, :idCity);';
        $pdoStatement = $this->pdo->prepare($query);
        // on hydrate la valeur de :pseudo à l'attribut pseudo
        $pdoStatement->bindValue(':pseudo', $this->pseudo, PDO::PARAM_STR);
        // on hydrate la valeur de :mail à l'attribut mail
        $pdoStatement->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        // on hydrate la valeur de :password à l'attribut password
        $pdoStatement->bindValue(':password', $this->password, PDO::PARAM_STR);
        // on hydrate la valeur de :idCity à l'attribut idCity
        $pdoStatement->bindValue(':idCity', $this->idCity, PDO::PARAM_INT);
        
        // on exécute la méthode pour insérer les données dans la bdd
        return $pdoStatement->execute();
    }

    /**
     * Méthode permettant de récupérer le nom d'utilisateur de la personne connecté
     *
     * @return object
     */
    public function getUserConnexion()
    {
        $query = 'SELECT `idUser`,`pseudo`, `password` FROM `6d5ghg_users` WHERE `mail` = :mail';
        $pdoStatment = $this->pdo->prepare($query);
        $pdoStatment->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        $pdoStatment->execute();
        return $pdoStatment->fetch(PDO::FETCH_OBJ);
    }

    /**
     * Méthode permettant de récupérer le nom d'utilisateur de la personne connecté
     *
     * @return object
     */
    public function getUserInfo()
    {
        $query = 'SELECT `pseudo`, `mail`, `zipCode` 
        FROM `6d5ghg_users` 
        INNER JOIN `townzip` 
        ON `6d5ghg_users`.`idCity` = `townzip`.`idCity` 
        WHERE `idUser` = :idUser';
        $pdoStatment = $this->pdo->prepare($query);
        $pdoStatment->bindValue(':idUser', $this->idUser, PDO::PARAM_STR);
        $pdoStatment->execute();
        return $pdoStatment->fetch(PDO::FETCH_OBJ);
    }

    /**
     * Méthode permettant de modifier les informations utilisateur
     * 
     * @return bool
     */
    public function updateUserInfo()
    {
        $query = 'UPDATE `6d5ghg_users` 
        SET `pseudo` = :pseudo, `mail` = :mail, `password` = :password, `idCity` = :idCity 
        WHERE `idUser` = :idUser';
        $pdoStatement = $this->pdo->prepare($query);
        $pdoStatement->bindValue(':pseudo', $this->pseudo, PDO::PARAM_STR);
        $pdoStatement->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        $pdoStatement->bindValue(':password', $this->password, PDO::PARAM_STR);
        $pdoStatement->bindValue(':idCity', $this->idCity, PDO::PARAM_INT);
        $pdoStatement->bindValue(':idUser', $this->idUser, PDO::PARAM_INT);
        return $pdoStatement->execute();
    }

    /**
     * Methode permettant de savoir si un mail est utilisé
     *
     * @return bool
     */
    public function checkEmail()
    {
        $query = 'SELECT COUNT(`idUser`) AS `isExist` FROM `6d5ghg_users` WHERE `mail` = :mail';
        $pdoStatment = $this->pdo->prepare($query);
        $pdoStatment->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        $pdoStatment->execute();
        return $pdoStatment->fetch(PDO::FETCH_OBJ)->isExist;
    }

    /**
     * Méthode pour supprimer un utilisateur
     * 
     * @return bool
     */
    public function deleteUser()
    {
        $query = 'DELETE FROM `6d5ghg_users` WHERE `idUser` = :idUser';
        $pdoStatement = $this->pdo->prepare($query);
        $pdoStatement->bindValue(':idUser', $this->idUser, PDO::PARAM_INT);
        return $pdoStatement->execute();
    }
}