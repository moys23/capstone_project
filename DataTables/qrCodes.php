<?php
  session_start();
  include_once '../includes/conn.php';
  include_once '../includes/URLhandler.php';
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
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <script src="../js/cdn.jquery.min.js"></script>
    <script src="../js/custom.js"></script>

    <style>
      .blue {
          background-color: rgba(10, 25, 75, 1);
      }
      .dirtWhite {
        background-color: rgba(245, 245, 245, 1);
      }
      .tranDark {
        background-color: rgba(50, 50, 50, 0.5);
      }
      .vh50 {
        height: 140px;
      }
      }
      .vh25{
        height: 60px;
      }
    </style>
  </head>
  <body>

    <?php   include_once '../navPanels/nav.php';?>




      <!-- <input type="checkbox" id="check">
      <label for="check">
        <i class="bi bi-house-fill" id="btn"></i>
        <i class="bi bi-x" id="cancel"></i>
      </label>
      <div class="sidebar">
        <header>Home</header>
      </div> -->
<!--
      <br>
      <br>
      <br> -->

      <?php include_once '../navPanels/sidebar_users.php'; ?>
      <?php include_once '../navPanels/sidebar_qr.php'; ?>
      <?php include_once '../navPanels/sidebar_search.php'; ?>




      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="container py-1" style="padding-left: 55px;">
            <h4 class="bg-info p-2 mt-2 text-center ">BUPC Assets Inventory</h4>
            <?php
             if(isset($_POST['btnsubmit']))
             {
             $data = trim($_POST['txtqr']);
             $data1 = trim($_POST['itemQTY']);
             $data2 = "http://google.com";

             echo "<img src='https://chart.googleapis.com/chart?cht=qr&chs=150x150&chl=$data$data1$data2' height=250 width=250/>";
            
             }
            ?>
          </div>
        </div>
      </div>





  </body>

  <?php mysqli_close($conn);?>
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>
  <!-- <script src="../css/sidebars.js"></script> -->
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</html>
