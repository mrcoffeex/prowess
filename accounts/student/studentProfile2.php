<?php
  require '../../config/includes.php';
  require '_session.php';
  require '_restriction.php';
  include "_head.php";

  $getProfile=selectPersonalInfomation($scholarCode);
  $profile=$getProfile->fetch(PDO::FETCH_ASSOC);

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
                      <a class="nav-link " href="studentProfile"
                        ><i class="mdi mdi-account-outline me-1 mdi-20px"></i>Profile</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="studentProfile2"
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
                  <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="card mb-4">
                      <div class="card-body">
                        <ul class="list-unstyled mb-0 mt-3 pt-1">
                          <li class="d-flex align-items-center mb-3">
                            <span class="fw-semibold mx-2">Height:</span>
                            <span><?= $profile['prow_prof_height'] ?> cm</span>
                          </li>
                          <li class="d-flex align-items-center mb-3">
                            <span class="fw-semibold mx-2">Weight:</span>
                            <span><?= $profile['prow_prof_weight'] ?> kg</span>
                          </li>
                          <li class="d-flex align-items-center mb-3">
                            <span class="fw-semibold mx-2">Blood Type:</span> 
                            <span><?= $profile['prow_prof_blood_type'] ?></span>
                          </li>

                          <hr>

                          <li class="d-flex align-items-center mb-3">
                            <span class="fw-semibold mx-2">Religion:</span> 
                            <span><?= $profile['prow_prof_religion'] ?></span>
                          </li>
                          <li class="d-flex align-items-center mb-3">
                            <span class="fw-semibold mx-2">Talent:</span> 
                            <span>
                              <?php 
                                $talentArray = explode(",", $profile['prow_prof_talent']);
                                
                                foreach ($talentArray as $talent) {
                                  echo "<span class='badge bg-primary'>" . $talent . "</span> ";
                                }
                              ?>
                            </span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-8 col-lg-8 col-md-12">
                    <div class="row">
                      <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="card mb-4">
                          <div class="card-body">
                          <small class="card-text text-uppercase text-muted">Father</small>
                            <ul class="list-unstyled mb-0 mt-3 pt-1">
                              <li class="d-flex align-items-center mb-3 text-primary">
                                <span class="fw-semibold mx-2">Name:</span>
                                <span><?= $profile['prow_prof_father'] ?></span>
                              </li>
                              <li class="d-flex align-items-center mb-3">
                                <span class="fw-semibold mx-2">Contact:</span>
                                <span><?= $profile['prow_prof_father_cont'] ?></span>
                              </li>
                              <li class="d-flex align-items-center mb-3">
                                <span class="fw-semibold mx-2">Occupation:</span> 
                                <span><?= $profile['prow_prof_father_occu'] ?></span>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="card mb-4">
                          <div class="card-body">
                          <small class="card-text text-uppercase text-muted">Mother</small>
                            <ul class="list-unstyled mb-0 mt-3 pt-1">
                              <li class="d-flex align-items-center mb-3 text-primary">
                                <span class="fw-semibold mx-2">Name:</span>
                                <span><?= $profile['prow_prof_mother'] ?></span>
                              </li>
                              <li class="d-flex align-items-center mb-3">
                                <span class="fw-semibold mx-2">Contact:</span>
                                <span><?= $profile['prow_prof_mother_cont'] ?></span>
                              </li>
                              <li class="d-flex align-items-center mb-3">
                                <span class="fw-semibold mx-2">Occupation:</span> 
                                <span><?= $profile['prow_prof_mother_occu'] ?></span>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="card mb-4">
                          <div class="card-body">
                          <small class="card-text text-uppercase text-muted">Guardian</small>
                            <ul class="list-unstyled mb-0 mt-3 pt-1">
                              <li class="d-flex align-items-center mb-3 text-primary">
                                <span class="fw-semibold mx-2">Name:</span>
                                <span><?= $profile['prow_prof_guardian'] ?></span>
                              </li>
                              <li class="d-flex align-items-center mb-3">
                                <span class="fw-semibold mx-2">Contact:</span>
                                <span><?= $profile['prow_prof_guardian_cont'] ?></span>
                              </li>
                              <li class="d-flex align-items-center mb-3">
                                <span class="fw-semibold mx-2">Occupation:</span> 
                                <span><?= $profile['prow_prof_guardian_occu'] ?></span>
                              </li>
                            </ul>
                          </div>
                        </div>
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
