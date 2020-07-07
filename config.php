<?php


$db_user = "root";
$db_password = "";
$db_char = "SET CHARACTER SET UTF8";

try {
    $connection = new PDO("mysql:host=localhost;dbname=bookshop", $db_user, $db_password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connection->exec($db_char);
} catch (Exception $e) {
    die("Error" . $e->getMessage());
    echo ("There is a error at" . $e->getLine());
}
