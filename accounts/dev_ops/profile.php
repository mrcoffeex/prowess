<?php
  require '../../config/includes.php';
  require '_session.php';
  include "_head.php";

  $getProfile=selectScholar($scholarCode);
  $profile=$getProfile->fetch(PDO::FETCH_ASSOC);

  $getSchoolProfile=getSchoolScholar($scholarCode);
  $schoolProfile=$getSchoolProfile->fetch(PDO::FETCH_ASSOC);

  $getAddressProfile=selectScholarAddress($scholarCode);
  $addressProfile=$getAddressProfile->fetch(PDO::FETCH_ASSOC);

?>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">

        <div class="layout-page">


         <?php
          include "_sidemenu.php";
         ?>

          <div class="content-wrapper">
            <?php
              include "_topnavigation.php";
            ?>
            
            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">User Profile /</span> Profile</h4>

              
              <?php
                include "profile_header.php";
              ?>

              <!-- Navbar pills -->
              <div class="row">
                <div class="col-md-12">
                  <ul class="nav nav-pills flex-column flex-sm-row mb-4">
                    <li class="nav-item">
                      <a class="nav-link active" href="javascript:void(0);"
                        ><i class="mdi mdi-account-outline me-1 mdi-20px"></i>Profile</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages-profile-teams.html"
                        ><i class="mdi mdi-school-outline me-1 mdi-20px"></i>Educational Attainment</a
                      >
                    </li>

                    <!-- Hide this if not graduated -->
                    <!-- <li class="nav-item">
                      <a class="nav-link" href="pages-profile-teams.html"
                        ><i class="mdi mdi-badge-account-outline me-1 mdi-20px"></i>Skills</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages-profile-teams.html"
                        ><i class="mdi mdi-briefcase-outline me-1 mdi-20px"></i>Employment</a
                      >
                    </li> -->
                    <li class="nav-item">
                      <a class="nav-link" href="pages-profile-teams.html"
                        ><i class="mdi mdi-bell-badge-outline me-1 mdi-20px"></i>Notifications</a
                      >
                    </li>
                  </ul>
                </div>
              </div>
              <!--/ Navbar pills -->
              
              <!-- User Profile Content -->
              <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-5">
                  <!-- Profile Overview -->
                  <div class="card mb-4">
                    <div class="card-body">
                      <small class="card-text text-uppercase text-muted">School Information</small>
                      <ul class="list-unstyled mb-0 mt-3 pt-1">
                        <li class="d-flex align-items-center mb-3">
                          <i class="mdi mdi-badge-account-outline mdi-24px"></i><span class="fw-semibold mx-2">School ID:</span>
                          <span><?= $profile['prow_scholar_school_id'] ?></span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                          <i class="mdi mdi-town-hall mdi-24px"></i><span class="fw-semibold mx-2">School:</span>
                          <span><?= getSchoolName($schoolProfile['prow_hei_id']) ?></span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                          <i class="mdi mdi-book-check-outline mdi-24px"></i
                          ><span class="fw-semibold mx-2">Course:</span> <span><?= getCourseName($schoolProfile['prow_course_id']) ?></span>
                        </li>
                        <li class="d-flex align-items-center">
                          <i class="mdi mdi-book-open-outline mdi-24px"></i
                          ><span class="fw-semibold mx-2">Year Level:</span> <span><?= $schoolProfile['prow_yr_lvl'] ?></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!--/ Profile Overview -->
                  <!-- About User -->
                  <div class="card mb-4">
                    <div class="card-body">
                      <small class="card-text text-uppercase text-muted">About</small>
                      <ul class="list-unstyled my-3 py-1">
                        <li class="d-flex align-items-center mb-3">
                          <i class="mdi mdi-qrcode mdi-24px"></i
                          ><span class="fw-semibold mx-2">Scholar Code:</span> <span><?= $profile['prow_scholar_code'] ?></span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                          <i class="mdi mdi-account-outline mdi-24px"></i
                          ><span class="fw-semibold mx-2">User Name:</span> <span><?= getUserName($scholarCode) ?></span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                          <i class="mdi mdi-account-settings-outline mdi-24px"></i><span class="fw-semibold mx-2">Gender:</span>
                          <span><?= $profile['prow_scholar_gender'] ?></span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                          <i class="mdi mdi-card-account-details-outline mdi-24px"></i><span class="fw-semibold mx-2">Civil Status:</span>
                          <span><?= $profile['prow_scholar_cs'] ?></span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                          <i class="mdi mdi-cake-variant-outline mdi-24px"></i><span class="fw-semibold mx-2">Birthday:</span>
                          <span><?= $profile['prow_scholar_birthday'] ?></span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                          <i class="mdi mdi-map-marker-outline mdi-24px"></i><span class="fw-semibold mx-2">Birth Place:</span>
                          <span><?= $profile['prow_scholar_birthplace'] ?></span>
                        </li>
                      </ul>
                      <small class="card-text text-uppercase text-muted">Contacts</small>
                      <ul class="list-unstyled my-3 py-1">
                        <li class="d-flex align-items-center mb-3">
                          <i class="mdi mdi-phone-outline mdi-24px"></i><span class="fw-semibold mx-2">Contact:</span>
                          <span><?= $profile['prow_scholar_con'] ?></span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                          <i class="mdi mdi-email-outline mdi-24px"></i><span class="fw-semibold mx-2">Email:</span>
                          <span><?= $profile['prow_scholar_email'] ?></span>
                        </li>
                      </ul>
                      <small class="card-text text-uppercase text-muted">Talents</small>
                      <ul class="list-unstyled my-3 py-1">
                        <li class="d-flex align-items-center mb-3">
                          <i class="mdi mdi-star-check-outline mdi-24px"></i><span class="fw-semibold mx-2">Contact:</span>
                          <span>(123) 456-7890</span>
                        </li>
                      </ul>
                      <small class="card-text text-uppercase text-muted">Address</small>
                      <ul class="list-unstyled my-3 py-1">
                        <li class="d-flex align-items-center mb-3">
                          <i class="mdi mdi-map-marker-outline mdi-24px"></i><span class="fw-semibold mx-2">Street:</span>
                          <span><?= $addressProfile['prow_address_description'] ?></span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                          <i class="mdi mdi-map-marker-outline mdi-24px"></i><span class="fw-semibold mx-2">Province:</span>
                          <span><?= $addressProfile['prow_address_province'] ?></span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                          <i class="mdi mdi-map-marker-outline mdi-24px"></i><span class="fw-semibold mx-2">Municipality:</span>
                          <span><?= getMunicipalityName($addressProfile['prow_address_municipality']) ?></span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                          <i class="mdi mdi-map-marker-outline mdi-24px"></i><span class="fw-semibold mx-2">Barangay:</span>
                          <span><?= $addressProfile['prow_address_brgy'] ?></span>
                        <li class="d-flex align-items-center mb-3">
                          <i class="mdi mdi-map-marker-outline mdi-24px"></i><span class="fw-semibold mx-2">Zip Code:</span>
                          <span><?= $addressProfile['prow_address_zipcode'] ?></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!--/ About User -->
                  
                </div>
                <div class="col-xl-8 col-lg-7 col-md-7">
                  <!-- Activity Timeline -->
                  <div class="card card-action mb-4">
                    <div class="card-header align-items-center">
                      <h5 class="card-action-title mb-0">
                        <i class="mdi mdi-format-list-bulleted mdi-24px me-2"></i>Scholarship Status
                      </h5>
                      <div class="card-action-element">
                        <div class="dropdown">
                          <button
                            type="button"
                            class="btn dropdown-toggle hide-arrow p-0"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="mdi mdi-dots-vertical mdi-24px text-muted"></i>
                          </button>
                          <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="javascript:void(0);">Share timeline</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);">Suggest edits</a></li>
                            <li>
                              <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="javascript:void(0);">Report bug</a></li>
                          </ul>
                        </div>
                      </div>
                      
                    </div>
                    <div class="card-body pt-3 pb-0">
                      <ul class="timeline mb-0">
                        <li class="timeline-item timeline-item-transparent">
                          <span class="timeline-point timeline-point-danger"></span>
                          <div class="timeline-event">
                            <div class="timeline-header mb-1">
                              <h6 class="mb-0">Create and Verified Account</h6>
                              <span class="text-muted">Today</span>
                            </div>
                            <p class="text-muted mb-2">Finish Fill up Personal Information</p>
                            <div class="d-flex flex-wrap">
                              <div class="avatar me-3">
                                <img src="../../assets/img/avatars/3.png" alt="Avatar" class="rounded-circle" />
                              </div>
                              <div>
                                <h6 class="mb-0">Lester McCarthy (Client)</h6>
                                <span class="text-muted">CEO of Infibeam</span>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="timeline-item timeline-item-transparent">
                          <span class="timeline-point timeline-point-primary"></span>
                          <div class="timeline-event">
                            <div class="timeline-header mb-1">
                              <h6 class="mb-0">Finish Fill up Personal Information</h6>
                              <span class="text-muted">2 Day Ago</span>
                            </div>
                            <p class="text-muted mb-0">Add files to new design folder</p>
                          </div>
                        </li>
                        <li class="timeline-item timeline-item-transparent">
                          <span class="timeline-point timeline-point-warning"></span>
                          <div class="timeline-event">
                            <div class="timeline-header mb-1">
                              <h6 class="mb-0">Upload File Requirements</h6>
                              <span class="text-muted">6 Day Ago</span>
                            </div>
                            <p class="text-muted mb-2">
                              Sent by Mollie Dixon
                              <img
                                src="../../assets/img/avatars/4.png"
                                class="rounded-circle me-3"
                                alt="avatar"
                                height="24"
                                width="24" />
                            </p>
                            <div class="d-flex flex-wrap gap-2">
                              <a href="javascript:void(0)" class="me-3">
                                <img
                                  src="../../assets/img/icons/misc/doc.png"
                                  alt="Document image"
                                  width="15"
                                  class="me-2" />
                                <span class="fw-medium text-body">Highschool Report Card</span>
                              </a>
                              <a href="javascript:void(0)">
                                <img
                                  src="../../assets/img/icons/misc/xls.png"
                                  alt="Excel image"
                                  width="15"
                                  class="me-2" />
                                <span class="fw-medium text-body">Certificate of Low Income from Barangay</span>
                              </a>
                            </div>
                          </div>
                        </li>
                        <li class="timeline-item timeline-item-transparent border-0">
                          <span class="timeline-point timeline-point-info"></span>
                          <div class="timeline-event">
                            <div class="timeline-header mb-1">
                              <h6 class="mb-0">Initial Approval</h6>
                              <span class="text-muted">10 Day Ago</span>
                            </div>
                            <p class="text-muted mb-0">Approval by Scholarship Coordinator</p>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <!-- Projects table -->
                  <!-- <div class="card mb-4">
                    <div class="card-datatable table-responsive">
                      <table class="datatables-projects table">
                        <thead>
                          <tr>
                            <th></th>
                            <th></th>
                            <th>Name</th>
                            <th>Leader</th>
                            <th>Team</th>
                            <th class="w-px-200">Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                      </table>
                    </div>
                  </div> -->
                  <!--/ Projects table -->
                </div>
              </div>
              <!--/ User Profile Content -->
            </div>
         
              <?php
                include "_footer.php";
              ?>
         

            <div class="content-backdrop fade"></div>
          </div>
      
        </div>
        
      </div>
      <div class="layout-overlay layout-menu-toggle"></div>
      <div class="drag-target"></div>
    </div>

    <?php
      include "_scripts.php";
    ?>

    <script src="../../assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
  </body>
</html>
