<?php
require "../db/db2.php";

$message = "";

if (!empty($_POST["username"]) && !empty($_POST["email"]) && !empty($_POST["password"])) {
  $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(":username", $_POST["username"]);
  $stmt->bindParam(":email", $_POST["email"]);
  $password = password_hash($_POST["password"], PASSWORD_BCRYPT);
  $stmt->bindParam(":password", $password);

  if ($stmt->execute()) {
    $message = "Succesfully created new user";
  } else {
    $message = "there has been an error";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../assets/css/style.css">
  <title>Register</title>

  <link rel="stylesheet" href="main.css">
</head>

<body>
  <?php
  require "../partials/header.php"
  ?>
  <div class="login">
    <h1>Register</h1>

    <?php if (!empty($message)) : ?>
      <p><?php $message ?> </p>
    <?php endif; ?>

    <form action="register.php" method="post">
      <input type="text" name="username" placeholder="Username" required="required" />
      <input type="email" name="email" placeholder="Email" required="required" />
      <input type="password" name="password" placeholder="Password" required="required" />
      <button type="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
    </form>
  </div>
</body>

</html>