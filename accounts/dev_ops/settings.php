<?php
  require '../../config/includes.php';
  require '_session.php';
  include "_head.php";
?>

  <body>
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <div class="layout-page">
         <?php include "_sidemenu.php";?>

          <div class="content-wrapper">
            <?php include "_topnavigation.php"; ?>
            
            <div class="container-xxl flex-grow-1 container-p-y">
                <div class="card">
                    <h5 class="card-header">Settings</h5>

                    <hr class="mt-0" />
                    <div class="card-datatable table-responsive px-3">
                         <a href="addSkill" target="">
                            <button 
                            type="button" 
                            class="btn btn-primary btn-sm">
                            Skill Settings
                            </button>
                        </a>
                        <a href="addOccupation" target="">
                            <button 
                            type="button" 
                            class="btn btn-primary btn-sm">
                            Occupation Settings
                            </button>
                        </a>
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

    <?php include "_scripts.php" ?>
    <?php include '_alerts.php' ?>
  </body>
</html>
