<?php

session_start();

if (isset($_POST['submit'])) {

  include_once 'conn.php';

$username = $_POST['username'];
$pwd = $_POST['pwd'];

if (empty($username) || empty($pwd)) {
  header("location: ../index.php?error=emptyinputs");
  exit();
} else {
    $sql = "SELECT * FROM user WHERE u_username = '$username' OR u_email = '$username';";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_affected_rows($conn);

    if ($resultCheck < 1) {
      header("location: ../index.php?error=unknownuser");
      exit();
    } else {
      if ($row = mysqli_fetch_assoc($result)) {

        if ($pwd == false) {
          header("location: ../index.php?error=signin");
          exit();
        }
        elseif ($pwd == true) {
          // Log in user here
          $_SESSION['user_uid']      = $row['u_id'];
          $_SESSION['user_name']     = $row['u_name'];
          $_SESSION['user_username'] = $row['u_username'];
          $_SESSION['user_email']    = $row['u_email'];
          $_SESSION['user_pass']     = $row['u_password'];
          $_SESSION['user_usertype'] = $row['u_usertype'];

          if ($_SESSION['user_usertype'] == 'A') {
            header("location: ../AdminPage/index.php?overview");
            exit();
          }
          elseif ($_SESSION['user_usertype'] == 'B') {
            header("location: ../UsersPage/index.php?login=success");
            exit();
          }

        }
      }
    }
  }
}  else {
  header("location: ../index.php?error=7");
  exit();
}



 ?>
