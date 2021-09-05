<button class="btn blue m-1 shadow border rounded text-light border-1 position-fixed" data-toggle="modal" data-target="#SearchIcon">
  <i class="bi bi-search"></i>
</button>

<div class="modal fade" id="SearchIcon" tabindex="-1" role="dialog" aria-labelledby="SearchIconLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title m-0 text-dark" id="SearchIconLabel">Search</h5>
         <button type="button" class="close btn btn-transparent" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body text-dark">

         <form action="../DataTables/search.php" method="GET">
           <div class="input-group">
             <input id="searchbar" class="form-control p-2 mx-2 rounded" type="text" name="srchkey" required placeholder="Search">
             <button class="btn btn-success rounded" type="submit" name="search">Search <i class="bi bi-search"></i></button>
           </div>
         </form>

         <?php echo searchResult($conn, $_SESSION['user_uid']) ?>

       </div>
       </div>
     </div>
   </div>
