<div class="row">
  <div class="col-12">
    <div class="card mb-4">
      <div class="user-profile-header-banner">
        <img src="<?= getBannerImg(4) ?>" alt="Banner image" class="rounded-top" />
      </div>
      <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
        <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
            <div id="userprofileAvatar"></div>
        </div>
        <div class="flex-grow-1 mt-3 mt-sm-5">
          <div
            class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
            <div class="user-profile-info">
              <h4><?= getFullname($scholarCode) ?></h4>
              <ul
                class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                <li class="list-inline-item">
                  <i class="mdi mdi-invert-colors me-1 mdi-20px"></i
                  ><span class="fw-semibold">Student</span>
                </li>
                <li class="list-inline-item">
                  <i class="<?= scholarStatusIcon(getScholarStatus($scholarCode)) ?> me-1 mdi-20px"></i
                  ><span class="fw-semibold"><?= scholarStatus(getScholarStatus($scholarCode)) ?></span>
                </li>
                <li class="list-inline-item">
                  <i class="<?= getScholarAppLogStatusIcon(getScholarAppLogStatusLatest($scholarCode)) ?> me-1 mdi-20px"></i
                  ><span class="fw-semibold <?= getScholarAppLogStatusColor(getScholarAppLogStatusLatest($scholarCode)) ?>"><?= getScholarAppLogStatus(getScholarAppLogStatusLatest($scholarCode)) ?></span>
                </li>
                <li class="list-inline-item">
                  <i class="mdi mdi-calendar-blank-outline me-1 mdi-20px"></i
                  ><span class="fw-semibold"> Joined <?= getScholar_Joined($scholarCode) ?></span>
                </li>
              </ul>
            </div>
            <div class="demo-inline-spacing">
              <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#for-resub">
                <i class="mdi mdi-close me-1"></i> For Resubmission
              </button>

              <?php  
                if (getScholarStatus($scholarCode) == 1) {
                  $approveDisabler = "disabled";
                  $approveText = "active";
                } else {
                  $approveDisabler = "";
                  $approveText = "set active";
                }
              ?>

              <a href="scholarStatusChangeActive?rand=<?= randStrInt(100) ?>&scholarCode=<?= $scholarCode ?>" class="btn btn-success waves-effect waves-light <?= $approveDisabler ?>">
                <i class="mdi mdi-check-decagram-outline me-1"></i> <?= $approveText ?>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php  

  $scholarImage = getUserImageByScholarCode($scholarCode);

?>

<div class="modal fade" id="for-resub" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel1"><i class="mdi mdi-close"></i> For Resubmission</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="scholarStatusChangeResub?scholarCode=<?= $scholarCode ?>" enctype="multipart/form-data" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-label">Comment</label>
                                <textarea type="text" name="comment" class="form-control" rows="3" placeholder="..." autofocus></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="resubBtn" class="btn btn-danger">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>