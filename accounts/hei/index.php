<?php
  require '../../config/includes.php';
  require '_session.php';

  include "_head.php";
?>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->
      <?php
      include "_sidemenu.php";
      ?>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->
        <?php
        include "_topnavigation.php";
        ?>
        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row gy-4">
              <!-- Gamification Card -->
              <div class="col-md-12 col-lg-13">
                <div class="card">
                  <div class="d-flex align-items-end row">
                    <div class="col-md-8 order-2 order-md-1">
                      <div class="card-body">
                        <h4 class="card-title mb-0" id="userName" name="userName">Welcome <strong><?= $userFullname ?></strong></h4>
                        <p class="mb-4"><?= getHeiContactPerson($heiCode) ?></p>
                        <p class="mb-0">Welcome to Prowess your</p>
                        <p>online scholarship management system.</p>
                        <a href="heiProfile" class="btn btn-primary">View Profile</a>
                      </div>
                    </div>
                    <div class="col-md-4 text-center text-md-end order-1 order-md-2">

                      <div class="card-body pb-0 px-0 px-md-4 ps-0">
                        <img src="../../assets/img/illustrations/illustration-john-light.png" height="180" alt="View Profile" data-app-light-img="illustrations/illustration-john-light.png" data-app-dark-img="illustrations/illustration-john-dark.png" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mt-4 md-0">
                <div class="col-md-7">
                  <form action="">
                    <div class="row">
                      <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                          <label class="form-label">Semester</label>
                          <select name="optionSemester" id="optionSemester" class="form-control form-control-lg">
                            <option value="1">1st Semester</option>
                            <option value="2">2nd Semester</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                          <label class="form-label">Year</label>
                          <select name="optionYear" id="scholarYrGrad" class="form-control form-control-lg">
                            <!-- Add your options here -->
                          </select>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-12 col-sm-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center flex-wrap gap-2">
                      <div class="avatar me-3">
                        <div class="avatar-initial bg-label-primary rounded">
                          <i class="mdi mdi-24px mdi-account-school-outline text-success"> </i>
                        </div>
                      </div>
                      <div class="card-info">
                        <div class="d-flex align-items-center">
                          <h4 class="mb-0">100</h4>
                        </div>
                        <small class="text-muted">No. of Scholars</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center flex-wrap gap-2">
                      <div class="avatar me-3">
                        <div class="avatar-initial bg-label-primary rounded">
                          <i class="mdi mdi-24px mdi-town-hall text-warning"> </i>
                        </div>
                      </div>
                      <div class="card-info">
                        <div class="d-flex align-items-center">
                          <h4 class="mb-0">10</h4>
                        </div>
                        <small class="text-muted">No. of Pending Scholars</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12 col-lg-13 col-xl-12 mb-4">
                <div class="card h-100">
                  <img src="../../assets//img/elements/activity-timeline.png" alt="timeline-image" class="card-img-top h-px-200" style="object-fit: cover" />
                  <div class="card-body">
                    <h3 class="mb-4">Announcement - NEWS</h3>
                    <ul class="timeline card-timeline mb-0">
                      <div class="row mb-5">
                          <?php  
                              //get announcements
                              $getAnnouncement=selectAnnouncementsnews();
                              while ($ann=$getAnnouncement->fetch(PDO::FETCH_ASSOC)) {
                                $btnId = "thumbsUp_" . $ann['prow_ann_id'];
                                $annId = $ann['prow_ann_id'];

                                if (checkLikeStatus($scholarCode, $annId) > 0) {
                                  $btnAnnStatus = "disabled";
                                } else {
                                  $btnAnnStatus = "";
                                }
                                
                          ?>
                            <div class="col-lg-4 col-md-4 col-xs-6 mb-4">
                              <div class="card h-100">
                                <img class="card-img-top" src="<?= previewImage($ann['prow_ann_image'], '../../assets/img/elements/2.jpg', '../../imagebank/') ?>" alt="Card image cap" />
                                <div class="card-body">
                                  
                                <div class="h4 d-flex align-items-center mt-2 mb-4">
                                  <div class="avatar">
                                    <div class="avatar-initial bg-label-secondary rounded w-100">
                                      <i class="mdi mdi-newspaper-variant-outline mdi-24px"></i>
                                    </div>
                                  </div>
                                  <span class="ard-title ms-3"><?= $ann['prow_ann_title'] ?></span>
                                </div>
                                  <hr />
                                  <h6 class="card-text text-muted">
                                    <?php $dateTime = new DateTime($ann['prow_ann_created']); 
                                          $formattedDate = $dateTime->format('F j, Y'); 
                                          echo $formattedDate; ?>
                                  </h6>
                                  
                                  <p class="card-text"><?= stringLimit($ann['prow_ann_content'], 250) ?></p>

                                  <button
                                    type="button"
                                    class="btn btn-outline-primary mb-4 btn-block"
                                    data-bs-toggle="modal"
                                    data-bs-target="#onboardImageModal"
                                    data-announcement-image="<?= previewImage($ann['prow_ann_image'], '../../assets/img/elements/2.jpg', '../../imagebank/') ?>"
                                    data-announcement-title="<?= htmlspecialchars($ann['prow_ann_title']) ?>"
                                    data-announcement-content="<?= htmlspecialchars($ann['prow_ann_content']) ?>">
                                    Read More <i class="mdi mdi-arrow-right scaleX-n1-rtl me-1"></i>
                                  </button>
                                  

                                  <div class="article-votes">
                                    <button type="button" id="<?= $btnId ?>" class="btn btn-icon btn-sm btn-outline-primary me-2" title="click to like ..." onclick="addThumbsUp('#<?= $btnId ?>', '<?= $annId ?>')" <?= $btnAnnStatus ?> >
                                      <span class="mdi mdi-thumb-up-outline"></span>
                                    </button>
                                    <span class="card-text text-muted"><?= countAnnLike($annId) ?> Scholar found this helpful</span>
                                  </div>
                                </div>
                                  
                              </div>
                            </div>
                          <?php } ?>     
                      </div>
                    </ul>
                  </div>
                </div>
              </div>
              
              <div class="col-12 col-lg-13 col-xl-12 mb-4">
                <div class="card h-100">
                  <img src="../../assets//img/pages/5.png" alt="timeline-image" class="card-img-top h-px-200" style="object-fit: cover" />
                  <div class="card-body">
                    <h3 class="mb-4">Announcement - Activities</h3>
                    <ul class="timeline card-timeline mb-0">
                      <div class="row mb-5">
                          <?php  
                              //get announcements
                              $getAnnouncement=selectAnnouncementsActivities();
                              while ($ann=$getAnnouncement->fetch(PDO::FETCH_ASSOC)) {
                                $btnId = "thumbsUp_" . $ann['prow_ann_id'];
                                $annId = $ann['prow_ann_id'];

                                if (checkLikeStatus($scholarCode, $annId) > 0) {
                                  $btnAnnStatus = "disabled";
                                } else {
                                  $btnAnnStatus = "";
                                }
                                
                          ?>
                            <div class="col-lg-4 col-md-4 col-xs-6 mb-4">
                              <div class="card h-100">
                                <img class="card-img-top" src="<?= previewImage($ann['prow_ann_image'], '../../assets/img/elements/2.jpg', '../../imagebank/') ?>" alt="Card image cap" />
                                <div class="card-body">
                                  
                                <div class="h4 d-flex align-items-center mt-2 mb-4">
                                  <div class="avatar">
                                    <div class="avatar-initial bg-label-secondary rounded w-100">
                                      <i class="mdi mdi-newspaper-variant-outline mdi-24px"></i>
                                    </div>
                                  </div>
                                  <span class="ard-title ms-3"><?= $ann['prow_ann_title'] ?></span>
                                </div>
                                  <hr />
                                  <h6 class="card-text text-muted">
                                    <?php $dateTime = new DateTime($ann['prow_ann_created']); 
                                          $formattedDate = $dateTime->format('F j, Y'); 
                                          echo $formattedDate; ?>
                                  </h6>
                                  
                                  <p class="card-text"><?= stringLimit($ann['prow_ann_content'], 250) ?></p>

                                  <button
                                    type="button"
                                    class="btn btn-outline-primary mb-4 btn-block"
                                    data-bs-toggle="modal"
                                    data-bs-target="#onboardImageModal"
                                    data-announcement-image="<?= previewImage($ann['prow_ann_image'], '../../assets/img/elements/2.jpg', '../../imagebank/') ?>"
                                    data-announcement-title="<?= htmlspecialchars($ann['prow_ann_title']) ?>"
                                    data-announcement-content="<?= htmlspecialchars($ann['prow_ann_content']) ?>">
                                    Read More <i class="mdi mdi-arrow-right scaleX-n1-rtl me-1"></i>
                                  </button>
                                  

                                  <div class="article-votes">
                                    <button type="button" id="<?= $btnId ?>" class="btn btn-icon btn-sm btn-outline-primary me-2" title="click to like ..." onclick="addThumbsUp('#<?= $btnId ?>', '<?= $annId ?>')" <?= $btnAnnStatus ?> >
                                      <span class="mdi mdi-thumb-up-outline"></span>
                                    </button>
                                    <span class="card-text text-muted"><?= countAnnLike($annId) ?> Scholar found this helpful</span>
                                  </div>
                                </div>
                                  
                              </div>
                            </div>
                          <?php } ?>     
                      </div>
                    </ul>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <!-- / Content -->

          <!-- Footer -->
          <?php
          include "_footer.php";

          ?>
          <!-- / Footer -->

          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
  </div>
  <!-- / Layout wrapper -->

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <?php
  include "_scripts.php";

  ?>
</body>

</html>