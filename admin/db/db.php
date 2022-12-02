<?php

$host = 'localhost';
$db = 'login-manager';
$user = 'root';
$password = '';

try {
  $conecttion = new PDO("mysql:host=$host;dbname=$db", $user, $password);
} catch (Exception $e) {
  echo 'Connection Failed:' . $e->getMessage();
}
