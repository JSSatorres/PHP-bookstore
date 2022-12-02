<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employ Management</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body></body>

<?php $url = "http://" . $_SERVER['HTTP_HOST'] . "/Login/admin/add-product.php"; ?>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor03">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="./index.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./products.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $url ?>">Add Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./company.php">Close</a>
        </li>
      </ul>
    </div>
  </div>
</nav>