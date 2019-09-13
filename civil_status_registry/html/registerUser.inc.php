    -<?php
session_start();

if(isset($_POST['register'])){
  include_once 'conndb.php';

  //converting the form-data to string to avoid sql injections
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $sex = mysqli_real_escape_string($conn, $_POST['sex']);
    $bdyear = mysqli_real_escape_string($conn, $_POST['year']);
    $bdmonth = mysqli_real_escape_string($conn, $_POST['month']);
    $bdday = mysqli_real_escape_string($conn, $_POST['day']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    //putting the birth date in the appropriate format
    $bdate = ($bdyear . "/" . $bdmonth . "/" . $bdday);

    //hashing the password
    $hashedpwd = password_hash($password, PASSWORD_DEFAULT);

    //Insert the user into the Database
    $sql = "INSERT INTO PERSONEL (ID, FName, LName, Sex, DOB, WStatus, Password)
    VALUES ('$id','$fname','$lname','$sex','$bdate','$status','$hashedpwd')";


    $insert = mysqli_query($conn, $sql);
    if(! $insert){
      die("Could not insert the values: ". mysqli_error($conn));
    }

  }
 ?>
