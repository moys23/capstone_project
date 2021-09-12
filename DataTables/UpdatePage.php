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
    <link rel="icon" href="#" type="../image/x-icon">
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
        <div class="row justify-content-center" style="padding-left: 26px;">
          <!-- <div class="container py-1" >
            <div class="row justify-content-center"> -->
            <div class="col-5 text-center px-0">
              <h6 class="bg-info py-1 mx-0 mt-2 text-center border border-dark">
                <strong><big>Inventory List</big></strong>
              </h6>
            </div>
            <div class="col-5  px-0 mt-2 ">
              <form  method="GET">
                <div class="input-group" style="margin-left: 5px;">
                  <input id="searchbar2" class="form-control px-1 rounded-0" type="text" name="ID" required placeholder="<?php if(isset($_GET['ID'])){echo $_GET['ID'];} ?>">
                  <button class="btn btn-success rounded-0 py-0" type="submit" ><i class="bi bi-search"></i></button>
                </div>
              </form>
            </div>
            <!-- </div>
          </div> -->
        </div>
      </div>

      <div class="container-fluid" style="padding-left: 55px; ">
        <div class="border border-dark table-sticky2">
          <table class="table">
            <thead class="text-light size1 bg-success">
              <tr>
                <th class=" border-bottom text-center border-dark">ID</th>
                <th class=" border-bottom text-center border-dark">Name</th>
                <th class=" border-bottom text-center border-dark">Assets Category</th>
                <th class=" border-bottom text-center border-dark">Room Type</th>
                <th class=" border-bottom text-center border-dark">Location</th>
                <th class=" border-bottom text-center border-dark">Personnel Incharge</th>
                <th class=" border-bottom text-center border-dark">Released Date</th>
                <th class=" border-bottom text-center border-dark">Department</th>
                <!-- <th class=" border-bottom border-dark">Action</th> -->
                <?php
                if (isset($_GET['ID'])) {
                  echo '<th class=" border-bottom text-center border-dark">Action</th>';
                }
                 ?>
              </tr>
            </thead>

            <tbody>
              <?php
                  if (isset($_GET['ID'])) {
                    $ID = $_GET['ID'];

                    $query = "SELECT *
                    FROM `assets` ac
                      JOIN `asset_cat` i
                      ON ac.ac_id = i.ac_id
                      JOIN `category` ct
                      ON ac.cat_id = ct.cat_id
                      JOIN `department` dt
                      ON ac.dept_id = dt.dept_id
                      JOIN `location` lc
                      ON ac.loc_id = lc.loc_id
                        WHERE a_id ='$ID' OR
                          a_name LIKE '$ID'
                          ;";
                    $query_run = mysqli_query($conn, $query);
                    $result = mysqli_num_rows($query_run);

                    while ($row = mysqli_fetch_assoc($query_run)) {

                          ?>


                          <td class="size2 text-center"><?php echo $row['a_id'] ;?></td>
                          <td class="size2 text-center"><?php echo $row['a_name'] ;?></td>
                          <td class="size2 text-center"><?php echo $row['ac_name'] ;?></td>
                          <td class="size2 text-center"><?php echo $row['cat_name'] ;?></td>
                          <td class="size2 text-center"><?php echo $row['loc_name'] ;?></td>
                          <td class="size2 text-center"><?php echo $row['a_person_incharge'] ;?></td>
                          <td class="size2 text-center"><?php echo $row['a_effectivty_date'] ;?></td>
                          <td class="size2 text-center"><?php echo $row['dept_name'] ;?></td>


                            <td style="width: 90px; ">
                              <button class="btn btn-warning border border-dark" type="button" name="button" data-toggle="modal" data-target="#UPDATEbtn" >Update</button>

                              <div class="modal fade" id="UPDATEbtn" tabindex="-1" role="dialog" aria-labelledby="UPDATEbtnLabel" aria-hidden="true">
                                 <div class="modal-dialog" role="document">
                                   <div class="modal-content">
                                     <div class="modal-header">
                                       <h5 class="modal-title text-dark" id="createQRLabel">Update Asset Info</h5>
                                       <button type="button" class="close btn btn-transparent" data-dismiss="modal" aria-label="Close">
                                         <span aria-hidden="true">&times;</span>
                                       </button>
                                     </div>
                                     <div class="modal-body text-dark">
                                     <form enctype="multipart/form-data" method="GET">
                                       <div class="input-group">
                                        <input hidden type="text" name="ID" value="<?php echo $row['a_id'] ;?>">

                                         <div class="form-group mx-3 mb-2">
                                           <label for="item">Item Name</label>
                                           <input type="text" class="form-control border border-dark" name="num1" required>
                                         </div>

                                         <div class="form-group mx-3 mb-1">
                                           <label for="item">Person In-charge</label>
                                           <input type="text" class="form-control border border-dark" name="num2" required>
                                         </div>


                                         <div class="form-group mx-3 mb-1">
                                           <label for="item">Location</label>
                                           <select class="form-select border border-dark mb-2" name="num3" required>
                                             <option value="1">SB-1</option>
                                             <option value="2">SB-2</option>
                                             <option value="3">SB-3</option>
                                             <option value="4">ECB-15</option>
                                             <option value="5">ECB-16</option>
                                             <option value="6">ECB-17</option>
                                           </select>
                                         </div>

                                         <div class="form-group mx-3 mb-3">
                                           <label for="SelectCategory">Room Category</label>
                                           <select name="num4" class="form-select border border-dark mb-2" required>
                                             <option value="1">Laboratory Room</option>
                                             <option value="2">Lecture Room</option>
                                           </select>
                                         </div>

                                         <div class="form-group mx-3 mb-3">
                                           <label for="SelectCategory">Department</label>
                                           <select name="num5" class="form-select border border-dark mb-2" required>
                                             <option value="1">CSD Department</option>
                                             <option value="2">EDUC Department</option>
                                           </select>
                                         </div>

                                         <div class="modal-footer">


                                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                           <button type="submit" class="btn btn-primary">Submit</button>

                                         </div>
                                       </div>

                                       <?php

                                         echo updateBTN($conn, $_SESSION['user_uid']);

                                       ?>


                                     </form>






                                   </div>
                                  </div>
                                </div>
                            </div>


                            </td>


                          <?php

                        }
                    }
                      else{
                        $query = "SELECT *
                        FROM `assets` ac
                          JOIN `asset_cat` i
                          ON ac.ac_id = i.ac_id
                          JOIN `category` ct
                          ON ac.cat_id = ct.cat_id
                          JOIN `department` dt
                          ON ac.dept_id = dt.dept_id
                          JOIN `location` lc
                          ON ac.loc_id = lc.loc_id
                              ;";
                        $query_run = mysqli_query($conn, $query);
                        $result = mysqli_num_rows($query_run);

                        while ($row = mysqli_fetch_assoc($query_run)) {

                              ?>
                              <tr>
                                <td class="size1 text-center"><?php echo $row['a_id'] ;?></td>
                                <td class="size1 text-center"><?php echo $row['a_name'] ;?></td>
                                <td class="size1 text-center"><?php echo $row['ac_name'] ;?></td>
                                <td class="size1 text-center"><?php echo $row['cat_name'] ;?></td>
                                <td class="size1 text-center"><?php echo $row['loc_name'] ;?></td>
                                <td class="size1 text-center"><?php echo $row['a_person_incharge'] ;?></td>
                                <td class="size1 text-center"><?php echo $row['a_effectivty_date'] ;?></td>
                                <td class="size1 text-center"><?php echo $row['dept_name'] ;?></td>
                              </tr>


                              <?php

                            }
                      }
               ?>
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
