
  <button class="btn blue m-1 shadow border rounded text-light border-1 position-fixed" data-toggle="modal" data-target="#addUsers"style="transform: translateY(40px);">
    <i class="bi bi-person-plus-fill" ></i>
  </button>

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

             $headURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

             if (strpos($headURL, "error=emptyinputs") == true) {
               echo "<div class='alert alert-danger mt-2 rounded-0' role='alert'>
                       Empty Input! Please finish filling the inputs.
                     </div>";
                   }
             elseif (strpos($headURL, "error=invalidchar") == true) {
               echo "<div class='alert alert-danger mt-2' role='alert'>
                       Warning! Invalid input character.
                     </div>";
                   }
             elseif (strpos($headURL, "error=invalidemail") == true) {
               echo "<div class='alert alert-danger mt-2' role='alert'>
                       Warning! Email invalid.
                     </div>";
                   }
             elseif (strpos($headURL, "error=usertaken") == true) {
               echo "<div class='alert alert-danger mt-2' role='alert'>
                       Warning! Username is already taken.
                     </div>";
                   }
             elseif (strpos($headURL, "error=emailtaken") == true) {
               echo "<div class='alert alert-danger mt-2' role='alert'>
                       Warning! Email has already been used.
                     </div>";
                   }
             elseif (strpos($headURL, "error=passunmatch") == true) {
               echo "<div class='alert alert-danger mt-2' role='alert'>
                       Password don't match.
                     </div>";
                   }
             elseif (strpos($headURL, "registered") == true) {
               echo "<div class='alert alert-success mt-2' role='alert'>
                       Registration success!
                     </div>";
                   }
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
                   <select name="AdminCategory" class="form-select mb-2">
                       <option value='A'>Admin</option>
                       <option value='B'>Stuff Admin</option>
                   </select>
               </div>
             </div>
             <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
               <button type="submit" class="btn btn-primary" name="createUser">Submit</button>
             </div>
           </form>
         </div>
         </div>
       </div>
     </div>
