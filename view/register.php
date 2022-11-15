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
    <form action="register.php" method="post">
      <input type="text" name="username" placeholder="Username" required="required" />
      <input type="email" name="email" placeholder="Email" required="required" />
      <input type="password" name="password" placeholder="Password" required="required" />
      <button type="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
    </form>
  </div>
</body>

</html>