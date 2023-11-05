<?php
  require '../../config/includes.php';
  require '_session.php';
  include "_head.php";

  $getProfile=selectProfile($scholarCode);
  $profile=$getProfile->fetch(PDO::FETCH_ASSOC);

  $getSchoolProfile=getSchoolScholar($scholarCode);
  $schoolProfile=$getSchoolProfile->fetch(PDO::FETCH_ASSOC);

  $getAddressProfile=getAddressScholar($scholarCode);
  $addressProfile=$getAddressProfile->fetch(PDO::FETCH_ASSOC);

?>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">

        <div class="layout-page">


         <?php
          include "_sidemenu.php";
         ?>

          <div class="content-wrapper">
            <?php
              include "_topnavigation.php";
            ?>
            
            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">User Profile /</span> Profile</h4>

              
              <?php
                include "profile_header.php";
              ?>

                <div class="row">
                  <div class="col-md-12">
                    <ul class="nav nav-pills flex-column flex-sm-row mb-4">
                      <li class="nav-item">
                        <a class="nav-link active" href="javascript:void(0);"
                          ><i class="mdi mdi-account-outline me-1 mdi-20px"></i>Profile</a
                        >
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="pages-profile-teams.html"
                          ><i class="mdi mdi-school-outline me-1 mdi-20px"></i>Educational Attainment</a
                        >
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="pages-profile-teams.html"
                          ><i class="mdi mdi-bell-badge-outline me-1 mdi-20px"></i>Notifications</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>

                </div>
              </div>
            </div>
         
              <?php
                include "_footer.php";
              ?>
         

            <div class="content-backdrop fade"></div>
          </div>
      
        </div>
        
      </div>
      <div class="layout-overlay layout-menu-toggle"></div>
      <div class="drag-target"></div>
    </div>

    <?php
      include "_scripts.php";
    ?>

    <script src="../../assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
  </body>
</html>
