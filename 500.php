<?php
    include 'config/includes.php';
    $title = "Server Error 500";
?>
<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="assets/">

<?php  include '_head.php';?>

  <body>
    <div class="misc-wrapper">
      <h1 class="mb-2 mx-2" style="font-size: 6rem">500</h1>
      <h4 class="mb-2 fw-semibold">Internal server error 🔐</h4>
      <p class="mb-2 mx-2">Oops somthing went wrong.</p>
      <div class="d-flex justify-content-center mt-5">
        <img
          src="assets/img/illustrations/misc-error-object.png"
          alt="misc-server-error"
          class="img-fluid misc-object d-none d-lg-inline-block"
          width="160" />
        <div class="d-flex flex-column align-items-center">
          <img
            src="assets/img/illustrations/misc-server-error-illustration.png"
            alt="misc-server-error"
            class="img-fluid zindex-1"
            width="230" />
          <div>
            <a href="./" class="btn btn-primary text-center my-5">Back to home</a>
          </div>
        </div>
      </div>
    </div>
    <?php include '_scripts.php' ?>
  </body>
</html>
