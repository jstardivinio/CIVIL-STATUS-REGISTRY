<!DOCTYPE html>
<?php
session_start();
//importing external files.
 include_once 'conndb.php';
 include_once 'header.php';
?>

<div class="jumbotron pb-0 pt-3 mx-5 l-20 ">
  <h2 class"text-center">Birth Certificates</h2>

<ul class="nav nav-tabs  mb-0 mx-auto" style="width: 50%;">
  <li class="nav-item">
    <a class="nav-link active" href="birth.php">Certificates</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="birth_new.php">New certificate</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Update certificate</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul>
</div>

<div class="container">
  <?php
  //selecting the certificate's information from the database.
  $sql = "SELECT * FROM BIRTH_CERTIFICATE";

  $result = mysqli_query($conn, $sql) or die('could not access database'. mysqli_error($conn));
   ?>

<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="row">List of Certificates</th>
    </tr>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Certificate number</th>
      <th scope="col">Name</th>
      <th scope="col">Sex</th>
      <th scope="col">DOB</th>
    </tr>
  </thead>
  <?php
  //setting variable to count the number of certificates.
    $count = 1;
  while($row = mysqli_fetch_assoc($result)){
      //Putting certificate information in the table.
  ?>
    <tr>
      <th scope="row"><?php echo $count; ?></th>
      <td><?php echo "{$row['BCNumber']}"; ?></td>
      <td><?php echo "{$row['CName']}"; ?></td>
      <td><?php echo "{$row['CSex']}"; ?></td>
      <td><?php echo "{$row['CDOB']}"; ?></td>
      <td>
          <!--A form to store the certificate id as a form variable to be submited-->
        <form method ="post" action="view_certificate.php">
          <input type="hidden" name="bcid" value="<?php echo "{$row['BCNumber']}"; ?>">
          <button class="button btn-primary btn-sm" type="submit"?>view</button>
        </form>
      </td>
    </tr>

  <?php
  $count = $count + 1;
  }
  ?>
</table>
</div>
