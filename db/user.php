<?php

class User extends DB
{
  private $nombre;
  private $username;

  public function userExists($user, $pass)
  {
    $md5pass = md5($pass);

    $query = $this->connect()->prepare('SELECT * FROM usuarrios WHERE username = :user AND password = :pass  ');
    // $query->execute(['user' -> $user, 'pass'-> $md5pass ]);
  }
}
