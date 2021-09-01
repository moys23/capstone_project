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
    <!-- <link rel="stylesheet" href="../css/dashboard.css"> -->
    <!-- <link rel="stylesheet" href="../css/sidebars.css"> -->
    <link rel="stylesheet" href="../font/bootstrap-icons.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <script src="../js/cdn.jquery.min.js"></script>
    <script src="../js/custom.js"></script>

    <link rel="canonical" href="sidebar.php">

    <!-- <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"> -->
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
            <h4 class="bg-info p-2 mt-2 text-center border border-dark">BUPC Assets Inventory</h4>
              <span class="col-sm-6 badge badge-primary text-dark border border-dark" style="margin-left: 15px;">
                <h6>
                  CESD Assets
                </h6>
                <h1>
                  1
                </h1>
              </span>
              <span class="col-sm-6 mx-2 badge badge-primary text-dark border border-dark">
                <h6>
                  EDUC Assets
                </h6>
                <h1>
                  1
                </h1>
              </span>
          </div>
        </div>
      </div>

      <div class="container-fluid mt-3"  style="padding-left: 55px; ">
        <div class="container border border-dark table-sticky">
          <table class="table border border-1">
            <thead class="thead-dark">
              <tr>
                <th>#</th>
                <th>thead-dark</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Nina</td>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>Nina</td>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>Nina</td>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>Nina</td>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>Nina</td>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>Nina</td>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>Nina</td>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>Nina</td>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>Nina</td>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>Nina</td>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>Nina</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>


  </body>

  <?php mysqli_close($conn);?>
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</html>
