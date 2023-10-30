<?php

require_once __DIR__ . "/GetConnection.php";
require_once __DIR__ . "/Model/Comment.php";
require_once __DIR__ . "/Repository/CommentRepository.php";


use Repository\CommentRepositoryImpl;
use Model\Comment;

$connection = getConnection();
$repository = new CommentRepositoryImpl($connection);

// $comment = new Comment(email: "repository@test.com", comment: "Hallo");
// $newComment = $repository->insert($comment);

// var_dump($newComment->getId());

// $comment = $repository->findById(479);
// var_dump($comment);

$comment = $repository->findAll();
var_dump($comment);

$connection = null;