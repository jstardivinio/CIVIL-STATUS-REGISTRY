<!DOCTYPE html>
<?php
session_start();
include_once 'conndb.php';
include_once 'header.php';

if(isset($_POST['bcid'])){
?>

<div class="container">
  <p><u>Hello world</u></p>
  <p><u>Hello world</u></p>
  <hr style="color:black"/>
  <h1 class="alert-success">certificate will be generated here </h1>

</div>

<?php
}

else{?>
  <div class="alert alert-danger">
    No certificate selected
</div>
<?php
}
?>
