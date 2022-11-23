<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'login-manager';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  echo 'Connection Failed:' . $e->getMessage();
}
