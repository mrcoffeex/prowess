<?php
include "_head.php";
?>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->
      <?php
      include "_sidemenu.php";
      ?>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->
        <?php
        include "_topnavigation.php";
        ?>
        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row gy-4">
              <!-- Gamification Card -->
              <div class="col-md-12 col-lg-13">
                <div class="card">
                  <div class="d-flex align-items-end row">
                    <div class="col-md-8 order-2 order-md-1">
                      <div class="card-body">
                        <h4 class="card-title mb-0" id="userName" name="userName">Welcome <strong>HEI Name</strong></h4>
                        <p class="mb-3">Contact Person Name</p>
                        <p class="mb-0">Welcome to Prowess your</p>
                        <p>online scholarship management system.</p>
                        <a href="javascript:;" class="btn btn-primary">View Profile</a>
                      </div>
                    </div>
                    <div class="col-md-4 text-center text-md-end order-1 order-md-2">

                      <div class="card-body pb-0 px-0 px-md-4 ps-0">
                        <img src="../../assets/img/illustrations/illustration-john-light.png" height="180" alt="View Profile" data-app-light-img="illustrations/illustration-john-light.png" data-app-dark-img="illustrations/illustration-john-dark.png" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mt-2 md-0">
                <div class="col-md-7">
                  <form action="">
                    <div class="row">
                      <div class="col-sm-6 col-md-3">
                        <p class="mb-0">Semester</p>
                        <select name="optionSemester" id="optionSemester" class="mb-0 form-select form-select-sm">
                          <option value="1">1st Semester</option>
                          <option value="2">2nd Semester</option>
                        </select>
                      </div>
                      <div class="col-sm-6 col-md-3">
                        <p class="mb-0">Year</p>
                        <select name="optionYear" id="scholarYrGrad" class="mb-0 form-select form-select-sm ">
                          <!-- Add your options here -->
                        </select>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-12 col-sm-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center flex-wrap gap-2">
                      <div class="avatar me-3">
                        <div class="avatar-initial bg-label-primary rounded">
                          <i class="mdi mdi-24px mdi-account-school-outline text-success"> </i>
                        </div>
                      </div>
                      <div class="card-info">
                        <div class="d-flex align-items-center">
                          <h4 class="mb-0">100</h4>
                          <!-- {{-- <i class="mdi mdi-chevron-down text-danger mdi-24px"></i> --}} -->
                        </div>
                        <small class="text-muted">No. of Scholars</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center flex-wrap gap-2">
                      <div class="avatar me-3">
                        <div class="avatar-initial bg-label-primary rounded">
                          <i class="mdi mdi-24px mdi-town-hall text-warning"> </i>
                        </div>
                      </div>
                      <div class="card-info">
                        <div class="d-flex align-items-center">
                          <h4 class="mb-0">10</h4>
                          <!-- {{-- <i class="mdi mdi-chevron-down text-danger mdi-24px"></i> --}} -->
                        </div>
                        <small class="text-muted">No. of Pending Scholars</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- Activity Timeline -->
              <div class="col-12 col-lg-13 col-xl-12 mb-4">
                <div class="card h-100">
                  <img src="../../assets//img/elements/activity-timeline.png" alt="timeline-image" class="card-img-top h-px-200" style="object-fit: cover" />
                  <div class="card-body">
                    <h4 class="mb-4">Activity Timeline</h4>
                    <ul class="timeline card-timeline mb-0">
                      <li class="timeline-item timeline-item-transparent">
                        <span class="timeline-point timeline-point-danger"></span>
                        <div class="timeline-event">
                          <div class="timeline-header mb-1">
                            <h6 class="mb-0 fw-semibold">8 Invoices have been paid</h6>
                            <small class="text-muted">Wednesday</small>
                          </div>
                          <p class="text-muted mb-2">Invoices have been paid to the company</p>
                          <div class="d-flex">
                            <a href="javascript:void(0)" class="me-3">
                              <img src="../../assets/img/icons/misc/pdf.png" alt="PDF image" width="15" class="me-2" />
                              <span class="fw-semibold text-muted">invoices.pdf</span>
                            </a>
                          </div>
                        </div>
                      </li>
                      <li class="timeline-item timeline-item-transparent">
                        <span class="timeline-point timeline-point-primary"></span>
                        <div class="timeline-event">
                          <div class="timeline-header mb-1">
                            <h6 class="mb-0 fw-semibold">Create a new project for client 😎</h6>
                            <small class="text-muted">April, 18</small>
                          </div>
                          <p class="text-muted mb-2">Invoices have been paid to the company.</p>
                          <div class="d-flex flex-wrap align-items-center">
                            <div class="avatar avatar-sm me-3">
                              <img src="../../assets/img/avatars/1.png" alt="Avatar" class="rounded-circle" />
                            </div>
                            <h6 class="mb-0 fw-semibold text-muted">John Doe (Client)</h6>
                          </div>
                        </div>
                      </li>
                      <li class="timeline-item timeline-item-transparent border-0">
                        <span class="timeline-point timeline-point-info"></span>
                        <div class="timeline-event pb-1">
                          <div class="timeline-header mb-1">
                            <h6 class="mb-0 fw-semibold">Order #37745 from September</h6>
                            <small class="text-muted">January, 10</small>
                          </div>
                          <p class="text-muted mb-0">Invoices have been paid to the company.</p>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <!-- / Content -->

          <!-- Footer -->
          <?php
          include "_footer.php";

          ?>
          <!-- / Footer -->

          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
  </div>
  <!-- / Layout wrapper -->

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <?php
  include "_scripts.php";

  ?>
</body>

</html>