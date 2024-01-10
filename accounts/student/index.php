<?php
  require '../../config/includes.php';
  require '_session.php';
  require '_restriction.php';

  $title = "Welcome " . $userFullname;
  include "_head.php";

  $getProfile=selectScholar($scholarCode);
  $profile=$getProfile->fetch(PDO::FETCH_ASSOC);
?>

<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <?php include "_sidemenu.php"; ?>
      <div class="layout-page">
        <?php include "_topnavigation.php"; ?>
 
        <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row gy-4">

              <div class="col-md-12 col-lg-13">
                <div class="card">
                  <div class="d-flex align-items-end row">
                    <div class="col-md-4 order-2 order-md-1">
                      <div class="card-body">
                        <h4 class="card-title" id="userName" name="userName">Welcome <strong> Student!</strong>🎉
                        </h4> <span class="mb-3 badge rounded-pill bg-label-secondary" id="applicationStatus" name="applicationStatus"><?= getScholarAppLogStatus($appLogStatus) ?></span>
                        <p class="mb-0">Welcome to Prowess your
                        </p>
                        <p>Online Scholarship Management System.</p>
                        <?php  
                         
                        if ($fillUpStatus == "new") {
                          echo '<a href="fillupForm_old" class="btn btn-success mb-2">Create Application</a>';
                        } else if ($fillUpStatus == "renew") {
                          echo '<a href="fillupForm_old" class="btn btn-success mb-2">Create Application</a>';
                        } else {
                          if ($appLogStatus == 1) {
                            echo '<a href="studentProfile" class="btn btn-success mb-2">Student Profile</a>';
                          }else{
                            echo '<a href="fillupForm_old" class="btn btn-warning mb-2">Update Application</a>';
                          }
                        }
                          
                        ?>
                      </div>
                    </div>
                    <div class="col-md-8 text-center text-md-end order-1 order-md-2">
                    
                      <div class="card-body pb-0 px-0 px-md-4 ps-0">
                        <img src="../../assets/img/illustrations/stud.png" height="180" alt="View Profile" data-app-light-img="illustrations/stud.png" data-app-dark-img="illustrations/stud.png" />
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
                              $getAnnouncement=selectAnnouncements();
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
                  <img src="../../assets//img/elements/activity-timeline.png" alt="timeline-image" class="card-img-top h-px-200" style="object-fit: cover" />
                  <div class="card-body">
                    <h3 class="mb-4">Announcement - Activities</h3>
                    <ul class="timeline card-timeline mb-0">
                      <div class="row mb-5">
                          <?php  
                              //get announcements
                              $getAnnouncement=selectAnnouncements();
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
          <?php include "_footer.php";?>
          <div class="content-backdrop fade"></div>
        </div>
        
      </div>
    </div>
    <div class="layout-overlay layout-menu-toggle"></div>
    <div class="drag-target"></div>
    <!-- Announcement Modal -->
    <div
        class="modal-onboarding modal fade animate__animated"
        id="onboardImageModal"
        tabindex="-1"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content text-center">
            <div class="modal-body p-0">
              <div class="onboarding-media">
                <div class="mx-2">
                  <img
                  id="announcementImage"
                  alt="Announcement Image"
                  class="img-fluid"
                  data-app-light-img="illustrations/girl-unlock-password-light.png"
                  data-app-dark-img="illustrations/girl-unlock-password-dark.png" />
                </div>
              </div>
              <div class="onboarding-content mb-0">
                <h4 class="onboarding-title text-body" id="announcementTitle"></h4>
                <div class="onboarding-info" id="announcementContent">
                  
                </div>
              </div>
            </div>
            <div class="modal-footer border-0">
              <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">
                Close
              </button>
            </div>
          </div>
        </div>
      </div>
  </div>
  <?php include "_scripts.php"; ?>

  <script>

      function addThumbsUp(btnId, annId){

        $.ajax({
          type: "GET",
          url: "autoAddThumbsUp.php",
          data: {annId: annId},              
          success: function (data) {

            if (data == "success") {
              $(btnId).prop('disabled', true);
              toastr.success('Thank You for your response');
            } else if (data == "invalid") {
              $(btnId).prop('disabled', false);
              toastr.error('Invalid Action!');
            } else {
              $(btnId).prop('disabled', false);
              toastr.error('Error!');
            }
            
          }
        });

      }

  </script>

<script>
    $('#onboardImageModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var announcementContent = button.data('announcement-content');
        var announcementTitle = button.data('announcement-title');
        var announcementImage = button.data('announcement-image');

        // Update modal content with the passed data
        $('#announcementContent').text(announcementContent);
        $('#announcementTitle').text(announcementTitle);
        $('#announcementImage').attr('src', announcementImage);
    });
</script>
</body>
</html>