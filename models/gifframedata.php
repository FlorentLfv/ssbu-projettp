<?php

class GifFrameData extends Database
{
    public $idGifFrameData = 0;
    public $nameGifFrameData = '';
    public $titleGifFrameData = '';
    public $altNameGifFrameData = '';
    public $pathGifFrameData = '';
    public $idFrameData = '';

    /**
     * Méthode pour ajouter un gif pour une frame data
     *
     * @return bool
     */
    public function addGifFrameData()
    {
        $query = 'INSERT INTO `gifframedata` (`nameGifFrameData`, `titleGifFrameData`, `altNameGifFrameData`, `pathGifFrameData`, `idFrameData`)
        VALUES (:nameGifFrameData, :titleGifFrameData, :altNameGifFrameData, :pathGifFrameData, :idFrameData)';
        $pdoStatement = $this->pdo->prepare($query);
        $pdoStatement->bindValue(':nameGifFrameData', $this->nameGifFrameData, PDO::PARAM_STR);
        $pdoStatement->bindValue(':titleGifFrameData', $this->titleGifFrameData, PDO::PARAM_STR);
        $pdoStatement->bindValue(':altNameGifFrameData', $this->altNameGifFrameData, PDO::PARAM_STR);
        $pdoStatement->bindValue(':pathGifFrameData', $this->pathGifFrameData, PDO::PARAM_STR);
        $pdoStatement->bindValue(':idFrameData', $this->idFrameData, PDO::PARAM_STR);
        return $pdoStatement->execute();
    }
}