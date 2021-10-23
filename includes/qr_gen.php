<!-- <?php
      session_start();
      include_once '../includes/conn.php';
      include_once '../includes/URLhandler.php';
      ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="#" type="../image/x-icon">
    <title>BUPC Supply Office Inventory System</title>-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../font/bootstrap-icons.css">
<link rel="stylesheet" href="../fontawesome/css/all.css">
<script src="../js/cdn.jquery.min.js"></script>

<!--    <style>
      .blue {
          background-color: rgba(10, 25, 75, 1);
      }
      .dirtWhite {
        background-color: rgba(245, 245, 245, 1);
      }
      .tranDark {
        background-color: rgba(50, 50, 50, 0.5);
      }
      .vh50 {
        height: 140px;
      }
      }
      .vh25{
        height: 60px;
      }
    </style>
  </head>
  <body>

    <?php   //include_once '../navPanels/nav.php';
    ?>




      <input type="checkbox" id="check">
      <label for="check">
        <i class="bi bi-house-fill" id="btn"></i>
        <i class="bi bi-x" id="cancel"></i>
      </label>
      <div class="sidebar">
        <header>Home</header>
      </div> -->
<!--
      <br>
      <br>
      <br> -->

<?php //include_once '../navPanels/sidebar_users.php'; 
?>
<?php //include_once '../navPanels/sidebar_qr.php'; 
?>
<?php //include_once '../navPanels/sidebar_search.php'; 
?>



<!--
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-sm-4">

          </div>

          <div class="col-sm-4"> -->

<?php
include_once "conn.php";
// include_once "function.php";

if (isset($_GET['btnsubmit'])) {

  $itemCode = mysqli_real_escape_string($conn, $_GET['itemCode']);
  $ASSname = mysqli_real_escape_string($conn, $_GET['txtqr']);
  $incharge = mysqli_real_escape_string($conn, $_GET['incharge']);
  $location = mysqli_real_escape_string($conn, $_GET['itmLoc']);
  $efcdate = mysqli_real_escape_string($conn, $_GET['EFdate']);
  $category = mysqli_real_escape_string($conn, $_GET['ItemCategory']);
  $roomCat = mysqli_real_escape_string($conn, $_GET['RoomCategory']);
  $deptCat = mysqli_real_escape_string($conn, $_GET['DeptCategory']);
  $article = mysqli_real_escape_string($conn, $_GET['itemArticle']);
  $measure = mysqli_real_escape_string($conn, $_GET['unitM']);
  $value = mysqli_real_escape_string($conn, $_GET['unitV']);
  $total = mysqli_real_escape_string($conn, $_GET['totalAmount']);
  $qtyP1 = mysqli_real_escape_string($conn, $_GET['qtyPER']);
  $qtyP2 = mysqli_real_escape_string($conn, $_GET['qtyPerPhysical']);
  $remarks = mysqli_real_escape_string($conn, $_GET['remarks']);




  $linkpage = 'https://192.168.137.1/capstone_project/qrCodes.php?ID=' . $itemCode;


  //CHECK IF EMPTY INPUT
  if (empty($itemCode) || empty($ASSname) || empty($incharge) || empty($location) || empty($efcdate) || empty($category) || empty($roomCat)) {
    header("location: ../AdminPage/index.php?error=emptyinputs");
    exit();
  } else { //CHECK IF ITEM NAME IS ALREADY TAKEN OR EXISTING
    $sql = "SELECT * FROM `assets` WHERE access_id = '$itemCode' ;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
      header("location: ../AdminPage/index.php?error=AlreadyExisting");
      exit();
    } else {

      //INSERT THE USER INTO THE DATABASE
      $sql = "INSERT INTO `assets` (access_id, article, a_name, a_effectivty_date, u_measure, u_value, total_amount, qty_per, qty_per_phy, ac_id, cat_id, loc_id, a_person_incharge, dept_id, remarks) VALUES ('$itemCode', '$article', '$ASSname', '$efcdate', '$measure', '$value', '$total', '$qtyP1', '$qtyP2', '$category', '$roomCat', '$location', '$incharge', '$deptCat', '$remarks') ;";

      mysqli_query($conn, $sql);
      // $linkpage = 'https://10.0.0.36/capstone_project/qrCodes.php?ID=' . $ASSname;

      // echo "<img src='https://chart.googleapis.com/chart?cht=qr&chs=150x150&chl= $linkpage' class='card-img-top'>";
?>
      <div class='row mt-4'>
        <div class='col-4'></div>
        <div class='col-4 justify-content-center'>
          <div class='card border border-dark printTable'>
            <?php
              echo "<img src='https://chart.googleapis.com/chart?cht=qr&chs=200x200&chl= $linkpage' class='card-img-top'>";
            ?>
            <div class="card-header bg-dark border-dark">
              <h5 class="text-center my-0 py-2 text-light">BUPC INVENTORY CODE</h5>
              <h6 class='text-center border-top border-light my-2 py-2 text-light'>
                <?php echo $itemCode; ?>
              </h6>
            </div>
          </div>
          <div class="card-footer text-center">
            <!-- <button onclick='window.print()' class='btn btn-outline-success'>Print</button> -->
            <form method="GET">
              <input type="text" value="<?php echo $itemCode; ?>" name="code">
            <button type="submit" name="download">Save</button>
            </form>
            <?php
              if (isset($_GET['download'])) {
                // $itemCode = mysqli_real_escape_string($conn, $_GET['itemCode']);
                
                
                // $url = 'https://chart.googleapis.com/chart?cht=qr&chs=200x200&chl=%20https://192.168.137.1/capstone_project/qrCodes.php?ID=' . $itemCode;
                
                // $imageName = "../images/" . uniqid() . ".jpg";

                // $fh = fopen($imageName, "w") or die("ERROR OPENING $imageName");

                // $ch = curl_init();
                // curl_setopt($ch, CURLOPT_URL, $url);
                // curl_setopt($ch, CURLOPT_FILE, $fh);

                // curl_exec($ch);
                // if (curl_errno($ch)) {
                //   echo "ERROR" . curl_error($ch);
                // } else {
                //   $status = curl_getinfo($ch);
                //   print_r($status);
                // }
                
                // curl_close($ch);
                // fclose($fh);

                $code = $_POST['code'];

                $source = "https://chart.googleapis.com/chart?cht=qr&chs=200x200&chl=%20https://192.168.137.1/capstone_project/qrCodes.php?ID=". $code;
                $destination = "images.jpg";
                file_put_contents($destination, file_get_contents($source));
                echo "OK";
              
              }

            ?>

          </div>
        </div>
        <div class='col-4'></div>
      </div>






      <!-- <button onclick='window.print()' class='btn btn-outline-success'>Print</button> -->


<?php
      // echo updateBTN($conn, $_SESSION['user_uid']);

    }
  }
} else {
  header("location: ../DataTables/overview.php");
  exit();
}
?>
<!-- </div>
          <div class="col-sm-4"></div>
        </div>
      </div>





  </body>

  <?php //mysqli_close($conn);
  ?>
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</html> -->