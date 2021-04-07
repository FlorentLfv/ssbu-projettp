<?php

class Comment extends Database
{
    public $titleComment = '';
    public $commentContent = '';
    public $idUser = '';

    /**
     * Méthode pour créer un commentaire
     *
     * @return bool
     */
    public function addComment()
    {
        $query = 'INSERT INTO `comment` (`titleComment`, `commentContent`, `idUser`) VALUES (:titleComment, :commentContent, :idUser)';
        $pdoStatement = $this->pdo->prepare($query);
        $pdoStatement->bindValue(':titleComment', $this->titleComment, PDO::PARAM_STR);
        $pdoStatement->bindValue(':commentContent', $this->commentContent, PDO::PARAM_STR);
        $pdoStatement->bindValue(':idUser', $this->idUser, PDO::PARAM_INT);
        return $pdoStatement->execute();
    }

    /**
     * Méthode pour afficher tous les commentaires
     *
     * @return object
     */
    public function getCommentsListAdmin()
    {
        $query = 'SELECT * 
        FROM `comment`
        INNER JOIN `6d5ghg_users`
        ON `comment`.`idUser` = `6d5ghg_users`.`idUser`';
        $pdoStatement = $this->pdo->query($query);
        return $pdoStatement->fetchAll();
    }

    /**
     * Méthode pour afficher tous les commentaires d'un utilisateur
     *
     * @return object
     */
    public function getCommentsListUser()
    {
        $query = 'SELECT * FROM `comment` WHERE `idUser` = :idUser';
        $pdoStatement = $this->pdo->query($query);
        $pdoStatement->bindValue(':idUser', $this->idUser, PDO::PARAM_INT);
        return $pdoStatement->fetchAll();
    }

    /**
     * Méthode pour supprimer un commentaire
     *
     * @return bool
     */
    public function deleteComment()
    {
        $query = 'DELETE FROM `comment` WHERE `idComment` = :idComment';
        $pdoStatement= $this->pdo->query($query);
        $pdoStatement->bindValue(':idComment', $this->idComment, PDO::PARAM_INT);
        return $pdoStatement->execute();
    }
}