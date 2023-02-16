<?php
include "./template/header.php";
include "./db/db.php";

$query = $conecttion->prepare("SELECT * FROM libros");
$query->execute();
$products = $query->fetchAll(PDO::FETCH_ASSOC);
$email = (isset($_POST['email'])) ? $_POST['email'] : "";
$password = (isset($_POST['password'])) ? $_POST['password'] : "";
print_r($_POST);
print_r($_POST["enterButton"]);

if (!empty($_POST["enterButton"])) {

  echo " <div class='alert alert-danger'> yhe fields are empty</div>";
  if (empty($_POST["email"]) and empty($_POST["password"])) {
  } else {
    $email = (isset($_POST['email'])) ? $_POST['email'] : "";
    $password = (isset($_POST['password'])) ? $_POST['password'] : "";
    print_r($_POST);
  }
}


?>
<form method="post">
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="card col-6 mx-3 my-3 ">
        <div class="form-group">
          <h3 class="form-label my-4 text-center"> Login</h3>
          <div class="form-floating mb-3 ">
            <input type="email" name="email" class="form-control">
            <label for="floatingInput">Email address maybe (admin@admin.es)</label>
          </div>
          <div class="form-floating">
            <input type="password" name="password" class="form-control">
            <label for="floatingPassword">Password (12345)</label>
          </div>
        </div>
        <button type="submit" name="enterButton" value="enter" class="btn btn-light btn-block my-3">Let me in.</button>
      </div>
    </div>
  </div>
</form>
<?php
include "./template/footer.php";
?>