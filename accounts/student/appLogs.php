<?php
  require '../../config/includes.php';
  require '_session.php';
  require '_restriction.php';
  include "_head.php";

  $title = "Application Logs";

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
                  <div class="col-xl-12 col-lg-8 col-md-12">
                    <div class="row">
                       <div class="card card-action mb-4">
                            <div class="card-header align-items-center">
                                <h5 class="card-action-title mb-0">
                                    <i class="mdi mdi-format-list-bulleted mdi-24px me-2"></i>Application History
                                </h5>
                                <!-- <div class="card-action-element">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addSkills">Add Skills</button>
                                </div>                   -->
                            </div>
                            <div class="card-body pt-3 pb-0">
                                <div class="card-datatable table-responsive">
                                    <table class="datatables-ajax dt-advanced-search table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>School Year</th>
                                                <th>Semester</th>
                                                <th>Course</th>
                                                <th class="text-center">Status</th>
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
                                                <td class=="text-center">
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
                                                            <a href="fillupSkillsRemove_profile?rand=<? my_rand_str(100) ?>&skills_id=<?= $scholarSkills['prow_skills_id'] ?>">
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
