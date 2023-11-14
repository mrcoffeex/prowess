<?php
  require '../../config/includes.php';
  require '_session.php';
  include "_head.php";
?>

<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <?php include "_sidemenu.php"; ?>
      <div class="layout-page">
        <?php include "_topnavigation.php"; ?>
 
        <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row gy-4">

              <div class="col-md-12 col-lg-13">
                <div class="card">
                  <div class="d-flex align-items-end row">
                    <div class="col-md-4 order-2 order-md-1">
                      <div class="card-body">
                        <h4 class="card-title" id="userName" name="userName">Welcome <strong> Student!</strong>🎉
                        </h4> <span class="mb-3 badge rounded-pill bg-label-secondary" id="applicationStatus" name="applicationStatus"><?= getScholar_Status($scholarCode) ?></span>
                        <p class="mb-0">Welcome to Prowess your
                        </p>
                        <p>Online Scholarship Management System.</p>
                        <a href="application_info" class="btn btn-primary">View Scholarship Requirements</a>
                      </div>
                    </div>
                    <div class="col-md-8 text-center text-md-end order-1 order-md-2">
                    
                      <div class="card-body pb-0 px-0 px-md-4 ps-0">
                        <img src="../../assets/img/illustrations/stud.png" height="180" alt="View Profile" data-app-light-img="illustrations/stud.png" data-app-dark-img="illustrations/stud.png" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12 col-lg-13 col-xl-12 mb-4">
                <div class="card h-100">
                  <img src="../../assets//img/elements/activity-timeline.png" alt="timeline-image" class="card-img-top h-px-200" style="object-fit: cover" />
                  <div class="card-body">
                    <h4 class="mb-4">Announcement</h4>
                    <ul class="timeline card-timeline mb-0">
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php include "_footer.php";?>
          <div class="content-backdrop fade"></div>
        </div>
        
      </div>
    </div>
    <div class="layout-overlay layout-menu-toggle"></div>
    <div class="drag-target"></div>
  </div>
  <?php include "_scripts.php"; ?>
</body>
</html>