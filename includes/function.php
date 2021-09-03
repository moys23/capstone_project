<?php

function totalCount($conn, $count) {
    $sql = "SELECT count(dept_id) cnt FROM `assets`;";
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

function dataTable($conn, $count){
    $sqldata = "SELECT a_name, i.ac_name, ct.cat_name, dt.dept_name, lc.loc_name, a_person_incharge, a_effectivty_date
              FROM `assets` ac
                  JOIN `asset_cat` i
                  ON ac.ac_id = i.ac_id
                  JOIN `category` ct
                  ON ac.cat_id = ct.cat_id
                  JOIN `department` dt
                  ON ac.dept_id = dt.dept_id
                  JOIN `location` lc
                  ON ac.loc_id = lc.loc_id;";
    $result = mysqli_query($conn, $sqldata);
    $resultCheck = mysqli_num_rows($result);

    while ($row = mysqli_fetch_assoc($result)) {


    ?>
        <tr>
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

function csdTable($conn, $count){
    $sqldata = "SELECT a_name, i.ac_name, ct.cat_name, dt.dept_name, lc.loc_name, a_person_incharge, a_effectivty_date
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
    $sqldata = "SELECT a_name, i.ac_name, ct.cat_name, dt.dept_name, lc.loc_name, a_person_incharge, a_effectivty_date
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





 ?>
