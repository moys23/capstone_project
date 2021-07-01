  <nav id="colorDesign" class="navbar navbar-expand-md navbar-dark text-light">
    <a href="index.php" class="text-decoration-none">
      <h2 id="headTitle" class="display-7 pt-1 mx-3 text-light">ADMINISTRATOR</h2>
    </a>

      <button class="navbar-toggler mx-1" type="button" data-toggle="collapse" data-target="#navbarADMIN" aria-controls="navbarADMIN" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse px-3 justify-content-start " id="navbarADMIN">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item mr-2 list-unstyled active">
              <form method="GET">
                <div class="input-group">
                  <input id="searchbar" class="form-control p-2 mx-2 rounded" type="text" name="srchkey" placeholder="Search">
                  <button class="btn btn-outline-success rounded" type="submit" name="search">Search <i class="bi bi-search"></i></button>
                </div>
              </form>
            </li>

            <li class="nav-item mx-2 list-unstyled active">

              <button class="nav-link bg-transparent text-light border-0" data-toggle="modal" data-target="#addUsers">New Assets <i class="bi-plus-circle"></i></button>

              <div class="modal fade" id="addUsers" tabindex="-1" role="dialog" aria-labelledby="addUsersLabel" aria-hidden="true">
                 <div class="modal-dialog" role="document">
                   <div class="modal-content">
                     <div class="modal-header">
                       <h5 class="modal-title text-dark" id="addUsersLabel">Confirm Sign Out</h5>
                       <button type="button" class="close btn btn-transparent" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                       </button>
                     </div>
                     <div class="modal-body text-dark">
                       <form enctype="multipart/form-data" action="#" method="POST">
                         <div class="input-group">
                           <div class="row justify-content-center">
                             <div class="col-5">
                               <div class="form-group mx-1">
                                 <label for="item">First Name</label>
                                 <input type="text" class="form-control border border-dark" name="itemname">
                               </div>
                             </div>
                             <div class="col-2">
                               <div class="form-group mx-1">
                                 <label for="item">M.I.</label>
                                 <input type="text" class="form-control border border-dark" name="itemname">
                               </div>
                             </div>
                             <div class="col-5">
                               <div class="form-group">
                                 <label for="price">Last Name</label>
                                 <input type="text" class="form-control border border-dark" name="itemprice">
                               </div>
                             </div>
                           </div>

                           <div class="form-group mx-1">
                             <label for="item">New Password</label>
                             <input class="form-control border border-dark" name="Psdword" type="password">
                           </div>

                           <div class="form-group mx-1">
                             <label for="item">Confirm Password</label>
                             <input class="form-control border border-dark" name="Psdword " type="password">
                           </div>

                           <div class="form-group mt-1 mx-1">
                               <label for="SelectCategory" class="form-label">Restriction</label>
                               <select name="itemcategory" id="" class="form-select">
                                   <option value='1'>Admin</option>
                                   <option value='2'>Stuff Admin</option>
                               </select>
                           </div>
                         </div>
                       </form>
                     </div>
                     <div class="modal-footer">
                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                       <a type="submit" class="btn btn-primary" name="createItem">Submit</a>
                      </div>
                     </div>
                   </div>
                 </div>

            </li>
            <li class="nav-item mr-2 list-unstyled active">

              <button class="nav-link bg-transparent text-light border-0" data-toggle="modal" data-target="#addUsers">Add User <i class="bi-plus-circle"></i></button>

              <div class="modal fade" id="addUsers" tabindex="-1" role="dialog" aria-labelledby="addUsersLabel" aria-hidden="true">
                 <div class="modal-dialog" role="document">
                   <div class="modal-content">
                     <div class="modal-header">
                       <h5 class="modal-title text-dark" id="addUsersLabel">Confirm Sign Out</h5>
                       <button type="button" class="close btn btn-transparent" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                       </button>
                     </div>
                     <div class="modal-body text-dark">
                       <form enctype="multipart/form-data" action="#" method="POST">
                         <div class="input-group">
                           <div class="row justify-content-center">
                             <div class="col-5">
                               <div class="form-group mx-1">
                                 <label for="item">First Name</label>
                                 <input type="text" class="form-control border border-dark" name="itemname">
                               </div>
                             </div>
                             <div class="col-2">
                               <div class="form-group mx-1">
                                 <label for="item">M.I.</label>
                                 <input type="text" class="form-control border border-dark" name="itemname">
                               </div>
                             </div>
                             <div class="col-5">
                               <div class="form-group">
                                 <label for="price">Last Name</label>
                                 <input type="text" class="form-control border border-dark" name="itemprice">
                               </div>
                             </div>
                           </div>

                           <div class="form-group mx-1">
                             <label for="item">New Password</label>
                             <input class="form-control border border-dark" name="Psdword" type="password">
                           </div>

                           <div class="form-group mx-1">
                             <label for="item">Confirm Password</label>
                             <input class="form-control border border-dark" name="Psdword " type="password">
                           </div>

                           <div class="form-group mt-1 mx-1">
                               <label for="SelectCategory" class="form-label">Restriction</label>
                               <select name="itemcategory" id="" class="form-select">
                                   <option value='1'>Admin</option>
                                   <option value='2'>Stuff Admin</option>
                               </select>
                           </div>
                         </div>
                       </form>
                     </div>
                     <div class="modal-footer">
                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                       <a type="submit" class="btn btn-primary" name="createItem">Submit</a>
                      </div>
                     </div>
                   </div>
                 </div>

            </li>

          </ul>
      </div>

  </nav>
