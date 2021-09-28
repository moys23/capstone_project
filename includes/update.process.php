<?php
if(isset($_POST['proccessREQUEST'])){
        include "conn.php";
        $data = htmlentities($_POST['asset_id']);
        // $new_qty = htmlentities($_POST['item_qty']);
         $sql_upd = "UPDATE `assets` SET `a_name` = '$num1', `a_person_incharge` = '$num2',   `loc_id` = $num3, `cat_id` = $num4, `dept_id` = $num5 WHERE a_id = '$data';";
         $result = mysqli_query($conn, $sql_upd);
        
    }