
         <?php
         include_once "conn.php";
         // include_once "function.php";

           if(isset($_POST['btnsubmit'])){

             $ASSname = mysqli_real_escape_string($conn, $_POST['txtqr']);
             $incharge = mysqli_real_escape_string($conn, $_POST['incharge']);
             $location = mysqli_real_escape_string($conn, $_POST['itmLoc']);
             $efcdate = mysqli_real_escape_string($conn, $_POST['EFdate']);
             $category = mysqli_real_escape_string($conn, $_POST['ItemCategory']);
             $roomCat = mysqli_real_escape_string($conn, $_POST['RoomCategory']);

             $linkpage = 'https://192.168.1.118/capstone_project/qrCodes.php';



             //CHECK IF EMPTY INPUT
             if (empty($ASSname) || empty($incharge) || empty($location) || empty($efcdate) || empty($category) || empty($roomCat)) {
               header("location: ../AdminPage/index.php?error=emptyinputs");
               exit();
             }else { //CHECK IF ITEM NAME IS ALREADY TAKEN OR EXISTING
                     $sql = "SELECT * FROM `assets` WHERE a_name = '$ASSname' ;";
                     $result = mysqli_query($conn, $sql);
                     $resultCheck = mysqli_num_rows($result);

                     if ($resultCheck > 0) {
                       header("location: ../AdminPage/index.php?error=AlreadyExisting");
                       exit();
                     }else {

                         //INSERT THE USER INTO THE DATABASE
                         $sql = "INSERT INTO `assets` (a_name, ac_id, cat_id, a_location, a_person_incharge, a_effectivty_date) VALUES ('$ASSname', '$category',  '$roomCat', '$location' , '$incharge', '$efcdate') ;";

                         mysqli_query($conn, $sql);
                         echo "<img src='https://chart.googleapis.com/chart?cht=qr&chs=150x150&chl=$linkpage' height=250 width=250/>";
                         // header("location: qrCodes.php?registered");
                         // exit();


                         }
                       }
                     } else {
                       header("location: ../DataTables/overview.php");
                       exit();
                     }
