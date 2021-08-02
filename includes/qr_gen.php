
         <?php
          if(isset($_POST['btnsubmit']))
          {
          $data = trim($_POST['txtqr']);
          echo "<h2>QR Code</h2>";
          echo "<img src='https://chart.googleapis.com/chart?cht=qr&chs=150x150&chl=$data' height=250 width=250/>";
          }
         ?>
