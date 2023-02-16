<?php
include "./template/header.php";

$id = (isset($_POST['id'])) ? $_POST['id'] : "";
$action = (isset($_POST['action'])) ? $_POST['action'] : "";


include "./db/db.php";

$query = $conecttion->prepare("SELECT * FROM libros");
$query->execute();
$products = $query->fetchAll(PDO::FETCH_ASSOC);

if ($action === "delete") {

  $query = $conecttion->prepare("DELETE FROM libros WHERE id=:id");
  $query->bindParam(':id', $id);
  $query->execute();
}

if ($action === "edit") {

  $query = $conecttion->prepare("SELECT * FROM libros WHERE id=:id");
  $query->bindParam(':id', $id);
  $query->execute();
}
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
        <!-- <svg xmlns="http://www.w3.org/2000/svg" class="d-block user-select-none" width="100%" height="200" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
          <rect width="100%" height="100%" fill="#868e96"></rect>
          <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
        </svg> -->
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
        <div class="card-body container">
          <form method="post" class="row">
            <div class="col my-2">
              <input type="hidden" name="id" value="<?php echo $product["id"] ?>" />
              <button type="subtmit" class="btn btn-danger btn-sm" value="delete" name="action">
                Delete
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                  <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                </svg>
              </button>
              <input type="hidden" name="id" value="<?php echo $product["id"] ?>" />
            </div>
          </form>
          <!-- <a href="#" class="card-link">
 
            Edit
          </a> -->
        </div>
      </div>
    <?php
    }
    ?>
  </div>
</div>
<?php
include "./template/footer.php";
?>