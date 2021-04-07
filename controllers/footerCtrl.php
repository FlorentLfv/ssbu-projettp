<?php
require_once(__DIR__ . '../../models/comment.php');

$formErrors = array();

if (isset($_POST['commentButton']))
{
    $comment = new Comment();
    if (!empty($_POST['titleComment']))
    {
        $comment->titleComment = htmlentities($_POST['titleComment']);
    }
    else
    {
        $formErrors['titleComment'] = 'Vous n\'avez pas renseigné de titre pour votre commentaire.';
    }

    if (!empty($_POST['commentContent']))
    {
        $comment->commentContent = htmlentities($_POST['commentContent']);
    }
    else
    {
        $formErrors['commentContent'] = 'Vous n\'avez pas rempli votre commentaire.';
    }

    if (empty($formErrors))
    {
        $comment->idUser = $_SESSION['user']['idUser'];
        $comment->addComment();
    }
}