<div class="row">
  <div class="col-12">
    <div class="card mb-4">
      <div class="user-profile-header-banner">
      <img src="<?= getBannerImg($userType) ?>" alt="Banner image" class="rounded-top" />
      </div>
      <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
        <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto" id = >
          <!-- <img
            src="../../assets/img/avatars/1.png"
            alt="user image"
            class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img" /> -->
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
                  ><span class="fw-semibold"><?= getUserRole($scholarCode) ?></span>
                </li>
                <li class="list-inline-item">
                  <i class="mdi mdi-account-check me-1 mdi-20px"></i
                  ><span class="fw-semibold"><?= getScholar_Status($scholarCode) ?></span>
                </li>
              </ul>
            </div>
          
          </div>
        </div>
      </div>
    </div>
  </div>
</div>