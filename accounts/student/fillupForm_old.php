<?php
    require '../../config/includes.php';
    require '_session.php';

    @$getScholar=selectScholar($scholarCode);
    @$scholar=$getScholar->fetch(PDO::FETCH_ASSOC);

    @$getScholarProfile=selectPersonalInfomation($scholarCode);
    @$scholarProfile=$getScholarProfile->fetch(PDO::FETCH_ASSOC);

    @$getScholarAppLogs=selectScholarPendingApplication($scholarCode);
    @$scholarAppLogs=$getScholarAppLogs->fetch(PDO::FETCH_ASSOC);

    @$valBloodType = ($scholarProfile['prow_prof_blood_type'] != "") ? $scholarProfile['prow_prof_blood_type'] : "";
    @$valHeight = ($scholarProfile['prow_prof_height'] != "") ? $scholarProfile['prow_prof_height'] : "";
    @$valWeight = ($scholarProfile['prow_prof_weight'] != "") ? $scholarProfile['prow_prof_weight'] : "";
    @$valReligion = ($scholarProfile['prow_prof_religion'] != "") ? $scholarProfile['prow_prof_religion'] : "";
    @$valTalents = $scholarProfile['prow_prof_talent'];                        

    @$valFatherName = ($scholarProfile['prow_prof_father'] != "") ? $scholarProfile['prow_prof_father'] : "";
    @$valFatherContact = ($scholarProfile['prow_prof_father_cont'] != "") ? $scholarProfile['prow_prof_father_cont'] : "";
    @$valFatherOccu = ($scholarProfile['prow_prof_father_occu'] != "") ? $scholarProfile['prow_prof_father_occu'] : "";
    @$valMotherName = ($scholarProfile['prow_prof_mother'] != "") ? $scholarProfile['prow_prof_mother'] : "";
    @$valMotherContact = ($scholarProfile['prow_prof_mother_cont'] != "") ? $scholarProfile['prow_prof_mother_cont'] : "";
    @$valMotherOccu = ($scholarProfile['prow_prof_mother_occu'] != "") ? $scholarProfile['prow_prof_mother_occu'] : "";
    @$valGuardianName = ($scholarProfile['prow_prof_guardian'] != "") ? $scholarProfile['prow_prof_guardian'] : "";
    @$valGuardianContact = ($scholarProfile['prow_prof_guardian_cont'] != "") ? $scholarProfile['prow_prof_guardian_cont'] : "";
    @$valGuardianOccu = ($scholarProfile['prow_prof_guardian_occu'] != "") ? $scholarProfile['prow_prof_guardian_occu'] : "";
    @$valIncome = ($scholarProfile['prow_prof_income'] != "") ? $scholarProfile['prow_prof_income'] : "";

    @$valSchoolId = ($scholar['prow_scholar_school_id'] != "") ? $scholar['prow_scholar_school_id'] : "";
    @$valSchoolName = ($scholarAppLogs['prow_hei'] != "") ? $scholarAppLogs['prow_hei'] : "";
    @$valCourse = ($scholarAppLogs['prow_course'] != "") ? $scholarAppLogs['prow_course'] : "";
    @$valYearLevel = ($scholarAppLogs['prow_yr_lvl'] != "") ? $scholarAppLogs['prow_yr_lvl'] : "";
    @$valSem = ($scholarAppLogs['prow_sem'] != "") ? $scholarAppLogs['prow_sem'] : "";
    @$valSY = ($scholarAppLogs['prow_sy'] != "") ? $scholarAppLogs['prow_sy'] : "";

    $title = "Fill Up Form Step 1";
    include "_head.php";
?>

<style>
    #studentMap {
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
                        <?php
                        include "profile_header.php";
                        ?>
                        <div class="card mb-4">
                            <h3 class="card-header">
                                <i class="mdi mdi-book-edit-outline me-2 mdi-20px"></i>Scholar Information (Existing)
                            </h3>

                            <form id="formValidation" class="card-body" enctype="multipart/form-data" method="POST" action="fillupformOldCreate" onsubmit="btnLoader(this.fillUpFormStep1)">
                                    
                                <h5><i class="mdi mdi-home-map-marker me-2 mdi-20px"></i>Pin your address</h5>
                                <h6 class="fst-italic">*Drag the Pin to your exact address</h6>
                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <div id="studentMap"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating form-floating-outline">
                                            <input type="number" id="scholarLong" name="scholarLong" class="form-control" value="<?= getScholarLong($scholarCode) ?>" readonly />
                                            <label for="scholarHeight">Longtitude</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating form-floating-outline">
                                            <input type="number" id="scholarLat" name="scholarLat" class="form-control" value="<?= getScholarLat($scholarCode) ?>" readonly />
                                            <label for="scholarHeight">Latitude</label>
                                        </div>
                                    </div>
                                </div>

                                <hr class="my-4 mx-n4" />

                                <h5><i class="mdi mdi-account me-2 mdi-20px"></i>Personal Information</h5>
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <div class="form-floating form-floating-outline">
                                            <select id="scholarBloodType" name="scholarBloodType" class="form-control">
                                                <option><?= $valBloodType ?></option>
                                                <option value="A+">A+</option>
                                                <option value="A-">A-</option>
                                                <option value="B+">B+</option>
                                                <option value="B-">B-</option>
                                                <option value="AB+">AB+</option>
                                                <option value="AB-">AB-</option>
                                                <option value="O+">O+</option>
                                                <option value="O-">O-</option>
                                                <option value="O-">Unknown</option>
                                            </select>
                                            <label for="scholarBloodType">Blood Type</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating form-floating-outline">
                                            <input type="number" id="scholarHeight" name="scholarHeight" class="form-control" placeholder="Height in centimeter" value="<?= $valHeight ?>" />
                                            <label for="scholarHeight">Height (cm)</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating form-floating-outline">
                                            <input type="number" id="scholarWeight" name="scholarWeight" class="form-control" placeholder="Weight in Kilograms" value="<?= $valWeight ?>" />
                                            <label for="scholarWeight">Weight (kg)</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating form-floating-outline">
                                            <select id="scholarReligion" name="scholarReligion" class="form-control">
                                                <option><?= $valReligion ?></option>
                                                <option value="Aglipayan Church">Aglipayan Church</option>
                                                <option value="Bahá'í Faith">Bahá'í Faith</option>
                                                <option value="Buddhism">Buddhism</option>
                                                <option value="Hinduism">Hinduism</option>
                                                <option value="Iglesia ni Cristo">Iglesia ni Cristo</option>
                                                <option value="Indigenous Religions">Indigenous Religions</option>
                                                <option value="Islam">Islam</option>
                                                <option value="Jehovah's Witnesses">Jehovah's Witnesses</option>
                                                <option value="Judaism">Judaism</option>
                                                <option value="Protestantism">Protestantism</option>
                                                <option value="Roman Catholicism">Roman Catholicism</option>
                                                <option value="Sikhism">Sikhism</option>
                                                <option value="Sikhism">No Religion</option>
                                                <option value="Sikhism">Others</option>
                                            </select>
                                            <label for="scholarReligion">Religion</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8 select2-primary">
                                        <div class="form-floating form-floating-outline">
                                            <select id="scholarTalent" name="scholarTalent[]" class="select2 form-select" multiple>
                                                <option></option>
                                                <?php
                                                if ($valTalents != "") {
                                                    $talentArray = explode(',', $valTalents);
                                                    foreach ($talentArray as $talents) {
                                                        echo '<option selected>'.$talents.'</option>';
                                                    }
                                                } else {
                                                    //empty
                                                }

                                                //get talents
                                                $getTalent = selectTalent();
                                                while ($talent = $getTalent->fetch(PDO::FETCH_ASSOC)) {
                                                ?>
                                                    <option><?= $talent['prow_talent_name'] ?></option>
                                                <?php } ?>
                                            </select>
                                            <label for="scholarTalent">Talents (You can select multiple)</label>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4 mx-n4" />
                                <h5><i class="mdi mdi-account-group-outline me-2 mdi-20px"></i>Family Background Information</h5>
                                <div class="row g-3">
                                    <!-- Father Information -->
                                    <div class="col-md-4">
                                        <div class="form-floating form-floating-outline">
                                            <input type="text" id="scholarFatherName" name="scholarFatherName" class="form-control" placeholder="Juan Dela Cruz" value="<?= $valFatherName ?>" />
                                            <label for="scholarFatherName">Father Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text">PH (+63)</span>
                                            <div class="form-floating form-floating-outline">
                                                <input type="text" id="scholarFatherCont" name="scholarFatherCont" class="form-control multi-steps-mobile" placeholder="09121314151" value="<?= $valFatherContact ?>" />
                                                <label for="scholarFatherCont">Contact No.</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating form-floating-outline">
                                            <select id="scholarFatherOccu" name="scholarFatherOccu" class="form-control">
                                                <option><?= $valFatherOccu ?></option>
                                                <?php
                                                //get Occupation
                                                $geOccu = selectOccupation();
                                                while ($occu = $geOccu->fetch(PDO::FETCH_ASSOC)) {
                                                ?>
                                                    <option value="<?= $occu['prow_occu_name'] ?>"><?= $occu['prow_occu_name'] ?></option>
                                                <?php } ?>
                                            </select>
                                            <label for="scholarFatherOccu">Occupation</label>
                                        </div>
                                    </div>
                                    <!-- Mother Information -->
                                    <div class="col-md-4">
                                        <div class="form-floating form-floating-outline">
                                            <input type="text" id="scholarMotherName" name="scholarMotherName" class="form-control" placeholder="Juana Dela Cruz" value="<?= $valMotherName ?>" />
                                            <label for="scholarMotherName">Mother Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text">PH (+63)</span>
                                            <div class="form-floating form-floating-outline">
                                                <input type="text" id="scholarMotherCont" name="scholarMotherCont" class="form-control multi-steps-mobile" placeholder="09121314151" value="<?= $valMotherContact ?>" />
                                                <label for="scholarMotherCont">Contact No.</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating form-floating-outline">
                                            <select id="scholarMotherOccu" name="scholarMotherOccu" class="form-control">
                                                <option><?= $valMotherOccu ?></option>
                                                <?php
                                                //get Occupation
                                                $geOccu = selectOccupation();
                                                while ($occu = $geOccu->fetch(PDO::FETCH_ASSOC)) {
                                                ?>
                                                    <option value="<?= $occu['prow_occu_name'] ?>"><?= $occu['prow_occu_name'] ?></option>
                                                <?php } ?>
                                            </select>
                                            <label for="scholarMotherOccu">Occupation</label>
                                        </div>
                                    </div>
                                    <!-- Guardian Information -->
                                    <hr class="my-2 mx-n4" />
                                    <h6 class="fst-italic">*If not living with parents, write your guardian's name</h6>
                                    <div class="col-md-4">
                                        <div class="form-floating form-floating-outline">
                                            <input type="text" id="scholarGuardianName" name="scholarGuardianName" class="form-control" placeholder="Guardian's Name" value="<?= $valGuardianName ?>" />
                                            <label for="scholarGuardianName">Guardian Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text">PH (+63)</span>
                                            <div class="form-floating form-floating-outline">
                                                <input type="text" id="scholarGuardianCont" name="scholarGuardianCont" class="form-control multi-steps-mobile" placeholder="09121314151" value="<?= $valGuardianContact ?>" />
                                                <label for="scholarGuardianCont">Contact No.</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating form-floating-outline">
                                            <select id="scholarGuardianOccu" name="scholarGuardianOccu" class="form-control">
                                                <option><?= $valGuardianOccu ?></option>
                                                <?php
                                                //get Occupation
                                                $geOccu = selectOccupation();
                                                while ($occu = $geOccu->fetch(PDO::FETCH_ASSOC)) {
                                                ?>
                                                    <option value="<?= $occu['prow_occu_name'] ?>"><?= $occu['prow_occu_name'] ?></option>
                                                <?php } ?>
                                            </select>
                                            <label for="scholarGuardianOccu">Occupation</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating form-floating-outline">
                                            <select id="scholarIncome" name="scholarIncome" class="form-control">
                                                <option><?= $valIncome ?></option>
                                                <option value="Less than ₱9,000">Less than ₱9,000</option>
                                                <option value="₱9,100 - ₱18,000">₱9,100 - ₱18,000</option>
                                                <option value="₱9,100 - ₱18,000">₱18,100 - ₱36,000</option>
                                                <option value="₱9,100 - ₱18,000">₱36,100 - ₱63,000</option>
                                                <option value="₱9,100 - ₱18,000">₱63,100 above</option>
                                            </select>
                                            <label for="scholarIncome">Monthly Income</label>
                                        </div>
                                    </div>
                                </div>

                                <hr class="my-4 mx-n4" />
                                <h5><i class="mdi mdi-town-hall me-2 mdi-20px"></i>Enrollment Information</h5>
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <div class="form-floating form-floating-outline">
                                            <input type="text" id="scholarSchoolID" name="scholarSchoolID" class="form-control" placeholder="Enter Name" value="<?= $valSchoolId ?>" />
                                            <label for="scholarSchoolID">School ID</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating form-floating-outline">
                                            <select id="enrollemntschooName" name="enrollemntschooName" class="form-control">
                                                <option value="<?= $valSchoolName ?>"><?= getSchoolName($valSchoolName) ?></option>
                                                <?php
                                                //get HEI
                                                $getHei = selectHei();
                                                while ($hei = $getHei->fetch(PDO::FETCH_ASSOC)) {
                                                ?>
                                                    <option value="<?= $hei['prow_hei_id'] ?>"><?= $hei['prow_hei_name'] ?></option>
                                                <?php } ?>
                                            </select>
                                            <label for="enrollemntschooName">School Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating form-floating-outline">
                                            <select id="enrollmentCourse" name="enrollmentCourse" class="form-control">
                                                <option><?= $valCourse ?></option>
                                            </select>
                                            <label for="enrollmentCourse">Course</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating form-floating-outline">
                                            <select id="enrollmentYearLevel" name="enrollmentYearLevel" class="form-control">
                                                <option value="<?= $valYearLevel ?>"><?= yearLevel($valYearLevel) ?></option>
                                                <option value="1">1st</option>
                                                <option value="2">2nd</option>
                                                <option value="3">3rd</option>
                                                <option value="4">4th</option>
                                                <option value="5">5th</option>
                                            </select>
                                            <label for="enrollmentYearLevel">Year Level</label>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-floating form-floating-outline">
                                            <select id="enrollmentSemester" name="enrollmentSemester" class="form-control">
                                                <option value="<?= $valSem ?>"><?= semester($valSem) ?></option>
                                                <option value="1">1st Semester</option>
                                                <option value="2">2nd Semester</option>
                                            </select>
                                            <label for="enrollmentYearLevel">Semester</label>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-floating form-floating-outline">
                                            <select id="enrollmentSchoolYear" name="enrollmentSchoolYear" class="form-control">
                                                <option><?= $valSY ?></option>
                                                <?php
                                                //get SY
                                                $getSY = selectSY();
                                                while ($sy = $getSY->fetch(PDO::FETCH_ASSOC)) {
                                                ?>
                                                    <option><?= $sy['prow_sy_year'] ?></option>
                                                <?php } ?>
                                            </select>
                                            <label for="enrollmentYearLevel">School Year</label>
                                        </div>
                                    </div>
                                    <div class="pt-4">
                                        <button type="submit" id="fillUpFormStep1" class="btn btn-primary me-sm-3 me-1">Continue</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <?php include "_footer.php"; ?>
                    <div class="content-backdrop fade"></div>
                </div>
            </div>
        </div>
        <div class="layout-overlay layout-menu-toggle"></div>
        <div class="drag-target"></div>
    </div>

    <?php include "_scripts.php"; ?>
    <script src="../../js/fillUpFormOld.js"></script>

    <script>
        function initMap() {

            if (<?= getScholarLat($scholarCode) ?> == "" || <?= getScholarLong($scholarCode) ?> == "") {
                var initialLocation = { lat: 6.7445944749889835, lng: 125.35688568920658 };
            } else {
                var initialLocation = { lat: <?= getScholarLat($scholarCode) ?>, lng: <?= getScholarLong($scholarCode) ?> };
            }

            var map = new google.maps.Map(document.getElementById('studentMap'), {
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
            document.getElementById('scholarLong').value = lng;
            document.getElementById('scholarLat').value = lat;
        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDl37fY99htQLQOK1zIErOwsxMiTQ3AxmA&callback=initMap" async defer></script>
</body>

</html>