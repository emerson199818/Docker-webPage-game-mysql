<?php
$server = '192.168.1.12';
$username = 'admin';
$password = '1143407053';
$database = 'usuarios';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>
