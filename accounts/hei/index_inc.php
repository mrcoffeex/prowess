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
                        <h4 class="card-title" id="userName" name="userName">HEI Name</h4>
                        <span class="mb-3 badge rounded-pill bg-label-secondary" id="applicationStatus" name="applicationStatus">Not Applicable</span>
                        <p class="mb-0">Welcome to Prowess your</p>
                        <p>online scholarship management system.</p>

                        <div class="mt-4">
                          <h5>Eligibility Requirements</h5>
                          <ol>
                            <li class="mt-3">Be a good Filipino citizen</li>
                            <li class="mt-1">Be of good moral character as certified by the high school principal or the dean of student affairs of the educational institution where applicant last enrolled.</li>
                            <li class="mt-1">Be physically and mentally fit for study</li>
                            <li class="mt-1">Not be presently enjoying any form of scholarship/ study grant in the government</li>
                            <li class="mt-1">Have complied with the admission requirements of the institution where he/she intends to enroll.</li>
                            <li class="mt-1">Must be a resident/ registered voters of Davao del Sur. </li>
                          </ol>
                        </div>

                        <div class="mt-4">
                          <h5>Application Process</h5>
                          <ol>
                            <li class="mt-3">High School Report Card for incoming freshmen</li>
                            <li class="mt-1">Certificate of Low Income from the Barangay or BIR for incoming freshmen</li>
                            <li class="mt-1">Birth Certificate for incoming freshmen</li>
                            <li class="mt-1">Report of rating of last semester attendance in college for non-freshmen or enrollment form</li>
                            <li class="mt-1">Must have at least a general average grade rating of 80%.</li>
                            <li class="mt-1">Endorsement Letter</li>
                          </ol>
                        </div>

                        <div class="customDiv mt-4">
                          <p class="col-md-8 mb-3 customLabel rounded-pill bg-label-danger">To fully use the information system you need to complete your profile.</p>
                          <a type="submit" class="btn btn-primary" href="fillupform">Proceed</a>

                        </div>
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


              <?php
              include 'form_modal.php';
              ?>

              <!-- Activity Timeline -->
              <div class="col-12 col-lg-13 col-xl-12 mb-4" hidden>
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