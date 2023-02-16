<?php
class Database
{

  private $host;
  private $db;
  private $user;
  private $password;
  private $charset;

  public function __construct()
  {
    $this->host = constant('localhost');
    $this->db = constant('login-manager');
    $this->user = constant('root');
    $this->password = constant('');
    $this->charset = constant('utf8mb4');
  }

  function connect()
  {
    try {
      $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
      $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES   => false,
      ];

      $pdo = new PDO($connection, $this->user, $this->password, $options);
      error_log('Conexión a BD exitosa');
      return $pdo;
    } catch (PDOException $e) {
      error_log('Error connection: ' . $e->getMessage());
    }
  }
}
