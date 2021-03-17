<?php
class CityOfTournament extends Database
{
    /**
     * Méthode permettant de retourner le code postal
     *
     * @return object
     */
    public function zipCodeList($data)
    {
        $query = 'SELECT * FROM `townzip` WHERE `zipcode` = :zipcode';
        $pdoStatement = $this->pdo->prepare($query);
        $pdoStatement->bindValue(':zipcode', $data, PDO::PARAM_STR);
        $pdoStatement->execute();
        return $pdoStatement->fetchAll();
    }
}