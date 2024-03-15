<?php
  require '../../config/includes.php';
  require '_session.php';
  include "_head.php";

  $hei_id = clean_string($_GET['hei_id']);
  $getHeiProfile=selectHEIProfile($hei_id);
  $profile=$getHeiProfile->fetch(PDO::FETCH_ASSOC);

  $heiLogo = $profile['prow_hei_logo'];
 // $heiCover = $profile['prow_hei_cover_photo'];
  $getHeiCourse=selectCoursebyHeiIds($hei_id);

  $long = getHeiLong($_GET['hei_id']);
  $lat = getHeiLat($_GET['hei_id']);

  
  ?>

<style>
    #heiMap {
        height: 400px;
        width: 100%;
    }
</style>


<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <?php include "_sidemenu.php"; ?>
      <div class="layout-page">
        <?php include "_topnavigation.php"; ?>
 
        <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">HEI Information / <span> <a href="heiProfile?rand=<?= my_rand_str(100) ?>&hei_id=<?=$hei_id ?>">Profile</a></span>  / </span> Edit</h4>

              <div class="row">
                <div class="col-md-12">
                 
                  <div class="card mb-4">
                    <h4 class="card-header">Profile Details</h4>
                    <!-- Account -->
                    <div class="card-body">
                    <form id="formHeiUpdate" action="hei_profile_edit_update?hei_id=<?= $hei_id ?>" method="POST" enctype="multipart/form-data" onsubmit="btnLoader(this.heiEdit)">
                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <div id="heiAvatar"></div>
                        <input type="text" value="<?= $profile['prow_hei_name']?>" hidden>
                        <div class="button-wrapper">
                          <label for="heilogo" class="btn btn-primary me-2 mb-3" tabindex="0">
                            <span class="d-none d-sm-block">Upload new photo</span>
                            <i class="mdi mdi-tray-arrow-up d-block d-sm-none"></i>
                            <input
                              type="file"
                              id="heilogo"
                              class="account-file-input"
                              hidden
                              name="heilogo"
                              accept="image/png, image/jpeg" />
                          </label>
                         
                          <div class="text-muted small">Allowed JPG, GIF or PNG. Max size of 800K</div>
                        </div>
                      </div>
                    </div>
                    <div class="card-body pt-2">
                    <input type="text" name="heiCode" value="<?= $profile['prow_hei_code']?>" hidden>
                        <div class="row gy-4">
                          <div class="col-md-6">
                            <div class="form-floating form-floating-outline">
                              <input
                                class="form-control"
                                type="text"
                                id="heiName"
                                name="heiName"
                                value= "<?= $profile['prow_hei_name']?>"
                                autofocus
                                required />
                              <label for="heiName">HEI Name</label>
                            </div>
                          </div>
                        </div>
                        <hr class="my-4 mx-n4" />
                        <h5><i class="mdi mdi-account me-2 mdi-20px"></i>HEI Contact Information</h5>
                                   
                        <div class="row mt-3">
                          <div class="mb-3 col-md-6 form-password-toggle">
                            <div class="input-group input-group-merge">
                              <div class="form-floating form-floating-outline">
                                <input
                                  class="form-control"
                                  type="text"
                                  name="heiContactPerson"
                                  id="heiContactPerson"
                                  value="<?= $profile['prow_hei_contact_person']?>"
                                  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                  required />
                                <label for="heiContactPerson">Contact Person</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="mb-3 col-md-6 form-password-toggle">
                            <div class="input-group input-group-merge">
                              <div class="form-floating form-floating-outline">
                                <input
                                  class="form-control"
                                  type="text"
                                  name="heiContactNo"
                                  id="heiContactNo"
                                  value="<?= $profile['prow_hei_contact']?>"
                                  placeholder="+639123455890"
                                  required />
                                <label for="heiContactNo">Contact Number</label>
                              </div>
                            </div>
                          </div>
                          <div class="mb-3 col-md-6 form-password-toggle">
                            <div class="input-group input-group-merge">
                              <div class="form-floating form-floating-outline">
                                <input
                                  class="form-control"
                                  type="text"
                                  name="heiContactEmail"
                                  id="heiContactEmail"
                                  value="<?= $profile['prow_hei_email']?>"
                                  placeholder="hei.email@gmail.com"
                                  required />
                                <label for="heiContactEmail">Email Address</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr class="my-4 mx-n4" />
                        <h5><i class="mdi mdi-map-marker me-2 mdi-20px"></i>HEI Address Information</h5>

                        <div class="row">
                          <div class="mb-3 col-md-6 form-password-toggle">
                            <div class="input-group input-group-merge">
                              <div class="form-floating form-floating-outline">
                                <input
                                  class="form-control"
                                  type="text"
                                  name="heiProvince"
                                  id="heiProvince"
                                  value="<?= $profile['prow_hei_province']?>"
                                  placeholder="Davao del Sur"
                                  readonly/>
                                <label for="heiProvince">Province</label>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-6">
                              <div class="form-floating form-floating-outline">
                                  <select id="heimunicipality" name="heimunicipality" class="form-control">
                                      <option value = "<?= $profile['prow_hei_municipality']?>"><?= $profile['prow_hei_municipality']?></option>
                                      <?php
                                      //get barangays
                                      $getMunicipalities = selectMunicipalities();
                                      while ($municipalities = $getMunicipalities->fetch(PDO::FETCH_ASSOC)) {
                                      ?>
                                          <option value="<?= $municipalities['prow_mun_name'] ?>"><?= $municipalities['prow_mun_name'] ?></option>
                                      <?php } ?>
                                  </select>
                                  <label for="heimunicipality">City/Municipality</label>
                              </div>
                          </div>
                          <div class="col-sm-6">
                              <div class="form-floating form-floating-outline">
                                  <select id="heibarangay" name="heibarangay" class="form-control">
                                    <option value = "<?= $profile['prow_hei_barangay']?>"><?= $profile['prow_hei_barangay']?></option>
                                  </select>
                                  <label for="heibarangay">Barangay</label>
                              </div>
                          </div>
                          <div class="mb-3 col-md-6 form-password-toggle">
                            <div class="input-group input-group-merge">
                              <div class="form-floating form-floating-outline">
                                <input
                                  class="form-control"
                                  type="text"
                                  name="heiStreet"
                                  id="heiStreet"
                                  value="<?= $profile['prow_hei_street']?>"
                                  placeholder="Street Name"
                                  />
                                <label for="heiStreet">Street</label>
                              </div>
                            </div>
                          </div>
                          <div class="mb-3 col-md-6 form-password-toggle">
                            <div class="input-group input-group-merge">
                              <div class="form-floating form-floating-outline">
                                <input
                                  class="form-control"
                                  type="text"
                                  name="heiZip"
                                  id="heiZip"
                                  value="<?= $profile['prow_hei_zip']?>"
                                  placeholder="Zip Code"
                                  />
                                <label for="heiZip">Zip Code</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr class="my-4 mx-n4" />
                        <h5><i class="mdi mdi-home-map-marker me-2 mdi-20px"></i>Pin your address</h5>
                        <h6 class="fst-italic">*Drag the Pin to your exact address</h6>
                        
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div id="heiMap"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <input type="number" id="HeiLong" name="HeiLong" class="form-control" value="<?= $long ?>" readonly />
                                    <label for="HeiLong">Longtitude</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <input type="number" id="HeiLat" name="HeiLat" class="form-control" value="<?= $lat ?>" readonly />
                                    <label for="HeiLat">Latitude</label>
                                </div>
                            </div>
                        </div>


                        <div class="mt-4">
                          <button type="submit" class="btn btn-primary me-2" id="heiEdit">Save changes</button>
                          <button type="reset" class="btn btn-outline-secondary"><a href="heiProfile?hei_id=<?= $hei_id ?>">Cancel</button>
                        </div>                        
                      </form>
                    </div>
                    
                    <?php  
                      $HeiImage = getHeiImageById($hei_id);
                    ?>


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
  <script>
        function initMap() {

            if (<?= $lat ?> == "" || <?= $long ?> == "") {
                var initialLocation = { lat: 6.7445944749889835, lng: 125.35688568920658 };
            } else {
                var initialLocation = { lat: <?= $lat ?>, lng: <?= $long ?> };
            }

            var map = new google.maps.Map(document.getElementById('heiMap'), {
                zoom: 17,
                center: initialLocation,
                styles: [
                            {
                        featureType: "poi",
                        elementType: "labels",
                        stylers: [{ color: "#35373b" }],
                    },
                    {
                        featureType: "label",
                        elementType: "labels.icon",
                        stylers: [{ color: "#35373b" }],
                    },
                    {
                        featureType: "label",
                        elementType: "labels.text.fill",
                        stylers: [{ color: "#35373b" }], // Set the color you want for labels
                    },{
                        featureType: "label",
                        elementType: "labels.text.stroke",
                        stylers: [{ color: "#ffffff" }],
                    },
                ]
            });

            var marker = new google.maps.Marker({
                position: initialLocation,
                map: map,
                draggable: true // Allow marker to be dragged
            });

            google.maps.event.addListener(marker, 'dragend', function (event) {
                updateLatLng(marker.getPosition().lat(), marker.getPosition().lng());
            });

            updateLatLng(initialLocation.lat, initialLocation.lng);
        }

        function updateLatLng(lat, lng) {
            document.getElementById('HeiLong').value = lng;
            document.getElementById('HeiLat').value = lat;
        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDl37fY99htQLQOK1zIErOwsxMiTQ3AxmA&callback=initMap" async defer></script>
</body>
</html>