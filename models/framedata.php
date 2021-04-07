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
        $query = 'INSERT INTO `framedata` (`moveName`, `frameStartup`, `onShield`, `activeFrame`, `totalFrame`, `frameLandingLag`, `frameShieldLag`, `frameShieldStun`, `multipleHitbox`) 
        VALUES (:moveName, :frameStartup, :onShield, :activeFrame, :totalFrame, :frameLandingLag, :frameShieldLag, :frameShieldStun, :multipleHitbox)';
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
}