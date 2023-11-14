<?php
  require '../../config/includes.php';
  require '_session.php';
  include "_head.php";
  $hei_id = clean_string($_GET['hei_id']);
  $getHeiProfile=selectHEIProfile($hei_id);
  $profile=$getHeiProfile->fetch(PDO::FETCH_ASSOC);

  $getHeiCourse=selectCoursebyHeiIds($hei_id);
?>

  <body>
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <div class="layout-page">
         <?php include "_sidemenu.php";?>

          <div class="content-wrapper">
            <?php include "_topnavigation.php"; ?>
            
            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">HEI Information /</span> Profile</h4>
             
              <?php include "profile_header_hei.php"; ?>

             <div class="row">
                <div class="col-md-12">
                  <ul class="nav nav-pills flex-column flex-sm-row mb-4">
                    <li class="nav-item">
                      <a class="nav-link active" href="javascript:void(0);"
                        ><i class="mdi mdi-account-outline me-1 mdi-20px"></i>Profile</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages-profile-teams.html"
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
                          <i class="mdi mdi-town-hall mdi-24px"></i><span class="fw-semibold mx-2">Number of Offered Courses:</span>
                          <span><?= countCoursebyHei($hei_id) ?></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="card mb-4">
                    <div class="card-body">
                      <small class="card-text text-uppercase text-muted">Contacts</small>
                      <ul class="list-unstyled my-3 py-1">
                        <li class="d-flex align-items-center mb-3">
                          <i class="mdi mdi-account mdi-24px"></i><span class="fw-semibold mx-2">Contact Person:</span>
                          <span><?= $profile['prow_hei_contact_person']; ?></span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                          <i class="mdi mdi-phone-outline mdi-24px"></i><span class="fw-semibold mx-2">Contact Number:</span>
                          <span><?= $profile['prow_hei_contact']; ?></span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                          <i class="mdi mdi-email-outline mdi-24px"></i><span class="fw-semibold mx-2">Email:</span>
                          <span><?= $profile['prow_hei_email']; ?></span>
                        </li>
                      </ul>
 
                      <small class="card-text text-uppercase text-muted">Address</small>
                      <ul class="list-unstyled my-3 py-1">
                        <li class="d-flex align-items-center mb-3">
                          <i class="mdi mdi-map-marker-outline mdi-24px"></i><span class="fw-semibold mx-2">Street:</span>
                          <span><?= $profile['prow_hei_street']; ?></span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                          <i class="mdi mdi-map-marker-outline mdi-24px"></i><span class="fw-semibold mx-2">Province:</span>
                          <span><?= $profile['prow_hei_province']; ?></span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                          <i class="mdi mdi-map-marker-outline mdi-24px"></i><span class="fw-semibold mx-2">Municipality:</span>
                          <span><?= $profile['prow_hei_municipality']; ?></span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                          <i class="mdi mdi-map-marker-outline mdi-24px"></i><span class="fw-semibold mx-2">Barangay:</span>
                          <span><?= $profile['prow_hei_barangay']; ?></span>
                        <li class="d-flex align-items-center mb-3">
                          <i class="mdi mdi-map-marker-outline mdi-24px"></i><span class="fw-semibold mx-2">Zip Code:</span>
                          <span><?= $profile['prow_hei_zip']; ?></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                  
                </div>
                <div class="col-xl-8 col-lg-7 col-md-7">
                  <div class="card card-action mb-4">
                    <div class="card-header align-items-center">
                      <h5 class="card-action-title mb-0">
                        <i class="mdi mdi-format-list-bulleted mdi-24px me-2"></i>School Map
                      </h5>                 
                    </div>
                    <iframe style="width: 100%; height: 590px; position: relative;" src="hei_information_map?hei_id=<?= $hei_id ?>" allowfullscreen></iframe>
                  </div>
                </div>                  
              </div>
              <div class="row">
                <div class="mb-4">
                    <div class="card card-action mb-4">
                            <div class="card-header align-items-center">
                            <h5 class="card-action-title mb-0">
                                <i class="mdi mdi-format-list-bulleted mdi-24px me-2"></i>School Courses
                            </h5>
                            <div class="card-action-element">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">Add Course</button>
                            </div>                  
                            </div>
                            <div class="card-body pt-3 pb-0">
                                    <div class="card-datatable table-responsive">
                                        <table class=" datatables-ajax dt-advanced-search table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Courses</th>
                                                    <th>No. of Scholars</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                        <tbody>
                                                <?php
                                                    while ($row=$getHeiCourse->fetch(PDO::FETCH_ASSOC)) {
                                                ?>                                            

                                            <tr>
                                                    
                                                    <td><?= $row['prow_course_name']?></td>
                                                    <td><? ?></td>
                                                    <td class="text-center p-2">
                                                        <a href="hei_delete?rand=<?= my_rand_str(100) ?>&hei_id=<?=$hei_id ?>">
                                                            <button 
                                                            type="button" 
                                                            class="btn btn-primary btn-sm">
                                                            <i class="ti-user mdi mdi-delete-outline"></i>
                                                            </button>
                                                        </a>
                                                    </td>
                                
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
             
              <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel1">Add Course</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <form action="hei_course_create?hei_id=<?= $hei_id?>" method="POST">
                                <div class="row">
                                    <div class="col-sm-12 my-4">
                                        <div class="form-floating form-floating-outline">
                                            <select id="listcourse" name="listcourse" class="form-control">
                                                <option>Select Course</option>
                                                            <?php
                                                                //get list of course
                                                                $getCourse=selectCourseList();
                                                                while ($cor=$getCourse->fetch(PDO::FETCH_ASSOC)) {
                                                            ?>
                                                            <option value="<?= $cor['prow_course_id'] ?>"><?= $cor['prow_course_name'] ?></option>
                                                            <?php } ?>
                                                </select>
                                                <label for="listcourse">Select Course</label>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">
                                        Close
                                    </button>
                                    <button type="submit" id="heiSaveBtn" name="heiSaveBtn" class="btn btn-primary">Add Course</button>
                                </div>
                            </form>
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

    <?php include "_scripts.php" ?>
    <?php include '_alerts.php' ?>
  </body>
</html>
