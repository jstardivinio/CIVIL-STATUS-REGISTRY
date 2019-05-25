<?php
$dbServer = "localhost";
$dbUsername = "root";
$dbPassword ="";
$dbName = "WORKER";

$conn = mysqli_connect($dbServer, $dbUsername, $dbPassword) or die("Could not connect to database: ". mysqli_error());
?>
