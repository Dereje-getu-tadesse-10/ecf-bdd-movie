<?php

$servername = 'localhost';
$username = 'phpmyadmin';
$password = 'derejegi1';
$dbname = 'movies-ecf';

try {
    $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    echo "Connected successfully";
    return $db;
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}