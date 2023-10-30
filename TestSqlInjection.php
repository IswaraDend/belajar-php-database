<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$username = $connection->quote("admin");
$password = $connection->quote("admin");
$sql = "SELECT * FROM admin WHERE username=$username and password =$password;";

$statement = $connection->query($sql);

$success = false;
$find_user = null;
foreach ($statement as $row) {
    //sukses
    $success = true;
    $find_user = $row["username"];
}

if ($success) {
    echo "sukses login : " . $find_user . PHP_EOL;
} else {
    echo "Gagal login" . PHP_EOL;
}

$connection = null;