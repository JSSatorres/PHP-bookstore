<?php
include "./template/header.php";

$title = (isset($_POST['title'])) ? $_POST['title'] : "";
$type = (isset($_POST['type'])) ? $_POST['type'] : "";
$description = (isset($_POST['description'])) ? $_POST['description'] : "";
$store = (isset($_POST['store'])) ? $_POST['store'] : "";
$dispponibility = (isset($_POST['dispponibility'])) ? $_POST['dispponibility'] : "false";
$booked = (isset($_POST['booked'])) ? $_POST['booked'] : "false";
$signed = (isset($_POST['signed'])) ? $_POST['signed'] : "false";
$image = (isset($_FILES['image']['name'])) ? $_FILES['image']['name'] : "";

// INSERT INTO `libros` (`id`, `title`, `type`, `description`, `store`, `dispponibility`, `booked`, `signed`, `image`) VALUES ('null', 'Amor fraterno', 'Classics', 'this is a romantic book', 'central', 'true', 'false', 'false', '');

echo $title . "</br>";
echo $type . "</br>";
echo $description . "</br>";
echo $store . "</br>";
echo $dispponibility . "</br>";
echo $booked . "</br>";
echo $signed . "</br>";
echo $image . "</br>";


$host = 'localhost';
$db = 'login-manager';
$user = 'root';
$password = '';

try {
  $conecttion = new PDO("mysql:host=$server;dbname=$db;", $user, $password);
} catch (Exception $e) {
  echo 'Connection Failed:' . $e->getMessage();
}

$sql = $conecttion->prepare("INSERT INTO `libros` (`id`, `title`, `type`, `description`, `store`, `dispponibility`, `booked`, `signed`, `image`) VALUES ('null', 'War', 'Classics', 'this is mot a romantic book', 'central', 'true', 'false', 'false', '')");
$sql->execute()
?>
<div class="container mt-5">
  <div class="row">
    <div class="col-md-8">

      <form action="product.php" method="POST" enctype="multipart/form-data" class="mb-5">
        <fieldset>
          <h3>Add Product</h3>
          <div class="form-group">
            <label for="title" class="form-label mt-4">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
          </div>
          <div class="form-group">
            <label for="exampleSelect1" class="form-label mt-4">Select a type</label>
            <select class="form-select" id="exampleSelect1" name="type">
              <option>Classics</option>
              <option>Historical fiction</option>
              <option>Adventure stories</option>
              <option>Humour and satire</option>
              <option>Crime</option>
            </select>
          </div>
          <div class="form-group">
            <label for="description" class="form-label mt-4">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label for="formFile" class="form-label mt-4">File input </label>
            <input class="form-control" name="image" type="file" id="formFile">
          </div>
          <fieldset class="form-group">
            <legend class="mt-4">Store</legend>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="store" id="optionsRadios1" value="central-store" checked="">
              <label class="form-check-label" for="optionsRadios1">
                Central
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="store" id="optionsRadios2" value="monica">
              <label class="form-check-label" for="optionsRadios2">
                Monica´s Shop
              </label>
            </div>
            <div class="form-check disabled">
              <input class="form-check-input" type="radio" name="store" id="optionsRadios3" value="international">
              <label class="form-check-label" for="optionsRadios3">
                International
              </label>
            </div>
          </fieldset>
          <fieldset class="form-group">
            <legend class="mt-4">Options</legend>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="true" name="disponivility" id="flexCheckDefault" checked="">
              <label class="form-check-label">
                Disponivility
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="true" name="booked" id="flexCheckChecked">
              <label class="form-check-label">
                Booked
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" name="signed" type="checkbox" value="true" id="flexCheckChecked">
              <label class="form-check-label">
                Signed
              </label>
            </div>
          </fieldset>
          <button type="submit" class="btn btn-success btn-outline-dark my-5">Submit</button>
      </form>\phpmyadmin\index.php

    </div>
  </div>
</div>