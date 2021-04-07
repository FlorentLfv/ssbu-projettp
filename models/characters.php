<?php
class Character extends Database
{
    public $idCharacter = 0;
    public $name = '';
    public $pathImgCharacter = '';
    public $presentation = '';
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
        $query = 'INSERT INTO `characters` (`name`, `pathImgCharacter`, `presentation`, `originFranchise`, `strengths`, `weaknesses`) VALUES (:name, :pathImgCharacter, :presentation, :originFranchise, :strengths, :weaknesses)';
        $pdoStatement = $this->pdo->prepare($query);
        $pdoStatement->bindValue(':name', $this->name, PDO::PARAM_STR);
        $pdoStatement->bindValue(':pathImgCharacter', $this->pathImgCharacter, PDO::PARAM_STR);
        $pdoStatement->bindValue(':presentation', $this->presentation, PDO::PARAM_STR);
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
        $query = 'SELECT `name`, `idCharacter` FROM `characters` ORDER BY `name` ASC';
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
        $pdoStatement = $this->pdo->prepare($query);
        $pdoStatement->bindValue(':idCharacter', $this->idCharacter, PDO::PARAM_INT);
        $pdoStatement->execute();
        return $pdoStatement->fetch(PDO::FETCH_OBJ);
    }
}