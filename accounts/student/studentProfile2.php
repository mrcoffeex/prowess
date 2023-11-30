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
                        ><i class="mdi mdi-school-outline me-1 mdi-20px"></i>Personal Information</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="studentProfile3"
                        ><i class="mdi mdi-school-outline me-1 mdi-20px"></i>Academic Information</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="notifications"
                        ><i class="mdi mdi-bell-badge-outline me-1 mdi-20px"></i>Notifications</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="row">
                  <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="card mb-4">
                      <div class="card-body">
                        <small class="card-text text-uppercase text-muted">Personal Information</small>
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
                          <li class="d-flex align-items-center mb-3">
                            <span class="fw-semibold mx-2">Religion:</span> 
                            <span><?= $profile['prow_prof_religion'] ?></span>
                          </li>
                          
                          <li class="d-flex align-items-center mb-3">
                            <span class="fw-semibold mx-2">Person with Disability: </span> 
                            <span><?php
                            $pwd=$profile['prow_scholar_pwd'];
                            if ($pwd==0) {
                              echo "NO";
                            } else {
                              echo "YES";
                            }
                            ?></span>
                          </li>
                          <li class="d-flex align-items-center mb-3">
                            <span class="fw-semibold mx-2">Single Parent: </span> 
                            <span><?php
                            $parent=$profile['prow_scholar_single_p'];
                            if ($parent==0) {
                              echo "NO";
                            } else {
                              echo "YES";
                            }
                            ?></span>
                          </li>
                          <li class="d-flex align-items-center mb-3">
                            <span class="fw-semibold mx-2">Single Parent ID:</span> 
                            <span><?php
                                    $parent=$profile['prow_scholar_single_p'];
                                    $parentID=$profile['prow_scholar_single_id'];
                                    if ($parent==0) {
                                      echo "None";
                                    } else {
                                      echo $parentID;
                                    }
                                  ?>
                            </span>
                          </li>
                          <li class="d-flex align-items-center mb-3">
                            <span class="fw-semibold mx-2">Tribal Affiliation:</span> 
                            <span><?php
                            
                                    $tribe= $profile['prow_scholar_tribal']; 
                                    if (empty($tribe)) {
                                      echo "None";
                                    } else {
                                      echo $tribe;
                                    }
                                  ?>
                            </span>
                          </li>
                          <li class="d-flex align-items-center mb-3">
                            <span class="fw-semibold mx-2">Talent:</span> 
                            <span>
                              <?php 
                                $talentArray = explode(",", $profile['prow_prof_talent']);
                                
                                foreach ($talentArray as $talent) {
                                  echo "<span class='badge bg-primary mb-2'>" . $talent . "</span> ";
                                }
                              ?>
                            </span>
                          </li>
                        </ul>

                        <small class="card-text text-uppercase text-muted">Family Background Information</small>
                        <ul class="list-unstyled mb-0 mt-3 pt-1">
                          <li class="d-flex align-items-center mb-3">
                            <span class="fw-semibold mx-2">Father's Name:</span>
                            <span><?= $profile['prow_prof_father'] ?></span>
                          </li>
                          <li class="d-flex align-items-center mb-3">
                            <span class="fw-semibold mx-2">Father's Contact:</span>
                            <span><?= $profile['prow_prof_father_cont'] ?></span>
                          </li>
                          <li class="d-flex align-items-center mb-3">
                            <span class="fw-semibold mx-2">Father's Occupation:</span>
                            <span><?= $profile['prow_prof_father_occu'] ?></span>
                          </li>
                          <hr class="my-4 mx-n4" />
                          <li class="d-flex align-items-center mb-3">
                            <span class="fw-semibold mx-2">Mother's Name:</span>
                            <span><?= $profile['prow_prof_mother'] ?></span>
                          </li>
                          <li class="d-flex align-items-center mb-3">
                            <span class="fw-semibold mx-2">Mother's Contact:</span>
                            <span><?= $profile['prow_prof_mother_cont'] ?></span>
                          </li>
                          <li class="d-flex align-items-center mb-3">
                            <span class="fw-semibold mx-2">Mother's Occupation:</span>
                            <span><?= $profile['prow_prof_mother_occu'] ?></span>
                          </li>
                          <hr class="my-4 mx-n4" />
                          <li class="d-flex align-items-center mb-3">
                            <span class="fw-semibold mx-2">Guradian's Name:</span>
                            <span><?= $profile['prow_prof_guardian'] ?></span>
                          </li>
                          <li class="d-flex align-items-center mb-3">
                            <span class="fw-semibold mx-2">Guardian's Contact:</span>
                            <span><?= $profile['prow_prof_guardian_cont'] ?></span>
                          </li>
                          <li class="d-flex align-items-center mb-3">
                            <span class="fw-semibold mx-2">Guardian's Occupation:</span>
                            <span><?= $profile['prow_prof_guardian_occu'] ?></span>
                          </li>
                          <li class="d-flex align-items-center mb-3">
                            <span class="fw-semibold mx-2">Household Total Income:</span>
                            <span><?= $profile['prow_prof_income'] ?></span>
                          </li>                            
                        </ul>
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-8 col-lg-8 col-md-12">
                    <div class="row">
                       <div class="card card-action mb-4">
                            <div class="card-header align-items-center">
                                <h5 class="card-action-title mb-0">
                                    <i class="mdi mdi-format-list-bulleted mdi-24px me-2"></i>Skills
                                </h5>
                                <div class="card-action-element">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addSkills">Add Skills</button>
                                </div>                  
                            </div>
                            <div class="card-body pt-3 pb-0">
                                <div class="card-datatable table-responsive">
                                    <table class="datatables-ajax dt-advanced-search table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Category</th>
                                                <th>Type of Skills</th>
                                                <th>Skill</th>
                                                <th class="text-center">Proficiency</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php  
                                                $getScholarSkills=selectScholarSkills($scholarCode);
                                                while ($scholarSkills=$getScholarSkills->fetch(PDO::FETCH_ASSOC)) {
                                            ?>
                                            <tr>
                                                <td><?= getSkillCategory($scholarSkills['prow_skill_type_id'])?></td>
                                                <td><?= getSkillType($scholarSkills['prow_skill_type_id']) ?></td>
                                                <td><?= $scholarSkills['prow_skills'] ?></td>
                                                <td class="text-center"><span class="badge bg-primary"><?= $scholarSkills['prow_skills_proficiency'] ?></span></td>
                                                <td class="text-center">
                                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#removeSkill_<?= $scholarSkills['prow_skills_id'] ?>"><i class="mdi mdi-delete-outline"></i></button>
                                                </td>
                                            </tr>

                                            <div class="modal fade" id="removeSkill_<?= $scholarSkills['prow_skills_id'] ?>" tabindex="-1" aria-hidden="true">
                                                <div class="modal-dialog modal-sm" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="exampleModalLabel1"><i class="mdi mdi-delete-outline"></i> Remove</h4>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-sm-12 mb-3">
                                                                    <p class="text-center">Are you sure you want to remove <strong><?= $scholarSkills['prow_skills'] ?></strong>?</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="fillupSkillsRemove_profile?rand=<?= my_rand_str(100) ?>&skills_id=<?= $scholarSkills['prow_skills_id'] ?>">
                                                                <button type="button" id="removeSkill" name="removeSkill" class="btn btn-danger">Remove Skill</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php } ?>
                                        </tbody>

                                    </table>
                                </div>
                                    
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
            </div>

      <div class="modal fade" id="addSkills" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel1"><i class="mdi mdi-plus-outline"></i> Add Skills</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="fillupSkillsCreate_profile" enctype="multipart/form-data" method="post" onsubmit="btnLoader(this.addSkillsBtn)">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 mb-4">
                                <div class="form-floating form-floating-outline">
                                    <select id="skillCategory" name="skillCategory" class="form-control" required>
                                    <option></option>
                                    <?php
                                        $getSkillTypes=selectSkillTypes();
                                        while ($skillType=$getSkillTypes->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                        <option value="<?= $skillType['prow_skill_type_id'] ?>"><?= $skillType['prow_skill_type_name'] ?></option>
                                    <?php } ?>
                                    </select>
                                    <label for="skillCategory">Skill Category</label>
                                </div>
                            </div>
                            <div class="col-md-12 mb-4">
                                <div class="form-floating form-floating-outline">
                                    <select id="skills" name="skills" class="form-control" required>
                                        <option></option>
                                    </select>
                                    <label for="skills">Skills</label>
                                </div>
                            </div>
                            <div class="col-md-12 mb-4">
                                <div class="form-floating form-floating-outline">
                                    <select id="proficiency" name="proficiency" class="form-control" required>
                                        <option></option>
                                        <option>Being Developed</option>
                                        <option>Basic</option>
                                        <option>Intermediate</option>
                                        <option>Advanced</option>
                                        <option>Expert</option>
                                    </select>
                                    <label for="proficiency">Proficiency</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="addSkillsBtn" name="addSkillsBtn" class="btn btn-primary">Add</button>
                    </div>
                </form>
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
