<?php  
  include 'config/includes.php';
  $title = $my_project_name;
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
            <div id="multiStepsValidation" class="bs-stepper wizard-numbered">
              <div class="bs-stepper-header border-bottom-0">
                <div class="step" data-target="#accountDetailsValidation">
                  <button type="button" class="step-trigger">
                    <span class="bs-stepper-circle"><i class="mdi mdi-check"></i></span>
                    <span class="bs-stepper-label">
                      <span class="bs-stepper-number">01</span>
                      <span class="d-flex flex-column gap-1 ms-2">
                        <span class="bs-stepper-title">Account</span>
                        <span class="bs-stepper-subtitle">Account Details</span>
                      </span>
                    </span>
                  </button>
                </div>
                <div class="line"></div>
                <div class="step" data-target="#personalInfoValidation">
                  <button type="button" class="step-trigger">
                    <span class="bs-stepper-circle"><i class="mdi mdi-check"></i></span>
                    <span class="bs-stepper-label">
                      <span class="bs-stepper-number">02</span>
                      <span class="d-flex flex-column gap-1 ms-2">
                        <span class="bs-stepper-title">Personal</span>
                        <span class="bs-stepper-subtitle">Enter Information</span>
                      </span>
                    </span>
                  </button>
                </div>
                <div class="line"></div>
                <div class="step" data-target="#addressLinksValidation">
                  <button type="button" class="step-trigger">
                    <span class="bs-stepper-circle"><i class="mdi mdi-check"></i></span>
                    <span class="bs-stepper-label">
                      <span class="bs-stepper-number">03</span>
                      <span class="d-flex flex-column gap-1 ms-2">
                        <span class="bs-stepper-title">Address</span>
                        <span class="bs-stepper-subtitle">Enter Information</span>
                      </span>
                    </span>
                  </button>
                </div>
              </div>
              <div class="bs-stepper-content">
                <form id="multiStepsForm" onSubmit="return false">
                  <!-- Account Details -->
                  <div id="accountDetailsValidation" class="content">
                    <div class="content-header mb-3">
                      <h4 class="mb-0">Account Information</h4>
                      <small>Enter Your Account Details</small>
                    </div>
                    <div class="row g-3">
                      <div class="col-sm-6">
                        <div class="form-floating form-floating-outline">
                          <input
                            type="text"
                            name="multiStepsUsername"
                            id="multiStepsUsername"
                            class="form-control"
                            placeholder="juandelacruz" />
                          <label for="multiStepsUsername">Username</label>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-floating form-floating-outline">
                          <input
                            type="email"
                            name="multiStepsEmail"
                            id="multiStepsEmail"
                            class="form-control"
                            placeholder="juanDelaCruz@email.com"
                            aria-label="juanDelaCruz" />
                          <label for="multiStepsEmail">Email</label>
                        </div>
                      </div>
                      <div class="col-sm-6 form-password-toggle">
                        <div class="input-group input-group-merge">
                          <div class="form-floating form-floating-outline">
                            <input
                              type="password"
                              id="multiStepsPass"
                              name="multiStepsPass"
                              class="form-control"
                              placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                              aria-describedby="multiStepsPass2" />
                            <label for="multiStepsPass">Password</label>
                          </div>
                          <span class="input-group-text cursor-pointer" id="multiStepsPass2"
                            ><i class="mdi mdi-eye-off-outline"></i
                          ></span>
                        </div>
                      </div>
                      <div class="col-sm-6 form-password-toggle">
                        <div class="input-group input-group-merge">
                          <div class="form-floating form-floating-outline">
                            <input
                              type="password"
                              id="multiStepsConfirmPass"
                              name="multiStepsConfirmPass"
                              class="form-control"
                              placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                              aria-describedby="multiStepsConfirmPass2" />
                            <label for="multiStepsConfirmPass">Confirm Password</label>
                          </div>
                          <span class="input-group-text cursor-pointer" id="multiStepsConfirmPass2"
                            ><i class="mdi mdi-eye-off-outline"></i
                          ></span>
                        </div>
                      </div>
                      <div class="col-12 d-flex justify-content-between">
                        <button class="btn btn-secondary btn-prev" disabled>
                          <i class="mdi mdi-arrow-left me-sm-1 me-0"></i>
                          <span class="align-middle d-sm-inline-block d-none">Previous</span>
                        </button>
                        <button class="btn btn-primary btn-next">
                          <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Next</span>
                          <i class="mdi mdi-arrow-right"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                  <!-- Personal Info -->
                  <div id="personalInfoValidation" class="content">
                    <div class="content-header mb-3">
                      <h4 class="mb-0">Personal Information</h4>
                      <small>Enter Your Personal Information</small>
                    </div>
                    <div class="row g-3">
                      <div class="col-sm-6">
                        <div class="form-floating form-floating-outline">
                          <input
                            type="text"
                            id="multiStepsFirstName"
                            name="multiStepsFirstName"
                            class="form-control"
                            placeholder="Juan" />
                          <label for="multiStepsFirstName">First Name</label>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-floating form-floating-outline">
                          <input
                            type="text"
                            id="multiStepsLastName"
                            name="multiStepsLastName"
                            class="form-control"
                            placeholder="Dela Cruz" />
                          <label for="multiStepsLastName">Last Name</label>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-floating form-floating-outline">
                          <input
                            type="text"
                            id="multiStepsMiddleName"
                            name="multiStepsMiddleName"
                            class="form-control"
                            placeholder="optional" />
                          <label for="multiStepsMiddleName">Middle Name</label>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-floating form-floating-outline">
                          <select name="multiStepsQualifier" id="multiStepsQualifier" class="form-control">
                            <option value=""></option>
                            <option value="Jr.">Jr.</option>
                            <option value="Sr.">Sr.</option>
                            <option value="II">II</option>
                            <option value="III">III</option>
                            <option value="IV">IV</option>
                            <option value="V">V</option>
                            <option value="VI">VI</option>
                          </select>
                          <label for="multiStepsQualifier">Suffix/Qualifier</label>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-floating form-floating-outline">
                          <select name="multiStepsCS" id="multiStepsCS" class="form-control">
                            <option value=""></option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Separated">Separated</option>
                            <option value="Widowed">Widowed</option>
                          </select>
                          <label for="multiStepsCS">Civil Status</label>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-floating form-floating-outline">
                          <select name="multiStepsGender" id="multiStepsGender" class="form-control">
                            <option value=""></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                          </select>
                          <label for="multiStepsGender">Gender</label>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-floating form-floating-outline">
                          <input
                            type="date"
                            id="multiStepsBirthday"
                            name="multiStepsBirthday"
                            class="form-control" 
                            max="<?= date("Y-m-d") ?>"/>
                          <label for="multiStepsBirthday">Birthday</label>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="input-group input-group-merge">
                          <span class="input-group-text">PH (+63)</span>
                          <div class="form-floating form-floating-outline">
                            <input
                              type="text"
                              id="multiStepsMobile"
                              name="multiStepsMobile"
                              class="form-control multi-steps-mobile"
                              placeholder="09121314151" />
                            <label for="multiStepsMobile">Mobile</label>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-floating form-floating-outline">
                          <input
                            type="text"
                            id="multiStepsBirthPlace"
                            name="multiStepsBirthPlace"
                            class="form-control"
                            placeholder="Birth Place" />
                          <label for="multiStepsBirthPlace">Birth Place</label>
                        </div>
                      </div>
                      <div class="col-12 d-flex justify-content-between">
                        <button class="btn btn-secondary btn-prev">
                          <i class="mdi mdi-arrow-left me-sm-1 me-0"></i>
                          <span class="align-middle d-sm-inline-block d-none">Previous</span>
                        </button>
                        <button class="btn btn-primary btn-next">
                          <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Next</span>
                          <i class="mdi mdi-arrow-right"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                  <!-- Address Links -->
                  <div id="addressLinksValidation" class="content">
                    <div class="content-header mb-3">
                      <h4 class="mb-0">Address</h4>
                      <small>Enter your Address Information</small>
                    </div>
                    <!-- Address Details -->
                    
                    <div class="row g-3">
                      <div class="col-sm-6">
                        <div class="form-floating form-floating-outline">
                          <select id="multiStepsMunicipality" name="multiStepsMunicipality" class="form-control" >
                            <option></option>
                              <?php  
                                //get barangays
                                  $getMunicipalities=selectMunicipalities();
                                  while ($municipalities=$getMunicipalities->fetch(PDO::FETCH_ASSOC)) {
                              ?>
                            <option value="<?= $municipalities['prow_mun_id'] ?>"><?= $municipalities['prow_mun_name'] ?></option>
                              <?php } ?>
                          </select>
                          <label for="multiStepsMunicipality">City/Municipality</label>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-floating form-floating-outline">
                          <select id="multiStepsBarangay" name="multiStepsBarangay" class="form-control" >
                            <option></option>
                          </select>
                          <label for="multiStepsBarangay">Barangay</label>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-floating form-floating-outline">
                          <select id="multiStepsProvince" class="form-control" >
                            <option value="Davao del Sur">Davao del Sur</option>
                          </select>
                          <label for="multiStepsProvince">Province</label>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-floating form-floating-outline">
                          <input
                            type="text"
                            id="multiStepsZipCode"
                            name="multiStepsZipCode"
                            class="form-control multi-steps-pincode"
                            placeholder="Postal Code"
                            maxlength="4" />
                          <label for="multiStepsZipCode">Zip Code</label>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-floating form-floating-outline">
                          <input
                            type="text"
                            id="multiStepsAddress"
                            name="multiStepsAddress"
                            class="form-control"
                            placeholder="Address" />
                          <label for="multiStepsAddress">House #, Street Name, Purok</label>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-floating form-floating-outline">
                          <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="basic-default-checkbox" required />
                              <label class="form-check-label" for="basic-default-checkbox">Agree to our <a data-bs-toggle="modal"
                              data-bs-target="#modalScrollable">terms and conditions</a></label>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 d-flex justify-content-between">
                        <button class="btn btn-secondary btn-prev">
                          <i class="mdi mdi-arrow-left me-sm-1 me-0"></i>
                          <span class="align-middle d-sm-inline-block d-none">Previous</span>
                        </button>
                        <button type="submit" id="signUpBtn" name="signUpBtn" class="btn btn-primary btn-next btn-submit">Submit</button>
                      </div>
                    </div>
                    <!--/ Credit Card Details -->
                  </div>
                </form>


                <!-- Modal for Privacy -->
                      <div class="modal fade" id="modalScrollable" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title" id="modalScrollableTitle">Modal title</h4>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <p>
                                Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis
                                in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                              </p>
                              <p>
                                Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                lacus vel augue laoreet rutrum faucibus dolor auctor.
                              </p>
                              <p>
                                Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus
                                auctor fringilla.
                              </p>
                              <p>
                                Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis
                                in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                              </p>
                              <p>
                                Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                lacus vel augue laoreet rutrum faucibus dolor auctor.
                              </p>
                              <p>
                                Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus
                                auctor fringilla.
                              </p>
                              <p>
                                Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis
                                in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                              </p>
                              <p>
                                Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                lacus vel augue laoreet rutrum faucibus dolor auctor.
                              </p>
                              <p>
                                Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus
                                auctor fringilla.
                              </p>
                              <p>
                                Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis
                                in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                              </p>
                              <p>
                                Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                lacus vel augue laoreet rutrum faucibus dolor auctor.
                              </p>
                              <p>
                                Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus
                                auctor fringilla.
                              </p>
                              <p>
                                Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis
                                in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                              </p>
                              <p>
                                Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                lacus vel augue laoreet rutrum faucibus dolor auctor.
                              </p>
                              <p>
                                Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus
                                auctor fringilla.
                              </p>
                              <p>
                                Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis
                                in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                              </p>
                              <p>
                                Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                lacus vel augue laoreet rutrum faucibus dolor auctor.
                              </p>
                              <p>
                                Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus
                                auctor fringilla.
                              </p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">
                                Close
                              </button>
                              <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                          </div>
                        </div>
                      </div>
              </div>
            </div>
          </div>
        </div>
        <!-- / Multi Steps Registration -->
      </div>
    </div>

    <script>
      // Check selected custom option
      window.Helpers.initCustomOptionCheck();
    </script>

    <!-- / scripts -->
    <?php include '_scripts.php'; ?>

    <script src="js/signUp.js"></script>
  </body>
</html>
