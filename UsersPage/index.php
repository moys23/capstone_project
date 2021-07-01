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
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../css/sidebars.css">
    <link rel="stylesheet" href="../font/bootstrap-icons.css">
    <script src="../js/cdn.jquery.min.js"></script>

    <link rel="canonical" href="sidebar.php">

    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      .blue {
          background-color: rgba(10, 25, 75, 1);
      }
      .dirtWhite {
        background-color: rgba(245, 245, 245, 1);
      }
    </style>
  </head>
  <body>

    <?php   include_once 'nav.php';?>

    <main>

        <div class="container-fluid">
            <div class="row">
                <div class="flex-shrink-1  p-2 bg-white col-2">
                    <?php include_once "sidebar_nav.php";?>
                </div>

                <div class="d-flex flex-column align-items-stretch flex-shrink-1 dirtWhite col-10">

                  <div class="container">
                    <div class="row justify-content-center">
                      <h1 class="display-2 bg-info mt-2 text-center">Total Assets</h1>
                      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <div class="card border-2">
                            <div class="card-header">
                                <span class="fs-3 fw-semibold justify-content-center d-flex">CSD Assets</span>
                            </div>
                            <div class="card-body justify-content-center d-flex">
                                <div class="align-middle justify-content-center d-flex w-75  rounded-3 p-3 border border-5 border-danger">
                                  <h1 class="display-1">1</h1>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <div class="card border-2">
                            <div class="card-header">
                                <span class="fs-3 fw-semibold justify-content-center d-flex">EDUC Assets</span>
                            </div>
                            <div class="card-body justify-content-center d-flex">
                                <div class="align-middle justify-content-center d-flex w-75  rounded-3 p-3 border border-5 border-danger">
                                  <h1 class="display-1">1</h1>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="container mt-3">
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
                       </tbody>
                    </table>
                  </div>

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
