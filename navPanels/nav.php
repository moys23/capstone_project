  <nav id="colorDesign" class="navbar navbar-expand-md navbar-dark text-light">
    <a href="
    <?php

    if ($_SESSION['user_usertype'] == 'A') {
      // header("location: ../AdminPage/index.php?overview");
      echo "../AdminPage/index.php?overview";
    } elseif ($_SESSION['user_usertype'] == 'B') {
      // header("location: ../UsersPage/index.php?overview");
      echo "../UsersPage/index.php?overview";
    }

    ?>
    " class="text-decoration-none">
      <h2 id="headTitle" class="pt-2 text-light"><img src="../images/pcLogo.png" class="rounded-circle size3"> BUPC Supply Office</h2>
    </a>

    <button class="navbar-toggler mx-1" type="button" data-toggle="collapse" data-target="#navbarADMIN" aria-controls="navbarADMIN" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse px-3 justify-content-end " id="navbarADMIN">
      <ul class="navbar-nav mt-2 mt-lg-0">

        <li class="nav-item dropdown mx-2">
          <a class="nav-link text-light dropdown-toggle" id="dropDepartment" role="button" data-toggle="dropdown">Department</a>
          <div class="dropdown-menu" aria-labelledby="dropDepartment">
            <a class="dropdown-item" href="

                <?php

                if ($_SESSION['user_usertype'] == 'A') {
                  // header("location: ../AdminPage/index.php?overview");
                  echo "../AdminPage/index.php?overview";
                } elseif ($_SESSION['user_usertype'] == 'B') {
                  // header("location: ../UsersPage/index.php?overview");
                  echo "../UsersPage/index.php?overview";
                }

                ?>

                ">Overview</a>
            <!-- <a class="dropdown-item" href="../DataTables/CSDepartment.php?view">CSD Department</a>
            <a class="dropdown-item" href="../DataTables/EDUCdept.php?view">EDUC Department</a> -->

            <?php
            include_once '../includes/conn.php';

            $sql = "SELECT * FROM department ;";
            $result = mysqli_query($conn, $sql);
            $resultFetch = mysqli_num_rows($result);

            while ($row = mysqli_fetch_assoc($result)) { ?>

              <a class="dropdown-item" href="../DataTables/department_info.php?ID=<?php echo $row['dept_id'] ?>"><?php echo $row['dept_name'] ?></a>

            <?php
            }

            ?>
          </div>



        </li>

        <li class="nav-item dropdown mx-2">
          <a class="nav-link text-light dropdown-toggle" id="drpCategory" role="button" data-toggle="dropdown">Category</a>
          <div class="dropdown-menu" aria-labelledby="drpCategory">

            <?php
            include_once '../includes/conn.php';

            $sql = "SELECT * FROM asset_cat ;";
            $result = mysqli_query($conn, $sql);
            $resultFetch = mysqli_num_rows($result);

            while ($row = mysqli_fetch_assoc($result)) { ?>

              <a class="dropdown-item" href="../DataTables/category_info.php?ID=<?php echo $row['ac_id'] ?>"><?php echo $row['ac_name'] ?></a>

            <?php
            }

            ?>
          </div>
        </li>

        <li class="nav-item dropdown mx-2">
          <a class="nav-link text-light dropdown-toggle" id="drpOverview" role="button" data-toggle="dropdown">Location</a>
          <div class="dropdown-menu" aria-labelledby="drpOverview">
            <?php
            include_once '../includes/conn.php';

            $sql = "SELECT * FROM `location` ;";
            $result = mysqli_query($conn, $sql);
            $resultFetch = mysqli_num_rows($result);

            while ($row = mysqli_fetch_assoc($result)) { ?>

              <a class="dropdown-item" href="../DataTables/location_info.php?ID=<?php echo $row['loc_id'] ?>"><?php echo $row['loc_name'] ?></a>

            <?php
            }

            ?>

          </div>
        </li>


        <li class="nav-item dropdown mx-2">
          <button class="nav-link bg-transparent border-0 text-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi-plus-circle"></i> New Details</button>

          <div class="dropdown-menu py-0" aria-labelledby="addItemDPmenu">

            <button class="dropdown-item text-dark" data-bs-toggle="collapse" data-bs-target="#newDept">+ Add New Department</button>
            <div id="newDept" class="collapse  show">

              <div class="card">
                <div class="card-body">
                  <form method="POST">
                    <label for="input">
                      <h6>
                        Create Department
                      </h6>
                    </label>
                    <input type="text" class="form-control border border-dark  mb-1 text-center" placeholder="Department" name="detail1" required>
                    <input type="text" class="form-control border border-dark text-center mb-1" placeholder="Department Code" name="code1" required>
                    <input type="date" class="form-control border border-dark text-center mb-1" placeholder="Date" name="date" required>
                    <select name="status1" class="form-control-sm required border border-dark">
                      <option>STATUS</option>
                      <option value="ACTIVE">Existing</option>
                      <option value="NEW">New</option>
                    </select>
                    <div class="card-footer pt-1 p-0 border-0 bg-transparent text-end">
                      <button class="btn btn-primary text-end" name="create1">Save</button>
                    </div>
                  </form>
                  <?php echo createDept($conn, $_SESSION['user_uid']) ?>
                </div>
              </div>
            </div>

            <button class="dropdown-item text-dark" data-bs-toggle="collapse" data-bs-target="#newCat">+ Add New Category</button>
            <div id="newCat" class="collapse">
              <div class="card">

                <div class="card-body">
                  <form method="POST">
                    <label for="input">
                      <h6>
                        Create Category
                      </h6>
                    </label>
                    <input type="text" class="form-control mb-1 border border-dark text-center" placeholder="Input Name" name="detail2" required>
                    <input type="date" class="form-control border border-dark text-center mb-1" placeholder="Date" name="date1" required>
                    <select name="status2" class="form-control-sm required border border-dark">
                      <option>STATUS</option>
                      <option value="ACTIVE">Active</option>
                      <option value="UNUSED">New</option>
                    </select>
                    <div class="card-footer pt-1 p-0 border-0 bg-transparent text-end">
                      <button class="btn btn-primary text-end" name="create2">Save</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <button class="dropdown-item text-dark" data-bs-toggle="collapse" data-bs-target="#newRoom">+ Add New Room</button>
            <div id="newRoom" class="collapse">
              <div class="card">
                <div class="card-body">
                  <form method="post">
                    <label for="input">
                      <h6>
                        Create
                      </h6>
                    </label>
                    <input type="text" class="form-control border border-dark text-center mb-1 " required placeholder="Location Name" name="detail3">
                    <!-- <input type="text" class="form-control border border-dark text-center " required placeholder="Status" name="status3"> -->
                    <input type="date" class="form-control border border-dark text-center mb-1" placeholder="Date" name="date2" required>
                    <select name="status3" class="form-control-sm required border border-dark">
                      <option>STATUS</option>
                      <option value="ACTIVE">Existing</option>
                      <option value="NEW">New</option>
                    </select>
                    <div class="card-footer bg-transparent border-0 pt-1 p-0 text-end">
                      <button class="btn btn-primary text-end" name="create3">Save</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>

          </div>

        </li>

        <li class="nav-item dropdown mx-2">
          <a href="../DataTables/data_archive.php" class="nav-link text-light"><i class="bi-folder2-open"></i> Archive</a>
        </li>
        <li class="nav-item dropdown mx-2">
          <a href="../DataTables/printpage.php" class="nav-link text-light"><i class="bi-journals"></i> Report</a>
        </li>

        <li class="border-top my-3"></li>

        <li class="nav-item mx-2 mt-2 mb-1 list-unstyled active">
          <div class="align-items-center rounded dropdown">
            <a href="#" class=" overflow-hidden link-light text-decoration-none dropdown-toggle" id="dpAccount" data-bs-toggle="dropdown" aria-expanded="false">
              <strong class="text-light">
                <?php echo $_SESSION['user_name']; ?>
              </strong>
            </a>

            <ul class="dropdown-menu text-small shadow" aria-labelledby="dpAccount">
              <li><a class="dropdown-item text-dark" href="#">About</a></li>
              <li><a class="dropdown-item text-dark" href="#">Profile</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item text-dark" href="../includes/logout.php">Sign out</a></li>
            </ul>
          </div>
        </li>


      </ul>
    </div>

  </nav>