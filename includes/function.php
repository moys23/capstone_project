<?php

function updateBtn($conn, $count){

  if (isset($_GET['search'])) {

    $data = htmlentities($_GET['srchkey']);


    $sql = "SELECT  a_name, i.ac_name, ct.cat_name, dt.dept_name, lc.loc_name, a_person_incharge, a_effectivty_date
              FROM `assets` ac
                JOIN `asset_cat` i
                ON ac.ac_id = i.ac_id
                JOIN `category` ct
                ON ac.cat_id = ct.cat_id
                JOIN `department` dt
                ON ac.dept_id = dt.dept_id
                JOIN `location` lc
                ON ac.loc_id = lc.loc_id
                  WHERE a_name LIKE '{$data}'
                    OR i.ac_name LIKE '{$data}'
                    OR ct.cat_name LIKE '{$data}'
                    OR dt.dept_name LIKE '{$data}'
                    OR lc.loc_name LIKE '{$data}'
                    OR a_person_incharge LIKE '{$data}'
                    OR a_effectivty_date LIKE '{$data}'
                    ;";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);

      ?>

      <div class="container  border border-dark search-sticky mt-2" style="padding: 0">
        <table class="table text-center">
          <thead class="text-light size1 bg-success">
            <tr>
              <th class=" border-bottom border-dark">Name</th>
              <th class=" border-bottom border-dark">Assets Category</th>
              <th class=" border-bottom border-dark">Room Type</th>
              <th class=" border-bottom border-dark">Location</th>
              <th class=" border-bottom border-dark">Personnel Incharge</th>
              <th class=" border-bottom border-dark">Released Date</th>
              <th class=" border-bottom border-dark">Department</th>
              <th class=" border-bottom border-dark">Options</th>
            </tr>
          </thead>
          <tbody class="size1">

      <?php


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
                <td>
                  <button class="btn btn-warning border border-dark" type="btnEdit" name="button">Update</button>
                </td>
              </tr>

              <?php

            }

          ?>

        </tbody>
      </table>
    </div>

          <?php

    }

}

function searchResult($conn, $count) {

    if (isset($_GET['search'])) {

      $data = htmlentities($_GET['srchkey']);


      $sql = "SELECT  a_name, i.ac_name, ct.cat_name, dt.dept_name, lc.loc_name, a_person_incharge, a_effectivty_date
                FROM `assets` ac
                  JOIN `asset_cat` i
                  ON ac.ac_id = i.ac_id
                  JOIN `category` ct
                  ON ac.cat_id = ct.cat_id
                  JOIN `department` dt
                  ON ac.dept_id = dt.dept_id
                  JOIN `location` lc
                  ON ac.loc_id = lc.loc_id
                  	WHERE a_name LIKE '{$data}'
                    	OR i.ac_name LIKE '{$data}'
                      OR ct.cat_name LIKE '{$data}'
                      OR dt.dept_name LIKE '{$data}'
                      OR lc.loc_name LIKE '{$data}'
                      OR a_person_incharge LIKE '{$data}'
                      OR a_effectivty_date LIKE '{$data}'
                      ;";
        $result = mysqli_query($conn, $sql);
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

}

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

function Cat1Table($conn, $count) {

    $sql = "SELECT a_name, ct.cat_name, lc.loc_name, a_person_incharge, a_effectivty_date, dt.dept_name
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

    $sql = "SELECT a_name, ct.cat_name, lc.loc_name, a_person_incharge, a_effectivty_date, dt.dept_name
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

    $sql = "SELECT a_name, ct.cat_name, lc.loc_name, a_person_incharge, a_effectivty_date, dt.dept_name
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

    $sql = "SELECT a_name, ct.cat_name, lc.loc_name, a_person_incharge, a_effectivty_date, dt.dept_name
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

    $sql = "SELECT a_name, ct.cat_name, lc.loc_name, a_person_incharge, a_effectivty_date, dt.dept_name
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

    $sql = "SELECT a_name, ct.cat_name, lc.loc_name, a_person_incharge, a_effectivty_date, dt.dept_name
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

    $sql = "SELECT a_name, ct.cat_name, lc.loc_name, a_person_incharge, a_effectivty_date, dt.dept_name
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

    $sql = "SELECT a_name, ct.cat_name, lc.loc_name, a_person_incharge, a_effectivty_date, dt.dept_name
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

    $sql = "SELECT a_name, ct.cat_name, lc.loc_name, a_person_incharge, a_effectivty_date, dt.dept_name
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

    $sql = "SELECT a_name, ct.cat_name, lc.loc_name, a_person_incharge, a_effectivty_date, dt.dept_name
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

    $sql = "SELECT a_name, ct.cat_name, lc.loc_name, a_person_incharge, a_effectivty_date, dt.dept_name
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

    $sql = "SELECT a_name, ct.cat_name, lc.loc_name, a_person_incharge, a_effectivty_date, dt.dept_name
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

function Cat13Table($conn, $count) {

    $sql = "SELECT a_name, ct.cat_name, lc.loc_name, a_person_incharge, a_effectivty_date, dt.dept_name
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

    $sql = "SELECT a_name, ct.cat_name, lc.loc_name, a_person_incharge, a_effectivty_date, dt.dept_name
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

    $sql = "SELECT a_name,  i.ac_name, ct.cat_name, dt.dept_name, a_person_incharge, a_effectivty_date
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

    $sql = "SELECT a_name,  i.ac_name, ct.cat_name, dt.dept_name, a_person_incharge, a_effectivty_date
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

    $sql = "SELECT a_name,  i.ac_name, ct.cat_name, dt.dept_name, a_person_incharge, a_effectivty_date
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

    $sql = "SELECT a_name,  i.ac_name, ct.cat_name, dt.dept_name, a_person_incharge, a_effectivty_date
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

    $sql = "SELECT a_name,  i.ac_name, ct.cat_name, dt.dept_name, a_person_incharge, a_effectivty_date
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

    $sql = "SELECT a_name,  i.ac_name, ct.cat_name, dt.dept_name, a_person_incharge, a_effectivty_date
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
