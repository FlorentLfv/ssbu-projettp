<?php
class Character extends Database
{
    public $idCharacters = 0;
    public $name = '';
    public $imgCharacter = '';
    public $presentaion = '';
    public $originFranchise = '';
    public $strengths = '';
    public $weaknesses = '';

    /**
     * Méthode pour ajouter un personnage
     *
     * @return bool
     */
    public function addCharacter()
    {
        $query = 'INSERT INTO `characters` (`name`, `imgCharacter`, `presentation`, `originFranchise`, `strengths`, `weaknesses`) VALUES (:name, :imgCharacter, :presentation, :originFranchise, :strengths, :weaknesses)';
        $pdoStatement = $this->pdo->prepare($query);
        $pdoStatement->bindValue(':name', $this->name, PDO::PARAM_STR);
        $pdoStatement->bindValue(':imgCharacter', $this->imgCharacter, PDO::PARAM_STR);
        $pdoStatement->bindValue(':presentation', $this->presentaion, PDO::PARAM_STR);
        $pdoStatement->bindValue(':originFranchise', $this->originFranchise, PDO::PARAM_STR);
        $pdoStatement->bindValue(':strengths', $this->strengths, PDO::PARAM_STR);
        $pdoStatement->bindValue(':weaknesses', $this->weaknesses, PDO::PARAM_STR);
        return $pdoStatement->execute();
    }

    /**
     * Méthode pour afficher la liste des personnages
     *
     * @return object
     */
    public function getCharactersNameList()
    {
        $query = 'SELECT `name`, `idCharacter` FROM `characters`';
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