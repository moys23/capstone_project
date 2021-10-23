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






  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="container py-1">
        <h4 class="bg-info p-2 mt-2 text-center border border-dark">
          <strong><big>BUPCSO Assets Inventory</big></strong>
        </h4>
        <div class="col-8 text-center" style="margin: auto;">
          <h6>
            <strong>Total Diposed Assets</strong>
          </h6>
          <div class="col-sm-4  text-center" style="margin: auto;">
            <div class="card border border-dark text-dark">
            <div class="card-body">
              <h7>
                <big>
                  <strong>
                    <?php echo dcCount($conn, $_SESSION['user_uid']) ?>
                  </strong>
                </big>
              </h7>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="container mx-auto px-auto">
      <div class="row justify-content-center">
        <button onclick="window.print()" class="col-3 btn btn-primary border border-dark">Print</button>
        <form class="col-5" method="POST">
          <div class="row justify-content-center">
            <div class="col-11" style="padding-right: 2px; padding-left: 12px;">
              <select name="printOption" class="form-select border  border-dark " required>
                <option>-- Category --</option>
                <?php
                // $room = "SELECT * FROM `location` ;";
                // $ask = mysqli_query($conn, $room);
                // $show = mysqli_num_rows($ask);

                // while ($row = mysqli_fetch_assoc($ask)) {
                // ?>
                //   <option value="<?php //echo $row['loc_name'] ?>"><?php //echo $row['loc_name'] ?></option>
                // <?php
                // }
                // ?>
                // <?php
                // include_once '../includes/conn.php';

                // $data = "SELECT * FROM category ;";
                // $resultdata = mysqli_query($conn, $data);
                // $dataFetch = mysqli_num_rows($resultdata);

                // while ($room = mysqli_fetch_assoc($resultdata)) { ?>

                //   <option value="<?php //echo $room['cat_name'] ?>"><?php //echo $room['cat_name'] ?></option>

                // <?php
                // }

                // ?>
                // <?php
                // $dept = "SELECT * FROM `department` ;";
                // $asked = mysqli_query($conn, $dept);
                // $show = mysqli_num_rows($asked);

                // while ($data = mysqli_fetch_assoc($asked)) {
                // ?>
                //   <option value="<?php //echo $data['dept_name'] ?>"><?php //echo $data['dept_name'] ?></option>
                // <?php
                // }
                ?>
              </select>
            </div>
            <div class="col-1" style="padding-left: 0;">
              <button class="btn btn-warning border border-dark" name="find">
                <i class="bi bi-search"></i>
              </button>
            </div>
          </div>
        </form>

      </div>
    </div> -->
  </div>



  <div class="container-fluid mt-2 mb-2">
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
                  <td>Quantity</td>
                  <td>Value</td>
                </tr>
              </table>
                 <span>Quantity</span> -->
            <!-- <span>Value</span> -->
            <!-- </th> -->
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
          // if (isset($_POST['find'])) {

          //   $print = $_POST['printOption'];

          //   $sql = "SELECT  *
          //             FROM `assets` ac
          //               JOIN `asset_cat` i
          //               ON ac.ac_id = i.ac_id
          //               JOIN `category` ct
          //               ON ac.cat_id = ct.cat_id
          //               JOIN `department` dt
          //               ON ac.dept_id = dt.dept_id
          //               JOIN `location` lc
          //               ON ac.loc_id = lc.loc_id
          //                 WHERE remarks = 'Disposed'  
          //                   AND ac.a_name LIKE '$print'
          //                   OR i.ac_name LIKE '$print'
          //                   OR ct.cat_name LIKE '$print'
          //                   OR dt.dept_name LIKE '$print'
          //                   OR lc.loc_name LIKE '$print'
                            
          //                   ORDER BY a_id DESC ;";
          //   $result = mysqli_query($conn, $sql);

          //   while ($row = mysqli_fetch_assoc($result)) {
           ?>
               <!-- <tr>
                 <td><?php //echo $row['access_id']; ?></td>
                 <td><?php //echo $row['article']; ?></td>
                 <td><?php //echo $row['a_name']; ?></td>
                 <td><?php //echo $row['a_effectivty_date']; ?></td>
                 <td><?php //echo $row['u_measure']; ?></td>
                 <td><?php //echo $row['u_value']; ?></td>
                 <td><?php //echo $row['total_amount']; ?></td>
                 <td><?php //echo $row['qty_per']; ?></td>
                 <td><?php //echo $row['qty_per_phy']; ?></td>
                 <td><?php //echo $row['ac_name']; ?></td>
                 <td><?php //echo $row['cat_name']; ?></td>
                 <td><?php //echo $row['loc_name']; ?></td>
                 <td><?php //echo $row['a_person_incharge']; ?></td>
                 <td><?php //echo $row['dept_name']; ?></td>
                 <td><?php //echo $row['remarks']; ?></td>
               </tr> -->
             <?php
          //   }
          // } else {

            $sql = "SELECT  *
            FROM `assets` ac
              JOIN `asset_cat` i
              ON ac.ac_id = i.ac_id
              JOIN `category` ct
              ON ac.cat_id = ct.cat_id
              JOIN `department` dt
              ON ac.dept_id = dt.dept_id
              JOIN `location` lc
              ON ac.loc_id = lc.loc_id
                WHERE remarks = 'Disposed'
                  ORDER BY a_id DESC ;";
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
            ?>
              <tr>
                <td><?php echo $row['access_id']; ?></td>
                <td><?php echo $row['article']; ?></td>
                <td><?php echo $row['a_name']; ?></td>
                <td><?php echo $row['a_effectivty_date']; ?></td>
                <td><?php echo $row['u_measure']; ?></td>
                <td><?php echo $row['u_value']; ?></td>
                <td><?php echo $row['total_amount']; ?></td>
                <td><?php echo $row['qty_per']; ?></td>
                <td><?php echo $row['qty_per_phy']; ?></td>
                <td><?php echo $row['ac_name']; ?></td>
                <td><?php echo $row['cat_name']; ?></td>
                <td><?php echo $row['loc_name']; ?></td>
                <td><?php echo $row['a_person_incharge']; ?></td>
                <td><?php echo $row['dept_name']; ?></td>
                <td><?php echo $row['remarks']; ?></td>
              </tr>
          <?php
          //   }
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