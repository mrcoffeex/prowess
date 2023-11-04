<?php
    require '../../config/includes.php';
    require '_session.php';
?>
<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-navbar-fixed layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../../assets/">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>PROWESS</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
      rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="../../assets/vendor/fonts/materialdesignicons.css" />
    <link rel="stylesheet" href="../../assets/vendor/fonts/fontawesome.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/dropzone/dropzone.css" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="../../assets/vendor/css/pages/page-profile.css" />
    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="../../assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets/js/config.js"></script>
  </head>

  <body>

    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <?php include "_sidemenu_inc.php"; ?>

        <div class="layout-page">
            <?php include "_topnavigation.php";?>
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
                <?php include "profile_header.php";?>
                <div class="alert alert-primary alert-dismissible mb-0" role="alert">
                    <h4 class="alert-heading d-flex align-items-center">
                    <i class="mdi mdi-chat-alert-outline mdi-24px me-2"></i>Reminders!
                    </h4>
                    <p class="mb-0">
                    Ensure that the necessary documents are scanned clearly before uploading. Uploading blurred images will result in a delay in processing your scholarship application. Please take the time to review and provide high-quality scans for a smoother application process
                    </p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>


            <div class="row mb-12">
                <div class="col-md mb-6 mb-md-0">
                  <div class="card mb-6 my-4">
                    <h5 class="card-header">High School Report Card (incoming freshmen)</h5>
                    <div class="card-body">
                      <form name="file1" method="post" class="dropzone needsclick" id="dropzone-basic">
                        <div class="dz-message needsclick">
                          Drop files here or click to upload
                          <span class="note needsclick"
                            >(Upload your scanned copy of your High School Report Card)</span
                          >
                        </div>
                        <div class="fallback">
                          <input name="file" id="file" type="file" />
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                
                <div class="col-md mb-6 mb-md-0">
                  <div class="card mb-6 my-4">
                    <h5 class="card-header">Certificate of Low Income (incoming freshmen)</h5>
                    <div class="card-body">
                      <form action="/upload" class="dropzone needsclick" id="dropzone-basic2">
                        <div class="dz-message needsclick">
                          Drop files here or click to upload
                          <span class="note needsclick"
                            >(Upload your scanned copy of your Certificate of Low Income)</span
                          >
                        </div>
                        <div class="fallback">
                          <input name="file" type="file" />
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
            </div>

            <div class="row mb-12">
                <div class="col-md mb-6 mb-md-0">
                  <div class="card mb-6 my-4">
                    <h5 class="card-header">Endorsement Letter</h5>
                    <div class="card-body">
                      <form action="/upload" class="dropzone needsclick" id="dropzone-basic3">
                        <div class="dz-message needsclick">
                          Drop files here or click to upload
                          <span class="note needsclick"
                            >(Upload your scanned copy of your Endorsement Letter)</span
                          >
                        </div>
                        <div class="fallback">
                          <input name="file" type="file" />
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                
                <div class="col-md mb-6 mb-md-0">
                  <div class="card mb-6 my-4">
                    <h5 class="card-header">Birth Certificate or PSA</h5>
                    <div class="card-body">
                      <form action="/upload" class="dropzone needsclick" id="dropzone-basic4">
                        <div class="dz-message needsclick">
                          Drop files here or click to upload
                          <span class="note needsclick"
                            >(Upload your scanned copy of your Birth Certificate or PSA)</span
                          >
                        </div>
                        <div class="fallback">
                          <input name="file" type="file" />
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
            </div>
            <div class="row mb-12">
                <div class="col-md mb-12 mb-md-0">
                  <div class="card mb-12 my-4">
                    <h5 class="card-header">Enrollment Form </h5>
                    <div class="card-body">
                      <form action="/upload" class="dropzone needsclick" id="dropzone-basic5">
                        <div class="dz-message needsclick">
                          Drop files here or click to upload
                          <span class="note needsclick"
                            >(Upload your scanned copy of your Enrollment Form)</span
                          >
                        </div>
                        <div class="fallback">
                          <input name="file" type="file" />
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
            </div>

            <div class="pt-4">
                <button type="reset" class="btn btn-label-secondary">Cancel</button>
                <button type="submit" class="btn btn-primary me-sm-3 me-1">Continue</button>
            </div>
            <?php include "_footer.php";?>

            <div class="content-backdrop fade"></div>
          </div>
        </div>
      </div>

      <div class="layout-overlay layout-menu-toggle"></div>
      <div class="drag-target"></div>
    </div>
   

    <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../../assets/vendor/libs/popper/popper.js"></script>
    <script src="../../assets/vendor/js/bootstrap.js"></script>
    <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../../assets/vendor/libs/node-waves/node-waves.js"></script>

    <script src="../../assets/vendor/libs/hammer/hammer.js"></script>
    <script src="../../assets/vendor/libs/i18n/i18n.js"></script>
    <script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>

    <script src="../../assets/vendor/js/menu.js"></script>
    <script src="../../assets/vendor/libs/dropzone/dropzone.js"></script>

    <script src="../../assets/js/main.js"></script>

    <script src="../../js/uploadRequirements.js"></script>
  </body>
</html>
