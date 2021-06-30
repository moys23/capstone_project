<?php
  session_start();
  include_once '../includes/conn.php';
  include_once '../includes/URLhandler.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <link rel="icon" href="#" type="../image/x-icon">
    <title>BUPC Supply Office Inventory System</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../css/sidebars.css">
    <link rel="stylesheet" href="../font/bootstrap-icons.css">
    <script src="../js/cdn.jquery.min.js"></script>
    
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">

    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      .blue {
          background-color: rgba(10, 25, 75, 1);
      }
    </style>
  </head>
  <body>

    <?php   include_once 'nav.php';?>

    <main>

        <div class="container-fluid">
            <div class="row h-100">
                <div class="flex-shrink-0 p-2 bg-white col-2">
                    <a href="#" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
                        <svg class="bi me-2" width="30" height="28">
                            <use xlink:href="#bootstrap"/>
                        </svg>
                        <span class="fs-5 fw-semibold">Categories</span>
                    </a>
                    <?php include_once "sidebar_nav.php";?>
                </div>
                <div class="d-flex flex-column align-items-stretch flex-shrink-0 bg-light col-10">
                  asdfasdfasdfasdf
                </div>
            </div>
        </div>

    </main>




  </body>

  <?php mysqli_close($conn);?>
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>
  <script src="../css/sidebars.js"></script>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</html>
