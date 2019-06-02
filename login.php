<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Civil Status Registry</title>
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet" />
    <link href="../bootstrap/css/bootstrap-grid.css" rel="stylesheet" />
    <link href="../bootstrap/css/bootstrap-reboot.css" rel="stylesheet" />
    <script type="text/javascript" src="../bootstrap/js/jquery.js" ></script>
    <script type="text/javascript" src="../bootstrap/js/bootstrap.js" ></script>
  </head>
  <body>
    <header class="sticky-top" style="height:100px; background-color: #007bff">
      <div class="d-inline-block text-white" style="width:100%; height: 75%">
        <h1 class="text-center ">Civil Status Registery</h1>
      </div>
    </header>

    <section>
        <div class="mx-auto  border rounded shadow p-4 mt-4" style="width: 300px">
            <h1>Login</h1>
        <form  action="login.inc.php" method="post">
          <div class="  form-group row">
      <label>ID</label>
      <input type="text" class="form-control " name="id" placeholder="Enter id" required>
    </div>

    <div class=" form-group row ">
      <label>Password</label>
      <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" required>
    </div>
    <button type="submit" class="btn btn-outline-primary" name="login">Login</button>
        </form>
  </section>

  <footer class="fixed-bottom" style="height:10%; background-color: #007bff">
    <div >
    </div>
  </footer>
  </body>
</html>
