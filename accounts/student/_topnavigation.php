<nav
          class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
          id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="mdi mdi-menu mdi-24px"></i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->
            <div class="navbar-nav align-items-center">
              <div class="nav-item navbar-search-wrapper mb-0">
                <a class="nav-item nav-link search-toggler fw-normal px-0" href="javascript:void(0);">
                  <i class="mdi mdi-magnify mdi-24px scaleX-n1-rtl"></i>
                  <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>
                </a>
              </div>
            </div>
            <!-- /Search -->

            <ul class="navbar-nav flex-row align-items-center ms-auto">
      

              <!-- Style Switcher -->
              <li class="nav-item me-1 me-xl-0">
                <a class="nav-link btn btn-text-secondary rounded-pill btn-icon style-switcher-toggle hide-arrow"
                  href="javascript:void(0);">
                  <i class="mdi mdi-24px"></i>
                </a>
              </li>
              <!--/ Style Switcher -->

              <!-- Notification -->
              <!-- <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-2 me-xl-1">
                <a class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow"
                  href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                  aria-expanded="false">
                  <i class="mdi mdi-bell-outline mdi-24px"></i>
                  <span
                    class="position-absolute top-0 start-50 translate-middle-y badge badge-dot bg-danger mt-2 border"></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end py-0">
                  <li class="dropdown-menu-header border-bottom">
                    <div class="dropdown-header d-flex align-items-center py-3">
                      <h6 class="mb-0 me-auto">Notification</h6>
                      <span class="badge rounded-pill bg-label-primary"><? ?>New</span>
                    </div>
                  </li>
                  <li class="dropdown-notifications-list scrollable-container">
                    <ul class="list-group list-group-flush">


                      <li class="list-group-item list-group-item-action dropdown-notifications-item">
                        <div class="d-flex gap-2">
                          <div class="flex-shrink-0">
                            <div class="avatar me-1">
                              <img src="../../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                            <h6 class="mb-1 text-truncate">Congratulations <?= $userFullname ?> 🎉</h6>
                            <small class="text-truncate text-body">Verified Email Account</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <small class="text-muted">4 mins ago</small>
                          </div>
                        </div>
                      </li>

                    </ul>
                  </li>
                  <li class="dropdown-menu-footer border-top p-2">
                    <a href="javascript:void(0);" class="btn btn-primary d-flex justify-content-center">
                      View all notifications
                    </a>
                  </li>
                </ul>
              </li> -->
              <!--/ Notification -->

              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online" id="navigationDiv"></div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="studentProfile">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar avatar-online" id="navpopDiv">
                            <!-- <img src="../../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" /> -->
                            
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <span class="fw-semibold d-block"><?= getFullname($scholarCode) ?></span>
                          <small class="text-muted"><?= getUserType($userType) ?></small>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="account_settings">
                      <i class="mdi mdi-cog-outline me-2"></i>
                      <span class="align-middle">Account Settings</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="logout">
                      <i class="mdi mdi-logout me-2"></i>
                      <span class="align-middle">Log Out</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!--/ User -->
            </ul>
          </div>

          <!-- Search Small Screens -->
          <div class="navbar-search-wrapper search-input-wrapper d-none">
            <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..."
              aria-label="Search..." />
            <i class="mdi mdi-close search-toggler cursor-pointer"></i>
          </div>
        </nav>