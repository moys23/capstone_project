<?php
  session_start();
  include_once 'includes/conn.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../images/fav.jpg" type="image/x-icon" sizes="16x16">
    <title>BUPC Supply Office Inventory System</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font/bootstrap-icons.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <script src="js/cdn.jquery.min.js"></script>
    <script src="js/custom.js"></script>

    <style media="screen">
    .Aharoni {
      font-family: "Aharoni";
    }
    .blue {
      background-color: rgba(225, 0, 50, 0.8);
    }
    </style>

  </head>
  <body>





      <div class="container-fluid">
        <div class="row ">

          <div class="col-sm-4"></div>

          <div class="col-sm-4 mt-4">
            <div class="card border border-dark rounded">
              <div class="card-header blue">
                <h4 class="my-1 text-light">BUPC Asset's Information</h4>
              </div>
              <div class="card-body">
                <?php
                  // $id = $_SERVER['REQUEST_URI'];
                  // $parseID = parse_url($id, PHP_URL_QUERY);
                  // $clrID = htmlentities($parseID);
                  // echo $parseID;
                  $id = $_GET['ID'];

                  $sql = "SELECT access_id, a_name, i.ac_name, ct.cat_name, dt.dept_name, lc.loc_name, a_person_incharge, a_effectivty_date
                          	FROM `assets` ac
                              	JOIN `asset_cat` i
                                ON ac.ac_id = i.ac_id
                                JOIN `category` ct
                                ON ac.cat_id = ct.cat_id
                                JOIN `department` dt
                                ON ac.dept_id = dt.dept_id
                                JOIN `location` lc
                                ON ac.loc_id = lc.loc_id
                                  WHERE access_id = '{$id}';";
                  $result = mysqli_query($conn, $sql);
                  $resultCheck = mysqli_num_rows($result);

                  while ($row = mysqli_fetch_assoc($result)) {

                      ?>

                      <table>
                        <tr>
                          <td><h6>Asset's Name: </h6></td>
                          <td><h6 class="text-danger border-dark border-bottom"><?php echo $row['a_name'] ;?></h6></td>
                        </tr>
                        <tr>
                          <td><h6>Asset's Category: </h6></td>
                          <td><h6 class="text-danger border-dark border-bottom"><?php echo $row['ac_name'] ;?></h6></td>
                        </tr>
                        <tr>
                          <td><h6>Room Type: </h6></td>
                          <td><h6 class="text-danger border-dark border-bottom"><?php echo $row['cat_name'] ;?></h6></td>
                        </tr>
                        <tr>
                          <td><h6>Location:</h6></td>
                          <td><h6 class="text-danger border-dark border-bottom"><?php echo $row['loc_name'] ;?></h6></td>
                        </tr>
                        <tr>
                          <td><h6>Personnel Incharge:</h6></td>
                          <td><h6 class="text-danger border-dark border-bottom"><?php echo $row['a_person_incharge'] ;?></h6></td>
                        </tr>
                        <tr>
                          <td><h6>Released Date:</h6></td>
                          <td><h6 class="text-danger border-dark border-bottom"><?php echo $row['a_effectivty_date'] ;?></h6></td>
                        </tr>
                        <tr>
                          <td><h6>Department:</h6></td>
                          <td><h6 class="text-danger border-dark border-bottom"><?php echo $row['dept_name'] ;?></h6></td>
                        </tr>
                      </table>



                  <?php

                  }

                 ?>
              </div>
            </div>
          </div>

          <div class="col-sm-4"></div>
        </div>
      </div>



  </body>

  <?php mysqli_close($conn);?>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</html>
