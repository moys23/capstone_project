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



            <div class="container mt-2 bg-light rounded">

              <div class="container-fluid">

                <button class="btn btn-transparent" type="button" data-toggle="collapse" data-target="#overviewBTN" aria-expanded="false" aria-controls="overviewBTN">
                  Overview
                </button>

                <div class="collapse" id="overviewBTN">
                  <ul>
                    <li><a href="#">Overview</a> </li>
                    <li><a href="#">Overview</a> </li>
                    <li><a href="#">Overview</a> </li>
                    <li><a href="#">Overview</a> </li>
                  </ul>
                </div>

              </div>

              <div class="container-fluid">

                <button class="btn btn-transparent" type="button" data-toggle="collapse" data-target="#categoryBTN" aria-expanded="false" aria-controls="categoryBTN">
                  Overview
                </button>

                <div class="collapse" id="categoryBTN">
                  <ul>
                    <li><a href="#">Overview</a> </li>
                    <li><a href="#">Overview</a> </li>
                    <li><a href="#">Overview</a> </li>
                    <li><a href="#">Overview</a> </li>
                  </ul>
                </div>

              </div>

              <div class="container-fluid">

                <button class="btn btn-transparent" type="button" data-toggle="collapse" data-target="#roomBTN" aria-expanded="false" aria-controls="roomBTN">
                  Overview
                </button>

                <div class="collapse" id="roomBTN">
                  <ul>
                    <li><a href="#">Overview</a> </li>
                    <li><a href="#">Overview</a> </li>
                    <li><a href="#">Overview</a> </li>
                    <li><a href="#">Overview</a> </li>
                  </ul>
                </div>

              </div>

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
