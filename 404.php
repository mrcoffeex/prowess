<?php
    include 'config/includes.php';
    $title = "Error 404";
?>

<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="assets/">

<?php  include '_head.php';?>

  <body>
    <div class="misc-wrapper">
      <h1 class="mb-2 mx-2" style="font-size: 6rem">404</h1>
      <h4 class="mb-2 fw-semibold">Page Not Found ⚠️</h4>
      <p class="mb-4 mx-2">we couldn't find the page you are looking for</p>
      <div class="d-flex justify-content-center mt-5">
        <img
          src="assets/img/illustrations/misc-error-object.png"
          alt="misc-error"
          class="img-fluid misc-object d-none d-lg-inline-block"
          width="160" />

        <div class="d-flex flex-column align-items-center">
          <img
            src="assets/img/illustrations/misc-error-illustration.png"
            alt="misc-error"
            class="img-fluid zindex-1"
            width="190" />
          <div>
            <a href="./" class="btn btn-primary text-center my-4">Back to home</a>
          </div>
        </div>
      </div>
    </div>
    <?php include '_scripts.php' ?>
  </body>
</html>
