<?php
  require '../../config/includes.php';
  require '_session.php';
  include "_head.php";

  $scholarCode = clean_string($_GET['scholarCode']);

  $getProfile=selectScholar($scholarCode);
  $profile=$getProfile->fetch(PDO::FETCH_ASSOC);

  $getAddressProfile=selectScholarAddress($scholarCode);
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
                      <a class="nav-link active" href="scholar_profile?rand=<?= my_rand_str(100) ?>&scholarCode=<?= $scholarCode ?>"
                        ><i class="mdi mdi-account-outline me-1 mdi-20px"></i>Profile</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="scholar_profile2?rand=<?= my_rand_str(100) ?>&scholarCode=<?= $scholarCode ?>"
                        ><i class="mdi mdi-school-outline me-1 mdi-20px"></i>Personal Information</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="scholar_profile3?rand=<?= my_rand_str(100) ?>&scholarCode=<?= $scholarCode ?>"
                        ><i class="mdi mdi-school-outline me-1 mdi-20px"></i>Academic Information</a>
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
                          <span><?= getSchoolScholar($scholarCode) ?></span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                          <i class="mdi mdi-book-check-outline mdi-24px"></i
                          ><span class="fw-semibold mx-2">Course:</span> <span><?= getScholarCourse($scholarCode)  ?></span>
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
                        <!-- <li class="d-flex align-items-center mb-3">
                          <i class="mdi mdi-qrcode mdi-24px"></i
                          ><span class="fw-semibold mx-2">Scholar Code:</span> <span><?= $profile['prow_scholar_code'] ?></span>
                        </li> -->
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
                      <iframe style="width: 100%; height: 200px; position: relative;" src="studentProfileMap?scholarCode=<?= $scholarCode ?>" allowfullscreen></iframe>

                      <ul class="list-unstyled my-3 py-1">
                        <li class="d-flex align-items-center mb-3">
                          <i class="mdi mdi-map-marker-outline mdi-24px"></i><span class="fw-semibold mx-2">Province:</span>
                          <span><?= $addressProfile['prow_address_province'] ?></span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                          <i class="mdi mdi-map-marker-outline mdi-24px"></i><span class="fw-semibold mx-2">Municipality:</span>
                          <span><?= $addressProfile['prow_address_municipality'] ?></span>
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
                <!-- scholar status -->
                <?php
                  $getScholarType=selectScholarType($scholarCode);

                  if($getScholarType == 1){
                    //old-renew Scholar Status
                    include ("scholarStatus_old.php");

                  }else{
                    //new Scholar Status
                    include ("scholarStatus_new.php");

                  }
                
                ?>
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
                                            $getSY=selectSchoolYears();
                                            while ($sy=$getSY->fetch(PDO::FETCH_ASSOC)) {
                                          ?>
                                        <option value="<?= $sy['prow_sy_year'] ?>"><?= $sy['prow_sy_year'] ?></option>
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
