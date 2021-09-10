<button class="btn blue m-1 shadow border rounded text-light border-1 position-fixed" data-toggle="modal" data-target="#updateData"  style="transform: translateY(124px); padding: 7px 9px 8px 12px;">
  <i class="fas fa-edit" ></i>
</button>

  <div class="modal fade" id="updateData" tabindex="-1" role="dialog" aria-labelledby="SearchIconLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title m-0 text-dark" id="SearchIconLabel">BUPC Suppl Office Inventory System</h5>
           <button type="button" class="close btn btn-transparent" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body text-dark">

           <!-- <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text" name="stud_id" value="<?php if(isset($_GET['stud_id'])){echo $_GET['stud_id'];} ?>" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form> -->


           <div class="modal-text">
             <p>
               Do you want to make an Update?
             </p>
           </div>

           <?php
           // $ask = "SELECT * FROM `assets`;";
           // $ans = mysqli_query($conn, $ask);
           // $check = mysqli_num_rows($ans);
           //
           // $bits = mysqli_fetch_assoc($ans);
           // while ($bits = mysqli_fetch_assoc($ans)) {

           ?>
           <!-- <form action="../DataTables/UpdatePage.php" method="GET">
             <div class="input-group">
               <input id="searchbar" class="form-control p-2 mx-2 rounded" type="text" name="ID" required placeholder="Search">
               <button class="btn btn-success rounded" type="submit" name="update">Search <i class="bi bi-search"></i></button> -->

                    <!-- <button href="../DataTables/UpdatePage.php?ID=<?php //echo $bits['a_id'] ;?>" class="btn btn-success rounded" type="submit" name="update" role="button">Search <i class="bi bi-search"></i></button> -->
                    <?php
                  // }

                ?>
             <!-- </div>
           </form> -->

           <?php //echo searchUpdate($conn, $_SESSION['user_uid']) ?>

         </div>

         <div class="modal-footer">
           <a href="../DataTables/UpdatePage.php?proceed" class="btn btn-primary ">Proceed</a>
           <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
         </div>

         </div>
       </div>
     </div>
