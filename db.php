<?php

$dsn = 'mysql:host=localhost;dbname=company';
$username = 'root';
$password = 'reham';
$options = [];
global $connection;

try {
    $connection = new PDO($dsn, $username, $password, $options);
    echo "connect successfully";
} catch (PDOException $e) {
}
