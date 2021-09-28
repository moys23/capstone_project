<?php
  session_start();
  include_once '../includes/conn.php';
  include_once '../includes/URLhandler.php';
  include_once '../includes/function.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../images/fav.jpg" type="image/x-icon" sizes="16x16">
    <title>BUPC Supply Office Inventory System</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../font/bootstrap-icons.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <script src="../js/cdn.jquery.min.js"></script>

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
      .vh25{
        height: 60px;
      }

    </style>
  </head>
  <body>

    <?php   include_once '../navPanels/nav.php';?>



    <?php

    if ($_SESSION['user_usertype'] == 'A') {
      include_once '../navPanels/sidebar_search.php';
      include_once '../navPanels/sidebar_users.php';
      include_once '../navPanels/sidebar_qr.php';
      include_once '../navPanels/sidebar_update.php';
    }
    elseif ($_SESSION['user_usertype'] == 'B') {
      include_once '../navPanels/sidebar_search.php';
    }

     ?>


      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="container py-1" style="padding-left: 55px;">
            <h4 class="bg-info p-2 mt-2 text-center border border-dark">
              <strong><big>Table Section</big></strong>
            </h4>
            <div class="col-8 text-center" style="margin: auto;">
              <h6>
                <strong>Total Registered Assets</strong>
              </h6>
              <div class="card border border-dark text-dark">
                <div class="card-body">
                  <h7>
                    <big>
                      <strong>
                        <?php echo totalTable($conn, $_SESSION['user_uid'])?>
                      </strong>
                    </big>
                  </h7>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid mt-2" style="padding-left: 55px; ">
        <div class="border border-dark table-sticky">
          <table class="table text-center">
            <thead class="text-light size1 bg-primary">
              <tr>
                <th class=" border-bottom border-dark">Asset Code</th>
                <th class=" border-bottom border-dark">Name</th>
                <th class=" border-bottom border-dark">Room Type</th>
                <th class=" border-bottom border-dark">Location</th>
                <th class=" border-bottom border-dark">Personnel Incharge</th>
                <th class=" border-bottom border-dark">Released Date</th>
                <th class=" border-bottom border-dark">Department</th>
              </tr>
            </thead>
            <tbody class="size1">
                <?php echo Cat2Table($conn, $_SESSION['user_uid']) ?>
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
