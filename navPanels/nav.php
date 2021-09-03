  <nav id="colorDesign" class="navbar navbar-expand-md navbar-dark text-light">
    <a href="../AdminPage/index.php" class="text-decoration-none">
      <h2 id="headTitle" class="pt-2 text-light">BUPC Supply Office <img src="../images/pcLogo.png" class="rounded-circle size3"></h2>
    </a>

      <button class="navbar-toggler mx-1" type="button" data-toggle="collapse" data-target="#navbarADMIN" aria-controls="navbarADMIN" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse px-3 justify-content-end " id="navbarADMIN">
          <ul class="navbar-nav mt-2 mt-lg-0">

            <li class="nav-item dropdown mx-2">
              <a class="nav-link text-light dropdown-toggle" id="drpOverview" role="button" data-toggle="dropdown">Department</a>
              <div class="dropdown-menu" aria-labelledby="drpOverview">
                <a class="dropdown-item" href="../AdminPage/index.php?view">Overview</a>
                <a class="dropdown-item" href="../DataTables/CSDepartment.php?view">CSD Department</a>
                <a class="dropdown-item" href="../DataTables/EDUCdept.php?view">EDUC Department</a>
              </div>
            </li>

            <li class="nav-item dropdown mx-2">
              <a class="nav-link text-light dropdown-toggle" id="drpCategory" role="button" data-toggle="dropdown">Category</a>
              <div class="dropdown-menu" aria-labelledby="drpOverview">
                <a id="links" class="dropdown-item text-dark" href="#">Armed-chair</a>
                <a id="links" class="dropdown-item text-dark" href="#">Table</a>
                <a id="links" class="dropdown-item text-dark" href="#">Electric Fan</a>
                <a id="links" class="dropdown-item text-dark" href="#">Curtain</a>
                <a id="links" class="dropdown-item text-dark" href="#">Monoblock Chair</a>
                <a id="links" class="dropdown-item text-dark" href="#">Graph Board</a>
                <a id="links" class="dropdown-item text-dark" href="#">Monitor</a>
                <a id="links" class="dropdown-item text-dark" href="#">Printer</a>
                <a id="links" class="dropdown-item text-dark" href="#">AVR</a>
                <a id="links" class="dropdown-item text-dark" href="#">System Unit</a>
                <a id="links" class="dropdown-item text-dark" href="#">Keyboard</a>
                <a id="links" class="dropdown-item text-dark" href="#">Mouse</a>
                <a id="links" class="dropdown-item text-dark" href="#">Switch</a>
                <a id="links" class="dropdown-item text-dark" href="#">Projector</a>
              </div>
            </li>

            <li class="nav-item dropdown mx-2">
              <a class="nav-link text-light dropdown-toggle" id="drpOverview" role="button" data-toggle="dropdown">Location</a>
              <div class="dropdown-menu" aria-labelledby="drpOverview">
                <a class="dropdown-item" href="#">SB-1</a>
                <a class="dropdown-item" href="#">SB-2</a>
                <a class="dropdown-item" href="#">SB-3</a>
                <a class="dropdown-item" href="#">ECB-15</a>
                <a class="dropdown-item" href="#">ECB-16</a>
                <a class="dropdown-item" href="#">ECB-17</a>
              </div>
            </li>



            <!-- <li class="nav-item mr-2 list-unstyled active">

            <div class="container mt-2 bg-light rounded sidebar-sticky">

              <div class="container-fluid">

                <button class="btn btn-transparent border border-0 overflow-hidden shadow-none" type="button" data-toggle="collapse" data-target="#overviewBTN" aria-expanded="false" aria-controls="overviewBTN">
                  Overview <i class="bi-chevron-down"></i>
                </button>

                <div class="collapse" id="overviewBTN">
                  <ul>
                    <div class="container-fluid">

                      <li><a id="links" class="text-dark border-bottom border-dark" href="../DataTables/overview.php?view">Overview</a> </li>
                      <li><a id="links" class="text-dark border-bottom border-dark" href="../DataTables/CSDepartment.php?view">CSD Department</a> </li>
                      <li><a id="links" class="text-dark border-bottom border-dark" href="../DataTables/EDUCdept.php?view">EDUC Department</a> </li>

                    </div>
                  </ul>
                </div>

              </div>

              <div class="container-fluid">

                <button class="btn btn-transparent border border-0 overflow-hidden shadow-none" type="button" data-toggle="collapse" data-target="#categoryBTN" aria-expanded="false" aria-controls="categoryBTN">
                  Category <i class="bi-chevron-down"></i>
                </button>

                <div class="collapse" id="categoryBTN">
                  <ul>
                    <li><a id="links" class="text-dark border-bottom border-dark" href="#">Armed-chair</a> </li>
                    <li><a id="links" class="text-dark border-bottom border-dark" href="#">Table</a> </li>
                    <li><a id="links" class="text-dark border-bottom border-dark" href="#">Electric Fan</a> </li>
                    <li><a id="links" class="text-dark border-bottom border-dark" href="#">Curtain</a> </li>
                    <li><a id="links" class="text-dark border-bottom border-dark" href="#">Monoblock Chair</a> </li>
                    <li><a id="links" class="text-dark border-bottom border-dark" href="#">Graph Board</a> </li>
                    <li><a id="links" class="text-dark border-bottom border-dark" href="#">Monitor</a> </li>
                    <li><a id="links" class="text-dark border-bottom border-dark" href="#">Printer</a> </li>
                    <li><a id="links" class="text-dark border-bottom border-dark" href="#">AVR</a> </li>
                    <li><a id="links" class="text-dark border-bottom border-dark" href="#">System Unit</a> </li>
                    <li><a id="links" class="text-dark border-bottom border-dark" href="#">Keyboard</a> </li>
                    <li><a id="links" class="text-dark border-bottom border-dark" href="#">Mouse</a> </li>
                    <li><a id="links" class="text-dark border-bottom border-dark" href="#">Switch</a> </li>
                    <li><a id="links" class="text-dark border-bottom border-dark" href="#">Projector</a> </li>
                  </ul>
                </div>

              </div>

              <div class="container-fluid">

                <button class="btn btn-transparent border border-0 overflow-hidden shadow-none" type="button" data-toggle="collapse" data-target="#roomBTN" aria-expanded="false" aria-controls="roomBTN">
                  Rooms <i class="bi-chevron-down" style="margin-left: 14px;"></i>
                </button>

                <div class="collapse" id="roomBTN">
                  <ul>
                    <li><a id="links" class="text-dark border-bottom border-dark"  href="#">SB-1</a> </li>
                    <li><a id="links" class="text-dark border-bottom border-dark"  href="#">SB-2</a> </li>
                    <li><a id="links" class="text-dark border-bottom border-dark"  href="#">ECB-17</a> </li>
                    <li><a id="links" class="text-dark border-bottom border-dark"  href="#">ECB-16</a> </li>
                  </ul>
                </div>

              </div>


              <div class="container-fluid">

                <button class="btn btn-transparent border border-0 overflow-hidden shadow-none" type="button" data-toggle="collapse" data-target="#qrBTN" aria-expanded="false" aria-controls="qrBTN">
                  QR Code  <i class="bi-chevron-down"></i>
                </button>

                <div class="collapse" id="qrBTN">
                  <ul>
                    <li><a id="links" class="text-dark border-bottom border-dark"  href="../DataTables/qrCodes.php">All</a> </li>
                    <li><a id="links" class="text-dark border-bottom border-dark"  href="#">CSD Department</a> </li>
                    <li><a id="links" class="text-dark border-bottom border-dark"  href="#">EDUC Department</a> </li>
                  </ul>
                </div>

              </div>

            </div>
          </li> -->


              <li class="border-top my-3"></li>

              <li class="nav-item mx-2 mt-2 mb-1 list-unstyled active">
                <div class="align-items-center rounded dropdown">
                  <a href="#" class=" overflow-hidden link-light text-decoration-none dropdown-toggle" id="dpAccount" data-bs-toggle="dropdown" aria-expanded="false">
                      <strong class="text-light">
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
