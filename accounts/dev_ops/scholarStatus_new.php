                <div class="card card-action mb-4">
                      <div class="card-header align-items-center">
                        <h5 class="card-action-title mb-0">
                          <i class="mdi mdi-format-list-bulleted mdi-24px me-2"></i>Scholarship Status
                        </h5>
                      </div>
                      <div class="card-body pt-3 pb-0">
                        <ul class="timeline mb-0">
                          <li class="timeline-item timeline-item-transparent">
                            <span class="timeline-point timeline-point-info"></span>
                            <div class="timeline-event">
                              <div class="timeline-header mb-1">
                                <h6 class="mb-0">Create and Verified Account</h6>
                                <span class="text-muted"><?=  getTimePassed($profile['prow_scholar_created'], date("Y-m-d H:i:s")) ?></span>
                              </div>
                              <?php  
                                if (getScholar_Status($scholarCode) == "Pending") {
                                  echo '<p class="text-warning mb-2">Account Verification is still ' .  getScholar_Status($scholarCode) . '</p>';
                                } else {
                                  echo '<p class="text-success mb-2">Account is ' .  getScholar_Status($scholarCode) . '</p>';
                                }
                              ?>
                            </div>
                          </li>
                          <?php  
                            if (scholarshipStatus($scholarCode, "personal_information") == "complete") {
                              $a_bullet = "timeline-point-info";
                              $a_created = getPersonalInformationCreatedDate($scholarCode);
                              $a_desc = "Personal information has been registered";
                            } else if (scholarshipStatus($scholarCode, "personal_information") == "incomplete") {
                              $a_bullet = "timeline-point-warning";
                              $a_created = getPersonalInformationCreatedDate($scholarCode);
                              $a_desc = "<span class='text-warning'>Please complete your personal information</span>";
                            } else {
                              $a_bullet = "timeline-point-secondary";
                              $a_created = "xxxx-xx-xx";
                              $a_desc = "Please put your personal information";
                            }
                          ?>
                          <li class="timeline-item timeline-item-transparent">
                            <span class="timeline-point <?= $a_bullet ?>"></span>
                            <div class="timeline-event">
                              <div class="timeline-header mb-1">
                                <h6 class="mb-0">Finish Fill up Personal Information</h6>
                                <span class="text-muted"><?= getTimePassed($a_created, date("Y-m-d H:i:s")) ?></span>
                              </div>
                              <p class="text-muted mb-0"><?= $a_desc ?></p>
                            </div>
                          </li>
                          <?php  
                            if (scholarshipStatus($scholarCode, "requirements") == "complete") {
                              $b_bullet = "timeline-point-info";
                              $b_created = getRequimentsCreatedDate($scholarCode);
                              $b_desc = "All files has been uploaded";
                            } else if (scholarshipStatus($scholarCode, "requirements") == "incomplete") {
                              $b_bullet = "timeline-point-warning";
                              $b_created = getRequimentsCreatedDate($scholarCode);
                              $b_desc = "<span class='text-warning'>Please complete your requirements</span>";
                            } else {
                              $b_bullet = "timeline-point-secondary";
                              $b_created = "xxxx-xx-xx";
                              $b_desc = "Please upload your requirements";
                            }
                          ?>
                          <li class="timeline-item timeline-item-transparent">
                            <span class="timeline-point <?= $b_bullet ?>"></span>
                            <div class="timeline-event">
                              <div class="timeline-header mb-1">
                                <h6 class="mb-0">Upload File Requirements</h6>
                                <span class="text-muted"><?= getTimePassed($b_created, date("Y-m-d H:i:s")) ?></span>
                              </div>
                              <p class="text-muted mb-0"><?= $b_desc ?></p>
                            </div>
                          </li>
                          <?php  
                            if (initialApproveStatus($scholarCode) == "true") {
                              $c_bullet = "timeline-point-info";
                              $c_created = getRequimentsCreatedDate($scholarCode);
                              $c_desc = "Initially approved by Scholarship Coordinator";
                            }else {
                              $c_bullet = "timeline-point-secondary";
                              $c_created = "xxxx-xx-xx";
                              $c_desc = "Wait for the Initial approval of Scholarship Coordinator";
                            }
                          ?>
                          <li class="timeline-item timeline-item-transparent border-0">
                            <span class="timeline-point <?= $c_bullet ?>"></span>
                            <div class="timeline-event">
                              <div class="timeline-header mb-1">
                                <h6 class="mb-0">Checking and Initial Approval</h6>
                                <span class="text-muted"></span>
                              </div>
                              <p class="text-muted mb-0"><?= $c_desc ?></p>
                            </div>
                          </li>

                          <li class="timeline-item timeline-item-transparent border-0">
                            <span class="timeline-point timeline-point-secondary"></span>
                            <div class="timeline-event">
                              <div class="timeline-header mb-1">
                                <h6 class="mb-0">Examination</h6>
                                <span class="text-muted"></span>
                              </div>
                              <p class="text-muted mb-0">Scheduled by Scholarship Coordinator</p>
                            </div>
                          </li>

                          <li class="timeline-item timeline-item-transparent border-0">
                            <span class="timeline-point timeline-point-secondary"></span>
                            <div class="timeline-event">
                              <div class="timeline-header mb-1">
                                <h6 class="mb-0">Interview</h6>
                                <span class="text-muted"></span>
                              </div>
                              <p class="text-muted mb-0">Scheduled by Scholarship Coordinator</p>
                            </div>
                          </li>
                          <li class="timeline-item timeline-item-transparent border-0">
                            <span class="timeline-point timeline-point-secondary"></span>
                            <div class="timeline-event">
                              <div class="timeline-header mb-1">
                                <h6 class="mb-0">Approval Status</h6>
                                <span class="text-muted"></span>
                              </div>
                              <p class="text-muted mb-0">Approval by Scholarship Coordinator</p>
                            </div>
                          </li>

                        </ul>
                      </div>
                  </div>