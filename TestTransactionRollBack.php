<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$connection->beginTransaction();

$connection->exec("INSERT INTO comments(email, comment) VALUES ('Iswara@test.com','hallo')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('Iswara@test.com','hallo juga')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('Iswara@test.com','hallo lagi')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('Iswara@test.com','hallo idnya kebanyakan')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('Iswara@test.com','hallo gara2 test tadi')");

$connection->rollBack();

$connection = null;