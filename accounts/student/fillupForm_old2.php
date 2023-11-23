<?php
    require '../../config/includes.php';
    require '_session.php';

    $getPendingAppLog=selectScholarPendingApplication($scholarCode);
    $pending=$getPendingAppLog->fetch(PDO::FETCH_ASSOC);

    $appLogCourse = $pending['prow_course'];
    $appLogCode = $pending['prow_app_log_code'];

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
                                <!-- <form action="" enctype="multipart/form-data" method="post">
                                    <div class="row mb-3">
                                        <div class="col-lg-12">
                                            <div class="form-floating form-floating-outline">
                                                <input type="text" name="searchSubject" id="searchSubject" class="form-control dt-input" data-column-index="2" autofocus required>
                                                <label for="searchSubject">Search Subject</label>
                                            </div>
                                        </div>
                                    </div>
                                </form> -->
                                <div class="card-datatable table-responsive">
                                    <table class="datatables-ajax dt-advanced-search table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>School Year</th>
                                                <th>Semester</th>
                                                <th>Subject Code</th>
                                                <th>Description</th>
                                                <th class="text-center">Units</th>
                                                <th class="text-center">Grade</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php  
                                                $getGrades=selectScholarGrades($scholarCode);
                                                while ($grade=$getGrades->fetch(PDO::FETCH_ASSOC)) {
                                            ?>
                                            <tr>
                                                <td><?= $grade['prow_scholar_grades_sy'] ?></td>
                                                <td><?= semester($grade['prow_scholar_grades_semester']) ?></td>
                                                <td><?= getSubjectCode($grade['prow_subject_id']) ?></td>
                                                <td><?= getSubjectDesc($grade['prow_subject_id']) ?></td>
                                                <td class="text-center p-2"><?= getSubjectUnits($grade['prow_subject_id']) ?></td>
                                                <td class="text-center p-2 text-primary"><?= $grade['prow_scholar_grades_percent'] ?></td>
                                                <td class="text-center p-2">
                                                    <button 
                                                    type="button" 
                                                    class="btn btn-info btn-sm" 
                                                    data-bs-toggle="modal" 
                                                    data-bs-target="#editGrades_<?= $grade['prow_scholar_grades_id'] ?>"><i class="mdi mdi-pencil-outline"></i>
                                                    </button>
                                                    &nbsp;
                                                    <button 
                                                    type="button" 
                                                    class="btn btn-danger btn-sm" 
                                                    data-bs-toggle="modal" 
                                                    data-bs-target="#removeGrades_<?= $grade['prow_scholar_grades_id'] ?>"><i class="mdi mdi-delete-outline"></i>
                                                    </button>
                                                </td>
                                            </tr>

                                            <div class="modal fade" id="editGrades_<?= $grade['prow_scholar_grades_id'] ?>" tabindex="-1" aria-hidden="true">
                                                <div class="modal-dialog modal-sm" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="exampleModalLabel1"><i class="mdi mdi-pencil-outline"></i> Edit <strong><?= getSubjectCode($grade['prow_subject_id']) ?></strong></h4>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <form action="fillupformSubjectUpdate?rand=<?= my_rand_str(100) ?>&gradeId=<?= $grade['prow_scholar_grades_id'] ?>" enctype="multipart/form-data" method="POST" onsubmit="btnLoader(this.updateGradeBtn)">
                                                                <div class="row">
                                                                    <div class="col-md-12 mb-4">
                                                                        <div class="form-floating form-floating-outline">
                                                                            <input type="number" id="gradeScore" name="gradeScore" class="form-control text-center" min="75" max="100" step="0.01" value="<?= $grade['prow_scholar_grades_percent'] ?>" required>
                                                                            <label for="gradeScore">Grade (75-100)</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit" id="updateGradeBtn" name="updateGradeBtn" class="btn btn-info">Update</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal fade" id="removeGrades_<?= $grade['prow_scholar_grades_id'] ?>" tabindex="-1" aria-hidden="true">
                                                <div class="modal-dialog modal-sm" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="exampleModalLabel1"><i class="mdi mdi-delete-outline"></i> Remove <?= getSubjectCode($grade['prow_subject_id']) ?></h4>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-sm-12 mb-3">
                                                                    <p class="text-center">Are you sure you want to remove <strong><?= getSubjectCode($grade['prow_subject_id']) ?></strong>?</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="fillupformSubjectRemove?rand=<?= my_rand_str(100) ?>&gradeId=<?= $grade['prow_scholar_grades_id'] ?>">
                                                                <button type="button" class="btn btn-danger">Remove</button>
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
                <form action="fillupformSubjectCreate" enctype="multipart/form-data" method="post" onsubmit="btnLoader(this.createSubjectGrade)">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-floating form-floating-outline">
                                    <select id="gradeSY" name="gradeSY" class="form-control" required>
                                        <?php  
                                            $getSchoolYear=selectSchoolYears();
                                            while ($schoolYear=$getSchoolYear->fetch(PDO::FETCH_ASSOC)) {
                                        ?>
                                        <option><?= $schoolYear['prow_sy_year'] ?></option>
                                        <?php } ?>
                                    </select>
                                    <label for="gradeSY">Select School Year</label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-floating form-floating-outline">
                                    <select id="gradeSem" name="gradeSem" class="form-control" required>
                                        <option value="1">1st Semester</option>
                                        <option value="2">2nd Semester</option>
                                    </select>
                                    <label for="gradeSem">Select Semester</label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-floating form-floating-outline">
                                    	<select id="gradeSubjectId" name="gradeSubjectId" class="form-control" required>
                                            <option></option>
                                            <?php  
                                                //get course code according to Degree
                                                $getSubject=selectHeiCourseSubjects($appLogCourse);
                                                while ($subject=$getSubject->fetch(PDO::FETCH_ASSOC)) {
                                            ?>
                                            <option value="<?=$subject['prow_subject_id'] ?>"><?= $subject['prow_subject_code']; ?></option>
                                            <?php } ?>
                                        </select>
                                    <label for="gradeSubjectId">Course Code</label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-floating form-floating-outline">
                                    <input type="number" id="gradeScore" name="gradeScore" class="form-control" min="75" max="100" step="0.01" required>
                                    <label for="gradeScore">Grade (75-100)</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="createSubjectGrade" name="createSubjectGrade" class="btn btn-primary">Add</button>
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