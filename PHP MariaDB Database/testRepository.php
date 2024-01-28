<?php

require_once __DIR__ . "/Model/Comment.php";
require_once __DIR__ . "/Repository/CommentRepository.php";
require_once __DIR__ . "/getConnection.php";

use Model\Comment;
use Repository\CommentRepositoryImpl;

$connection = getConnection();

$repository = new CommentRepositoryImpl($connection);
// $comment = new Comment(email: "repo@tes.com", comment: "hai");
// $newComment = $repository->insert($comment);
// var_dump($comment);

$comment = $repository->findAll();

foreach ($comment as $c) {
    var_dump($c);
}

$connection = null;
