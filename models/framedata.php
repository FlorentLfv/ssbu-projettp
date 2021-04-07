<?php
class FrameData extends Database
{
    public $idFrameData = 0;
    public $moveName = '';
    public $frameStartup = '';
    public $onShield = '';
    public $activeFrame = '';
    public $totalFrame = '';
    public $frameLandingLag = '';
    public $frameShieldLag = '';
    public $frameShieldStun = '';
    public $multipleHitbox = '';
    public $idCharacters = '';

    /**
     * Méthode pour ajouter la frame data d'un coup
     *
     * @return bool
     */
    public function addMoveData()
    {
        $query = 'INSERT INTO `framedata` (`moveName`, `frameStartup`, `onShield`, `activeFrame`, `totalFrame`, `frameLandingLag`, `frameShieldLag`, `frameShieldStun`, `multipleHitbox`, `idCharacters`) 
        VALUES (:moveName, :frameStartup, :onShield, :activeFrame, :totalFrame, :frameLandingLag, :frameShieldLag, :frameShieldStun, :multipleHitbox, :idCharacters)';
        $pdoStatement = $this->pdo->prepare($query);
        $pdoStatement->bindValue(':moveName', $this->moveName, PDO::PARAM_STR);
        $pdoStatement->bindValue(':frameStartup', $this->frameStartup, PDO::PARAM_INT);
        $pdoStatement->bindValue(':onShield', $this->onShield, PDO::PARAM_INT);
        $pdoStatement->bindValue(':activeFrame', $this->activeFrame, PDO::PARAM_INT);
        $pdoStatement->bindValue(':totalFrame', $this->totalFrame, PDO::PARAM_INT);
        $pdoStatement->bindValue(':frameLandingLag', $this->frameLandingLag, PDO::PARAM_INT);
        $pdoStatement->bindValue(':frameShieldLag', $this->frameShieldLag, PDO::PARAM_INT);
        $pdoStatement->bindValue(':frameShieldStun', $this->frameShieldStun, PDO::PARAM_INT);
        $pdoStatement->bindValue(':multipleHitbox', $this->multipleHitbox, PDO::PARAM_INT);
        $pdoStatement->bindValue(':idCharacters', $this->idCharacters, PDO::PARAM_INT);
        return $pdoStatement->execute();
    }

    /**
     * Méthode pour récupérer les informations d'un coup
     *
     * @return object
     */
    public function getMoveData()
    {
        $query = 'SELECT *
        FROM `framedata` 
        INNER JOIN `gifframedata`
        ON `framedata`.`idFrameData` = `gifframedata`.`idFrameData`
        WHERE `idCharacters` = :idCharacters';
        $pdoStatement = $this->pdo->prepare($query);
        $pdoStatement->bindValue(':idCharacters', $this->idCharacters, PDO::PARAM_INT);
        $pdoStatement->execute();
        return $pdoStatement->fetchAll(PDO::FETCH_OBJ);
    }

    /**
     * Méthode pour récupérer l'id et le nom de toutes les frame data
     *
     * @return object
     */
    public function getMoveDataList()
    {
        $query = 'SELECT `idFrameData`, `moveName`, `characters`.`name` 
        FROM `frameData`
        INNER JOIN `characters`
        ON `frameData`.`idCharacters` = `characters`.`idCharacter`';
        $pdoStatement = $this->pdo->query($query);
        $pdoStatement->execute();
        return $pdoStatement->fetchAll(PDO::FETCH_OBJ);
    }
}