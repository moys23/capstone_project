<button class="btn blue m-1 shadow border rounded text-light border-1 position-fixed" data-toggle="modal" data-target="#createQR"  style="transform: translateY(80px); padding: 8px 12px 8px 13px;">
  <i class="fas fa-qrcode" ></i>
</button>

<div class="modal fade" id="createQR" tabindex="-1" role="dialog" aria-labelledby="createQRLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title text-dark" id="createQRLabel">Add New Assets</h5>
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

         <form enctype="multipart/form-data" action="../includes/qr_gen.php" method="GET">
           <div class="input-group">

             <div class="form-group mx-3 mb-2">
               <label for="item">Item Name</label>
               <input type="text" class="form-control border border-dark" name="txtqr" required>
             </div>

             <div class="form-group mx-3 mb-1">
               <label for="item">Person In-charge</label>
               <input type="text" class="form-control border border-dark" name="incharge" required>
             </div>

             <div class="form-group mx-3 mb-1">
               <label for="item">Effectivity Date</label>
               <input type="date" class="form-control border border-dark" name="EFdate" required>
             </div>

             <div class="form-group mx-3 mb-1">
               <label for="item">Location</label>
               <input type="text" class="form-control border border-dark" name="itmLoc" required>
             </div>

             <div class="form-group mx-3 mb-1">
               <label for="SelectCategory" class="form-label">Category</label>
               <select name="ItemCategory" id="" class="form-select mb-2">
                 <option value='1'>Armed-chair</option>
                 <option value='2'>Table</option>
                 <option value="3">Electric Fan</option>
                 <option value="4">Curtain</option>
                 <option value="5">Monoblock Chair</option>
                 <option value="6">Graph Board</option>
                 <option value="7">Monitor</option>
                 <option value="8">Printer</option>
                 <option value="9">AVR</option>
                 <option value="10">System Unit</option>
                 <option value="11">Keyboard</option>
                 <option value="12">Mouse</option>
                 <option value="13">Switch</option>
                 <option value="14">Projector</option>
               </select>
             </div>

             <div class="form-group mx-3 mb-3">
               <label for="SelectCategory" class="form-label">Room Category</label>
               <select name="RoomCategory" id="" class="form-select mb-2">
                 <option value='1'>Laboratory Room</option>
                 <option value='2'>Lecture Room</option>
               </select>
             </div>

             <div class="form-group mx-3 mb-3">
               <label for="SelectCategory" class="form-label">Department</label>
               <select name="DeptCategory" id="" class="form-select mb-2">
                 <option value='1'>CSD Department</option>
                 <option value='2'>EDUC Department</option>
               </select>
             </div>

           </div>


           <div class="modal-footer">
             <button type="submit" class="btn btn-primary mb-0" id="subBtn" name="btnsubmit">Submit</button>
           </div>
         </form>






       </div>
      </div>
    </div>
</div>
