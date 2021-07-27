

<ul class="list-unstyled ps-0">
  <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
            <span class="fs-6 fw-semibold">Overview</span>
        </button>
        <div class="collapse show" id="home-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="index.php?Overview" class="link-dark rounded">Overview</a></li>
                <li><a href="CSDepartment.php?Overview" class="link-dark rounded">CS Department</a></li>
                <li><a href="#" class="link-dark rounded">EDUC Department</a></li>
            </ul>
        </div>
    </li>

    <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
          <span class="fs-6 fw-semibold">CATEGORY</span>
        </button>
        <div class="collapse show" id="dashboard-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <?php
                  $sql = "SELECT cat_name FROM `category` ;";
                  $result = mysqli_query($conn, $sql);
                  $resultCheck = mysqli_num_rows($result);

                  if ($resultCheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)) { ?>

                    <li><a href="#" class="link-dark rounded"><?php echo $row['cat_name']; ?></a></li>

                <?php
                    }
                  }

                 ?>
            </ul>
        </div>
    </li>
    <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
            <span class="fs-6 fw-semibold">Rooms</span>
        </button>
        <div class="collapse show" id="orders-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
              <li><a href="#" class="link-dark rounded">CESD Room 1</a></li>
              <li><a href="#" class="link-dark rounded">CESD Room 2</a></li>
              <li><a href="#" class="link-dark rounded">EDUC Room 12</a></li>
              <li><a href="#" class="link-dark rounded">EDUC Room 13</a></li>
            </ul>
        </div>
    </li>
    <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
            <span class="fs-6 fw-semibold">QR Codes</span>
        </button>
        <div class="collapse show" id="orders-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
              <li><a href="#" class="link-dark rounded">All</a></li>
            </ul>
        </div>
    </li>
</ul>
