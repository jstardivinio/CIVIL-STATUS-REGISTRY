<!DOCTYPE html>
<?php
session_start();
 ?>

<html>

<?php
      include_once 'header.php';
?>

<div class="container-fluid d-inline-block">
<div class="row">
  <?php
    include_once 'section.php';
  ?>


  <div class="col d-flex align-items-center justify-content-center ">

    <a class="btn btn-info mr-4 w-50  h-50 d-flex align-items-center  justify-content-center shadow" href="birth.php" >
    <h1>Birth</h1>
  </a>

    <a class="btn btn-info  ml-4 w-50 h-50 d-flex align-items-center  justify-content-center shadow" href="Mariage.php">
    <h1>Mariage</h1>
  </a>


  </div>


</div>

<?php include_once 'footer.php'; ?>
  </body>
</html>
