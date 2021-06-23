<?php
  session_start();
  include_once '../includes/conn.php';

  if(isset($_SESSION['user_usertype']) && isset($_SESSION['user_uid'])){
      if($_SESSION['user_usertype'] == "N"){
          header("location: ../index.php?error=accessdenied");
          exit();
      }
  }
  else{
      header("location: ../index.php?error=accessdenied");
      exit();
  }
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
    <script src="../js/cdn.jquery.min.js"></script>
    <style>
      [data-toggle="collapse"].collapsed .if-not-collapsed,
      [data-toggle="collapse"]:not(.collapsed) .if-collapsed {display: none;}
    </style>
  </head>
  <body>

    <?php include_once 'nav.php'; ?>

      <div class="d-flex justify-content-start">
       <div class=" w-25 flex-shrink-1">
           <ul class="list-group">
             <li class="list-group-item">
               <a class="text-decoration-none text-dark m-0 collapsed" data-toggle="collapse" href="#collapseContent" role="button" aria-expanded="false" aria-controls="collapseContent">
                 <span class="if-collapsed">Overview <i class="bi bi-chevron-left"></i></span>
                 <span class="if-not-collapsed">Overview <i class="bi bi-chevron-down"></i></span>
               </a>
                  <div class="collapse  border-0" id="collapseContent">
                    <ul class="list-group">
                       <li class="list-group-item">


                         <a class="text-decoration-none text-dark m-0 collapsed" data-toggle="collapse" href="#collapseContent1.1" role="button" aria-expanded="false" aria-controls="collapseContent1.1">
                           <span class="if-collapsed">Overview <i class="bi bi-chevron-left"></i></span>
                           <span class="if-not-collapsed">Overview <i class="bi bi-chevron-down"></i></span>
                         </a>
                            <div class="collapse" id="collapseContent1.1">
                              <ul class="list-group">
                                 <li class="list-group-item">

                                 </li>
                                 <li class="list-group-item">

                                 </li>
                                 <li class="list-group-item">

                                 </li>
                              </ul>
                            </div>


                       </li>
                       <li class="list-group-item">

                       </li>
                       <li class="list-group-item">

                       </li>
                    </ul>
                  </div>
             </li>
             <li class="list-group-item">...</li>
             <li class="list-group-item">...</li>
           </ul>
         </div>
       <div class="p-2 w-100 bg-success">Flex item</div>
      </div>







  </body>
  <?php mysqli_close($conn);?>
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>
</html>
