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
                              <p class="text-muted mb-2"><i class="mdi mdi-check-bold me-1 mdi-20px"></i>Email account is verified!</p>
                            </div>
                          </li>
                          <?php  
                            if (scholarshipStatusOld($scholarCode, "personal_information") == "complete") {
                              $a_bullet = "timeline-point-successnew";
                              $a_text ="text-muted";
                              $a_created = getPersonalInformationCreatedDate($scholarCode);
                              $a_icon = "mdi mdi-check-bold me-1 mdi-20px";
                              $a_desc = " Personal Information has been registered";
                              $a_status=1;
                            } else {
                              $a_bullet = "timeline-point-warning";
                              $a_text ="text-ongoing";
                              $a_icon = "mdi mdi-exclamation-thick me-1 mdi-20px";
                              $a_created = getPersonalInformationCreatedDate($scholarCode);
                              $a_desc = "<span class='text-ongoing'><i class=''>Please complete your personal information</span>";
                              $a_status=0;
                            }
                            
                            if (scholarshipStatusOld($scholarCode, "address_information") == "complete") {
                              $b_bullet = "timeline-point-successnew";
                              $b_text ="text-muted";
                              $b_created = getPersonalInformationCreatedDate($scholarCode);
                              $b_icon = "mdi mdi-check-bold me-1 mdi-20px";
                              $b_desc = " Address Information has been registered";
                              $b_status=1;
                            } else {
                              $b_bullet = "timeline-point-warning";
                              $b_text ="text-ongoing";
                              $b_icon = "mdi mdi-exclamation-thick me-1 mdi-20px";
                              $b_created = getPersonalInformationCreatedDate($scholarCode);
                              $b_desc = "<span class='text-ongoing'><i class=''>Please complete your address information</span>";
                              $b_status=0;
                            }

                            if (scholarshipStatusOld($scholarCode, "family_information") == "complete") {
                              $c_bullet = "timeline-point-successnew";
                              $c_text ="text-muted";
                              $c_created = getPersonalInformationCreatedDate($scholarCode);
                              $c_icon = "mdi mdi-check-bold me-1 mdi-20px";
                              $c_desc = " Family Information has been registered";
                              $c_status=1;
                            } else {
                              $c_bullet = "timeline-point-warning";
                              $c_text ="text-ongoing";
                              $c_icon = "mdi mdi-exclamation-thick me-1 mdi-20px";
                              $c_created = getPersonalInformationCreatedDate($scholarCode);
                              $c_desc = "<span class='text-ongoing'><i class=''>Please complete your family information. Add your Guardian's details</span>";
                              $c_status=0;
                            }

                            if (scholarshipStatusOld($scholarCode, "skills_information") == "complete") {
                              $d_bullet = "timeline-point-successnew";
                              $d_text ="text-muted";
                              $d_created = getPersonalInformationCreatedDate($scholarCode);
                              $d_icon = "mdi mdi-check-bold me-1 mdi-20px";
                              $d_desc = " Skills Information has been registered";
                              $d_status=1;
                            } else{
                              $d_bullet = "timeline-point-warning";
                              $d_text ="text-ongoing";
                              $d_icon = "mdi mdi-exclamation-thick me-1 mdi-20px";
                              $d_created = getPersonalInformationCreatedDate($scholarCode);
                              $d_desc = "<span class='text-ongoing'><i class=''>Please complete your skills information</span>";
                              $d_status=0;
                            }


                            if (scholarshipStatusOld($scholarCode, "enroll_information") == "complete") {
                              $e_bullet = "timeline-point-successnew";
                              $e_text ="text-muted";
                              $e_created = getPersonalInformationCreatedDate($scholarCode);
                              $e_icon = "mdi mdi-check-bold me-1 mdi-20px";
                              $e_desc = " Enrollment Information has been registered";
                              $e_status=1;
                            } else{
                              $e_bullet = "timeline-point-warning";
                              $e_text ="text-ongoing";
                              $e_icon = "mdi mdi-exclamation-thick me-1 mdi-20px";
                              $e_created = getPersonalInformationCreatedDate($scholarCode);
                              $e_desc = "<span class='text-ongoing'><i class=''>Please complete your enrollment information</span>";
                              $e_status=0;
                            }

                            if ($a_status==1 && $b_status==1 && $c_status==1 && $d_status==1 && $e_status==1) {
                              $overall_bullet = "timeline-point-successnew";
                              $overall_text ="text-success";
                              $overall_created = getPersonalInformationCreatedDate($scholarCode);
                              $overall_icon = "mdi mdi-check-bold me-1 mdi-20px";
                              $overall_desc = " Personal Information has been registered";
                            } else{
                              $overall_bullet = "timeline-point-info";
                              $overall_text ="text-ongoing";
                              $overall_icon = "mdi mdi-exclamation-thick me-1 mdi-20px";
                              $overall_created = getPersonalInformationCreatedDate($scholarCode);
                              $overall_desc = "<span class='text-ongoing'><i class=''>Please complete your personal information</span>";
                            }




                          ?>

                         
                          <li class="timeline-item timeline-item-transparent">
                            <span class="timeline-point <?= $overall_bullet ?>"></span>
                            <div class="timeline-event">
                              <div class="timeline-header mb-1">
                                <h6 class="<?= $overall_text ?> mb-0">Fill up Personal Information</h6>
                                <span class="text-muted"><?= getTimePassed($a_created, date("Y-m-d H:i:s")) ?></span>
                              </div>
                              <p class="<?= $a_text ?> mb-1"><i class="<?= $a_icon ?>"></i> <?= $a_desc ?></p>
                              <p class="<?= $b_text ?> mb-1"><i class="<?= $b_icon ?>"></i> <?= $b_desc ?></p>
                              <p class="<?= $c_text ?> mb-1"><i class="<?= $c_icon ?>"></i> <?= $c_desc ?></p>
                              <p class="<?= $d_text ?> mb-1"><i class="<?= $d_icon ?>"></i> <?= $d_desc ?></p>
                              <p class="<?= $e_text ?> mb-1"><i class="<?= $e_icon ?>"></i> <?= $e_desc ?></p>                       
                            </div>
                          </li>

                          <?php  
                            if (scholarshipStatusOld($scholarCode, "grades") == "complete") {
                              $f_bullet = "timeline-point-successnew";
                              $f_text ="text-muted";
                              $f_text1 ="text-success";
                              $f_created = getPersonalInformationCreatedDate($scholarCode);
                              $f_icon = "mdi mdi-check-bold me-1 mdi-20px";
                              $f_desc = " Subject and Grades Information has been registered.";
                            } else if (scholarshipStatusOld($scholarCode, "grades") == "incomplete") {
                              $f_bullet = "timeline-point-warning";
                              $f_text ="text-ongoing";
                              $f_icon = "mdi mdi-exclamation-thick me-1 mdi-20px";
                              $f_created = getPersonalInformationCreatedDate($scholarCode);
                              $f_desc = "<span class='text-ongoing'><i class=''>Please complete your subject and grades information</span>";
                            }


                            if (scholarshipStatusOld($scholarCode, "requirements") == "complete") {
                              $g_bullet = "timeline-point-successnew";
                              $g_text ="text-muted";
                              $g_text1 ="text-success";
                              $g_created = getPersonalInformationCreatedDate($scholarCode);
                              $g_icon = "mdi mdi-check-bold me-1 mdi-20px";
                              $g_desc = " Proof of Grades image uploaded.";
                            } else if (scholarshipStatusOld($scholarCode, "requirements") == "incomplete") {
                              $g_bullet = "timeline-point-info";
                              $g_text ="text-ongoing";
                              $g_text1 ="text-ongoing";
                              $g_icon = "mdi mdi-exclamation-thick me-1 mdi-20px";
                              $g_created = getPersonalInformationCreatedDate($scholarCode);
                              $g_desc = "<span class='text-ongoing'><i class=''>Please upload image of your Proof of Grades</span>";
                            }
                          ?>

                          <li class="timeline-item timeline-item-transparent">
                            <span class="timeline-point <?= $f_bullet ?>"></span>
                            <div class="timeline-event">
                              <div class="timeline-header mb-1">
                                <h6 class="<?= $f_text1 ?> mb-0">Add Subject and Grades Information</h6>
                                <span class="text-muted"><?= getTimePassed($f_created, date("Y-m-d H:i:s")) ?></span>
                              </div>
                              <p class="<?= $f_text ?> mb-1"><i class="<?= $f_icon ?>"></i> <?= $f_desc ?></p>  
                            </div>
                          </li>

                          <li class="timeline-item timeline-item-transparent">
                            <span class="timeline-point <?= $g_bullet ?>"></span>
                            <div class="timeline-event">
                              <div class="timeline-header mb-1">
                                <h6 class="<?= $g_text1 ?>">Upload File Requirements - Proof of Grades</h6>
                                <span class="text-muted"><?= getTimePassed($g_created, date("Y-m-d H:i:s")) ?></span>
                              </div>
                              <p class="<?= $g_text ?> mb-1"><i class="<?= $g_icon ?>"></i> <?= $g_desc ?></p>  
                            </div>
                          </li>
                          <?php
                            
                          
                          ?>
                          <li class="timeline-item timeline-item-transparent border-0">
                            <span class="timeline-point timeline-point-secondary"></span>
                            <div class="timeline-event">
                              <div class="timeline-header mb-1">
                                <h6 class="mb-0">Verification of Scholar's Academic Requirements</h6>
                                <span class="text-muted"></span>
                              </div>
                              <p class="text-muted mb-0">Verified by the School Authorized Person</p>
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