<?php
include_once "conn.php";
// include_once "function.php";

  if(isset($_POST['AddCat'])){

    $ASSname = htmlentities($_POST['AssetName']);

    if (empty($ASSname)) {
      header("location: ../AdminPage/index.php?error=emptyinputs");
      exit();
    }else { //CHECK IF INPUT CHARACTERS ARE VALID
      if (!preg_match("/^[a-zA-Z @&$]*$/", $ASSname)) {
        header("location: ../AdminPage/index.php?error=invalidchar");
        exit();
      }else { //CHECK IF USERNAME IS ALREADY TAKEN
            $sql = "SELECT * FROM category WHERE cat_name = '$ASSname' ;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0) {
              header("location: ../AdminPage/index.php?error=nameexists");
              exit();
            } else {

                //INSERT THE USER INTO THE DATABASE
                $sql = "INSERT INTO category (cat_name) VALUES ('$ASSname') ;";

                mysqli_query($conn, $sql);
                header("location: ../AdminPage/index.php?registered");
                exit();
                }
              }
            }

  }
  else {
    header("location: ../AdminPage/index.php");
    exit();
  }
