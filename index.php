<?php
include "./template/header.php";


include "./admin/db/db.php";

$query = $conecttion->prepare("SELECT * FROM libros");
$query->execute();
$products = $query->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="container">
  <div class="row justify-content-center">
    <?php
    foreach ($products as $product) {
    ?>

      <div class="card col-3 mx-3 my-3 ">
        <h3 class="card-header col"><strong><?php echo $product["title"] ?></strong></h3>
        <div class="card-body">
          <h5 class="card-subtitle text-muted">Type: <strong> <?php echo $product["type"] ?></strong></h5>
        </div>
        <div class="card-body">
          <h6 class="card-subtitle text-muted"><strong> Description:</strong></h6>
          <p class="card-text"><?php echo $product["description"] ?></p>
          <p class="card-text">store: <strong><?php echo $product["store"] ?></strong></p>
        </div>
        <h5 class="card-subtitle text-muted mx-4 my-2"><strong> Properties:</strong></h5>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
              <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
            </svg>
            dispponibility: <?php echo $product["dispponibility"] ?>
          </li>
          <li class="list-group-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
              <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
            </svg>
            booked: <?php echo $product["booked"] ?>
          </li>
          <li class="list-group-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
              <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
            </svg>
            signed: <?php echo $product["signed"] ?>
          </li>
        </ul>
      </div>
    <?php
    }
    ?>
  </div>
</div>
<?php
include "./template/footer.php";
?>