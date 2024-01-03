<?php
    require '../../config/includes.php';
    require '_session.php';
    require '_restriction.php';

    $getProfile=selectPersonalInfomation($scholarCode);
    $profile=$getProfile->fetch(PDO::FETCH_ASSOC);

    if (isset($_POST['schoolyear'])) {
        
        $schoolYear = clean_string($_POST['schoolyear']);
        $semester = clean_string($_POST['semester']);

        $getGrades=selectScholarGradesBySySem($scholarCode, $schoolYear, $semester);
        $countRes=$getGrades->rowCount();

    } else {
        $schoolYear = getSchoolYearLatest();
        $semester = "1";

        $getGrades=selectScholarGradesBySySem($scholarCode, $schoolYear, $semester);
        $countRes=$getGrades->rowCount();
    }
    
    
    if (isset($_POST['showGradesAll'])) {
        
        $getGrades=selectScholarGrades($scholarCode);
        $countRes=$getGrades->rowCount();
    }
    

    include "_head.php";

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
                                    <a class="nav-link" href="studentProfile2"
                                    ><i class="mdi mdi-school-outline me-1 mdi-20px"></i>Personal Information</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="studentProfile3"
                                    ><i class="mdi mdi-school-outline me-1 mdi-20px"></i>Academic Information</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="notifications"
                                    ><i class="mdi mdi-bell-badge-outline me-1 mdi-20px"></i>Notifications</a>
                                </li> -->
                            </ul>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card card-action mb-4">
                                <div class="card-header align-items-center">
                                    <h5 class="card-action-title mb-0">
                                    <i class="mdi mdi-format-list-bulleted mdi-24px me-2"></i>Grades
                                    <span class="float-end"><?= $countRes ?> result(s)</span>
                                    </h5>
                                    <div class="card-action-element"></div>
                                </div>
                                <div class="card-body pt-3 pb-0">
                                    <form action="studentProfile3" enctype="multipart/form-data" method="post" onsubmit="this.showGrades">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="form-floating form-floating-outline mb-5">
                                                <select id="schoolyear" name="schoolyear" class="form-control">
                                                    <!-- <option value="<?= $schoolYear ?>"><?= $schoolYear ?></option> -->
                                                    <?php
                                                        //get SY
                                                        $getSY=selectSchoolYears();
                                                        while ($sy=$getSY->fetch(PDO::FETCH_ASSOC)) {
                                                    ?>
                                                    <option value="<?= $sy['prow_sy_year'] ?>"><?= $sy['prow_sy_year'] ?></option>
                                                    <?php } ?>
                                                </select>
                                                <label for="schoolyear">School Year</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-floating form-floating-outline">
                                                <select id="semester" name="semester" class="form-control" required>
                                                    <!-- <option value="<?= $semester ?>"><?= semester($semester) ?></option> -->
                                                    <option value="1">1st Semester</option>
                                                    <option value="2">2nd Semester</option>
                                                </select>
                                                <label for="semester">Select Semester</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="row form-group mx-1">
                                                <button type="submit" id="showGrades" class="btn btn-primary btn-lg">Show</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="row form-group mx-1 ">
                                                <button type="submit" id="showGradesAll"  name="showGradesAll" class="btn btn-primary btn-lg">Show All</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <a href="scholarReportCard?scholarCode=<?= $scholarCode?>">
                                                    <button type="button" class="btn btn-dark btn-lg"><i class="mdi mdi-download-box-outline me-1"></i>Download PDF</button>
                                                </a>
                                            </div>
                                        </div>


                                    </div>
                                    </form>
                                    <div class="row mb-3">
                                        <div class="col-lg-12">
                                            <div class="card-datatable table-responsive">
                                                <table class="datatables-ajax dt-advanced-search table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>School Year</th>
                                                            <th>Subject Code</th>
                                                            <th>Subject Description</th>
                                                            <th class="text-center">Units</th>
                                                            <th class="text-center text-primary">Grade</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php 
                                                            while ($grade=$getGrades->fetch(PDO::FETCH_ASSOC)) {
                                                        ?>
                                                        <tr>
                                                            <td><?= $grade['prow_scholar_grades_sy'] ?></td>
                                                            <td><?= getSubjectCode($grade['prow_subject_id']) ?></td>
                                                            <td><?= getSubjectDesc($grade['prow_subject_id']) ?></td>
                                                            <td class="text-center"><?= getSubjectUnits($grade['prow_subject_id']) ?></td>
                                                            <td class="text-center text-primary"><?= $grade['prow_scholar_grades_percent'] ?></td>
                                                        </tr>
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
   
  </body>
</html>
