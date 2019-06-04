<?php

$dsn = 'mysql:host=localhost;port=3306;dbname=geography';
$username = 'root';
$passwd = '';
try {
    $pdo = new PDO($dsn, $username, $passwd);
} catch (PDOException $exception) {
    echo $exception->getMessage();
}


$db = new Database($pdo);