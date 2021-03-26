<?php
class Character extends Database
{
    public $idCharacters = 0;
    public $name = '';
    public $imgCharacter = '';

    /**
     * Méthode pour ajouter un personnage
     *
     * @return bool
     */
    public function addCharacter()
    {
        $query = 'INSERT INTO `characters` (`name`, `imgCharacter`) VALUES (:name, :imgCharacter)';
        $pdoStatement = $this->pdo->prepare($query);
        $pdoStatement->bindValue(':name', $this->name, PDO::PARAM_STR);
        $pdoStatement->bindValue(':imgCharacter', $this->imgCharacter, PDO::PARAM_STR);
        return $pdoStatement->execute();
    }

    /**
     * Méthode pour afficher la liste des personnages
     *
     * @return object
     */
    public function getCharactersList()
    {
        $query = 'SELECT * FROM `characters`';
        $pdoStatement = $this->pdo->query($query);
        return $pdoStatement->fetchAll(PDO::FETCH_OBJ);
    }

    /**
     * Méthode pour afficher informations d'un personnage
     *
     * @return object
     */
    public function getCharacterInfos()
    {
        $query = 'SELECT * FROM `characters` WHERE `idCharacter` = :idCharacter';
        $pdoStatement = $this->pdo->query($query);
        $pdoStatement->bindValue(':idCharacter', $this->idCharacter, PDO::PARAM_INT);
        return $pdoStatement->fetchAll(PDO::FETCH_OBJ);
    }
}