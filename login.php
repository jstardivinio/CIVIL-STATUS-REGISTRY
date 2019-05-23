<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Civil Status Registry</title>
    <link href="../style/style.css" type="text/css" rel="stylesheet" />
  </head>
  <body>
      <h1 class="title">Civil Status Registery</h1>
    <div class ="main">
      <p>
        <h1>Login</h1>
      </p>
      <div class="form">
        <form class=s"login" action="login.inc.php" method="post">
          <table>
          <tr>
            <td>ID</td>
            <td><input type="text" name="id" value="" required></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input type="password" name="password" value="" required></td>
          </tr>
          <tr>
            <td></td>
            <td class="submit"><input type="submit" name="login" value="login"></td>
          </tr>
          </table>
        </form>
      </div>
    </div>
  </body>
</html>
