<button id="navHover1" class="btn blue m-1 shadow border rounded text-light border-1 position-fixed" data-toggle="modal" data-target="#createQR">
  <i class="fas fa-qrcode"></i>&nbsp; Add Asset
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
        } elseif (strpos($headURL, "error=invalidchar") == true) {
          echo "<div class='alert alert-danger mt-2' role='alert'>
                     Warning! Invalid input character.
                   </div>";
        } elseif (strpos($headURL, "error=invalidemail") == true) {
          echo "<div class='alert alert-danger mt-2' role='alert'>
                     Warning! Email invalid.
                   </div>";
        } elseif (strpos($headURL, "error=usertaken") == true) {
          echo "<div class='alert alert-danger mt-2' role='alert'>
                     Warning! Username is already taken.
                   </div>";
        } elseif (strpos($headURL, "error=emailtaken") == true) {
          echo "<div class='alert alert-danger mt-2' role='alert'>
                     Warning! Email has already been used.
                   </div>";
        } elseif (strpos($headURL, "error=passunmatch") == true) {
          echo "<div class='alert alert-danger mt-2' role='alert'>
                     Password don't match.
                   </div>";
        } elseif (strpos($headURL, "registered") == true) {
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
              <label for="item">PROPERTY NUMBER</label>
              <input type="text" class="form-control border border-dark" name="itemCode" required>
            </div>

            <div class="form-group mx-3 mb-2">
              <label for="item">Article</label>
              <input type="text" class="form-control border border-dark" name="itemArticle" required>
            </div>

            <div class="form-group mx-3 mb-2">
              <label for="item">Description</label>
              <input type="text" class="form-control border border-dark" name="txtqr" required>
            </div>

            <div class="form-group mx-3 mb-1">
              <label for="item">Date Acquired</label>
              <input type="date" class="form-control border border-dark" name="EFdate" required>
            </div>

            <div class="form-group mx-3 mb-1">
              <label for="item">Unit of Measures</label>
              <input type="text" class="form-control border border-dark" name="unitM" required>
            </div>

            <div class="form-group mx-3 mb-1">
              <label for="item">Unit Value</label>
              <input type="text" class="form-control border border-dark" name="unitV" required>
            </div>

            <div class="form-group mx-3 mb-1">
              <label for="item">Total Amount</label>
              <input type="text" class="form-control border border-dark" name="totalAmount" required>
            </div>

            <div class="form-group mx-3 mb-1">
              <label for="item">Quantity PER</label>
              <input type="text" class="form-control border border-dark" name="qtyPER" required>
            </div>

            <div class="form-group mx-3 mb-1">
              <label for="item">Quantity Per Physical</label>
              <input type="text" class="form-control border border-dark" name="qtyPerPhysical" required>
            </div>

            <div class="form-group mx-3 mb-1">
              <label for="SelectCategory">Category</label>
              <select name="ItemCategory" class="form-select border border-dark mb-2" required>
                <!-- <option value='1'>Armed-chair</option>
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
                 <option value="14">Projector</option> -->
                 <option>SELECT</option>

                <?php
                // include_once '../includes/conn.php';

                $sql = "SELECT * FROM asset_cat ;";
                $result = mysqli_query($conn, $sql);
                $resultFetch = mysqli_num_rows($result);

                while ($row = mysqli_fetch_assoc($result)) { ?>

                  <!-- <a class="dropdown-item" href="../DataTables/departmet_info.php?ID=<?php //echo $row['ac_id'] ?>"><?php //echo $row['ac_name'] ?></a> -->
                  <option value="<?php echo $row['ac_id'] ?>"><?php echo $row['ac_name']?></option>

                <?php
                }

                ?>

              </select>
            </div>

            <div class="form-group mx-3 mb-3">
              <label for="SelectCategory">Room Category</label>
              <select name="RoomCategory" class="form-select border border-dark mb-2" required>
                <!-- <option value='1'>Laboratory Room</option>
                <option value='2'>Lecture Room</option> -->
                <option>SELECT</option>
                <?php
                // include_once '../includes/conn.php';

                $data = "SELECT * FROM category ;";
                $resultdata = mysqli_query($conn, $data);
                $dataFetch = mysqli_num_rows($resultdata);

                while ($room = mysqli_fetch_assoc($resultdata)) { ?>

                  <option value="<?php echo $room['cat_id'] ?>"><?php echo $room['cat_name']?></option>

                <?php
                }

                ?>

              </select>
            </div>

            <div class="form-group mx-3 mb-1">
              <label for="item">Location</label>
              <select class="form-select border border-dark mb-2" name="itmLoc" required>
                <!-- <option value="1">SB-1</option>
                <option value="2">SB-2</option>
                <option value="3">SB-3</option>
                <option value="4">ECB-15</option>
                <option value="5">ECB-16</option>
                <option value="6">ECB-17</option> -->
                <option>SELECT</option>
                <?php
                // include_once '../includes/conn.php';

                $data = "SELECT * FROM `location` ;";
                $resultdata = mysqli_query($conn, $data);
                $dataFetch = mysqli_num_rows($resultdata);

                while ($room = mysqli_fetch_assoc($resultdata)) { ?>

                  <option value="<?php echo $room['loc_id'] ?>"><?php echo $room['loc_name']?></option>

                <?php
                }

                ?>
              </select>
            </div>

            <div class="form-group mx-3 mb-1">
              <label for="item">Person In-charge</label>
              <input type="text" class="form-control border border-dark" name="incharge" required>
            </div>

            <div class="form-group mx-3 mb-3">
              <label for="SelectCategory">Department</label>
              <select name="DeptCategory" class="form-select border border-dark mb-2" required>
                <!-- <option value='1'>CSD Department</option>
                <option value='2'>EDUC Department</option> -->
                <option>SELECT</option>
                <?php
                  $sql = "SELECT * FROM department;";
                  $data = mysqli_query($conn, $sql);

                  while($row = mysqli_fetch_assoc($data)){
                    ?>
                      <option value="<?php echo $row['dept_id']?>"><?php echo $row['dept_name']?></option>
                    <?php
                  }
                ?>

              </select>
            </div>

            <div class="form-group mx-3 mb-1">
              <label for="item">Remarks</label>
              <!-- <input type="text" class="form-control border border-dark" name="remarks" required> -->
              <select name="remarks" class="form-select border border-dark mb-2" required>
                <option>SELECT</option>
                <option value="Issued">ISSUED</option>
                <option value="Pending">PENDING</option>
              </select>
            </div>



          </div>


          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary " name="btnsubmit">Submit</button>
          </div>
        </form>






      </div>
    </div>
  </div>
</div>