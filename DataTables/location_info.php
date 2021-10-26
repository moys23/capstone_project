<?php
session_start();
include_once '../includes/conn.php';
include_once '../includes/URLhandler.php';
include_once '../includes/function.php';

$id = $_GET['ID'];


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


  <?php

  if ($_SESSION['user_usertype'] == 'A') {
    include_once '../navPanels/sidebar_search.php';
    include_once '../navPanels/sidebar_users.php';
    include_once '../navPanels/sidebar_qr.php';
    include_once '../navPanels/sidebar_update.php';
  } elseif ($_SESSION['user_usertype'] == 'B') {
    include_once '../navPanels/sidebar_search.php';
  }

  ?>

  <!-- <div id="donutchart" style="width: 900px; height: 500px;"></div> -->
  <!-- <div class="container-fluid a" id="top_x_div"></div> -->

  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="container py-1" style="padding-left: 55px;">
        <h4 class="bg-info p-2 mt-2 text-center border border-dark">
          <strong>
            <?php



            $sql = "SELECT * FROM `location` WHERE loc_id = '$id';";
            $result = mysqli_query($conn, $sql);
            $resultFetch = mysqli_num_rows($result);

            while ($row = mysqli_fetch_assoc($result)) {
              echo $row['loc_name'];
            }



            ?>
          </strong>
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
                    <?php
                    echo locCount($conn, $_SESSION['user_uid'])


                    // $a = "SELECT count(dept_id) cnt FROM `assets` WHERE `dept_id` = '$id' ;";
                    // $b = mysqli_query($conn, $a);
                    // $c = mysqli_fetch_row($b);

                    // if($c){
                    //     return $c[0];
                    // }
                    // else{
                    //     return 0;
                    // }
                    ?>
                  </strong>
                </big>
              </h7>
            </div>
          </div>
        </div>
        <!-- <div class="col-sm-4" id="donutchart" style="margin: auto;"></div> -->
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
            <th class=" border-bottom border-dark">SHORTAGE QTY</th>
            <th class=" border-bottom border-dark">SHORTAGE VALUE</th>
            <th class=" border-bottom border-dark">OVERAGE QTY</th>
            <th class=" border-bottom border-dark">OVERAGE VALUE</th>
            <th class="border-bottom border-dark">ASSET CATEGORY</th>
            <th class=" border-bottom border-dark">ROOM TYPE</th>
            <th class=" border-bottom border-dark">LOCATION</th>
            <th class=" border-bottom border-dark">PERSONNEL IN CHARGE</th>
            <th class=" border-bottom border-dark">DEPARTMENT</th>
            <th class=" border-bottom border-dark">REMARKS</th>
          </tr>
        </thead>
        <tbody class="size1">
          <?php

          $sqldata = "SELECT *
                  FROM `assets` ac
                      JOIN `asset_cat` i
                      ON ac.ac_id = i.ac_id
                      JOIN `category` ct
                      ON ac.cat_id = ct.cat_id
                      JOIN `department` dt
                      ON ac.dept_id = dt.dept_id
                      JOIN `location` lc
                      ON ac.loc_id = lc.loc_id
                      WHERE lc.loc_id = '$id'
                        AND remarks = 'Issued'
                        ORDER BY a_id DESC;";
          $resulta = mysqli_query($conn, $sqldata);
          $resultCheck = mysqli_num_rows($resulta);

          while ($item = mysqli_fetch_assoc($resulta)) {


          ?>
            <tr>
              <td><?php echo $item['access_id']; ?></td>
              <td><?php echo $item['article']; ?></td>
              <td><?php echo $item['a_name']; ?></td>
              <td><?php echo $item['a_effectivty_date']; ?></td>
              <td><?php echo $item['u_measure']; ?></td>
              <td><?php echo $item['u_value']; ?></td>
              <td><?php echo $item['total_amount']; ?></td>
              <td><?php echo $item['qty_per']; ?></td>
              <td><?php echo $item['qty_per_phy']; ?></td>
              <td><?php echo $item['short_qty']; ?></td>
              <td><?php echo $item['short_value']; ?></td>
              <td><?php echo $item['over_qty']; ?></td>
              <td><?php echo $item['over_value']; ?></td>
              <td><?php echo $item['ac_name']; ?></td>
              <td><?php echo $item['cat_name']; ?></td>
              <td><?php echo $item['loc_name']; ?></td>
              <td><?php echo $item['a_person_incharge']; ?></td>
              <td><?php echo $item['dept_name']; ?></td>
              <td><?php echo $item['remarks']; ?></td>
            </tr>

          <?php

          }
          ?>
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