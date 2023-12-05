<?php
  require '../../config/includes.php';
  require '_session.php';
  include "_head.php";

  $hei_id = clean_string($_GET['hei_id']);
  $getHeiProfile=selectHEIProfile($hei_id);
  $profile=$getHeiProfile->fetch(PDO::FETCH_ASSOC);

  $heiLogo = $profile['prow_hei_logo'];
  $heiCover = $profile['prow_hei_cover_photo'];
  $getHeiCourse=selectCoursebyHeiIds($hei_id);

  
  ?>

<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <?php include "_sidemenu.php"; ?>
      <div class="layout-page">
        <?php include "_topnavigation.php"; ?>
 
        <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">HEI Information / <span> <a href="hei_profile?rand=<?= my_rand_str(100) ?>&hei_id=<?=$hei_id ?>">Profile</a></span>  / </span> Edit</h4>

              <div class="row">
                <div class="col-md-12">
                 
                  <div class="card mb-4">
                    <h4 class="card-header">Profile Details</h4>
                    <!-- Account -->
                    <div class="card-body">
                    <form id="formHeiUpdate" action="hei_profile_edit_update.php" method="POST" enctype="multipart/form-data">
                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <!-- <img
                          src="../../assets/img/avatars/1.png"
                          alt="user-avatar"
                          class="d-block w-px-120 h-px-120 rounded"
                          id="uploadedAvatar" /> -->
                        <div id="uploadedAvatar"></div>
                        <input type="text" value="<?= $profile['prow_hei_name']?>" hidden>
                        <div class="button-wrapper">
                          <label for="heilogo" class="btn btn-primary me-2 mb-3" tabindex="0">
                            <span class="d-none d-sm-block">Upload new photo</span>
                            <i class="mdi mdi-tray-arrow-up d-block d-sm-none"></i>
                            <input
                              type="file"
                              id="heilogo"
                              class="account-file-input"
                              hidden
                              name = "heilogo"
                              accept="image/png, image/jpeg" />
                          </label>
                          <button type="button" class="btn btn-outline-secondary account-image-reset mb-3">
                            <i class="mdi mdi-reload d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Reset</span>
                          </button>

                          <div class="text-muted small">Allowed JPG, GIF or PNG. Max size of 800K</div>
                        </div>
                      </div>
                    </div>
                    <div class="card-body pt-2">
                    <input type="text" name="heiCode" value="<?= $profile['prow_hei_code']?>" hidden>
                        <div class="row gy-4">
                          <div class="col-md-6">
                            <div class="form-floating form-floating-outline">
                              <input
                                class="form-control"
                                type="text"
                                id="firstName"
                                name="username"
                                value= "<?= $profile['prow_hei_name']?>"
                                autofocus
                                required />
                              <label for="firstName">HEI Name</label>
                            </div>
                          </div>
                        </div>

                        <h5 class="mt-3">HEI Contact Information</h5>
                                   
                        <div class="row mt-3">
                          <div class="mb-3 col-md-6 form-password-toggle">
                            <div class="input-group input-group-merge">
                              <div class="form-floating form-floating-outline">
                                <input
                                  class="form-control"
                                  type="text"
                                  name="heiContactPerson"
                                  id="heiContactPerson"
                                  value="<?= $profile['prow_hei_contact_person']?>"
                                  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                  required />
                                <label for="heiContactPerson">Contact Person</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="mb-3 col-md-6 form-password-toggle">
                            <div class="input-group input-group-merge">
                              <div class="form-floating form-floating-outline">
                                <input
                                  class="form-control"
                                  type="text"
                                  name="heiContactNo"
                                  id="heiContactNo"
                                  value="<?= $profile['prow_hei_contact']?>"
                                  placeholder="+639123455890"
                                  required />
                                <label for="heiContactNo">Contact Number</label>
                              </div>
                            </div>
                          </div>
                          <div class="mb-3 col-md-6 form-password-toggle">
                            <div class="input-group input-group-merge">
                              <div class="form-floating form-floating-outline">
                                <input
                                  class="form-control"
                                  type="text"
                                  name="heiContactEmail"
                                  id="heiContactEmail"
                                  value="<?= $profile['prow_hei_email']?>"
                                  placeholder="hei.email@gmail.com"
                                  required />
                                <label for="heiContactEmail">Email Address</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <h5 class="mt-0">HEI Address</h5>
                        <div class="row">
                          <div class="mb-3 col-md-6 form-password-toggle">
                            <div class="input-group input-group-merge">
                              <div class="form-floating form-floating-outline">
                                <input
                                  class="form-control"
                                  type="text"
                                  name="heiProvince"
                                  id="heiProvince"
                                  value="<?= $profile['prow_hei_province']?>"
                                  placeholder="Davao del Sur"
                                  readonly/>
                                <label for="heiProvince">Province</label>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-6">
                              <div class="form-floating form-floating-outline">
                                  <select id="heimunicipality" name="heimunicipality" class="form-control">
                                      <option value = "<?= $profile['prow_hei_municipality']?>"><?= $profile['prow_hei_municipality']?></option>
                                      <?php
                                      //get barangays
                                      $getMunicipalities = selectMunicipalities();
                                      while ($municipalities = $getMunicipalities->fetch(PDO::FETCH_ASSOC)) {
                                      ?>
                                          <option value="<?= $municipalities['prow_mun_name'] ?>"><?= $municipalities['prow_mun_name'] ?></option>
                                      <?php } ?>
                                  </select>
                                  <label for="heimunicipality">City/Municipality</label>
                              </div>
                          </div>
                          <div class="col-sm-6">
                              <div class="form-floating form-floating-outline">
                                  <select id="heibarangay" name="heibarangay" class="form-control">
                                    <option value = "<?= $profile['prow_hei_barangay']?>"><?= $profile['prow_hei_barangay']?></option>
                                  </select>
                                  <label for="heibarangay">Barangay</label>
                              </div>
                          </div>
                          <div class="mb-3 col-md-6 form-password-toggle">
                            <div class="input-group input-group-merge">
                              <div class="form-floating form-floating-outline">
                                <input
                                  class="form-control"
                                  type="text"
                                  name="heiStreet"
                                  id="heiStreet"
                                  value="<?= $profile['prow_hei_street']?>"
                                  placeholder="Street Name"
                                  readonly/>
                                <label for="heiStreet">Street</label>
                              </div>
                            </div>
                          </div>
                          <div class="mb-3 col-md-6 form-password-toggle">
                            <div class="input-group input-group-merge">
                              <div class="form-floating form-floating-outline">
                                <input
                                  class="form-control"
                                  type="text"
                                  name="heiZip"
                                  id="heiZip"
                                  value="<?= $profile['prow_hei_zip']?>"
                                  placeholder="Zip Code"
                                  readonly/>
                                <label for="heiZip">Zip Code</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- <h6 class="text-body">Password Requirements:</h6>
                        <ul class="ps-3 mb-0">
                          <li class="mb-1">Minimum 8 characters long - the more, the better</li>
                          <li class="mb-1">At least one lowercase character</li>
                          <li>At least one number, symbol, or whitespace character</li>
                        </ul> -->
                        <div class="mt-4">
                          <button type="submit" class="btn btn-primary me-2">Save changes</button>
                          <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                        </div>                        
                      </form>
                    </div>
                    <!-- /Account -->
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
  </div>
  <?php include "_scripts.php"; ?>
</body>
</html>