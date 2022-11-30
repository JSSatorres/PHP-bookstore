<?php

class Login
{
  private $email;
  private $user;
  private $password;
  public $began;

  public function __construct()
  {
    $this->email = $this->began . "@gmail.com";
    $this->user =  "Mr" . $this->began;
  }
}
