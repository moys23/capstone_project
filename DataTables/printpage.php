<?php
session_start();
include_once '../includes/conn.php';
include_once '../includes/function.php';
include_once '../includes/URLhandler.php';
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
            <strong>Total Registered Assets</strong>
          </h6>
          <!-- <div class="card border border-dark text-dark">
            <div class="card-body">
              <h7>
                <big>
                  <strong>
                    <?php //echo totalCount($conn, $_SESSION['user_uid']) 
                    ?>
                      </strong>
                    </big>
                  </h7>
                </div>
              </div> -->
        </div>
      </div>
    </div>
    <div class="container mx-auto px-auto">
      <div class="row justify-content-center">
        <button onclick="window.print()" class="col-3 btn btn-primary border border-dark">Print</button>
        <form class="col-5" method="POST">
          <div class="row justify-content-center">
            <div class="col-11" style="padding-right: 2px; padding-left: 12px;">
              <select name="printOption" class="form-select border  border-dark " required>
                <option>Category</option>
                <option value='d1'>CSD Department</option>
                <option value='d2'>EDUC Department</option>
                <option value='1'>Armed-chair</option>
                <option value='2'>Table</option>
                <option value="3">Electric Fan</option>
                <option value="4">Curtain</option>
                <option value="5">Monoblock Chair</option>
                <option value="6">Graph Board</option>
                <option value="7">Monitor</option>
                <option value="8">Printer</option>
                <option value="9">AVR</option>
                <option value="10">System Unit</option>
                <option value="11">Keyboard</option>
                <option value="12">Mouse</option>
                <option value="13">Switch</option>
                <option value="14">Projector</option>
                <option value="15">SB-1</option>
                <option value="16">SB-2</option>
                <option value="17">SB-3</option>
                <option value="18">ECB-15</option>
                <option value="19">ECB-16</option>
                <option value="20">ECB-17</option>
              </select>
            </div>
            <div class="col-1" style="padding-left: 0;">
              <button class="btn btn-warning border border-dark" name="gSeek">
                <i class="bi bi-search"></i>
              </button>
            </div>
          </div>
        </form>

      </div>
    </div>
  </div>

  <div class="container-fluid mt-2">
    <div class="border border-dark table-sticky">
      <table class="table printTable  text-center">
        <thead class="text-light size1 bg-primary">
          <tr>
            <th class="border-bottom border-dark">Asset Code</th>
            <th class="border-bottom border-dark">Name</th>
            <th class="border-bottom border-dark">Asset Category</th>
            <th class="border-bottom border-dark">Room Type</th>
            <th class="border-bottom border-dark">Location</th>
            <th class="border-bottom border-dark">Personnel Incharge</th>
            <th class="border-bottom border-dark">Released Date</th>
            <th class="border-bottom border-dark">Department</th>
          </tr>
        </thead>
        <tbody class="size1">
          <?php


          if (isset($_POST['gSeek'])) {

            $print = $_POST['printOption'];


            if ($print == "d1") {

              $sqldata = "SELECT access_id, a_name, i.ac_name, ct.cat_name, dt.dept_name, lc.loc_name, a_person_incharge, a_effectivty_date
                  FROM `assets` ac
                      JOIN `asset_cat` i
                      ON ac.ac_id = i.ac_id
                      JOIN `category` ct
                      ON ac.cat_id = ct.cat_id
                      JOIN `department` dt
                      ON ac.dept_id = dt.dept_id
                      JOIN `location` lc
                      ON ac.loc_id = lc.loc_id
                      WHERE dt.dept_id = '1';";
              $result = mysqli_query($conn, $sqldata);
              $resultCheck = mysqli_num_rows($result);

              while ($row = mysqli_fetch_assoc($result)) {


          ?>
                <tr>
                  <td><?php echo $row['access_id']; ?></td>
                  <td><?php echo $row['a_name']; ?></td>
                  <td><?php echo $row['ac_name']; ?></td>
                  <td><?php echo $row['cat_name']; ?></td>
                  <td><?php echo $row['loc_name']; ?></td>
                  <td><?php echo $row['a_person_incharge']; ?></td>
                  <td><?php echo $row['a_effectivty_date']; ?></td>
                  <td><?php echo $row['dept_name']; ?></td>
                </tr>

          <?php

              }
            }
            if ($print == "d2") {
              $sqldata = "SELECT access_id, a_name, i.ac_name, ct.cat_name, dt.dept_name, lc.loc_name, a_person_incharge, a_effectivty_date
                  FROM `assets` ac
                      JOIN `asset_cat` i
                      ON ac.ac_id = i.ac_id
                      JOIN `category` ct
                      ON ac.cat_id = ct.cat_id
                      JOIN `department` dt
                      ON ac.dept_id = dt.dept_id
                      JOIN `location` lc
                      ON ac.loc_id = lc.loc_id
                      WHERE dt.dept_id = '2';";
              $result = mysqli_query($conn, $sqldata);
              $resultCheck = mysqli_num_rows($result);

              while ($row = mysqli_fetch_assoc($result)) {


          ?>
                <tr>
                  <td><?php echo $row['access_id']; ?></td>
                  <td><?php echo $row['a_name']; ?></td>
                  <td><?php echo $row['ac_name']; ?></td>
                  <td><?php echo $row['cat_name']; ?></td>
                  <td><?php echo $row['loc_name']; ?></td>
                  <td><?php echo $row['a_person_incharge']; ?></td>
                  <td><?php echo $row['a_effectivty_date']; ?></td>
                  <td><?php echo $row['dept_name']; ?></td>
                </tr>

          <?php

              }
            }
            if ($print == "1") {
              $sqldata = "SELECT access_id, a_name, i.ac_name, ct.cat_name, dt.dept_name, lc.loc_name, a_person_incharge, a_effectivty_date
                  FROM `assets` ac
                      JOIN `asset_cat` i
                      ON ac.ac_id = i.ac_id
                      JOIN `category` ct
                      ON ac.cat_id = ct.cat_id
                      JOIN `department` dt
                      ON ac.dept_id = dt.dept_id
                      JOIN `location` lc
                      ON ac.loc_id = lc.loc_id
                      WHERE i.ac_id = 1;";
              $result = mysqli_query($conn, $sqldata);
              $resultCheck = mysqli_num_rows($result);

              while ($row = mysqli_fetch_assoc($result)) {


          ?>
                <tr>
                  <td><?php echo $row['access_id']; ?></td>
                  <td><?php echo $row['a_name']; ?></td>
                  <td><?php echo $row['ac_name']; ?></td>
                  <td><?php echo $row['cat_name']; ?></td>
                  <td><?php echo $row['loc_name']; ?></td>
                  <td><?php echo $row['a_person_incharge']; ?></td>
                  <td><?php echo $row['a_effectivty_date']; ?></td>
                  <td><?php echo $row['dept_name']; ?></td>
                </tr>

          <?php

              }
            }
            if ($print == "2") {
              $sqldata = "SELECT access_id, a_name, i.ac_name, ct.cat_name, dt.dept_name, lc.loc_name, a_person_incharge, a_effectivty_date
                  FROM `assets` ac
                      JOIN `asset_cat` i
                      ON ac.ac_id = i.ac_id
                      JOIN `category` ct
                      ON ac.cat_id = ct.cat_id
                      JOIN `department` dt
                      ON ac.dept_id = dt.dept_id
                      JOIN `location` lc
                      ON ac.loc_id = lc.loc_id
                      WHERE i.ac_id = 2;";
              $result = mysqli_query($conn, $sqldata);
              $resultCheck = mysqli_num_rows($result);

              while ($row = mysqli_fetch_assoc($result)) {


          ?>
                <tr>
                  <td><?php echo $row['access_id']; ?></td>
                  <td><?php echo $row['a_name']; ?></td>
                  <td><?php echo $row['ac_name']; ?></td>
                  <td><?php echo $row['cat_name']; ?></td>
                  <td><?php echo $row['loc_name']; ?></td>
                  <td><?php echo $row['a_person_incharge']; ?></td>
                  <td><?php echo $row['a_effectivty_date']; ?></td>
                  <td><?php echo $row['dept_name']; ?></td>
                </tr>

          <?php

              }
            }
            if ($print == "3") {
              $sqldata = "SELECT access_id, a_name, i.ac_name, ct.cat_name, dt.dept_name, lc.loc_name, a_person_incharge, a_effectivty_date
                  FROM `assets` ac
                      JOIN `asset_cat` i
                      ON ac.ac_id = i.ac_id
                      JOIN `category` ct
                      ON ac.cat_id = ct.cat_id
                      JOIN `department` dt
                      ON ac.dept_id = dt.dept_id
                      JOIN `location` lc
                      ON ac.loc_id = lc.loc_id
                      WHERE i.ac_id = 3;";
              $result = mysqli_query($conn, $sqldata);
              $resultCheck = mysqli_num_rows($result);

              while ($row = mysqli_fetch_assoc($result)) {


          ?>
                <tr>
                  <td><?php echo $row['access_id']; ?></td>
                  <td><?php echo $row['a_name']; ?></td>
                  <td><?php echo $row['ac_name']; ?></td>
                  <td><?php echo $row['cat_name']; ?></td>
                  <td><?php echo $row['loc_name']; ?></td>
                  <td><?php echo $row['a_person_incharge']; ?></td>
                  <td><?php echo $row['a_effectivty_date']; ?></td>
                  <td><?php echo $row['dept_name']; ?></td>
                </tr>

          <?php

              }
            }
            if ($print == "4") {
              $sqldata = "SELECT access_id, a_name, i.ac_name, ct.cat_name, dt.dept_name, lc.loc_name, a_person_incharge, a_effectivty_date
                  FROM `assets` ac
                      JOIN `asset_cat` i
                      ON ac.ac_id = i.ac_id
                      JOIN `category` ct
                      ON ac.cat_id = ct.cat_id
                      JOIN `department` dt
                      ON ac.dept_id = dt.dept_id
                      JOIN `location` lc
                      ON ac.loc_id = lc.loc_id
                      WHERE i.ac_id = 4;";
              $result = mysqli_query($conn, $sqldata);
              $resultCheck = mysqli_num_rows($result);

              while ($row = mysqli_fetch_assoc($result)) {


          ?>
                <tr>
                  <td><?php echo $row['access_id']; ?></td>
                  <td><?php echo $row['a_name']; ?></td>
                  <td><?php echo $row['ac_name']; ?></td>
                  <td><?php echo $row['cat_name']; ?></td>
                  <td><?php echo $row['loc_name']; ?></td>
                  <td><?php echo $row['a_person_incharge']; ?></td>
                  <td><?php echo $row['a_effectivty_date']; ?></td>
                  <td><?php echo $row['dept_name']; ?></td>
                </tr>

          <?php

              }
            }
            if ($print == "5") {
              $sqldata = "SELECT access_id, a_name, i.ac_name, ct.cat_name, dt.dept_name, lc.loc_name, a_person_incharge, a_effectivty_date
                  FROM `assets` ac
                      JOIN `asset_cat` i
                      ON ac.ac_id = i.ac_id
                      JOIN `category` ct
                      ON ac.cat_id = ct.cat_id
                      JOIN `department` dt
                      ON ac.dept_id = dt.dept_id
                      JOIN `location` lc
                      ON ac.loc_id = lc.loc_id
                      WHERE i.ac_id = 6;";
              $result = mysqli_query($conn, $sqldata);
              $resultCheck = mysqli_num_rows($result);

              while ($row = mysqli_fetch_assoc($result)) {


          ?>
                <tr>
                  <td><?php echo $row['access_id']; ?></td>
                  <td><?php echo $row['a_name']; ?></td>
                  <td><?php echo $row['ac_name']; ?></td>
                  <td><?php echo $row['cat_name']; ?></td>
                  <td><?php echo $row['loc_name']; ?></td>
                  <td><?php echo $row['a_person_incharge']; ?></td>
                  <td><?php echo $row['a_effectivty_date']; ?></td>
                  <td><?php echo $row['dept_name']; ?></td>
                </tr>

          <?php

              }
            }
            if ($print == "6") {
              $sqldata = "SELECT access_id, a_name, i.ac_name, ct.cat_name, dt.dept_name, lc.loc_name, a_person_incharge, a_effectivty_date
                  FROM `assets` ac
                      JOIN `asset_cat` i
                      ON ac.ac_id = i.ac_id
                      JOIN `category` ct
                      ON ac.cat_id = ct.cat_id
                      JOIN `department` dt
                      ON ac.dept_id = dt.dept_id
                      JOIN `location` lc
                      ON ac.loc_id = lc.loc_id
                      WHERE i.ac_id = 6;";
              $result = mysqli_query($conn, $sqldata);
              $resultCheck = mysqli_num_rows($result);

              while ($row = mysqli_fetch_assoc($result)) {


          ?>
                <tr>
                  <td><?php echo $row['access_id']; ?></td>
                  <td><?php echo $row['a_name']; ?></td>
                  <td><?php echo $row['ac_name']; ?></td>
                  <td><?php echo $row['cat_name']; ?></td>
                  <td><?php echo $row['loc_name']; ?></td>
                  <td><?php echo $row['a_person_incharge']; ?></td>
                  <td><?php echo $row['a_effectivty_date']; ?></td>
                  <td><?php echo $row['dept_name']; ?></td>
                </tr>

          <?php

              }
            }
            if ($print == "7") {
              $sqldata = "SELECT access_id, a_name, i.ac_name, ct.cat_name, dt.dept_name, lc.loc_name, a_person_incharge, a_effectivty_date
                  FROM `assets` ac
                      JOIN `asset_cat` i
                      ON ac.ac_id = i.ac_id
                      JOIN `category` ct
                      ON ac.cat_id = ct.cat_id
                      JOIN `department` dt
                      ON ac.dept_id = dt.dept_id
                      JOIN `location` lc
                      ON ac.loc_id = lc.loc_id
                      WHERE i.ac_id = 7;";
              $result = mysqli_query($conn, $sqldata);
              $resultCheck = mysqli_num_rows($result);

              while ($row = mysqli_fetch_assoc($result)) {


          ?>
                <tr>
                  <td><?php echo $row['access_id']; ?></td>
                  <td><?php echo $row['a_name']; ?></td>
                  <td><?php echo $row['ac_name']; ?></td>
                  <td><?php echo $row['cat_name']; ?></td>
                  <td><?php echo $row['loc_name']; ?></td>
                  <td><?php echo $row['a_person_incharge']; ?></td>
                  <td><?php echo $row['a_effectivty_date']; ?></td>
                  <td><?php echo $row['dept_name']; ?></td>
                </tr>

          <?php

              }
            }
            if ($print == "8") {
              $sqldata = "SELECT access_id, a_name, i.ac_name, ct.cat_name, dt.dept_name, lc.loc_name, a_person_incharge, a_effectivty_date
                  FROM `assets` ac
                      JOIN `asset_cat` i
                      ON ac.ac_id = i.ac_id
                      JOIN `category` ct
                      ON ac.cat_id = ct.cat_id
                      JOIN `department` dt
                      ON ac.dept_id = dt.dept_id
                      JOIN `location` lc
                      ON ac.loc_id = lc.loc_id
                      WHERE i.ac_id = 8;";
              $result = mysqli_query($conn, $sqldata);
              $resultCheck = mysqli_num_rows($result);

              while ($row = mysqli_fetch_assoc($result)) {


          ?>
                <tr>
                  <td><?php echo $row['access_id']; ?></td>
                  <td><?php echo $row['a_name']; ?></td>
                  <td><?php echo $row['ac_name']; ?></td>
                  <td><?php echo $row['cat_name']; ?></td>
                  <td><?php echo $row['loc_name']; ?></td>
                  <td><?php echo $row['a_person_incharge']; ?></td>
                  <td><?php echo $row['a_effectivty_date']; ?></td>
                  <td><?php echo $row['dept_name']; ?></td>
                </tr>

          <?php

              }
            }
            if ($print == "9") {
              $sqldata = "SELECT access_id, a_name, i.ac_name, ct.cat_name, dt.dept_name, lc.loc_name, a_person_incharge, a_effectivty_date
                  FROM `assets` ac
                      JOIN `asset_cat` i
                      ON ac.ac_id = i.ac_id
                      JOIN `category` ct
                      ON ac.cat_id = ct.cat_id
                      JOIN `department` dt
                      ON ac.dept_id = dt.dept_id
                      JOIN `location` lc
                      ON ac.loc_id = lc.loc_id
                      WHERE i.ac_id = 9;";
              $result = mysqli_query($conn, $sqldata);
              $resultCheck = mysqli_num_rows($result);

              while ($row = mysqli_fetch_assoc($result)) {


          ?>
                <tr>
                  <td><?php echo $row['access_id']; ?></td>
                  <td><?php echo $row['a_name']; ?></td>
                  <td><?php echo $row['ac_name']; ?></td>
                  <td><?php echo $row['cat_name']; ?></td>
                  <td><?php echo $row['loc_name']; ?></td>
                  <td><?php echo $row['a_person_incharge']; ?></td>
                  <td><?php echo $row['a_effectivty_date']; ?></td>
                  <td><?php echo $row['dept_name']; ?></td>
                </tr>

          <?php

              }
            }
            if ($print == "10") {
              $sqldata = "SELECT access_id, a_name, i.ac_name, ct.cat_name, dt.dept_name, lc.loc_name, a_person_incharge, a_effectivty_date
                  FROM `assets` ac
                      JOIN `asset_cat` i
                      ON ac.ac_id = i.ac_id
                      JOIN `category` ct
                      ON ac.cat_id = ct.cat_id
                      JOIN `department` dt
                      ON ac.dept_id = dt.dept_id
                      JOIN `location` lc
                      ON ac.loc_id = lc.loc_id
                      WHERE i.ac_id = 10;";
              $result = mysqli_query($conn, $sqldata);
              $resultCheck = mysqli_num_rows($result);

              while ($row = mysqli_fetch_assoc($result)) {


          ?>
                <tr>
                  <td><?php echo $row['access_id']; ?></td>
                  <td><?php echo $row['a_name']; ?></td>
                  <td><?php echo $row['ac_name']; ?></td>
                  <td><?php echo $row['cat_name']; ?></td>
                  <td><?php echo $row['loc_name']; ?></td>
                  <td><?php echo $row['a_person_incharge']; ?></td>
                  <td><?php echo $row['a_effectivty_date']; ?></td>
                  <td><?php echo $row['dept_name']; ?></td>
                </tr>

          <?php

              }
            }
            if ($print == "11") {
              $sqldata = "SELECT access_id, a_name, i.ac_name, ct.cat_name, dt.dept_name, lc.loc_name, a_person_incharge, a_effectivty_date
              FROM `assets` ac
                  JOIN `asset_cat` i
                  ON ac.ac_id = i.ac_id
                  JOIN `category` ct
                  ON ac.cat_id = ct.cat_id
                  JOIN `department` dt
                  ON ac.dept_id = dt.dept_id
                  JOIN `location` lc
                  ON ac.loc_id = lc.loc_id
                  WHERE i.ac_id = 11;";
          $result = mysqli_query($conn, $sqldata);
          $resultCheck = mysqli_num_rows($result);

          while ($row = mysqli_fetch_assoc($result)) {


      ?>
            <tr>
              <td><?php echo $row['access_id']; ?></td>
              <td><?php echo $row['a_name']; ?></td>
              <td><?php echo $row['ac_name']; ?></td>
              <td><?php echo $row['cat_name']; ?></td>
              <td><?php echo $row['loc_name']; ?></td>
              <td><?php echo $row['a_person_incharge']; ?></td>
              <td><?php echo $row['a_effectivty_date']; ?></td>
              <td><?php echo $row['dept_name']; ?></td>
            </tr>

      <?php

          }
            }
            if ($print == "12") {
              $sqldata = "SELECT access_id, a_name, i.ac_name, ct.cat_name, dt.dept_name, lc.loc_name, a_person_incharge, a_effectivty_date
                  FROM `assets` ac
                      JOIN `asset_cat` i
                      ON ac.ac_id = i.ac_id
                      JOIN `category` ct
                      ON ac.cat_id = ct.cat_id
                      JOIN `department` dt
                      ON ac.dept_id = dt.dept_id
                      JOIN `location` lc
                      ON ac.loc_id = lc.loc_id
                      WHERE i.ac_id = 12;";
              $result = mysqli_query($conn, $sqldata);
              $resultCheck = mysqli_num_rows($result);

              while ($row = mysqli_fetch_assoc($result)) {


          ?>
                <tr>
                  <td><?php echo $row['access_id']; ?></td>
                  <td><?php echo $row['a_name']; ?></td>
                  <td><?php echo $row['ac_name']; ?></td>
                  <td><?php echo $row['cat_name']; ?></td>
                  <td><?php echo $row['loc_name']; ?></td>
                  <td><?php echo $row['a_person_incharge']; ?></td>
                  <td><?php echo $row['a_effectivty_date']; ?></td>
                  <td><?php echo $row['dept_name']; ?></td>
                </tr>

          <?php

              }
            }
            if ($print == "13") {
              $sqldata = "SELECT access_id, a_name, i.ac_name, ct.cat_name, dt.dept_name, lc.loc_name, a_person_incharge, a_effectivty_date
                  FROM `assets` ac
                      JOIN `asset_cat` i
                      ON ac.ac_id = i.ac_id
                      JOIN `category` ct
                      ON ac.cat_id = ct.cat_id
                      JOIN `department` dt
                      ON ac.dept_id = dt.dept_id
                      JOIN `location` lc
                      ON ac.loc_id = lc.loc_id
                      WHERE i.ac_id = 13;";
              $result = mysqli_query($conn, $sqldata);
              $resultCheck = mysqli_num_rows($result);

              while ($row = mysqli_fetch_assoc($result)) {


          ?>
                <tr>
                  <td><?php echo $row['access_id']; ?></td>
                  <td><?php echo $row['a_name']; ?></td>
                  <td><?php echo $row['ac_name']; ?></td>
                  <td><?php echo $row['cat_name']; ?></td>
                  <td><?php echo $row['loc_name']; ?></td>
                  <td><?php echo $row['a_person_incharge']; ?></td>
                  <td><?php echo $row['a_effectivty_date']; ?></td>
                  <td><?php echo $row['dept_name']; ?></td>
                </tr>

          <?php

              }
            }
            if ($print == "14") {
              $sqldata = "SELECT access_id, a_name, i.ac_name, ct.cat_name, dt.dept_name, lc.loc_name, a_person_incharge, a_effectivty_date
                  FROM `assets` ac
                      JOIN `asset_cat` i
                      ON ac.ac_id = i.ac_id
                      JOIN `category` ct
                      ON ac.cat_id = ct.cat_id
                      JOIN `department` dt
                      ON ac.dept_id = dt.dept_id
                      JOIN `location` lc
                      ON ac.loc_id = lc.loc_id
                      WHERE i.ac_id = 14;";
              $result = mysqli_query($conn, $sqldata);
              $resultCheck = mysqli_num_rows($result);

              while ($row = mysqli_fetch_assoc($result)) {


          ?>
                <tr>
                  <td><?php echo $row['access_id']; ?></td>
                  <td><?php echo $row['a_name']; ?></td>
                  <td><?php echo $row['ac_name']; ?></td>
                  <td><?php echo $row['cat_name']; ?></td>
                  <td><?php echo $row['loc_name']; ?></td>
                  <td><?php echo $row['a_person_incharge']; ?></td>
                  <td><?php echo $row['a_effectivty_date']; ?></td>
                  <td><?php echo $row['dept_name']; ?></td>
                </tr>

          <?php

              }
            }
            if ($print == "15") {
              $sql = "SELECT access_id, a_name,  i.ac_name, ct.cat_name, dt.dept_name, a_person_incharge, a_effectivty_date
                  FROM `assets` ac
                      JOIN `asset_cat` i
                      ON ac.ac_id = i.ac_id
                      JOIN `category` ct
                      ON ac.cat_id = ct.cat_id
                      JOIN `department` dt
                      ON ac.dept_id = dt.dept_id
                      JOIN `location` lc
                      ON ac.loc_id = lc.loc_id
                      	WHERE lc.loc_id = 1;";
              $result = mysqli_query($conn, $sqldata);
              $resultCheck = mysqli_num_rows($result);

              while ($row = mysqli_fetch_assoc($result)) {


          ?>
                <tr>
                  <td><?php echo $row['access_id']; ?></td>
                  <td><?php echo $row['a_name']; ?></td>
                  <td><?php echo $row['ac_name']; ?></td>
                  <td><?php echo $row['cat_name']; ?></td>
                  <td><?php echo $row['loc_name']; ?></td>
                  <td><?php echo $row['a_person_incharge']; ?></td>
                  <td><?php echo $row['a_effectivty_date']; ?></td>
                  <td><?php echo $row['dept_name']; ?></td>
                </tr>

          <?php

              }
            }
            if ($print == "16") {
              $sql = "SELECT access_id, a_name,  i.ac_name, ct.cat_name, dt.dept_name, a_person_incharge, a_effectivty_date
                  FROM `assets` ac
                      JOIN `asset_cat` i
                      ON ac.ac_id = i.ac_id
                      JOIN `category` ct
                      ON ac.cat_id = ct.cat_id
                      JOIN `department` dt
                      ON ac.dept_id = dt.dept_id
                      JOIN `location` lc
                      ON ac.loc_id = lc.loc_id
                      	WHERE lc.loc_id = 2;";
              $result = mysqli_query($conn, $sqldata);
              $resultCheck = mysqli_num_rows($result);

              while ($row = mysqli_fetch_assoc($result)) {


          ?>
                <tr>
                  <td><?php echo $row['access_id']; ?></td>
                  <td><?php echo $row['a_name']; ?></td>
                  <td><?php echo $row['ac_name']; ?></td>
                  <td><?php echo $row['cat_name']; ?></td>
                  <td><?php echo $row['loc_name']; ?></td>
                  <td><?php echo $row['a_person_incharge']; ?></td>
                  <td><?php echo $row['a_effectivty_date']; ?></td>
                  <td><?php echo $row['dept_name']; ?></td>
                </tr>

          <?php

              }
            }
            if ($print == "17") {
              $sql = "SELECT access_id, a_name,  i.ac_name, ct.cat_name, dt.dept_name, a_person_incharge, a_effectivty_date
                  FROM `assets` ac
                      JOIN `asset_cat` i
                      ON ac.ac_id = i.ac_id
                      JOIN `category` ct
                      ON ac.cat_id = ct.cat_id
                      JOIN `department` dt
                      ON ac.dept_id = dt.dept_id
                      JOIN `location` lc
                      ON ac.loc_id = lc.loc_id
                      	WHERE lc.loc_id = 3;";
              $result = mysqli_query($conn, $sqldata);
              $resultCheck = mysqli_num_rows($result);

              while ($row = mysqli_fetch_assoc($result)) {


          ?>
                <tr>
                  <td><?php echo $row['access_id']; ?></td>
                  <td><?php echo $row['a_name']; ?></td>
                  <td><?php echo $row['ac_name']; ?></td>
                  <td><?php echo $row['cat_name']; ?></td>
                  <td><?php echo $row['loc_name']; ?></td>
                  <td><?php echo $row['a_person_incharge']; ?></td>
                  <td><?php echo $row['a_effectivty_date']; ?></td>
                  <td><?php echo $row['dept_name']; ?></td>
                </tr>

          <?php

              }
            }
            if ($print == "18") {
              $sql = "SELECT access_id, a_name,  i.ac_name, ct.cat_name, dt.dept_name, a_person_incharge, a_effectivty_date
                  FROM `assets` ac
                      JOIN `asset_cat` i
                      ON ac.ac_id = i.ac_id
                      JOIN `category` ct
                      ON ac.cat_id = ct.cat_id
                      JOIN `department` dt
                      ON ac.dept_id = dt.dept_id
                      JOIN `location` lc
                      ON ac.loc_id = lc.loc_id
                      	WHERE lc.loc_id = 4;";
              $result = mysqli_query($conn, $sqldata);
              $resultCheck = mysqli_num_rows($result);

              while ($row = mysqli_fetch_assoc($result)) {


          ?>
                <tr>
                  <td><?php echo $row['access_id']; ?></td>
                  <td><?php echo $row['a_name']; ?></td>
                  <td><?php echo $row['ac_name']; ?></td>
                  <td><?php echo $row['cat_name']; ?></td>
                  <td><?php echo $row['loc_name']; ?></td>
                  <td><?php echo $row['a_person_incharge']; ?></td>
                  <td><?php echo $row['a_effectivty_date']; ?></td>
                  <td><?php echo $row['dept_name']; ?></td>
                </tr>

          <?php

              }
            }
            if ($print == "19") {
              $sql = "SELECT access_id, a_name,  i.ac_name, ct.cat_name, dt.dept_name, a_person_incharge, a_effectivty_date
                  FROM `assets` ac
                      JOIN `asset_cat` i
                      ON ac.ac_id = i.ac_id
                      JOIN `category` ct
                      ON ac.cat_id = ct.cat_id
                      JOIN `department` dt
                      ON ac.dept_id = dt.dept_id
                      JOIN `location` lc
                      ON ac.loc_id = lc.loc_id
                      	WHERE lc.loc_id = 5;";
              $result = mysqli_query($conn, $sqldata);
              $resultCheck = mysqli_num_rows($result);

              while ($row = mysqli_fetch_assoc($result)) {


          ?>
                <tr>
                  <td><?php echo $row['access_id']; ?></td>
                  <td><?php echo $row['a_name']; ?></td>
                  <td><?php echo $row['ac_name']; ?></td>
                  <td><?php echo $row['cat_name']; ?></td>
                  <td><?php echo $row['loc_name']; ?></td>
                  <td><?php echo $row['a_person_incharge']; ?></td>
                  <td><?php echo $row['a_effectivty_date']; ?></td>
                  <td><?php echo $row['dept_name']; ?></td>
                </tr>

          <?php

              }
            }
            if ($print == "20") {
              $sql = "SELECT access_id, a_name,  i.ac_name, ct.cat_name, dt.dept_name, a_person_incharge, a_effectivty_date
                  FROM `assets` ac
                      JOIN `asset_cat` i
                      ON ac.ac_id = i.ac_id
                      JOIN `category` ct
                      ON ac.cat_id = ct.cat_id
                      JOIN `department` dt
                      ON ac.dept_id = dt.dept_id
                      JOIN `location` lc
                      ON ac.loc_id = lc.loc_id
                      	WHERE lc.loc_id = 6;";
              $result = mysqli_query($conn, $sqldata);
              $resultCheck = mysqli_num_rows($result);

              while ($row = mysqli_fetch_assoc($result)) {


          ?>
                <tr>
                  <td><?php echo $row['access_id']; ?></td>
                  <td><?php echo $row['a_name']; ?></td>
                  <td><?php echo $row['ac_name']; ?></td>
                  <td><?php echo $row['cat_name']; ?></td>
                  <td><?php echo $row['loc_name']; ?></td>
                  <td><?php echo $row['a_person_incharge']; ?></td>
                  <td><?php echo $row['a_effectivty_date']; ?></td>
                  <td><?php echo $row['dept_name']; ?></td>
                </tr>

          <?php

              }
            }
          } else {
            echo dataTable($conn, $_SESSION['user_uid']);
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