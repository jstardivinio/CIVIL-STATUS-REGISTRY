<!DOCTYPE html>
<?php
session_start();
//importing external files.
 include_once 'conndb.php';
 include_once 'header.php';
?>

<div class="jumbotron pb-0 pt-3 mx-5 l-20 ">
  <h2 class"text-center">Marriage Certificates</h2>

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

