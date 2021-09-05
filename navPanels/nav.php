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
                <a id="links" class="dropdown-item text-dark" href="../CategoryTables/cat1.php?view">Arm-chair</a>
                <a id="links" class="dropdown-item text-dark" href="../CategoryTables/cat2.php?view">Table</a>
                <a id="links" class="dropdown-item text-dark" href="../CategoryTables/cat3.php?view">Electric Fan</a>
                <a id="links" class="dropdown-item text-dark" href="../CategoryTables/cat4.php?view">Curtain</a>
                <a id="links" class="dropdown-item text-dark" href="../CategoryTables/cat5.php?view">Monoblock Chair</a>
                <a id="links" class="dropdown-item text-dark" href="../CategoryTables/cat6.php?view">Graph Board</a>
                <a id="links" class="dropdown-item text-dark" href="../CategoryTables/cat7.php?view">Monitor</a>
                <a id="links" class="dropdown-item text-dark" href="../CategoryTables/cat8.php?view">Printer</a>
                <a id="links" class="dropdown-item text-dark" href="../CategoryTables/cat9.php?view">AVR</a>
                <a id="links" class="dropdown-item text-dark" href="../CategoryTables/cat10.php?view">System Unit</a>
                <a id="links" class="dropdown-item text-dark" href="../CategoryTables/cat11.php?view">Keyboard</a>
                <a id="links" class="dropdown-item text-dark" href="../CategoryTables/cat12.php?view">Mouse</a>
                <a id="links" class="dropdown-item text-dark" href="../CategoryTables/cat13.php?view">Switch</a>
                <a id="links" class="dropdown-item text-dark" href="../CategoryTables/cat14.php?view">Projector</a>
              </div>
            </li>

            <li class="nav-item dropdown mx-2">
              <a class="nav-link text-light dropdown-toggle" id="drpOverview" role="button" data-toggle="dropdown">Location</a>
              <div class="dropdown-menu" aria-labelledby="drpOverview">
                <a class="dropdown-item" href="../RoomArea/loc1.php?view">SB-1</a>
                <a class="dropdown-item" href="../RoomArea/loc2.php?view">SB-2</a>
                <a class="dropdown-item" href="../RoomArea/loc3.php?view">SB-3</a>
                <a class="dropdown-item" href="../RoomArea/loc4.php?view">ECB-15</a>
                <a class="dropdown-item" href="../RoomArea/loc5.php?view">ECB-16</a>
                <a class="dropdown-item" href="../RoomArea/loc6.php?view">ECB-17</a>
              </div>
            </li>

              <li class="border-top my-3"></li>

              <li class="nav-item mx-2 mt-2 mb-1 list-unstyled active">
                <div class="align-items-center rounded dropdown">
                  <a href="#" class=" overflow-hidden link-light text-decoration-none dropdown-toggle" id="dpAccount" data-bs-toggle="dropdown" aria-expanded="false">
                      <strong class="text-light">
                        <?php echo $_SESSION['user_name'];?>
                      </strong>
                  </a>

                    <ul class="dropdown-menu text-small shadow" aria-labelledby="dpAccount">
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
