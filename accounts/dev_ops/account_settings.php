<?php
  require '../../config/includes.php';
  require '_session.php';
  include "_head.php";
?>

<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <?php include "_sidemenu.php"; ?>
      <div class="layout-page">
        <?php include "_topnavigation.php"; ?>
 
        <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> <?= $user_role ?> Account</h4>

              <div class="row">
                <div class="col-md-12">
                  <ul class="nav nav-pills flex-column flex-md-row mb-3 gap-2 gap-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" href="javascript:void(0);"
                        ><i class="mdi mdi-account-outline mdi-20px me-1"></i>Account</a>
                  </ul>
                  <div class="card mb-4">
                    <h4 class="card-header">Profile Details</h4>
                    <!-- Account -->
                    <div class="card-body">
                      <form id="formAccountSettings1" enctype="multipart/form-data" action="account_imageup" method="POST" onsubmit="btnLoader(this.imgSave)">
                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                          <div id="accountAvatar"></div>
                          <div class="button-wrapper">
                            <label for="accountImage" class="btn btn-primary me-2 mb-3" tabindex="0">
                              <span class="d-none d-sm-block">Upload new photo</span>
                              <i class="mdi mdi-tray-arrow-up d-block d-sm-none"></i>
                              <input
                                type="file"
                                id="accountImage"
                                class="account-file-input"
                                hidden
                                name="accountImage"
                                accept="image/png, image/jpeg" />
                            </label>
                            <button id="imgSave" type="submit" class="btn btn-outline-secondary account-image-reset mb-3">
                              <i class="mdi mdi-reload d-block d-sm-none"></i>
                              <span class="d-none d-sm-block">Save</span>
                            </button>

                            <div class="text-muted small">Allowed JPG, GIF or PNG. Max size of 800K</div>
                          </div>
                        </div>
                      </form>
                    </div>
                    <hr class="my-4 mx-n4" />
                    <div class="card-body pt-2 mt-1">
                    <form id="formAccountSettings" action="account_update.php" method="POST" enctype="multipart/form-data">
                        <div class="row mt-2 gy-4">
                          <div class="col-md-6">
                            <div class="form-floating form-floating-outline">
                              <input
                                class="form-control"
                                type="text"
                                id="firstName"
                                name="username"
                                value=<?= $userUsername?>
                                autofocus
                                required />
                              <label for="firstName">Username</label>
                            </div>
                          </div>
                        </div>

                        <h5 class="card-header">Change Password</h5>
                    
                        <div class="row">
                          <div class="mb-3 col-md-6 form-password-toggle">
                            <div class="input-group input-group-merge">
                              <div class="form-floating form-floating-outline">
                                <input
                                  class="form-control"
                                  type="password"
                                  name="currentPassword"
                                  id="currentPassword"
                                  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                  required />
                                <label for="currentPassword">Current Password</label>
                              </div>
                              <span class="input-group-text cursor-pointer"
                                ><i class="mdi mdi-eye-off-outline"></i
                              ></span>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="mb-4 col-md-6 form-password-toggle">
                            <div class="input-group input-group-merge">
                              <div class="form-floating form-floating-outline">
                                <input
                                  class="form-control"
                                  type="password"
                                  id="password"
                                  name="password"
                                  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" 
                                  required/>
                                <label for="newPassword">New Password</label>
                              </div>
                              <span class="input-group-text cursor-pointer"
                                ><i class="mdi mdi-eye-off-outline"></i
                              ></span>
                            </div>
                          </div>
                          <div class="mb-4 col-md-6 form-password-toggle">
                            <div class="input-group input-group-merge">
                              <div class="form-floating form-floating-outline">
                                <input
                                  class="form-control"
                                  type="password"
                                  name="confirmPassword"
                                  id="confirmPassword"
                                  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" 
                                  required/>
                                <label for="confirmPassword">Confirm New Password</label>
                              </div>
                              <span class="input-group-text cursor-pointer"
                                ><i class="mdi mdi-eye-off-outline"></i
                              ></span>
                             
                            </div>
                            
                          </div>
                        </div>
                        <h6 class="text-body">Password Requirements:</h6>
                        <ul class="ps-3 mb-0">
                          <li class="mb-1">Minimum 8 characters long - the more, the better</li>
                          <li class="mb-1">At least one lowercase character</li>
                          <li>At least one number, symbol, or whitespace character</li>
                        </ul>
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
  <?php include '_alerts.php' ?>
</body>
</html>