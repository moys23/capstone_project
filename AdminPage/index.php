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

  <script type="text/javascript" src="../js/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {
      packages: ["corechart"]
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Category', 'Total Percentage'],
        <?php
        $sql = "SELECT  ac.ac_name, count(*) cnt
                FROM `assets` i
                    JOIN asset_cat ac
                      ON i.ac_id = ac.ac_id
                        group by i.ac_id;";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_array($result)) {

          echo "['" . $row['ac_name'] . "', " . $row['cnt'] . "],";
        }
        ?>
      ]);

      var options = {
        title: 'My Daily Activities',
        pieHole: 0.3,
      };

      var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
      chart.draw(data, options);
    }
  </script>

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

    .vh25 {
      height: 60px;
    }

    /* width */
    ::-webkit-scrollbar {
      width: 10px;
      height: 10px;
    }

    /* Track */
    /* ::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px grey;
      } */

    /* Handle */
    ::-webkit-scrollbar-thumb {
      background: rgba(110, 110, 110, 0.3);
      border-radius: 10px;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
      background: rgba(50, 50, 50, 0.5);
    }
  </style>
</head>

<body>

  <?php include_once '../navPanels/nav.php'; ?>


  
  <?php include_once '../navPanels/sidebar_users.php'; ?>
  <?php include_once '../navPanels/sidebar_qr.php'; ?>
  <?php include_once '../navPanels/sidebar_search.php'; ?>
  <?php include_once '../navPanels/sidebar_update.php'; ?>

  <!-- <div id="donutchart" style="width: 900px; height: 500px;"></div> -->
  <!-- <div class="container-fluid a" id="top_x_div"></div> -->

  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="container py-1" style="padding-left: 55px;">
        <h4 class="bg-info p-2 mt-2 text-center border border-dark">
          <strong><big>BUPCSO Assets Inventory</big></strong>
        </h4>
        <h6 class="text-center">
          <strong>Total Registered Assets
            </strong>
          </h6>
          <div class="col-sm-4  text-center" style="margin: auto;">
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
        <div class="col-sm-4" id="donutchart" style="margin: auto;"></div>
      </div>
    </div>
  </div>
  
  <!-- <div class="container search-sticky2" style="padding-left: 55px;">
    <div class="row justify-content-center">
      <div class="col-4 text-center">
        Armed-chair
        <div class="card  border border-dark text-dark">
          <div class="card-body">
            <h7>
              
              <strong>
                <?php echo totalArmChair($conn, $_SESSION['user_uid']) ?>
              </strong>
              
            </h7>
          </div>
        </div>
      </div>
      <div class="col-4 text-center">
        Table
        <div class="card  border border-dark text-dark">
          <div class="card-body">
            <h7>
              
              <strong>
                <?php echo totalTable($conn, $_SESSION['user_uid']) ?>
              </strong>
              
            </h7>
          </div>
        </div>
      </div>
      <div class="col-4 text-center">
        Electric Fan
        <div class="card  border border-dark text-dark">
          <div class="card-body">
            <h7>
              
              <strong>
                <?php echo totalEfan($conn, $_SESSION['user_uid']) ?>
              </strong>
              
            </h7>
          </div>
        </div>
      </div>
      <div class="col-4 text-center">
        Curtain
        <div class="card  border border-dark text-dark">
          <div class="card-body">
            <h7>
              
              <strong>
                <?php echo totalCurtain($conn, $_SESSION['user_uid']) ?>
              </strong>
              
            </h7>
          </div>
        </div>
      </div>
      <div class="col-4 text-center">
        Monoblock Chair
        <div class="card  border border-dark text-dark">
          <div class="card-body">
            <h7>
              
              <strong>
                <?php echo totalMonoB($conn, $_SESSION['user_uid']) ?>
              </strong>

            </h7>
          </div>
        </div>
      </div>
      <div class="col-4 text-center">
        Graphinh Board
        <div class="card  border border-dark text-dark">
          <div class="card-body">
            <h7>
              
              <strong>
                <?php echo totalGphBoard($conn, $_SESSION['user_uid']) ?>
              </strong>
              
            </h7>
          </div>
        </div>
      </div>
      <div class="col-4 text-center">
        Monitor
        <div class="card  border border-dark text-dark">
          <div class="card-body">
            <h7>
              
              <strong>
                <?php echo totalMonitor($conn, $_SESSION['user_uid']) ?>
              </strong>
              
            </h7>
          </div>
        </div>
      </div>
      <div class="col-4 text-center">
        Printer
        <div class="card  border border-dark text-dark">
          <div class="card-body">
            <h7>
              
              <strong>
                <?php echo totalPrinter($conn, $_SESSION['user_uid']) ?>
              </strong>
              
            </h7>
          </div>
        </div>
      </div>
      <div class="col-4 text-center">
        AVR
        <div class="card  border border-dark text-dark">
          <div class="card-body">
            <h7>
              
              <strong>
                <?php echo totalAVR($conn, $_SESSION['user_uid']) ?>
              </strong>
              
            </h7>
          </div>
        </div>
      </div>
      <div class="col-4 text-center">
        System Unit
        <div class="card  border border-dark text-dark">
          <div class="card-body">
            <h7>
              
              <strong>
                <?php echo totalSysU($conn, $_SESSION['user_uid']) ?>
              </strong>
              
            </h7>
          </div>
        </div>
      </div>
      <div class="col-4 text-center">
        Keyboard
        <div class="card  border border-dark text-dark">
          <div class="card-body">
            <h7>
              
              <strong>
                <?php echo totalKeyboard($conn, $_SESSION['user_uid']) ?>
              </strong>
              
            </h7>
          </div>
        </div>
      </div>
      <div class="col-4 text-center">
        Mouse
        <div class="card  border border-dark text-dark">
          <div class="card-body">
            <h7>
              
              <strong>
                <?php echo totalMouse($conn, $_SESSION['user_uid']) ?>
              </strong>
              
            </h7>
          </div>
        </div>
      </div>
      <div class="col-4 text-center">
        Switch
        <div class="card  border border-dark text-dark">
          <div class="card-body">
            <h7>
              
              <strong>
                <?php echo totalSwitch($conn, $_SESSION['user_uid']) ?>
              </strong>
              
            </h7>
          </div>
        </div>
      </div>
      <div class="col-4 text-center">
        Projector
        <div class="card  border border-dark text-dark">
          <div class="card-body">
            <h7>
              
              <strong>
                <?php echo totalProjector($conn, $_SESSION['user_uid']) ?>
              </strong>
              
            </h7>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  
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


<?php mysqli_close($conn); ?>



<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

</html>