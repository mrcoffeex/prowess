<?php
require '../../config/includes.php';
require '_session.php';

$title = "Fill Up Form Step 2";
include "_head.php";
?>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <?php include "_sidemenu_inc.php"; ?>

            <div class="layout-page">
                <?php include "_topnavigation.php"; ?>

                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">

                    <?php include "profile_header.php"; ?>

                        <div class="row mb-4">
                            <div class="col-md-12">
                                <a href="fillupForm_old">
                                    <button type="button" class="btn btn-dark">go back</button>
                                </a>
                            </div>
                        </div>

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
                                                            <a href="fillupSkillsRemove?rand=<?= my_rand_str(100) ?>&skills_id=<?= $scholarSkills['prow_skills_id'] ?>">
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

                        <div class="card card-action mb-4">
                            <div class="card-header align-items-center">
                                <h5 class="card-action-title mb-0">
                                    <i class="mdi mdi-format-list-bulleted mdi-24px me-2"></i>Subjects
                                </h5>
                                <div class="card-action-element">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addSubject">Add Subject and Grade</button>
                                </div>                  
                            </div>
                            <div class="card-body pt-3 pb-0">
                                <form action="" enctype="multipart/form-data" method="post">
                                    <div class="row mb-3">
                                        <div class="col-lg-12">
                                            <div class="form-floating form-floating-outline">
                                                <input type="text" name="searchSubject" id="searchSubject" class="form-control dt-input" data-column-index="2" autofocus required>
                                                <label for="searchSubject">Search Subject</label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="card-datatable table-responsive">
                                    <table class="datatables-ajax dt-advanced-search table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Subject Code</th>
                                                <th>Description</th>
                                                <th class="text-center">Units</th>
                                                <th class="text-center">Grade</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td class="text-center p-2"></td>
                                                <td class="text-center p-2"></td>
                                                <td class="text-center p-2">
                                                    <button 
                                                    type="button" 
                                                    class="btn btn-info btn-sm" 
                                                    data-bs-toggle="modal" 
                                                    data-bs-target=""><i class="mdi mdi-pencil-outline"></i>
                                                    </button>
                                                    &nbsp;
                                                    <button 
                                                    type="button" 
                                                    class="btn btn-danger btn-sm" 
                                                    data-bs-toggle="modal" 
                                                    data-bs-target=""><i class="mdi mdi-delete-outline"></i>
                                                    </button>
                                                </td>
                                            </tr>

                                            <div class="modal fade" id="addSubject_<?= $subject['prow_subject_id'] ?>" tabindex="-1" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="exampleModalLabel1"><i class="mdi mdi-pencil-outline"></i> Edit <strong><?= $subject['prow_subject_desc'] ?></strong></h4>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <form action="hei_subject_update?rand=<?= my_rand_str(100) ?>&hei_id=<?= $hei_id ?>&course_id=<?= $course_id ?>&subject_id=<?= $subject['prow_subject_id'] ?>" enctype="multipart/form-data" method="POST" onsubmit="btnLoader(this.updateSubjectBtn)">
                                                                <div class="row">
                                                                    <div class="col-sm-6 mb-3">
                                                                        <div class="form-floating form-floating-outline">
                                                                            <input type="text" name="subjectCode" id="subjectCode" class="form-control dt-input" placeholder="Ex. 0123" data-column-index="2" value="<?= $subject['prow_subject_code'] ?>" autofocus required>
                                                                            <label for="subjectCode">Subject Code</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 mb-3">
                                                                        <div class="form-floating form-floating-outline">
                                                                            <input type="number" name="subjectUnits" id="subjectUnits" class="form-control dt-input" placeholder="0" data-column-index="2" value="<?= $subject['prow_subject_units'] ?>" required>
                                                                            <label for="subjectUnits">Units</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 mb-3">
                                                                        <div class="form-floating form-floating-outline">
                                                                            <input type="text" name="subjectDesc" id="subjectDesc" class="form-control dt-input" placeholder="Ex. Programming I" data-column-index="2" value="<?= $subject['prow_subject_desc'] ?>" required>
                                                                            <label for="subjectDesc">Subject Description</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit" id="updateSubjectBtn" name="updateSubjectBtn" class="btn btn-info">Update</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal fade" id="removeSubject_<?= $subject['prow_subject_id'] ?>" tabindex="-1" aria-hidden="true">
                                                <div class="modal-dialog modal-sm" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="exampleModalLabel1"><i class="mdi mdi-delete-outline"></i> Remove</h4>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-sm-12 mb-3">
                                                                    <p class="text-center">Are you sure you want to remove <strong><?= $subject['prow_subject_desc'] ?></strong>?</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="hei_subject_remove?rand=<?= my_rand_str(100) ?>&hei_id=<?= $hei_id ?>&course_id=<?= $course_id ?>&subject_id=<?= $subject['prow_subject_id'] ?>">
                                                                <button type="button" id="updateSubjectBtn" name="updateSubjectBtn" class="btn btn-danger">Remove</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </tbody>
                                    </table>
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

    <div class="modal fade" id="addSubject" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel1"><i class="mdi mdi-plus-outline"></i> Add Subject</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="fillupSubjectCreate" enctype="multipart/form-data" method="post">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-floating form-floating-outline">
                                    <select id="enrollmentSchoolYear" name="enrollmentSchoolYear" class="form-control">
                                    <option>Select School Year</option>
                                                    <?php
                                                    //get SY
                                                    $getSY=selectSY();
                                                    while ($sy=$getSY->fetch(PDO::FETCH_ASSOC)) {
                                                ?>
                                                <option value="<?= $sy['prow_sy_year'] ?>"><?= $sy['prow_sy_year'] ?></option>
                                                <?php } ?>
                                    </select>
                                    <label for="enrollmentYearLevel">School Year</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="addSkillsBtn" name="addSkillsBtn" class="btn btn-primary">Add</button>
                    </div>
                </form>
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
                <form action="fillupSkillsCreate" enctype="multipart/form-data" method="post" onsubmit="btnLoader(this.addSkillsBtn)">
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

    <?php include "_scripts.php"; ?>
    <?php include "_alerts.php"; ?>
    <script src="../../js/fillUpForm.js"></script>
</body>

</html>