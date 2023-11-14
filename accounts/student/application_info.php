<?php
  require '../../config/includes.php';
  require '_session.php';
  include "_head.php";

?>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->
      <?php include "_sidemenu.php"; ?>

      <div class="layout-page">
       
        <?php include "_topnavigation.php"; ?>

        <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">
            <div class="col-md-12 col-lg-13">
              <?php
                include "profile_header.php";
              ?>

              <div class="col-md-12 col-lg-13">
                <div class="card">
                  <div class="d-flex align-items-end row">
                    <div class="col-md-8 order-2 order-md-1">
                      <div class="card-body">
                        <h4 class="card-title" id="userName" name="userName">Welcome <strong> Student!</strong>🎉
                        </h4> <span class="mb-3 badge rounded-pill bg-label-secondary" id="applicationStatus" name="applicationStatus">Not Applicable</span>
                        <p class="mb-0">Welcome to Prowess your </p>
                        <p>Online Scholarship Management System.</p>

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
                            <li class="mt-3"><u>High School Report Card</u> for incoming freshmen</li>
                            <li class="mt-1"><u>Certificate of Low Income</u> from the Barangay or BIR for incoming freshmen</li>
                            <li class="mt-1"><u>Birth Certificate</u> for incoming freshmen</li>
                            <li class="mt-1">Report of rating of last semester attendance in college for non-freshmen or enrollment form</li>
                            <li class="mt-1">Must have at least a general average grade rating of 80%.</li>
                            <li class="mt-1">Endorsement Letter</li>
                          </ol>
                        </div>
                        <div class="alert alert-primary alert-dismissible mb-0" role="alert">
                            <h4 class="alert-heading d-flex align-items-center">
                              <i class="mdi mdi-chat-alert-outline mdi-24px me-2"></i>Reminders!
                            </h4>
                            <p class="mb-0">
                              To maximize the utility of the information system, it is essential to finalize and update your profile. 
                            </p>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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
            </div>
          </div>
        
          <?php include "_footer.php"; ?>
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