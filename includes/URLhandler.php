<?php

  if(isset($_SESSION['user_usertype']) && isset($_SESSION['user_uid'])){
      if($_SESSION['user_usertype'] == "S"){
          header("location: ../index.php?error=accessdenied");
          exit();
      }
  }
  else{
      header("location: ../index.php?error=accessdenied");
      exit();
  }
?>
