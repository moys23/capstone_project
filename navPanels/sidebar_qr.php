<button class="btn blue m-1 shadow border rounded text-light border-1 position-fixed" data-toggle="modal" data-target="#createQR"  style="transform: translateY(80px); padding: 8px 12px 8px 13px;">
  <i class="fas fa-qrcode" ></i>
</button>

<div class="modal fade" id="createQR" tabindex="-1" role="dialog" aria-labelledby="createQRLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title text-dark" id="createQRLabel">Create New User</h5>
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

          <!-- <div align="center">
          <h1>Generate QR (Quick Response) Code</h1>

            <form action="../navPanels/sidebar_qr.php" method="post">
              <input type="text" name="txtqr" placeholder="Enter QR Data">
              <input type="submit" name="btnsubmit" value="GENERATE">
            </form>

          </div> -->

         <form enctype="multipart/form-data" action="../DataTables/qrCodes.php" method="POST">
           <div class="input-group">

             <div class="form-group mx-3 mb-2">
               <label for="item">Item Name</label>
               <input type="text" class="form-control border border-dark" name="txtqr" required>
             </div>

             <div class="form-group mx-3 mb-4">
               <label for="item">Quantity</label>
               <input type="number" class="form-control border border-dark" name="itemQTY" required>
             </div>

           </div>

           <!-- <div class="form-group mt-1 mx-1">
             <label for="SelectCategory" class="form-label">Restriction</label>
             <select name="RoomCategory" id="" class="form-select mb-2">
               <option value='LR'>Laboratory Room</option>
               <option value='OR'>Classroom</option>
             </select>
           </div> -->

           <div class="modal-footer">
             <button type="submit" class="btn btn-primary mb-0" id="subBtn" name="btnsubmit">Submit</button>
           </div>
         </form>




       </div>
      </div>
    </div>
</div>
