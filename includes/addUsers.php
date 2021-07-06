<?php
include_once "conn.php";
// include_once "function.php";

  if(isset($_POST['createUser'])){

    $name = mysqli_real_escape_string($conn, $_POST['newAdminName']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $cat = mysqli_real_escape_string($conn, $_POST['AdminCategory']);
    $pwd = mysqli_real_escape_string($conn, $_POST['Psdword1']);
    $pwd2 = mysqli_real_escape_string($conn, $_POST['Psdword2']);



    //CHECK IF EMPTY INPUT
    if (empty($name) || empty($username) || empty($email) || empty($address) || empty($pwd) || empty($pwd2)) {
      header("location: ../AdminPage/index.php?error=emptyinputs");
      exit();
    }else { //CHECK IF INPUT CHARACTERS ARE VALID
      if (!preg_match("/^[a-zA-Z @&$]*$/", $name) || !preg_match("/^[a-zA-Z @&$]*$/", $address)) {
        header("location: ../AdminPage/index.php?error=invalidchar");
        exit();
      }else {//CHECK IF EMAIL IS VALID
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("location: ../AdminPage/index.php?error=invalidemail");
            exit();
          }
          else { //CHECK IF USERNAME IS ALREADY TAKEN
            $sql = "SELECT * FROM `user` WHERE u_username = '$username' ;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0) {
              header("location: ../AdminPage/index.php?error=usertaken");
              exit();
            }
            else { //CHECK IF EMAIL IS ALREADY TAKEN
              $sql = "SELECT * FROM `user` WHERE u_email = '$email' ;";
              $result = mysqli_query($conn, $sql);
              $resultCheck = mysqli_num_rows($result);

              if ($resultCheck > 0) {
                header("location: ../AdminPage/index.php?error=emailtaken");
                exit();
              }
              else {
                if ($pwd2 !== $pwd) {
                  header("location: ../AdminPage/index.php?error=passunmatch");
                  exit();
                }
                else {

                //INSERT THE USER INTO THE DATABASE
                $sql = "INSERT INTO user (u_name, u_address, u_email, u_username, u_password, u_usertype) VALUES ('$name', '$address', '$email' , '$username', '$pwd2', '$cat') ;";

                mysqli_query($conn, $sql);
                header("location: ../AdminPage/index.php?registered");
                exit();
                }
              }
            }
          }
        }
      }

  }
  else {
    header("location: ../AdminPage/index.php");
    exit();
  }
