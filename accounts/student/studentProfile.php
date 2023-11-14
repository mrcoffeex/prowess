<?php
  require '../../config/includes.php';
  require '_session.php';
  include "_head.php";

  $getProfile=selectProfile($scholarCode);
  $profile=$getProfile->fetch(PDO::FETCH_ASSOC);

  $getSchoolProfile=getSchoolScholar($scholarCode);
  $schoolProfile=$getSchoolProfile->fetch(PDO::FETCH_ASSOC);

  $getAddressProfile=getAddressScholar($scholarCode);
  $addressProfile=$getAddressProfile->fetch(PDO::FETCH_ASSOC);

?>

  <body>
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <div class="layout-page">
         <?php include "_sidemenu.php";?>

          <div class="content-wrapper">
            <?php include "_topnavigation.php";?>
            
            <div class="container-xxl flex-grow-1 container-p-y">
              <?php include "profile_header.php"; ?>

              <div class="row">
                <div class="col-md-12">
                  <ul class="nav nav-pills flex-column flex-sm-row mb-4">
                    <li class="nav-item">
                      <a class="nav-link active" href="studentProfile"
                        ><i class="mdi mdi-account-outline me-1 mdi-20px"></i>Profile</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="studentProfile2"
                        ><i class="mdi mdi-school-outline me-1 mdi-20px"></i>Personal Information</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="notifications"
                        ><i class="mdi mdi-bell-badge-outline me-1 mdi-20px"></i>Notifications</a
                      >
                    </li>
                  </ul>
                </div>
              </div>
              <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-5">
                 
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
                          <span><?= getSchoolName($schoolProfile['prow_hei']) ?></span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                          <i class="mdi mdi-book-check-outline mdi-24px"></i
                          ><span class="fw-semibold mx-2">Course:</span> <span><?= getScholarCourse($scholarCode) ?></span>
                        </li>
                        <li class="d-flex align-items-center">
                          <i class="mdi mdi-book-open-outline mdi-24px"></i
                          ><span class="fw-semibold mx-2">Year Level:</span> <span><?= getScholarYrLvl($scholarCode)?></span>
                        </li>
                      </ul>
                    </div>
                  </div>

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
                     
                      <small class="card-text text-uppercase text-muted">Address</small>
                      <ul class="list-unstyled my-3 py-1">
                        <li class="d-flex align-items-center mb-3">
                          <i class="mdi mdi-map-marker-outline mdi-24px"></i><span class="fw-semibold mx-2">Province:</span>
                          <span><?= $addressProfile['prow_address_province'] ?></span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                          <i class="mdi mdi-map-marker-outline mdi-24px"></i><span class="fw-semibold mx-2">Municipality:</span>
                          <span><?= getMunicipalityName($addressProfile['prow_address_municipality']) ?></span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                          <i class="mdi mdi-map-marker-outline mdi-24px"></i><span class="fw-semibold mx-2">Street:</span>
                          <span><?= $addressProfile['prow_address_description'] ?></span>
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
                            <span class="timeline-point timeline-point-info"></span>
                            <div class="timeline-event">
                              <div class="timeline-header mb-1">
                                <h6 class="mb-0">Create and Verified Account</h6>
                                <span class="text-muted"><?=  getTimePassed($profile['prow_scholar_created'], date("Y-m-d H:i:s")) ?></span>
                              </div>
                              <?php  
                                if (getScholar_Status($scholarCode) == "Pending") {
                                  echo '<p class="text-warning mb-2">Account Verification is still ' .  getScholar_Status($scholarCode) . '</p>';
                                } else {
                                  echo '<p class="text-success mb-2">Account is ' .  getScholar_Status($scholarCode) . '</p>';
                                }
                              ?>
                            </div>
                          </li>
                          <?php  
                            if (scholarshipStatus($scholarCode, "personal_information") == "complete") {
                              $a_bullet = "timeline-point-info";
                              $a_created = getPersonalInformationCreatedDate($scholarCode);
                              $a_desc = "Personal information has been registered";
                            } else if (scholarshipStatus($scholarCode, "personal_information") == "incomplete") {
                              $a_bullet = "timeline-point-warning";
                              $a_created = getPersonalInformationCreatedDate($scholarCode);
                              $a_desc = "<span class='text-warning'>Please complete your personal information</span>";
                            } else {
                              $a_bullet = "timeline-point-secondary";
                              $a_created = "xxxx-xx-xx";
                              $a_desc = "Please put your personal information";
                            }
                          ?>
                          <li class="timeline-item timeline-item-transparent">
                            <span class="timeline-point <?= $a_bullet ?>"></span>
                            <div class="timeline-event">
                              <div class="timeline-header mb-1">
                                <h6 class="mb-0">Finish Fill up Personal Information</h6>
                                <span class="text-muted"><?= getTimePassed($a_created, date("Y-m-d H:i:s")) ?></span>
                              </div>
                              <p class="text-muted mb-0"><?= $a_desc ?></p>
                            </div>
                          </li>
                          <?php  
                            if (scholarshipStatus($scholarCode, "requirements") == "complete") {
                              $b_bullet = "timeline-point-info";
                              $b_created = getRequimentsCreatedDate($scholarCode);
                              $b_desc = "All files has been uploaded";
                            } else if (scholarshipStatus($scholarCode, "requirements") == "incomplete") {
                              $b_bullet = "timeline-point-warning";
                              $b_created = getRequimentsCreatedDate($scholarCode);
                              $b_desc = "<span class='text-warning'>Please complete your requirements</span>";
                            } else {
                              $b_bullet = "timeline-point-secondary";
                              $b_created = "xxxx-xx-xx";
                              $b_desc = "Please upload your requirements";
                            }
                          ?>
                          <li class="timeline-item timeline-item-transparent">
                            <span class="timeline-point <?= $b_bullet ?>"></span>
                            <div class="timeline-event">
                              <div class="timeline-header mb-1">
                                <h6 class="mb-0">Upload File Requirements</h6>
                                <span class="text-muted"><?= getTimePassed($b_created, date("Y-m-d H:i:s")) ?></span>
                              </div>
                              <p class="text-muted mb-0"><?= $b_desc ?></p>
                            </div>
                          </li>
                          <?php  
                            if (initialApproveStatus($scholarCode) == "true") {
                              $c_bullet = "timeline-point-info";
                              $c_created = getRequimentsCreatedDate($scholarCode);
                              $c_desc = "Initially approved by Scholarship Coordinator";
                            }else {
                              $c_bullet = "timeline-point-secondary";
                              $c_created = "xxxx-xx-xx";
                              $c_desc = "Wait for the Initial approval of Scholarship Coordinator";
                            }
                          ?>
                          <li class="timeline-item timeline-item-transparent border-0">
                            <span class="timeline-point <?= $c_bullet ?>"></span>
                            <div class="timeline-event">
                              <div class="timeline-header mb-1">
                                <h6 class="mb-0">Checking and Initial Approval</h6>
                                <span class="text-muted"></span>
                              </div>
                              <p class="text-muted mb-0"><?= $c_desc ?></p>
                            </div>
                          </li>

                          <li class="timeline-item timeline-item-transparent border-0">
                            <span class="timeline-point timeline-point-secondary"></span>
                            <div class="timeline-event">
                              <div class="timeline-header mb-1">
                                <h6 class="mb-0">Examination</h6>
                                <span class="text-muted"></span>
                              </div>
                              <p class="text-muted mb-0">Scheduled by Scholarship Coordinator</p>
                            </div>
                          </li>

                          <li class="timeline-item timeline-item-transparent border-0">
                            <span class="timeline-point timeline-point-secondary"></span>
                            <div class="timeline-event">
                              <div class="timeline-header mb-1">
                                <h6 class="mb-0">Interview</h6>
                                <span class="text-muted"></span>
                              </div>
                              <p class="text-muted mb-0">Scheduled by Scholarship Coordinator</p>
                            </div>
                          </li>
                          <li class="timeline-item timeline-item-transparent border-0">
                            <span class="timeline-point timeline-point-secondary"></span>
                            <div class="timeline-event">
                              <div class="timeline-header mb-1">
                                <h6 class="mb-0">Approval Status</h6>
                                <span class="text-muted"></span>
                              </div>
                              <p class="text-muted mb-0">Approval by Scholarship Coordinator</p>
                            </div>
                          </li>

                        </ul>
                      </div>
                  </div>
                  <div class="card card-action mb-4">
                      <div class="card-header align-items-center">
                        <h5 class="card-action-title mb-0">
                          <i class="mdi mdi-format-list-bulleted mdi-24px me-2"></i>Scholar Requirements
                        </h5>
                        <div class="card-action-element">
                          
                        </div>
                        
                      </div>
                      <div class="card-body pt-3 pb-0">

                        <div class="form-floating form-floating-outline mb-5">
                            <select id="enrollmentSchoolYear" name="enrollmentSchoolYear" class="form-control">
                            <option>Select School Year</option>
                                          <?php
                                            //get SY
                                            $getSY=selectSY();
                                            while ($sy=$getSY->fetch(PDO::FETCH_ASSOC)) {
                                          ?>
                                        <option value="<?= $sy['prow_school_year'] ?>"><?= $sy['prow_school_year'] ?></option>
                                        <?php } ?>
                            </select>
                            <label for="enrollmentYearLevel">School Year</label>
                            <input type="hidden" name="scholarCode" id="scholarCode" value="<?= $scholarCode ?>">
                        </div>

                        <div class="row mb-5" id="showRequirements"></div> 

                      </div>
                  </div>



                </div>
              </div>
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

    <?php include "_scripts.php"; ?>
    <script>

    $(document).ready(function() {
        $('#enrollmentSchoolYear').change(function() {

            var selectedYear = $(this).val();
            var scholarCode = $('#scholarCode').val();

            // Make an AJAX request to fetch student info
            $.ajax({
                url: 'autoRequirements', // Replace with your actual URL
                method: 'GET',
                data: { schoolYear: selectedYear, scholarCode: scholarCode },
                success: function(data) {

                    var list = $('#studentList');
                    list.empty();

                    $('#showRequirements').html(data);
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching student info:', error);
                }
            });
        });

        // Trigger initial change event to populate list on page load
        $('#enrollmentSchoolYear').trigger('change');
    });

    </script>
   
  </body>
</html>
