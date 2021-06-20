    <div class="navAdmin">
      <nav id="navDesign" class="navbar navbar-expand-lg navbar-dark text-light shadow ">
          <div class="store-brand">
            <a href="index.php" class="text-decoration-none">
              <h3 id="headTitle" class="mx-3 text-light">ADMINISTRATOR</h3>
            </a>
          </div>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarADMIN" aria-controls="navbarADMIN" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse px-3 justify-content-end " id="navbarADMIN">
              <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item mr-2 mt-1 pt-1 px-2 active">
                  <div class="admin-user">
                    <p><?php echo $_SESSION['user_name'];?>&nbsp<i class="bi bi-person-circle"></i></p>
                  </div>
                </li>
                <li class="nav-item mr-2 px-2 active">
                    <button class="nav-link bg-transparent border-0" data-toggle="modal" data-target="#myModal">Logout <i class="bi-power"></i></button>

                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                       <div class="modal-dialog" role="document">
                         <div class="modal-content">
                           <div class="modal-header">
                             <h5 class="modal-title text-dark" id="exampleModalLabel">Confirm Sign Out</h5>
                             <button type="button" class="close btn btn-transparent" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                             </button>
                           </div>
                           <div class="modal-body text-dark">
                             <p>Are you sure you want log out?</p>
                           </div>
                           <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                             <a type="button" class="btn btn-primary" href="../includes/logout.php">Confirm</a>
                           </div>
                         </div>
                       </div>
                    </div>

                </li>
              </ul>
          </div>

      </nav>
  </div>
