<?php

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "capstone";

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

if (!$conn) {
  die("Connection Error" . mysqli_connect_error());
}

 ?>
