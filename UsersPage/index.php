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




      <?php include_once '../navPanels/sidebar_search.php'; ?>

      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="container py-1" style="padding-left: 55px;">
            <h4 class="bg-info p-2 mt-2 text-center border border-dark">
              <strong><big>BUPCSO Assets Inventory</big></strong>
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
                        <?php echo totalCount($conn, $_SESSION['user_uid']) ?>
                      </strong>
                    </big>
                  </h7>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid mt-2 mb-2" style="padding-left: 55px; ">
    <!-- <a href="../DataTables/printpage.php" class="btn btn-success border border-dark size1 mb-1">Generate Report</a> -->
    <div class="border border-dark table-sticky3">
      <table class="table text-center">
      <thead class="text-light size1 bg-primary">
          <tr>
            <th class=" border-bottom border-dark">PROPERTY NUMBER</th>
            <th class=" border-bottom border-dark">ARTICLE</th>
            <th class=" border-bottom border-dark">DESCRIPTION</th>
            <th class=" border-bottom border-dark">DATE ACQUIRED</th>
            <!-- <th class=" border-bottom border-dark">PROPERTY NUMBER</th> -->
            <th class=" border-bottom border-dark">UNIT OF MEASURES</th>
            <th class=" border-bottom border-dark">UNIT VALUE</th>
            <th class=" border-bottom border-dark">TOTAL AMOUNT</th>
            <th class=" border-bottom border-dark">QUANTITY PER</th>
            <th class=" border-bottom border-dark">QUANTITY PER PHYSICAL</th>
            <!-- <th class=" border-bottom border-dark">
              SHORTAGE/OVERAGE
              <table>
                <tr class="">
                  <span>Quantity</span>
                 <span>Value</span>
                </tr>
              </table>
            </th> -->
            <th class="border-bottom border-dark">ASSET CATEGORY</th>
            <th class=" border-bottom border-dark">ROOM TYPE</th>
            <th class=" border-bottom border-dark">LOCATION</th>
            <th class=" border-bottom border-dark">PERSONNEL IN CHARGE</th>
            <th class=" border-bottom border-dark">DEPARTMENT</th>
            <th class=" border-bottom border-dark">REMARKS</th>
          </tr>
        </thead>
        <tbody class="size1">
          <?php echo dataTable($conn, $_SESSION['user_uid']) ?>
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
