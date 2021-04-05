<?php
require(__DIR__ . '../../models/comment.php');

$comment = new Comment();

if (isset($_POST['commentButton']))
{
    $comment->titleComment = $_POST['titleComment'];
    $comment->commentContent = $_POST['commentContent'];
    $comment->idUser = $_SESSION['user']['idUser'];
    $comment->addComment();
}