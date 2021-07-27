  <nav id="colorDesign" class="navbar navbar-expand-md navbar-dark text-light">
    <a href="index.php" class="text-decoration-none">
      <h2 id="headTitle" class="display-7 pt-1 mx-3 text-light">ADMINISTRATOR</h2>
    </a>

      <button class="navbar-toggler mx-1" type="button" data-toggle="collapse" data-target="#navbarADMIN" aria-controls="navbarADMIN" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse px-3 justify-content-end " id="navbarADMIN">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

            <li class="nav-item mr-2 list-unstyled active">
              <form method="GET">
                <div class="input-group">
                  <input id="searchbar" class="form-control p-2 mx-2 rounded" type="text" name="srchkey" placeholder="Search">
                  <button class="btn btn-outline-success rounded" type="submit" name="search">Search <i class="bi bi-search"></i></button>
                </div>
              </form>
            </li>

            <!-- <li class="nav-item mx-2 list-unstyled active">

              <button class="nav-link bg-transparent text-light border-0" data-toggle="modal" data-target="#addUsers"> <i class="bi-plus-circle"></i> New User</button>

              <div class="modal fade" id="addUsers" tabindex="-1" role="dialog" aria-labelledby="addUsersLabel" aria-hidden="true">
                 <div class="modal-dialog" role="document">
                   <div class="modal-content">
                     <div class="modal-header">
                       <h5 class="modal-title text-dark" id="addUsersLabel">Create New User</h5>
                       <button type="button" class="close btn btn-transparent" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                       </button>
                     </div>
                     <div class="modal-body text-dark">
                       <?php

                         // $headURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                         //
                         // if (strpos($headURL, "error=emptyinputs") == true) {
                         //   echo "<div class='alert alert-danger mt-2 rounded-0' role='alert'>
                         //           Empty Input! Please finish filling the inputs.
                         //         </div>";
                         //       }
                         // elseif (strpos($headURL, "error=invalidchar") == true) {
                         //   echo "<div class='alert alert-danger mt-2' role='alert'>
                         //           Warning! Invalid input character.
                         //         </div>";
                         //       }
                         // elseif (strpos($headURL, "error=invalidemail") == true) {
                         //   echo "<div class='alert alert-danger mt-2' role='alert'>
                         //           Warning! Email invalid.
                         //         </div>";
                         //       }
                         // elseif (strpos($headURL, "error=usertaken") == true) {
                         //   echo "<div class='alert alert-danger mt-2' role='alert'>
                         //           Warning! Username is already taken.
                         //         </div>";
                         //       }
                         // elseif (strpos($headURL, "error=emailtaken") == true) {
                         //   echo "<div class='alert alert-danger mt-2' role='alert'>
                         //           Warning! Email has already been used.
                         //         </div>";
                         //       }
                         // elseif (strpos($headURL, "error=passunmatch") == true) {
                         //   echo "<div class='alert alert-danger mt-2' role='alert'>
                         //           Password don't match.
                         //         </div>";
                         //       }
                         // elseif (strpos($headURL, "registered") == true) {
                         //   echo "<div class='alert alert-success mt-2' role='alert'>
                         //           Registration success!
                         //         </div>";
                         //       }
                        ?>

                       <form enctype="multipart/form-data" action="../includes/addUsers.php" method="POST">
                         <div class="input-group">

                           <div class="form-group mx-1">
                             <label for="item">Name</label>
                             <input type="text" class="form-control border border-dark" name="newAdminName" required>
                           </div>
                           <div class="form-group mx-1">
                             <label for="item">Address</label>
                             <input type="text" class="form-control border border-dark" name="address" required>
                           </div>

                           <div class="form-group mx-1">
                             <label for="item">Email</label>
                             <input class="form-control border border-dark" name="email" type="text" required>
                           </div>
                           <div class="form-group mx-1">
                             <label for="item">Username</label>
                             <input class="form-control border border-dark" name="username" type="text" required>
                           </div>

                           <div class="form-group mx-1">
                             <label for="item">New Password</label>
                             <input class="form-control border border-dark" name="Psdword1" type="password" required>
                           </div>

                           <div class="form-group mx-1">
                             <label for="item">Confirm Password</label>
                             <input class="form-control border border-dark" name="Psdword2" type="password" required>
                           </div>

                           <div class="form-group mt-1 mx-1">
                               <label for="SelectCategory" class="form-label">Restriction</label>
                               <select name="AdminCategory" id="" class="form-select mb-2">
                                   <option value='A'>Admin</option>
                                   <option value='B'>Stuff Admin</option>
                               </select>
                           </div>
                         </div>
                         <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                           <button type="submit" class="btn btn-primary" id="subBtn" name="createUser">Submit</button>
                         </div>
                       </form>
                     </div>
                     </div>
                   </div>
                 </div>

            </li> -->

            <div class="container mt-2 bg-light rounded">

              <?php include_once 'sidebar_nav.php'; ?>

            </div>


              <li class="border-top my-3"></li>

              <li class="nav-item mr-2 mb-1 list-unstyled active">
                <div class="align-items-center rounded dropdown">
                  <a href="#" class=" overflow-hidden link-dark text-decoration-none dropdown-toggle" id="dpAccount" data-bs-toggle="dropdown" aria-expanded="false">
                    <!-- Put image after database is fixed -->
                      <!-- <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2"> -->
                      <strong class="">
                        <?php echo $_SESSION['user_name'];?>
                      </strong>
                  </a>

                    <ul class="dropdown-menu text-small shadow" aria-labelledby="dpAccount">
                        <li><a id="dp1" class="dropdown-item text-dark" href="#">Settings</a></li>
                        <li><a id="dp1" class="dropdown-item text-dark" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a id="dp1" class="dropdown-item text-dark" href="../includes/logout.php">Sign out</a></li>
                    </ul>
                </div>
              </li>


          </ul>
      </div>

  </nav>
