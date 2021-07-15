<?php
  session_start();
  include_once '../includes/conn.php';

  if(isset($_SESSION['user_usertype']) && isset($_SESSION['user_uid'])){
      if($_SESSION['user_usertype'] == "N"){
          header("location: ../index.php?error=accessdenied");
          exit();
      }
  }
  else{
      header("location: ../index.php?error=accessdenied");
      exit();
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="#" type="../image/x-icon">
    <title>BUPC Supply Office Inventory System</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../font/bootstrap-icons.css">
    <script src="../js/cdn.jquery.min.js"></script>
  </head>
  <body>

    <div class="contentWrap">
      <?php include_once 'nav.php'; ?>


      <input type="checkbox" id="check">
      <label for="check">
        <i class="bi bi-justify" id="btn"></i>
        <i class="bi bi-x" id="cancel"></i>
      </label>
      <div class="sidebar">
        <header>
          Menu
        </header>
        <ul>
          <li> <a href="#">Overview</li>
          <li> <a href="#">Overview</li>
          <li> <a href="#">Overview</li>


        </ul>
      </div>

      <div class="container-fluid">

      </div>

    </div>

  </body>
  <?php mysqli_close($conn);?>
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>
</html>
