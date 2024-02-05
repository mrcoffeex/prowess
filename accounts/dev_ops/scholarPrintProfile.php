<?php
    require '../../config/includes.php';
    require '_session.php';
    require '_restriction.php';

    $scholarCode=$_GET['scholarCode'];
    $getProfile=selectScholar($scholarCode);
    $profile=$getProfile->fetch(PDO::FETCH_ASSOC);

    $getAddressProfile=selectScholarAddress($scholarCode);
    $addressProfile=$getAddressProfile->fetch(PDO::FETCH_ASSOC);

    $getGrades=selectScholarGrades($scholarCode);
    $countRes=$getGrades->rowCount();

    $getProfiles=selectPersonalInfomation($scholarCode);
    $profiles=$getProfiles->fetch(PDO::FETCH_ASSOC);


    include "_head.php";

?>
  <style>
    @media print {
      /* Set the page size to A4 */
      @page {
        size: A4;
        margin-left: 1.5cm;
        margin-right: 1.5cm;
        margin-top: 0.2cm;
        margin-bottom: 0.2cm;
      }
    }
  </style>
  <body class="reportCard">
    <div class="container-xxl flex-grow-1 container-p-y">
      <h3 class="col-12 mb-0 text-center text-primary" style="text-transform: uppercase">Scholar Bio Data</h3>
      <div class="">
        <div class="col-12 mb-3 text-center">
          <h4 class="col mb-0"><?= getSchoolScholar($scholarCode) ?></h4>
          <hr class="my-2 mx-n2" />
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-3">
          <center>
          <img
            src="../../imagebank/<?= $profile['prow_scholar_img'] ?>"
            alt="Profile Picture does not exist"
            class="scholarID"
          />
          </center>
        </div>
        <div class="col-9 ">
          <div class="card-body">
            <ul class="list-unstyled mb-0 pt-1">
            <li class="d-flex align-items-center text_custom2">
                <i class="mdi mdi-qrcode mdi-20px"></i
                ><span class="fw-semibold mx-2">Scholar Code:</span> <span><?=$scholarCode ?></span>
              </li>
              <li class="d-flex align-items-center text_custom2">
                <i class="mdi mdi-account-outline mdi-20px"></i
                ><span class="fw-semibold mx-2">Student Name:</span> <span><?= getFullname($scholarCode) ?></span>
              </li>
              <li class="d-flex align-items-center text_custom2">
                <i class="mdi mdi-book-check-outline mdi-20px"></i
                ><span class="fw-semibold mx-2">Course:</span> <span><?= getScholarCourse($scholarCode)  ?></span>
              </li>
              <li class="d-flex align-items-center text_custom2">
                <i class="mdi mdi-badge-account-outline mdi-20px"></i><span class="fw-semibold mx-2">School ID:</span>
                <span><?= $profile['prow_scholar_school_id'] ?></span>
              </li>
              <li class="d-flex align-items-center text_custom2">
                <i class="mdi mdi-book-open-outline mdi-20px"></i
                ><span class="fw-semibold mx-2">Year Level:</span> <span><?= getScholarYrLvl($scholarCode)?></span>
              </li>
            </ul>
          </div>
        </div>     
      </div>
      <hr class="my-2 mx-n2" />
      <div class="row mb-3">
        <div class="col-6">
            <div class="card-body">
                      <small class="card-text text-uppercase text-muted">Personal Information</small>
                      <ul class="">
                        <li class="d-flex align-items-center text_custom2 ">
                          <span class="fw-semibold mx-2">User Name:</span> <span><?= getUserName($scholarCode) ?></span>
                        </li>
                        <li class="d-flex align-items-center text_custom2 ">
                          <span class="fw-semibold mx-2">Gender:</span>
                          <span><?= $profile['prow_scholar_gender'] ?></span>
                        </li>
                        <li class="d-flex align-items-center text_custom2 ">
                          <span class="fw-semibold mx-2">Civil Status:</span>
                          <span><?= $profile['prow_scholar_cs'] ?></span>
                        </li>
                        <li class="d-flex align-items-center text_custom2">
                          <span class="fw-semibold mx-2">Birthday:</span>
                          <span><?= $profile['prow_scholar_birthday'] ?></span>
                        </li>
                        <li class="d-flex align-items-center text_custom2 ">
                          <span class="fw-semibold mx-2">Birth Place:</span>
                          <span><?= $profile['prow_scholar_birthplace'] ?></span>
                        </li>
                        <li class="d-flex align-items-center text_custom2">
                          <span class="fw-semibold mx-2">Height:</span>
                          <span><?= $profiles['prow_prof_height'] ?> cm</span>
                        </li>
                        <li class="d-flex align-items-center text_custom2">
                          <span class="fw-semibold mx-2">Weight:</span>
                          <span><?= $profiles['prow_prof_weight'] ?> kg</span>
                        </li>
                      </ul>
                      <small class="card-text text-uppercase text-muted">Contacts</small>
                      <ul class="">
                        <li class="d-flex align-items-center text_custom2">
                          </i><span class="fw-semibold mx-2">Contact:</span>
                          <span><?= $profile['prow_scholar_con'] ?></span>
                        </li>
                        <li class="d-flex align-items-center text_custom2">
                          <span class="fw-semibold mx-2">Email:</span>
                          <span><?= $profile['prow_scholar_email'] ?></span>
                        </li>
                      </ul>
                     
                      <small class="card-text text-uppercase text-muted">Address Information</small>
                      <ul class="">
                        <li class="d-flex align-items-center text_custom2 ">
                          <span class="fw-semibold mx-2">Province:</span>
                          <span><?= $addressProfile['prow_address_province'] ?></span>
                        </li>
                        <li class="d-flex align-items-center text_custom2 ">
                          <span class="fw-semibold mx-2">Municipality:</span>
                          <span><?= $addressProfile['prow_address_municipality'] ?></span>
                        </li>
                        <li class="d-flex align-items-center text_custom2">
                          <span class="fw-semibold mx-2">Street:</span>
                          <span><?= $addressProfile['prow_address_description'] ?></span>
                        </li>
                        <li class="d-flex align-items-center text_custom2">
                          <span class="fw-semibold mx-2">Barangay:</span>
                          <span><?= $addressProfile['prow_address_brgy'] ?></span>
                        <li class="d-flex align-items-center text_custom2">
                          <span class="fw-semibold mx-2">Zip Code:</span>
                          <span><?= $addressProfile['prow_address_zipcode'] ?></span>
                        </li>
                      </ul>
                    </div>
        </div>
        <div class="col-6">
            <div class="card-body">
                      <small class="card-text text-uppercase text-muted"></small>
                      <ul class="">
                          
                          <li class="d-flex align-items-center text_custom2">
                            <span class="fw-semibold mx-2">Blood Type:</span> 
                            <span><?= $profiles['prow_prof_blood_type'] ?></span>
                          </li>
                          <li class="d-flex align-items-center text_custom2">
                            <span class="fw-semibold mx-2">Religion:</span> 
                            <span><?= $profiles['prow_prof_religion'] ?></span>
                          </li>
                          
                          <li class="d-flex align-items-center text_custom2">
                            <span class="fw-semibold mx-2">Person with Disability: </span> 
                            <span><?php
                            $pwd=$profiles['prow_prof_pwd'];
                            if ($pwd==0) {
                              echo "NO";
                            } else {
                              echo "YES";
                            }
                            ?></span>
                          </li>
                          <li class="d-flex align-items-center text_custom2">
                            <span class="fw-semibold mx-2">Single Parent: </span> 
                            <span><?php
                            $parent=$profiles['prow_prof_single_p'];
                            if ($parent==0) {
                              echo "NO";
                            } else {
                              echo "YES";
                            }
                            ?></span>
                          </li>
                          <li class="d-flex align-items-center text_custom2">
                            <span class="fw-semibold mx-2">Single Parent ID:</span> 
                            <span><?php
                                    $parent=$profiles['prow_prof_single_p'];
                                    $parentID=$profiles['prow_prof_single_id'];
                                    if ($parent==0) {
                                      echo "None";
                                    } else {
                                      echo $parentID;
                                    }
                                  ?>
                            </span>
                          </li>
                          <li class="d-flex align-items-center text_custom2">
                            <span class="fw-semibold mx-2">Tribal Affiliation:</span> 
                            <span><?php
                            
                                    $tribe= $profiles['prow_prof_tribal']; 
                                    if (empty($tribe)) {
                                      echo "None";
                                    } else {
                                      echo $tribe;
                                    }
                                  ?>
                            </span>
                          </li>
                          <li class="d-flex align-items-center text_custom2">
                            <span class="fw-semibold mx-2">Talent:</span> 
                            <span>
                              <?php 
                                $talentArray = explode(",", $profiles['prow_prof_talent']);
                                
                                foreach ($talentArray as $talent) {
                                  echo "<span class=''>" . $talent . ", </span> ";
                                }
                              ?>
                            </span>
                          </li>
                        </ul>
                      <small class="card-text text-uppercase text-muted">Family Background Information</small>
                      <ul class="">
                          <li class="d-flex align-items-center text_custom2">
                            <span class="fw-semibold mx-2">Father's Name:</span>
                            <span><?= $profiles['prow_prof_father'] ?></span>
                          </li>
                          <li class="d-flex align-items-center text_custom2">
                            <span class="fw-semibold mx-2">Father's Contact:</span>
                            <span><?= $profiles['prow_prof_father_cont'] ?></span>
                          </li>
                          <li class="d-flex align-items-center text_custom2">
                            <span class="fw-semibold mx-2">Father's Occupation:</span>
                            <span><?= $profiles['prow_prof_father_occu'] ?></span>
                          </li>

                          <li class="d-flex align-items-center text_custom2">
                            <span class="fw-semibold mx-2">Mother's Name:</span>
                            <span><?= $profiles['prow_prof_mother'] ?></span>
                          </li>
                          <li class="d-flex align-items-center text_custom2">
                            <span class="fw-semibold mx-2">Mother's Contact:</span>
                            <span><?= $profiles['prow_prof_mother_cont'] ?></span>
                          </li>
                          <li class="d-flex align-items-center text_custom2">
                            <span class="fw-semibold mx-2">Mother's Occupation:</span>
                            <span><?= $profiles['prow_prof_mother_occu'] ?></span>
                          </li>

                          <li class="d-flex align-items-center text_custom2">
                            <span class="fw-semibold mx-2">Guradian's Name:</span>
                            <span><?= $profiles['prow_prof_guardian'] ?></span>
                          </li>
                          <li class="d-flex align-items-center text_custom2">
                            <span class="fw-semibold mx-2">Guardian's Contact:</span>
                            <span><?= $profiles['prow_prof_guardian_cont'] ?></span>
                          </li>
                          <li class="d-flex align-items-center text_custom2">
                            <span class="fw-semibold mx-2">Guardian's Occupation:</span>
                            <span><?= $profiles['prow_prof_guardian_occu'] ?></span>
                          </li>
                          <li class="d-flex align-items-center text_custom2">
                            <span class="fw-semibold mx-2">Household Total Income:</span>
                            <span><?= $profiles['prow_prof_income'] ?></span>
                          </li>                            
                        </ul>
                    </div>
        </div> 
      </div>

    

      <div class="col-12 text-custom">
        <p class="mb-0" style="text-align: left; font-style: italic;">* Generated by the PROWESS System - <?= date("Y-m-d H:i:s")?></p>
      </div>
    </div>
   
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        window.print();
      });
    </script>
    
  </body>
</html>
