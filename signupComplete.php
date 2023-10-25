<?php  
  include 'config/includes.php';
  $title = "SignUp Complete";
?>

<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="assets/">

<?php  include '_head.php';?>

  <body>
    <!-- Content -->

    <div class="authentication-wrapper authentication-cover">
      <!-- Logo -->
      <a href="./" class="auth-cover-brand d-flex align-items-center gap-2">
        <span class="app-brand-logo">
          <img src="assets/img/branding/logo.png" alt="alternative">
        </span>
        <span class="app-brand-text demo text-heading fw-bold">PROWESS</span>
      </a>
      <!-- /Logo -->
      <div class="authentication-inner row m-0">
        <!-- Left Text -->
        <div class="d-none d-lg-flex col-lg-4 align-items-center justify-content-center p-5">
          <img
            alt="register-multi-steps-illustration"
            src="assets/img/illustrations/auth-register-multi-steps-illustration.png"
            class="h-auto mh-100 w-px-200" />
        </div>
        <!-- /Left Text -->

        <!--  Multi Steps Registration -->
        <div class="d-flex col-lg-8 align-items-center justify-content-center authentication-bg p-5">
          <div class="w-px-700">
            <div class="misc-wrapper">
                <h1 class="mb-2 mx-2 text-primary" style="font-size: 3rem">SignUp Complete!</h1>
                <h4 class="mb-2 fw-semibold">Congratulations</h4>
                <p class="mb-4 mx-2">Please <span class="text-primary">check your email</span> for verification process. Wait for at least 5 minutes for the verification link sent to your email</p>
                <div class="d-flex justify-content-center mt-5">
                    <img
                    src="assets/img/illustrations/misc-error-object.png"
                    alt="misc-error"
                    class="img-fluid misc-object d-none d-lg-inline-block"
                    width="160" />

                    <div class="d-flex flex-column align-items-center">
                            <a href="login" target="_blank" class="btn btn-primary text-center my-4">Login Now</a>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
        <!-- / Multi Steps Registration -->
      </div>
    </div>

    <!-- / scripts -->
    <?php include '_scripts.php'; ?>
  </body>
</html>
