                    <div class="card card-action mb-4">
                      <div class="card-header align-items-center">
                        <h5 class="card-action-title mb-0">
                          <i class="mdi mdi-format-list-bulleted mdi-24px me-2"></i>Scholarship Status
                        </h5>
                      </div>
                      <div class="card-body pt-3 pb-0">
                        <ul class="timeline mb-0">
                          <li class="timeline-item timeline-item-transparent">
                            <span class="timeline-point timeline-point-successnew"></span>
                            <div class="timeline-event">
                              <div class="timeline-header mb-1">
                                <h6 class="text-success mb-0">Create Prowess Account - Existing Scholar</h6>
                                <span class="text-muted"><?=  getTimePassed($profile['prow_scholar_created'], date("Y-m-d H:i:s")) ?></span>
                              </div>
                              <p class="text-successnew mb-2"><i class="mdi mdi-check-bold me-1 mdi-20px"></i>Email account is verified!</p>
                            </div>
                          </li>
                          <?php  
                            if (scholarshipStatusOld($scholarCode, "personal_information") == "complete") {
                              $a_bullet = "timeline-point-successnew";
                              $a_text ="text-success";
                              $a_created = getPersonalInformationCreatedDate($scholarCode);
                              $a_desc = "Personal information has been registered";
                            } else if (scholarshipStatus($scholarCode, "personal_information") == "incomplete") {
                              $a_bullet = "timeline-point-warning";
                              $a_text1 ="text-warning";
                              $a_text2 ="text-ongoing";
                              $a_created = getPersonalInformationCreatedDate($scholarCode);
                              $a_desc = "<span class='text-ongoing'><i class='mdi mdi-exclamation-thick me-1 mdi-20px'>Please complete your personal information</span>";
                            } else {
                              $a_bullet = "timeline-point-secondary";
                              $a_text ="text-success";
                              $a_created = "xxxx-xx-xx";
                              $a_desc = "Please put your personal information";
                            }
                          ?>

                          <?php  
                            if (scholarshipStatusOld($scholarCode, "requirements") == "complete") {
                              $b_bullet = "timeline-point-info";
                              $b_created = getRequimentsCreatedDate($scholarCode);
                              $b_desc = "Proof of Grades has been uploaded";
                            } else if (scholarshipStatus($scholarCode, "requirements") == "incomplete") {
                              $b_bullet = "timeline-point-warning";
                              $b_created = getRequimentsCreatedDate($scholarCode);
                              $b_desc = "<span class='text-warning'>Please complete your requirements</span>";
                            } else {
                              $b_bullet = "timeline-point-secondary";
                              $b_created = "xxxx-xx-xx";
                              $b_desc = "Please upload your Official Proof of Grades";
                            }
                          ?>

                          <li class="timeline-item timeline-item-transparent">
                            <span class="timeline-point <?= $a_bullet ?>"></span>
                            <div class="timeline-event">
                              <div class="timeline-header mb-1">
                                <h6 class="<?= $a_text1 ?> mb-0">Finish Fill up Personal Information</h6>
                                <span class="text-muted"><?= getTimePassed($a_created, date("Y-m-d H:i:s")) ?></span>
                              </div>
                              <p class="text-muted mb-1"><i class='mdi mdi-exclamation-thick me-1 mdi-20px'></i>Personal Information</p>
                              <p class="text-muted mb-1"><i class='mdi mdi-exclamation-thick me-1 mdi-20px'></i>Personal Information</p>
                              <p class="text-muted mb-1"><i class='mdi mdi-exclamation-thick me-1 mdi-20px'></i>Personal Information</p>
                              <p class="text-muted mb-1"><i class='mdi mdi-exclamation-thick me-1 mdi-20px'></i>Personal Information</p>
                              <p class="text-muted mb-1"><i class='mdi mdi-exclamation-thick me-1 mdi-20px'></i>Personal Information</p>

                            </div>
                          </li>
                          
                          <li class="timeline-item timeline-item-transparent">
                            <span class="timeline-point <?= $b_bullet ?>"></span>
                            <div class="timeline-event">
                              <div class="timeline-header mb-1">
                                <h6 class="mb-0">Upload File Requirements - Proof of Grades</h6>
                                <span class="text-muted"><?= getTimePassed($b_created, date("Y-m-d H:i:s")) ?></span>
                              </div>
                              <p class="text-muted mb-0"><?= $b_desc ?></p>
                            </div>
                          </li>
                          <li class="timeline-item timeline-item-transparent border-0">
                            <span class="timeline-point timeline-point-secondary"></span>
                            <div class="timeline-event">
                              <div class="timeline-header mb-1">
                                <h6 class="mb-0">Verification of Scholar</h6>
                                <span class="text-muted"></span>
                              </div>
                              <p class="text-muted mb-0">Verified by Scholarship Coordinator</p>
                            </div>
                          </li>

                        </ul>
                      </div>
                  </div>