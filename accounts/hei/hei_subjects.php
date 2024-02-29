<?php
  require '../../config/includes.php';
  require '_session.php';

  $course_id = clean_string($_GET['course_id']);
  $getCourse=selectHeiCourse($course_id);
  $course=$getCourse->fetch(PDO::FETCH_ASSOC);

  $title = $course['prow_course_name'] . " Subjects";

  include "_head.php";
?>

  <body>
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <div class="layout-page">
         <?php include "_sidemenu.php";?>

          <div class="content-wrapper">
            <?php include "_topnavigation.php"; ?>
            
            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">HEI Information / </span> Subjects</h4>
             
              <?php include "profile_header_hei.php"; ?>

              <div class="row">
                <div class="mb-4">
                    <div class="card card-action mb-4">
                            <div class="card-header align-items-center">
                                <h5 class="card-action-title mb-0">
                                    <i class="mdi mdi-format-list-bulleted mdi-24px me-2"></i><?= $course['prow_course_name'] ?> Subjects
                                </h5>
                                <div class="card-action-element">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addSubject">Create Subject</button>
                                </div>                  
                            </div>
                            <div class="card-body pt-3 pb-0">
                                <form action="" method="post">
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
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $getSubjects=selectHeiCourseSubjects($course_id);
                                                while ($subject=$getSubjects->fetch(PDO::FETCH_ASSOC)) {
                                            ?>                                            

                                            <tr>
                                                <td><?= $subject['prow_subject_code'] ?></td>
                                                <td><?= $subject['prow_subject_desc'] ?></td>
                                                <td class="text-center p-2"><?= $subject['prow_subject_units'] ?></td>
                                                <td class="text-center p-2">
                                                    <button 
                                                    type="button" 
                                                    class="btn btn-info btn-sm" 
                                                    data-bs-toggle="modal" 
                                                    data-bs-target="#addSubject_<?= $subject['prow_subject_id'] ?>">
                                                        <i class="mdi mdi-pencil-outline"></i>
                                                    </button>
                                                    &nbsp;
                                                    <button 
                                                    type="button" 
                                                    class="btn btn-danger btn-sm" 
                                                    data-bs-toggle="modal" 
                                                    data-bs-target="#removeSubject_<?= $subject['prow_subject_id'] ?>">
                                                        <i class="mdi mdi-delete-outline"></i>
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
                                                            <form action="hei_subject_update?rand=<?= my_rand_str(100) ?>&hei_id=<?= $heiId ?>&course_id=<?= $course_id ?>&subject_id=<?= $subject['prow_subject_id'] ?>" enctype="multipart/form-data" method="POST" onsubmit="btnLoader(this.updateSubjectBtn)">
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
                                                            <a href="hei_subject_remove?rand=<?= my_rand_str(100) ?>&hei_id=<?= $heiId ?>&course_id=<?= $course_id ?>&subject_id=<?= $subject['prow_subject_id'] ?>">
                                                                <button type="button" id="updateSubjectBtn" name="updateSubjectBtn" class="btn btn-danger">Remove</button>
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
             
        <div class="modal fade" id="addSubject" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel1">Create Subject</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <form action="hei_subject_create?rand=<?= my_rand_str(100) ?>&hei_id=<?= $heiId ?>&course_id=<?= $course_id ?>" enctype="multipart/form-data" method="POST" onsubmit="btnLoader(this.createSubjectBtn)">
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" name="subjectCode" id="subjectCode" class="form-control dt-input" placeholder="Ex. 0123" data-column-index="2" autofocus required>
                                        <label for="subjectCode">Subject Code</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <div class="form-floating form-floating-outline">
                                        <input type="number" name="subjectUnits" id="subjectUnits" class="form-control dt-input" placeholder="0" data-column-index="2" required>
                                        <label for="subjectUnits">Units</label>
                                    </div>
                                </div>
                                <div class="col-sm-12 mb-3">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" name="subjectDesc" id="subjectDesc" class="form-control dt-input" placeholder="Ex. Programming I" data-column-index="2" required>
                                        <label for="subjectDesc">Subject Description</label>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" id="createSubjectBtn" name="createSubjectBtn" class="btn btn-primary">Create</button>
                            </div>
                        </form>
                    </div>

                    </form>
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
    </div>

    <?php include "_scripts.php" ?>
    <?php include '_alerts.php' ?>
  </body>
</html>
