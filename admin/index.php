<?php
include "./template/header.php";

if ($_POST) {
  header('location:admin.php');
}
?>
<form action="admin.php" method="post">
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="card col-6 mx-3 my-3 ">
        <div class="form-group">
          <h3 class="form-label my-4 text-center"> Login</h3>
          <div class="form-floating mb-3 ">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
        </div>
        <button type="submit" class="btn btn-light btn-block my-3">Let me in.</button>
      </div>
    </div>
  </div>
</form>
<?php
include "./template/footer.php";
?>