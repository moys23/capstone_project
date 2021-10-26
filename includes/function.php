<?php
//
// function dwnloadQR($conn, $count){
//     if (isset($_GET['DLbtn'])) {
//       $itemQR = $_GET['itemCode'];
//       $url_to_image = 'http://192.168.137.1/capstone_project/includes/qr_gen.php?itemCode=' . $itemQR;
//       $my_save_dir = 'images/';
//       $filename = basename($url_to_image);
//       $complete_save_loc = $my_save_dir . $filename;
//       file_put_contents($complete_save_loc, file_get_contents($url_to_image));
//     }
//
// }
function createCategory($conn, $save){
  if (isset($_POST['create2'])) {
    $data1 = htmlentities($_POST['detail2']);
    $data2 = htmlentities($_POST['status2']);
    $data3 = htmlentities($_POST['date1']);

    
      

      if (empty($data1) || empty($data2)) {
        echo "<div class='alert alert-danger mt-1 rounded' role='alert'><i class='bi bi-exclamation-triangle-fill'></i>&nbsp<strong>Warning!</strong> Empty Inputs.
              <button type='button' class='close btn btn-transparent' style='float: right; padding-top: 0;' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
              </button></div>";
      }else {
        $sql = "SELECT * FROM asset_cat WHERE ac_name = '$data1' ;";
        $ask = mysqli_query($conn, $sql);
        $result = mysqli_num_rows($ask);

        if ($result > 0) {
          echo "<div class='alert alert-danger mt-1 rounded' role='alert'><strong>Request denied!</strong> Asset Category already exist.
              <button type='button' class='close btn btn-transparent' style='float: right; padding-top: 0;' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
              </button></div>";
        } else {
          $sql = "INSERT INTO asset_cat (ac_name, effective_date, ac_status) VALUES ('$data1', '$data3', '$data2');";
          mysqli_query($conn, $sql);

          echo "<div class='alert alert-success mt-1 rounded' role='alert'><strong>Request confirmed!</strong> Category added.
            <button type='button' class='close btn btn-transparent' style='float: right; padding-top: 0;' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button></div>";

      }
    } 
  }
}

function createRoom($conn, $save){
  if (isset($_POST['create3'])) {
    $data1 = htmlentities($_POST['detail3']);
    $data2 = htmlentities($_POST['status3']);
    $data3 = htmlentities($_POST['date2']);

    
      

      if (empty($data1) || empty($data2)) {
        echo "<div class='alert alert-danger mt-1 rounded' role='alert'><i class='bi bi-exclamation-triangle-fill'></i>&nbsp<strong>Warning!</strong> Empty Inputs.
              <button type='button' class='close btn btn-transparent' style='float: right; padding-top: 0;' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
              </button></div>";
      }else {
        $sql = "SELECT * FROM  `location` WHERE loc_name = '$data1' ;";
        $ask = mysqli_query($conn, $sql);
        $result = mysqli_num_rows($ask);

        if ($result > 0) {
          echo "<div class='alert alert-danger mt-1 rounded' role='alert'><strong>Request denied!</strong> Location already exist.
              <button type='button' class='close btn btn-transparent' style='float: right; padding-top: 0;' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
              </button></div>";
        } else {
          $sql = "INSERT INTO `location` (loc_name, efc_date, loc_status) VALUES ('$data1', '$data3', '$data2');";
          mysqli_query($conn, $sql);

          echo "<div class='alert alert-success mt-1 rounded' role='alert'><strong>Request confirmed!</strong> Location Added.
            <button type='button' class='close btn btn-transparent' style='float: right; padding-top: 0;' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button></div>";

      }
    } 

  }
}

function createDept($conn, $save){
  
  if (isset($_POST['create1'])) {
    $data1 = htmlentities($_POST['detail1']);
    $data2 = htmlentities($_POST['code1']);
    $data3 = htmlentities($_POST['status1']);
    $data4 = htmlentities($_POST['date']);


    if (empty($data1) || empty($data2) || empty($data3)) {
      echo "<div class='alert alert-danger mt-1 rounded' role='alert'><i class='bi bi-exclamation-triangle-fill'></i>&nbsp<strong>Warning!</strong> Empty Inputs.
            <button type='button' class='close btn btn-transparent' style='float: right; padding-top: 0;' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button></div>";
    }else {
      $sql = "SELECT * FROM department WHERE dept_name = '$data1' ;";
      $ask = mysqli_query($conn, $sql);
      $result = mysqli_num_rows($ask);

      if ($result > 0) {
        echo "<div class='alert alert-danger mt-1 rounded' role='alert'><strong>Request denied!</strong> Department already exist.
            <button type='button' class='close btn btn-transparent' style='float: right; padding-top: 0;' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button></div>";
      } else {
        $sql = "INSERT INTO department (dept_name, dept_link, date_efc, dept_status) VALUES ('$data1', '$data2', '$data4', '$data3');";
        mysqli_query($conn, $sql);
    
        echo "<div class='alert alert-success mt-1 rounded' role='alert'><strong>Request confirmed!</strong> Department Added.
            <button type='button' class='close btn btn-transparent' style='float: right; padding-top: 0;' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button></div>";

      }
    } 
  } 
  
  // if (isset($_POST['create2'])) {
  //   $data1 = htmlentities($_POST['detail2']);
  //   $data2 = htmlentities($_POST['status2']);
  //   $data3 = htmlentities($_POST['date1']);

    
      

  //     if (empty($data1) || empty($data2)) {
  //       echo "<div class='alert alert-danger mt-1 rounded' role='alert'><i class='bi bi-exclamation-triangle-fill'></i>&nbsp<strong>Warning!</strong> Empty Inputs.
  //             <button type='button' class='close btn btn-transparent' style='float: right; padding-top: 0;' data-dismiss='alert' aria-label='Close'>
  //             <span aria-hidden='true'>&times;</span>
  //             </button></div>";
  //     }else {
  //       $sql = "SELECT * FROM asset_cat WHERE ac_name = '$data1' ;";
  //       $ask = mysqli_query($conn, $sql);
  //       $result = mysqli_num_rows($ask);

  //       if ($result > 0) {
  //         echo "<div class='alert alert-danger mt-1 rounded' role='alert'><strong>Request denied!</strong> Asset Category already exist.
  //             <button type='button' class='close btn btn-transparent' style='float: right; padding-top: 0;' data-dismiss='alert' aria-label='Close'>
  //             <span aria-hidden='true'>&times;</span>
  //             </button></div>";
  //       } else {
  //         $sql = "INSERT INTO asset_cat (ac_name, effective_date, ac_status) VALUES ('$data1', '$data3', '$data2');";
  //         mysqli_query($conn, $sql);

  //         echo "<div class='alert alert-success mt-1 rounded' role='alert'><strong>Request confirmed!</strong> Category added.
  //           <button type='button' class='close btn btn-transparent' style='float: right; padding-top: 0;' data-dismiss='alert' aria-label='Close'>
  //           <span aria-hidden='true'>&times;</span>
  //           </button></div>";

  //     }
  //   } 
  // }
  
  // if (isset($_POST['create3'])) {
  //   $data1 = htmlentities($_POST['detail3']);
  //   $data2 = htmlentities($_POST['status3']);
  //   $data3 = htmlentities($_POST['date2']);

    
      

  //     if (empty($data1) || empty($data2)) {
  //       echo "<div class='alert alert-danger mt-1 rounded' role='alert'><i class='bi bi-exclamation-triangle-fill'></i>&nbsp<strong>Warning!</strong> Empty Inputs.
  //             <button type='button' class='close btn btn-transparent' style='float: right; padding-top: 0;' data-dismiss='alert' aria-label='Close'>
  //             <span aria-hidden='true'>&times;</span>
  //             </button></div>";
  //     }else {
  //       $sql = "SELECT * FROM  `location` WHERE loc_name = '$data1' ;";
  //       $ask = mysqli_query($conn, $sql);
  //       $result = mysqli_num_rows($ask);

  //       if ($result > 0) {
  //         echo "<div class='alert alert-danger mt-1 rounded' role='alert'><strong>Request denied!</strong> Location already exist.
  //             <button type='button' class='close btn btn-transparent' style='float: right; padding-top: 0;' data-dismiss='alert' aria-label='Close'>
  //             <span aria-hidden='true'>&times;</span>
  //             </button></div>";
  //       } else {
  //         $sql = "INSERT INTO `location` (loc_name, efc_date, loc_status) VALUES ('$data1', '$data3', '$data2');";
  //         mysqli_query($conn, $sql);

  //         echo "<div class='alert alert-success mt-1 rounded' role='alert'><strong>Request confirmed!</strong> Location Added.
  //           <button type='button' class='close btn btn-transparent' style='float: right; padding-top: 0;' data-dismiss='alert' aria-label='Close'>
  //           <span aria-hidden='true'>&times;</span>
  //           </button></div>";

  //     }
  //   } 

  // }

}

function dcCount($conn, $count){
  
  $a = "SELECT COUNT(remarks) FROM `assets` WHERE remarks = 'Disposed' ;";
  $b = mysqli_query($conn, $a);
  $c = mysqli_fetch_row($b);

  if($c){
      return $c[0];
  }
  else{
      return 0;
  }
}

function sumCount($conn, $count)
{
  $id = $_GET['ID'];
  
  $a = "SELECT count(dept_id) cnt FROM `assets` WHERE `dept_id` = '$id' AND remarks = 'Issued' ;";
  $b = mysqli_query($conn, $a);
  $c = mysqli_fetch_row($b);

  if ($c) {
    return $c[0];
  } else {
    return 0;
  }
}
function locCount($conn, $count)
{
  $id = $_GET['ID'];
  
  $a = "SELECT count(dept_id) cnt FROM `assets` WHERE `loc_id` = '$id' AND remarks = 'Issued' ;";
  $b = mysqli_query($conn, $a);
  $c = mysqli_fetch_row($b);

  if ($c) {
    return $c[0];
  } else {
    return 0;
  }
}
function catCount($conn, $count)
{
  $id = $_GET['ID'];
  
  $a = "SELECT count(dept_id) cnt FROM `assets` WHERE `ac_id` = '$id' AND remarks = 'Issued' ;";
  $b = mysqli_query($conn, $a);
  $c = mysqli_fetch_row($b);

  if ($c) {
    return $c[0];
  } else {
    return 0;
  }
}

// function addDepartment($conn, $count){
//   if (isset($_post['addDept'])) {
  ?>
    <!-- <div class="card">
      <div class="card-body">
        <input type="text" placeholder="Input name">
      </div>
    </div> -->
  <?php
//   }
// }


function updateBTNshow($conn, $count){

  if (isset($_POST['processUPDATE'])) {
    // $data = $row['access_id'];
    // $data2 = $row['a_id'];

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];
    $num4 = $_POST['num4'];
    $num5 = $_POST['num5'];

    // $sql = "UPDATE `assets` SET `a_name` = '$num1', `a_person_incharge` = '$num2',   `loc_id` = $num3, `cat_id` = $num4, `dept_id` = $num5 WHERE a_id = '$data2' OR access_id = '$data';";
    // $result = mysqli_query($conn, $sql);
  }



}

function updateBTN($conn, $count){

  if (isset($_POST['processUPDATE'])) {
    $data = $_GET['ID'];

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];
    $num4 = $_POST['num4'];
    $num5 = $_POST['num5'];

    $sql = "UPDATE `assets` SET `a_person_incharge` = '$num2',  `remarks` = '$num1', `loc_id` = $num3, `cat_id` = $num4, `dept_id` = $num5 WHERE a_id = '$data' OR access_id LIKE '$data';";
    $result = mysqli_query($conn, $sql);
  }



}

function searchResult($conn, $count) {

    if (isset($_GET['search'])) {

      $data = htmlentities($_GET['srchkey']);


      $sql = "SELECT  access_id, a_name, i.ac_name, ct.cat_name, dt.dept_name, lc.loc_name, a_person_incharge, a_effectivty_date
                FROM `assets` ac
                  JOIN `asset_cat` i
                  ON ac.ac_id = i.ac_id
                  JOIN `category` ct
                  ON ac.cat_id = ct.cat_id
                  JOIN `department` dt
                  ON ac.dept_id = dt.dept_id
                  JOIN `location` lc
                  ON ac.loc_id = lc.loc_id
                  	WHERE access_id LIKE '%{$data}%'
                      OR a_name LIKE '%{$data}%'
                    	OR i.ac_name LIKE '%{$data}%'
                      OR ct.cat_name LIKE '%{$data}%'
                      OR dt.dept_name LIKE '%{$data}%'
                      OR lc.loc_name LIKE '%{$data}%'
                      OR a_person_incharge LIKE '%{$data}%'
                      OR a_effectivty_date LIKE '%{$data}%'
                      ;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);


              while ($row = mysqli_fetch_assoc($result)) {

                ?>

                <tr>
                  <td><?php echo $row['access_id'] ;?></td>
                  <td><?php echo $row['a_name'] ;?></td>
                  <td><?php echo $row['ac_name'] ;?></td>
                  <td><?php echo $row['cat_name'] ;?></td>
                  <td><?php echo $row['loc_name'] ;?></td>
                  <td><?php echo $row['a_person_incharge'] ;?></td>
                  <td><?php echo $row['a_effectivty_date'] ;?></td>
                  <td><?php echo $row['dept_name'] ;?></td>
                </tr>

                <?php

              }

      }

}

function totalCount($conn, $count) {
    $sql = "SELECT count(a_id) cnt FROM `assets` WHERE remarks = 'Issued';";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($result);

    if($row){
        return $row[0];
    }
    else{
        return 0;
    }
}

function totalCSD($conn, $count) {
    $data1 = 1;
    $sql = "SELECT count(dept_id) cnt FROM `assets` WHERE dept_id = '{$data1}' ;";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($result);

    if($row){
        return $row[0];
    }
    else{
        return 0;
    }
}

function totalEDUC($conn, $count) {
    $data1 = 2;
    $sql = "SELECT count(dept_id) cnt FROM `assets` WHERE dept_id = '{$data1}' ;";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($result);

    if($row){
        return $row[0];
    }
    else{
        return 0;
    }
}

function totalArmChair($conn, $count) {
    $sql = "SELECT count(ac_id) cnt FROM `assets` WHERE ac_id = 1;";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($result);

    if($row){
        return $row[0];
    }
    else{
      return 0;
    }
}

function totalTable($conn, $count) {
    $sql = "SELECT count(ac_id) cnt FROM `assets` WHERE ac_id = 2;";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($result);

    if($row){
        return $row[0];
    }
    else{
      return 0;
    }
}

function totalEfan($conn, $count) {
    $sql = "SELECT count(ac_id) cnt FROM `assets` WHERE ac_id = 3;";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($result);

    if($row){
        return $row[0];
    }
    else{
      return 0;
    }
}

function totalCurtain($conn, $count) {
    $sql = "SELECT count(ac_id) cnt FROM `assets` WHERE ac_id = 4;";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($result);

    if($row){
        return $row[0];
    }
    else{
      return 0;
    }
}

function totalMonoB($conn, $count) {
    $sql = "SELECT count(ac_id) cnt FROM `assets` WHERE ac_id = 5;";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($result);

    if($row){
        return $row[0];
    }
    else{
      return 0;
    }
}

function totalGphBoard($conn, $count) {
    $sql = "SELECT count(ac_id) cnt FROM `assets` WHERE ac_id = 6;";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($result);

    if($row){
        return $row[0];
    }
    else{
      return 0;
    }
}

function totalMonitor($conn, $count) {
    $sql = "SELECT count(ac_id) cnt FROM `assets` WHERE ac_id = 7;";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($result);

    if($row){
        return $row[0];
    }
    else{
      return 0;
    }
}

function totalPrinter($conn, $count) {
    $sql = "SELECT count(ac_id) cnt FROM `assets` WHERE ac_id = 8;";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($result);

    if($row){
        return $row[0];
    }
    else{
      return 0;
    }
}

function totalAVR($conn, $count) {
    $sql = "SELECT count(ac_id) cnt FROM `assets` WHERE ac_id = 9;";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($result);

    if($row){
        return $row[0];
    }
    else{
      return 0;
    }
}

function totalSysU($conn, $count) {
    $sql = "SELECT count(ac_id) cnt FROM `assets` WHERE ac_id = 10;";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($result);

    if($row){
        return $row[0];
    }
    else{
      return 0;
    }
}

function totalKeyboard($conn, $count) {
    $sql = "SELECT count(ac_id) cnt FROM `assets` WHERE ac_id = 11;";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($result);

    if($row){
        return $row[0];
    }
    else{
      return 0;
    }
}

function totalMouse($conn, $count) {
    $sql = "SELECT count(ac_id) cnt FROM `assets` WHERE ac_id = 12;";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($result);

    if($row){
        return $row[0];
    }
    else{
      return 0;
    }
}

function totalSwitch($conn, $count) {
    $sql = "SELECT count(ac_id) cnt FROM `assets` WHERE ac_id = 13;";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($result);

    if($row){
        return $row[0];
    }
    else{
      return 0;
    }
}

function totalProjector($conn, $count) {
    $sql = "SELECT count(ac_id) cnt FROM `assets` WHERE ac_id = 14;";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($result);

    if($row){
        return $row[0];
    }
    else{
      return 0;
    }
}

function totalSB1($conn, $count) {
    $sql = "SELECT count(loc_id) cnt FROM `assets` WHERE loc_id = 1;";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($result);

    if($row){
        return $row[0];
    }
    else{
      return 0;
    }
}

function totalSB2($conn, $count) {
    $sql = "SELECT count(loc_id) cnt FROM `assets` WHERE loc_id = 2;";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($result);

    if($row){
        return $row[0];
    }
    else{
      return 0;
    }
}

function totalSB3($conn, $count) {
    $sql = "SELECT count(loc_id) cnt FROM `assets` WHERE loc_id = 3;";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($result);

    if($row){
        return $row[0];
    }
    else{
      return 0;
    }
}

function totalECB15($conn, $count) {
    $sql = "SELECT count(loc_id) cnt FROM `assets` WHERE loc_id = 4;";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($result);

    if($row){
        return $row[0];
    }
    else{
      return 0;
    }
}

function totalECB16($conn, $count) {
    $sql = "SELECT count(loc_id) cnt FROM `assets` WHERE loc_id = 5;";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($result);

    if($row){
        return $row[0];
    }
    else{
      return 0;
    }
}

function totalECB17($conn, $count) {
    $sql = "SELECT count(loc_id) cnt FROM `assets` WHERE loc_id = 6;";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($result);

    if($row){
        return $row[0];
    }
    else{
      return 0;
    }
}

function dataTable($conn, $count){
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
                        WHERE remarks = 'Issued'
                        ORDER BY a_id DESC;";
    $result = mysqli_query($conn, $sqldata);

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
              <td><?php echo $row['short_qty']; ?></td>
              <td><?php echo $row['short_value']; ?></td>
              <td><?php echo $row['over_qty']; ?></td>
              <td><?php echo $row['over_value']; ?></td>
              <td><?php echo $row['ac_name']; ?></td>
              <td><?php echo $row['cat_name']; ?></td>
              <td><?php echo $row['loc_name']; ?></td>
              <td><?php echo $row['a_person_incharge']; ?></td>
              <td><?php echo $row['dept_name']; ?></td>
              <td><?php echo $row['remarks']; ?></td>
         </tr>

<?php

  }


}

function csdTable($conn, $count){
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
          <td><?php echo $row['access_id'] ;?></td>
          <td><?php echo $row['a_name'] ;?></td>
          <td><?php echo $row['ac_name'] ;?></td>
          <td><?php echo $row['cat_name'] ;?></td>
          <td><?php echo $row['loc_name'] ;?></td>
          <td><?php echo $row['a_person_incharge'] ;?></td>
          <td><?php echo $row['a_effectivty_date'] ;?></td>
          <td><?php echo $row['dept_name'] ;?></td>
        </tr>

<?php

  }


}

function educTable($conn, $count){
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
          <td><?php echo $row['access_id'] ;?></td>
          <td><?php echo $row['a_name'] ;?></td>
          <td><?php echo $row['ac_name'] ;?></td>
          <td><?php echo $row['cat_name'] ;?></td>
          <td><?php echo $row['loc_name'] ;?></td>
          <td><?php echo $row['a_person_incharge'] ;?></td>
          <td><?php echo $row['a_effectivty_date'] ;?></td>
          <td><?php echo $row['dept_name'] ;?></td>
        </tr>

<?php

  }


}

function Cat1Table($conn, $count) {

    $sql = "SELECT access_id, a_name, ct.cat_name, lc.loc_name, a_person_incharge, a_effectivty_date, dt.dept_name
            	FROM `assets` ac
                	JOIN asset_cat i
                    ON ac.ac_id = i.ac_id
                    JOIN category ct
                    ON ac.cat_id = ct.cat_id
                    JOIN location lc
                    ON ac.loc_id = lc.loc_id
                    JOIN department dt
                    ON ac.dept_id = dt.dept_id
                    	WHERE i.ac_id = 1 ;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    while ($row = mysqli_fetch_assoc($result)) {

      ?>

        <tr>
          <td><?php echo $row['access_id'] ;?></td>
          <td><?php echo $row['a_name'] ;?></td>
          <td><?php echo $row['cat_name'] ;?></td>
          <td><?php echo $row['loc_name'] ;?></td>
          <td><?php echo $row['a_person_incharge'] ;?></td>
          <td><?php echo $row['a_effectivty_date'] ;?></td>
          <td><?php echo $row['dept_name'] ;?></td>
        </tr>


      <?php

    }

}


function Cat2Table($conn, $count) {

    $sql = "SELECT access_id, a_name, ct.cat_name, lc.loc_name, a_person_incharge, a_effectivty_date, dt.dept_name
            	FROM `assets` ac
                	JOIN asset_cat i
                    ON ac.ac_id = i.ac_id
                    JOIN category ct
                    ON ac.cat_id = ct.cat_id
                    JOIN location lc
                    ON ac.loc_id = lc.loc_id
                    JOIN department dt
                    ON ac.dept_id = dt.dept_id
                    	WHERE i.ac_id = 2 ;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    while ($row = mysqli_fetch_assoc($result)) {

      ?>

        <tr>
          <td><?php echo $row['access_id'] ;?></td>
          <td><?php echo $row['a_name'] ;?></td>
          <td><?php echo $row['cat_name'] ;?></td>
          <td><?php echo $row['loc_name'] ;?></td>
          <td><?php echo $row['a_person_incharge'] ;?></td>
          <td><?php echo $row['a_effectivty_date'] ;?></td>
          <td><?php echo $row['dept_name'] ;?></td>
        </tr>


      <?php

    }

}

function Cat3Table($conn, $count) {

    $sql = "SELECT access_id, a_name, ct.cat_name, lc.loc_name, a_person_incharge, a_effectivty_date, dt.dept_name
            	FROM `assets` ac
                	JOIN asset_cat i
                    ON ac.ac_id = i.ac_id
                    JOIN category ct
                    ON ac.cat_id = ct.cat_id
                    JOIN location lc
                    ON ac.loc_id = lc.loc_id
                    JOIN department dt
                    ON ac.dept_id = dt.dept_id
                    	WHERE i.ac_id = 3 ;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    while ($row = mysqli_fetch_assoc($result)) {

      ?>

        <tr>
          <td><?php echo $row['access_id'] ;?></td>
          <td><?php echo $row['a_name'] ;?></td>
          <td><?php echo $row['cat_name'] ;?></td>
          <td><?php echo $row['loc_name'] ;?></td>
          <td><?php echo $row['a_person_incharge'] ;?></td>
          <td><?php echo $row['a_effectivty_date'] ;?></td>
          <td><?php echo $row['dept_name'] ;?></td>
        </tr>


      <?php

    }

}

function Cat4Table($conn, $count) {

    $sql = "SELECT access_id, a_name, ct.cat_name, lc.loc_name, a_person_incharge, a_effectivty_date, dt.dept_name
            	FROM `assets` ac
                	JOIN asset_cat i
                    ON ac.ac_id = i.ac_id
                    JOIN category ct
                    ON ac.cat_id = ct.cat_id
                    JOIN location lc
                    ON ac.loc_id = lc.loc_id
                    JOIN department dt
                    ON ac.dept_id = dt.dept_id
                    	WHERE i.ac_id = 4 ;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    while ($row = mysqli_fetch_assoc($result)) {

      ?>

        <tr>
          <td><?php echo $row['access_id'] ;?></td>
          <td><?php echo $row['a_name'] ;?></td>
          <td><?php echo $row['cat_name'] ;?></td>
          <td><?php echo $row['loc_name'] ;?></td>
          <td><?php echo $row['a_person_incharge'] ;?></td>
          <td><?php echo $row['a_effectivty_date'] ;?></td>
          <td><?php echo $row['dept_name'] ;?></td>
        </tr>


      <?php

    }

}

function Cat5Table($conn, $count) {

    $sql = "SELECT access_id, a_name, ct.cat_name, lc.loc_name, a_person_incharge, a_effectivty_date, dt.dept_name
            	FROM `assets` ac
                	JOIN asset_cat i
                    ON ac.ac_id = i.ac_id
                    JOIN category ct
                    ON ac.cat_id = ct.cat_id
                    JOIN location lc
                    ON ac.loc_id = lc.loc_id
                    JOIN department dt
                    ON ac.dept_id = dt.dept_id
                    	WHERE i.ac_id = 5 ;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    while ($row = mysqli_fetch_assoc($result)) {

      ?>

        <tr>
          <td><?php echo $row['access_id'] ;?></td>
          <td><?php echo $row['a_name'] ;?></td>
          <td><?php echo $row['cat_name'] ;?></td>
          <td><?php echo $row['loc_name'] ;?></td>
          <td><?php echo $row['a_person_incharge'] ;?></td>
          <td><?php echo $row['a_effectivty_date'] ;?></td>
          <td><?php echo $row['dept_name'] ;?></td>
        </tr>


      <?php

    }

}

function Cat6Table($conn, $count) {

    $sql = "SELECT access_id, a_name, ct.cat_name, lc.loc_name, a_person_incharge, a_effectivty_date, dt.dept_name
            	FROM `assets` ac
                	JOIN asset_cat i
                    ON ac.ac_id = i.ac_id
                    JOIN category ct
                    ON ac.cat_id = ct.cat_id
                    JOIN location lc
                    ON ac.loc_id = lc.loc_id
                    JOIN department dt
                    ON ac.dept_id = dt.dept_id
                    	WHERE i.ac_id = 6 ;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    while ($row = mysqli_fetch_assoc($result)) {

      ?>

        <tr>
          <td><?php echo $row['access_id'] ;?></td>
          <td><?php echo $row['a_name'] ;?></td>
          <td><?php echo $row['cat_name'] ;?></td>
          <td><?php echo $row['loc_name'] ;?></td>
          <td><?php echo $row['a_person_incharge'] ;?></td>
          <td><?php echo $row['a_effectivty_date'] ;?></td>
          <td><?php echo $row['dept_name'] ;?></td>
        </tr>


      <?php

    }

}

function Cat7Table($conn, $count) {

    $sql = "SELECT access_id, a_name, ct.cat_name, lc.loc_name, a_person_incharge, a_effectivty_date, dt.dept_name
            	FROM `assets` ac
                	JOIN asset_cat i
                    ON ac.ac_id = i.ac_id
                    JOIN category ct
                    ON ac.cat_id = ct.cat_id
                    JOIN location lc
                    ON ac.loc_id = lc.loc_id
                    JOIN department dt
                    ON ac.dept_id = dt.dept_id
                    	WHERE i.ac_id = 7 ;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    while ($row = mysqli_fetch_assoc($result)) {

      ?>

        <tr>
          <td><?php echo $row['access_id'] ;?></td>
          <td><?php echo $row['a_name'] ;?></td>
          <td><?php echo $row['cat_name'] ;?></td>
          <td><?php echo $row['loc_name'] ;?></td>
          <td><?php echo $row['a_person_incharge'] ;?></td>
          <td><?php echo $row['a_effectivty_date'] ;?></td>
          <td><?php echo $row['dept_name'] ;?></td>
        </tr>


      <?php

    }

}

function Cat8Table($conn, $count) {

    $sql = "SELECT access_id, a_name, ct.cat_name, lc.loc_name, a_person_incharge, a_effectivty_date, dt.dept_name
            	FROM `assets` ac
                	JOIN asset_cat i
                    ON ac.ac_id = i.ac_id
                    JOIN category ct
                    ON ac.cat_id = ct.cat_id
                    JOIN location lc
                    ON ac.loc_id = lc.loc_id
                    JOIN department dt
                    ON ac.dept_id = dt.dept_id
                    	WHERE i.ac_id = 8 ;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    while ($row = mysqli_fetch_assoc($result)) {

      ?>

        <tr>
          <td><?php echo $row['access_id'] ;?></td>
          <td><?php echo $row['a_name'] ;?></td>
          <td><?php echo $row['cat_name'] ;?></td>
          <td><?php echo $row['loc_name'] ;?></td>
          <td><?php echo $row['a_person_incharge'] ;?></td>
          <td><?php echo $row['a_effectivty_date'] ;?></td>
          <td><?php echo $row['dept_name'] ;?></td>
        </tr>


      <?php

    }

}

function Cat9Table($conn, $count) {

    $sql = "SELECT access_id, a_name, ct.cat_name, lc.loc_name, a_person_incharge, a_effectivty_date, dt.dept_name
            	FROM `assets` ac
                	JOIN asset_cat i
                    ON ac.ac_id = i.ac_id
                    JOIN category ct
                    ON ac.cat_id = ct.cat_id
                    JOIN location lc
                    ON ac.loc_id = lc.loc_id
                    JOIN department dt
                    ON ac.dept_id = dt.dept_id
                    	WHERE i.ac_id = 9 ;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    while ($row = mysqli_fetch_assoc($result)) {

      ?>

        <tr>
          <td><?php echo $row['access_id'] ;?></td>
          <td><?php echo $row['a_name'] ;?></td>
          <td><?php echo $row['cat_name'] ;?></td>
          <td><?php echo $row['loc_name'] ;?></td>
          <td><?php echo $row['a_person_incharge'] ;?></td>
          <td><?php echo $row['a_effectivty_date'] ;?></td>
          <td><?php echo $row['dept_name'] ;?></td>
        </tr>


      <?php

    }

}

function Cat10Table($conn, $count) {

    $sql = "SELECT access_id, a_name, ct.cat_name, lc.loc_name, a_person_incharge, a_effectivty_date, dt.dept_name
            	FROM `assets` ac
                	JOIN asset_cat i
                    ON ac.ac_id = i.ac_id
                    JOIN category ct
                    ON ac.cat_id = ct.cat_id
                    JOIN location lc
                    ON ac.loc_id = lc.loc_id
                    JOIN department dt
                    ON ac.dept_id = dt.dept_id
                    	WHERE i.ac_id = 10 ;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    while ($row = mysqli_fetch_assoc($result)) {

      ?>

        <tr>
          <td><?php echo $row['access_id'] ;?></td>
          <td><?php echo $row['a_name'] ;?></td>
          <td><?php echo $row['cat_name'] ;?></td>
          <td><?php echo $row['loc_name'] ;?></td>
          <td><?php echo $row['a_person_incharge'] ;?></td>
          <td><?php echo $row['a_effectivty_date'] ;?></td>
          <td><?php echo $row['dept_name'] ;?></td>
        </tr>


      <?php

    }

}

function Cat11Table($conn, $count) {

    $sql = "SELECT access_id, a_name, ct.cat_name, lc.loc_name, a_person_incharge, a_effectivty_date, dt.dept_name
            	FROM `assets` ac
                	JOIN asset_cat i
                    ON ac.ac_id = i.ac_id
                    JOIN category ct
                    ON ac.cat_id = ct.cat_id
                    JOIN location lc
                    ON ac.loc_id = lc.loc_id
                    JOIN department dt
                    ON ac.dept_id = dt.dept_id
                    	WHERE i.ac_id = 11 ;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    while ($row = mysqli_fetch_assoc($result)) {

      ?>

        <tr>
          <td><?php echo $row['access_id'] ;?></td>
          <td><?php echo $row['a_name'] ;?></td>
          <td><?php echo $row['cat_name'] ;?></td>
          <td><?php echo $row['loc_name'] ;?></td>
          <td><?php echo $row['a_person_incharge'] ;?></td>
          <td><?php echo $row['a_effectivty_date'] ;?></td>
          <td><?php echo $row['dept_name'] ;?></td>
        </tr>


      <?php

    }

}

function Cat12Table($conn, $count) {

    $sql = "SELECT access_id, a_name, ct.cat_name, lc.loc_name, a_person_incharge, a_effectivty_date, dt.dept_name
            	FROM `assets` ac
                	JOIN asset_cat i
                    ON ac.ac_id = i.ac_id
                    JOIN category ct
                    ON ac.cat_id = ct.cat_id
                    JOIN location lc
                    ON ac.loc_id = lc.loc_id
                    JOIN department dt
                    ON ac.dept_id = dt.dept_id
                    	WHERE i.ac_id = 12 ;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    while ($row = mysqli_fetch_assoc($result)) {

      ?>

        <tr>
          <td><?php echo $row['access_id'] ;?></td>
          <td><?php echo $row['cat_name'] ;?></td>
          <td><?php echo $row['loc_name'] ;?></td>
          <td><?php echo $row['a_person_incharge'] ;?></td>
          <td><?php echo $row['a_effectivty_date'] ;?></td>
          <td><?php echo $row['dept_name'] ;?></td>
        </tr>


      <?php

    }

}

function Cat13Table($conn, $count) {

    $sql = "SELECT access_id, a_name, ct.cat_name, lc.loc_name, a_person_incharge, a_effectivty_date, dt.dept_name
            	FROM `assets` ac
                	JOIN asset_cat i
                    ON ac.ac_id = i.ac_id
                    JOIN category ct
                    ON ac.cat_id = ct.cat_id
                    JOIN location lc
                    ON ac.loc_id = lc.loc_id
                    JOIN department dt
                    ON ac.dept_id = dt.dept_id
                    	WHERE i.ac_id = 13 ;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    while ($row = mysqli_fetch_assoc($result)) {

      ?>

        <tr>
          <td><?php echo $row['access_id'] ;?></td>
          <td><?php echo $row['a_name'] ;?></td>
          <td><?php echo $row['cat_name'] ;?></td>
          <td><?php echo $row['loc_name'] ;?></td>
          <td><?php echo $row['a_person_incharge'] ;?></td>
          <td><?php echo $row['a_effectivty_date'] ;?></td>
          <td><?php echo $row['dept_name'] ;?></td>
        </tr>


      <?php

    }

}

function Cat14Table($conn, $count) {

    $sql = "SELECT access_id, a_name, ct.cat_name, lc.loc_name, a_person_incharge, a_effectivty_date, dt.dept_name
            	FROM `assets` ac
                	JOIN asset_cat i
                    ON ac.ac_id = i.ac_id
                    JOIN category ct
                    ON ac.cat_id = ct.cat_id
                    JOIN location lc
                    ON ac.loc_id = lc.loc_id
                    JOIN department dt
                    ON ac.dept_id = dt.dept_id
                    	WHERE i.ac_id = 14 ;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    while ($row = mysqli_fetch_assoc($result)) {

      ?>

        <tr>
          <td><?php echo $row['access_id'] ;?></td>
          <td><?php echo $row['a_name'] ;?></td>
          <td><?php echo $row['cat_name'] ;?></td>
          <td><?php echo $row['loc_name'] ;?></td>
          <td><?php echo $row['a_person_incharge'] ;?></td>
          <td><?php echo $row['a_effectivty_date'] ;?></td>
          <td><?php echo $row['dept_name'] ;?></td>
        </tr>


      <?php

    }

}

function loc1Table($conn, $count) {

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
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    while ($row = mysqli_fetch_assoc($result)) {

      ?>

        <tr>
          <td><?php echo $row['access_id'] ;?></td>
          <td><?php echo $row['a_name'] ;?></td>
          <td><?php echo $row['ac_name'] ;?></td>
          <td><?php echo $row['cat_name'] ;?></td>
          <td><?php echo $row['a_person_incharge'] ;?></td>
          <td><?php echo $row['a_effectivty_date'] ;?></td>
          <td><?php echo $row['dept_name'] ;?></td>
        </tr>


      <?php

    }

}

function loc2Table($conn, $count) {

    $sql = "SELECT access_id, a_name, i.ac_name, ct.cat_name, dt.dept_name, a_person_incharge, a_effectivty_date
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
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    while ($row = mysqli_fetch_assoc($result)) {

      ?>

        <tr>
          <td><?php echo $row['access_id'] ;?></td>
          <td><?php echo $row['a_name'] ;?></td>
          <td><?php echo $row['ac_name'] ;?></td>
          <td><?php echo $row['cat_name'] ;?></td>
          <td><?php echo $row['a_person_incharge'] ;?></td>
          <td><?php echo $row['a_effectivty_date'] ;?></td>
          <td><?php echo $row['dept_name'] ;?></td>
        </tr>


      <?php

    }

}

function loc3Table($conn, $count) {

    $sql = "SELECT access_id, a_name, i.ac_name, ct.cat_name, dt.dept_name, a_person_incharge, a_effectivty_date
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
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    while ($row = mysqli_fetch_assoc($result)) {

      ?>

        <tr>
          <td><?php echo $row['access_id'] ;?></td>
          <td><?php echo $row['a_name'] ;?></td>
          <td><?php echo $row['ac_name'] ;?></td>
          <td><?php echo $row['cat_name'] ;?></td>
          <td><?php echo $row['a_person_incharge'] ;?></td>
          <td><?php echo $row['a_effectivty_date'] ;?></td>
          <td><?php echo $row['dept_name'] ;?></td>
        </tr>


      <?php

    }

}

function loc4Table($conn, $count) {

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
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    while ($row = mysqli_fetch_assoc($result)) {

      ?>

        <tr>
          <td><?php echo $row['access_id'] ;?></td>
          <td><?php echo $row['a_name'] ;?></td>
          <td><?php echo $row['ac_name'] ;?></td>
          <td><?php echo $row['cat_name'] ;?></td>
          <td><?php echo $row['a_person_incharge'] ;?></td>
          <td><?php echo $row['a_effectivty_date'] ;?></td>
          <td><?php echo $row['dept_name'] ;?></td>
        </tr>


      <?php

    }

}

function loc5Table($conn, $count) {

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
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    while ($row = mysqli_fetch_assoc($result)) {

      ?>

        <tr>
          <td><?php echo $row['access_id'] ;?></td>
          <td><?php echo $row['a_name'] ;?></td>
          <td><?php echo $row['ac_name'] ;?></td>
          <td><?php echo $row['cat_name'] ;?></td>
          <td><?php echo $row['a_person_incharge'] ;?></td>
          <td><?php echo $row['a_effectivty_date'] ;?></td>
          <td><?php echo $row['dept_name'] ;?></td>
        </tr>


      <?php

    }

}

function loc6Table($conn, $count) {

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
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    while ($row = mysqli_fetch_assoc($result)) {

      ?>

        <tr>
          <td><?php echo $row['access_id'] ;?></td>
          <td><?php echo $row['a_name'] ;?></td>
          <td><?php echo $row['ac_name'] ;?></td>
          <td><?php echo $row['cat_name'] ;?></td>
          <td><?php echo $row['a_person_incharge'] ;?></td>
          <td><?php echo $row['a_effectivty_date'] ;?></td>
          <td><?php echo $row['dept_name'] ;?></td>
        </tr>


      <?php

    }

}





 ?>
