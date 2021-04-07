<?php
class TopPlayer extends Database
{
    public $idTopPlayers = 0;
    public $pseudoPlayer = '';
    public $photoTopPlayerName = '';
    public $photoTopPlayerPath = '';
    public $idCharacters = '';
    public $idNationality = '';

    /**
     * Méthode pour ajouter un top player
     *
     * @return bool
     */
    public function addTopPlayer()
    {
        $query = 'INSERT INTO `topplayers` (`pseudoPlayer`, `photoTopPlayerName`, `photoTopPlayerPath`, `idCharacters`, `idNationality`) 
        VALUES (:pseudoPlayer, :photoTopPlayerName, :photoTopPlayerPath, :idCharacters, :idNationality)';
        $pdoStatement = $this->pdo->prepare($query);
        $pdoStatement->bindValue(':pseudoPlayer', $this->pseudoPlayer, PDO::PARAM_STR);
        $pdoStatement->bindValue(':photoTopPlayerName', $this->photoTopPlayerName, PDO::PARAM_STR);
        $pdoStatement->bindValue(':photoTopPlayerPath', $this->photoTopPlayerPath, PDO::PARAM_STR);
        $pdoStatement->bindValue(':idCharacters', $this->idCharacters, PDO::PARAM_INT);
        $pdoStatement->bindValue(':idNationality', $this->idNationality, PDO::PARAM_INT);
        return $pdoStatement->execute();
    }

    /**
     * Méthode pour récupérer les infos d'un top player
     *
     * @return object
     */
    public function getTopPlayerInfos()
    {
        $query = 'SELECT `pseudoPlayer`, `photoTopPlayerName`, `photoTopPlayerPath`, `nationalityplayer`.`nameNationality`
        FROM `topplayers` 
        INNER JOIN `nationalityplayer`
        ON `topplayers`.`idNationality` = `nationalityplayer`.`idNationality`
        WHERE `idCharacters` = :idCharacters';
        $pdoStatement = $this->pdo->prepare($query);
        $pdoStatement->bindValue(':idCharacters', $this->idCharacters, PDO::PARAM_INT);
        $pdoStatement->execute();
        return $pdoStatement->fetch(PDO::FETCH_OBJ);
    }
}