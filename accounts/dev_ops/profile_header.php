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
                                ><span class="fw-semibold">Student</span> <?php //getUserRole($scholarCode) ?>
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
                            <a href="statusReject?rand=<?= randStrInt(100) ?>&scholarCode=<?= $scholarCode ?>" class="btn btn-danger">
                              <i class="mdi mdi-close me-1"></i>Reject
                            </a>

                            <?php  
                            
                              if (selectScholarType($scholarCode) == 0) {
                            
                            ?>

                            <a href="initial_approve?rand=<?= randStrInt(100) ?>&scholarCode=<?= $scholarCode ?>" class="btn btn-secondary waves-effect waves-light">
                              <i class="mdi mdi-check-decagram-outline me-1"></i>Initial Approve
                            </a>

                            <?php 

                              } else {
                            
                            ?>

                            <a href="statusApprove?rand=<?= randStrInt(100) ?>&scholarCode=<?= $scholarCode ?>" class="btn btn-success waves-effect waves-light">
                              <i class="mdi mdi-check-decagram-outline me-1"></i>Approve
                            </a>

                            <?php } ?>
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