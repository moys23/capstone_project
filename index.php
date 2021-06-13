<?php
  include_once 'includes/conn.php';

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="#" type="image/x-icon">
  <title>BUPC Supply Office Inventory System</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="font/bootstrap-icons.css">
  <script src="js/cdn.jquery.min.js"></script>
</head>
  <body>


    <div class="wholeWrap">
      <div id="textWrapper" class="container">
        <h2 id="headerText" class="display-1 text-center pt-2 shadow">ASSETS INVENTORY SYSTEM</h2>
      </div>
      <div id="LogInUser" class="container-fluid">
        <div class="container pt-2 overflow-hidden">
          <?php
          $headURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

          if (strpos($headURL, "error=accessdenied") == true) { ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
             <strong>Warning!</strong> Access denied. Login Unauthorized.
               <button type="button" class="close btn btn-transparent" style="float: right; padding-top: 0;" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <?php
          }
          ?>
        </div>
        <div class="row justify-content-center">
          <div class="col-4">
            <div class="card rounded-0">
              <div class="card-header bg-primary text-light">
                <h3 class="text-center">ADMINISTRATOR</h3>
              </div>
              <div class="card-body">
                <?php
                $headURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                if (strpos($headURL, "error=emptyinputs") == true) {
                  echo "<div id='err1' class='alert alert-danger mt-1 rounded' role='alert'><i class='bi bi-exclamation-triangle-fill'></i>&nbsp<strong>Warning!</strong> Empty Inputs.
                  <button type='button' class='close btn btn-transparent' style='float: right; padding-top: 0;' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                  </button></div>";
                }

                ?>
                <form class="text-center" action="includes/login.process.php" method="POST">
                  <div class="row my-1 justify-content-center">
                    <div class="input-group my-1 text-center">
                      <div class="col-4">
                        <label for="username">
                          <p class="mt-1">Username: </p>
                        </label>
                      </div>
                      <div class="col-7">
                        <input class="container-fluid form-control border-dark" type="text" name="username">
                      </div>
                    </div>
                    <div class="input-group my-1 text-center">
                      <div class="col-4">
                        <label for="username">
                          <p class="mt-1">Password: </p>
                        </label>
                      </div>
                      <div class="col-7">
                        <input class="container-fluid form-control border-dark" type="password" name="pwd">
                      </div>
                    </div>
                  </div>
                  <button class="btn btn-primary px-4" name="submit">Sign in</button>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </body>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

</html>