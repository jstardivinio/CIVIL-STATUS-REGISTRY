<?php

session_start();

if (isset($_POST['login'])) {
  include_once 'conndb.php';

  // converting the form-data to string for security measures
  $id = mysqli_real_escape_string($conn, $_POST['id']);
  $pwd = mysqli_real_escape_string($conn, $_POST['password']);

  //error handlers
  //check if inputs are empty
  if (empty($id) || empty($pwd)){

  }
  else {
    mysqli_select_db($conn,"WORKER");
    $sql = "SELECT * FROM worker WHERE ID = '$id'";
    $result = mysqli_query($conn, $sql) or die("Could not get data ". mysqli_error($conn));
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck < 1) {
      header("Location: /civil_status_registry/html/login.php?Invalid_Id_OR_password");
      exit();
    }
    else{
      if ($row = mysqli_fetch_assoc($result)){
        //De-hashing the Password
        $hashedPwdCheck = password_verify($pwd, $row['Password']);
        if ($hashedPwdCheck == false){
          header("Location: /civil_status_registry/html/login.php?Invalid_Password");
          exit();
        } elseif ($hashedPwdCheck == true){
          //setting Session variables
          $_SESSION['u_id'] = $row['ID'];
          $_SESSION['u_fname'] = $row['Fname'];
          $_SESSION['u_lname'] = $row['Lname'];
          $_SESSION['u_wstatus'] = $row['Wstatus'];

          mysqli_close($conn);

          //Logging in the user
          header("Location: /civil_status_registry/html/home.php?Login=success");
          exit();
        }
      }
    }
  }
}
else {
  header("Location: /civil_status_registry/html/login.php?Login=error");
  exit();
}
?>
