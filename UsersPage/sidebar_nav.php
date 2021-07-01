<ul class="list-unstyled ps-0">
    <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
            <span class="fs-6 fw-semibold">Overview</span>
        </button>
        <div class="collapse show" id="home-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="index.php?Overview" class="link-dark rounded">Overview</a></li>
                <li><a href="#" class="link-dark rounded">CS Department</a></li>
                <li><a href="#" class="link-dark rounded">EDUC Department</a></li>
            </ul>
        </div>
    </li>
    <?php if(isset($page)){
            if($page === 'items'){ ?>

    <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
            Category
        </button>
        <div class="collapse show" id="home-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <?php
                 $category_list = getCategories($conn);
                 if(!empty($category_list) || $category_list !== false){
                     foreach($category_list as $kc => $cat){ ?>
                <li><a href="index.php?cat_id=<?php echo $cat['cat_id'];?>&catname=<?php echo $cat['cat_desc'];?>" class="link-dark rounded"><?php echo $cat['cat_desc'];?></a></li>
                <?php }

                 }
                ?>

            </ul>
        </div>
    </li>
    <?php   }
     }
    ?>
    <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
          <span class="fs-6 fw-semibold">CATEGORY</span>
        </button>
        <div class="collapse show" id="dashboard-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-dark rounded">Chair</a></li>
                <li><a href="#" class="link-dark rounded">Tables</a></li>
                <li><a href="#" class="link-dark rounded">Eraser</a></li>
                <li><a href="#" class="link-dark rounded">Projector</a></li>
                <li><a href="#" class="link-dark rounded">Monitor</a></li>
                <li><a href="#" class="link-dark rounded">Mouse</a></li>
                <li><a href="#" class="link-dark rounded">AVR</a></li>
                <li><a href="#" class="link-dark rounded">CPU</a></li>
                <li><a href="#" class="link-dark rounded">Keyboard</a></li>
                <li><a href="#" class="link-dark rounded">Mouse Pad</a></li>
                <li><a href="#" class="link-dark rounded">Extension</a></li>
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
    <li class="border-top my-3"></li>
    <!-- <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
            <span class="fs-6 fw-semibold">Account</span>
        </button>
        <div class="collapse show" id="account-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small"> -->
                <!-- <li><a href="#" class="link-dark rounded">Profile</a></li> -->
                <!-- <li class="nav-item list-unstyled mr-2 mt-1 pt-1 px-2 active">
                  <a href="#" class="link-dark rounded">
                    <p><?php //echo $_SESSION['user_name'];?>&nbsp <i class="bi bi-person-circle"></i></p>
                  </a>
                </li>
            </ul>
        </div>
    </li> -->
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
          <!-- Put image after database is fixed -->
            <!-- <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2"> -->
            <strong class="mx-3">
              <?php echo $_SESSION['user_name'];?>
            </strong>
        </a>
        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="../includes/logout.php">Sign out</a></li>
        </ul>
    </div>
</ul>
