<?php
class Nationality extends Database
{
    public $idNationality = 0;
    public $nameNationality = '';

    /**
     * Méthode pour ajouter une nationalité
     *
     * @return void
     */
    public function addNationality()
    {
        $query = 'INSERT INTO `nationalityplayer` (`nameNationality`) VALUES (:nameNationality)';
        $pdoStatement = $this->pdo->prepare($query);
        $pdoStatement->bindValue(':nameNationality', $this->nameNationality, PDO::PARAM_STR);
        $pdoStatement->execute();
    }

    /**
     * Méthode pour afficher la liste des nationalités
     *
     * @return object
     */
    public function getNationalityList()
    {
        $query = 'SELECT `nameNationality`, `idNationality` FROM `nationalityplayer`';
        $pdoStatement = $this->pdo->query($query);
        return $pdoStatement->fetchAll(PDO::FETCH_OBJ);
    }
}