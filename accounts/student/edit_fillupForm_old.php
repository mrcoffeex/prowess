<?php
    require '../../config/includes.php';
    require '_session.php';

    @$getScholar=selectScholar($scholarCode);
    @$scholar=$getScholar->fetch(PDO::FETCH_ASSOC);

    @$getScholarAddress=selectScholarAddress($scholarCode);
    @$scholarAdd=$getScholarAddress->fetch(PDO::FETCH_ASSOC);

    @$getScholarProfile=selectPersonalInfomation($scholarCode);
    @$scholarProfile=$getScholarProfile->fetch(PDO::FETCH_ASSOC);

    @$getScholarAppLogs=selectScholarPendingApplication($scholarCode);
    @$scholarAppLogs=$getScholarAppLogs->fetch(PDO::FETCH_ASSOC);

    @$valBloodType = ($scholarProfile['prow_prof_blood_type'] != "") ? $scholarProfile['prow_prof_blood_type'] : "";
    @$valHeight = ($scholarProfile['prow_prof_height'] != "") ? $scholarProfile['prow_prof_height'] : "";
    @$valWeight = ($scholarProfile['prow_prof_weight'] != "") ? $scholarProfile['prow_prof_weight'] : "";
    @$valReligion = ($scholarProfile['prow_prof_religion'] != "") ? $scholarProfile['prow_prof_religion'] : "";
    @$valTalents = $scholarProfile['prow_prof_talent'];     
    @$valPWD = ($scholarProfile['prow_prof_pwd'] != "") ? $scholarProfile['prow_prof_pwd'] : "";
    @$valSingleParent = ($scholarProfile['prow_prof_single_p'] != "") ? $scholarProfile['prow_prof_single_p'] : "";
    @$valSingleParentId = ($scholarProfile['prow_prof_single_id'] != "") ? $scholarProfile['prow_prof_single_id'] : ""; 
    @$valTribe = ($scholarProfile['prow_prof_tribe'] != "") ? $scholarProfile['prow_prof_tribe'] : "";                    
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
    @$valLastName = ($scholar['prow_scholar_lastname'] != "") ? $scholar['prow_scholar_lastname'] : "";
    @$valFirstName = ($scholar['prow_scholar_firstname'] != "") ? $scholar['prow_scholar_firstname'] : "";
    @$valMiddleName = ($scholar['prow_scholar_middlename'] != "") ? $scholar['prow_scholar_middlename'] : "";
    @$valSuffix = ($scholar['prow_scholar_suffix'] != "") ? $scholar['prow_scholar_suffix'] : "";
    @$valGender = ($scholar['prow_scholar_gender'] != "") ? $scholar['prow_scholar_gender'] : "";
    @$valCs = ($scholar['prow_scholar_cs'] != "") ? $scholar['prow_scholar_cs'] : "";
    @$valBday = ($scholar['prow_scholar_birthday'] != "") ? $scholar['prow_scholar_birthday'] : "";
    @$valBPlace = ($scholar['prow_scholar_birthplace'] != "") ? $scholar['prow_scholar_birthplace'] : "";
    @$valContact = ($scholar['prow_scholar_con'] != "") ? $scholar['prow_scholar_con'] : "";

    @$valCity = ($scholarAdd['prow_address_municipality'] != "") ? $scholarAdd['prow_address_municipality'] : "";
    @$valBrgy = ($scholarAdd['prow_address_brgy'] != "") ? $scholarAdd['prow_address_brgy'] : "";
    @$valProvince = ($scholarAdd['prow_address_province'] != "") ? $scholarAdd['prow_address_province'] : "";
    @$valDesc = ($scholarAdd['prow_address_description'] != "") ? $scholarAdd['prow_address_description'] : "";
    @$valZip = ($scholarAdd['prow_address_zipcode'] != "") ? $scholarAdd['prow_address_zipcode'] : "";

   

    $title = "Edit Profile";
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

                            <form id="formValidation" class="card-body" enctype="multipart/form-data" method="POST" action="edit_fillupForm_oldUpdate" onsubmit="btnLoader(this.fillUpFormStep1)">
                                    
                                <hr class="my-4 mx-n4" />

                                <h5><i class="mdi mdi-account me-2 mdi-20px"></i>Personal Information</h5>

                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <div class="form-floating form-floating-outline">
                                            <input type="text" id="scholarLastName" name="scholarLastName" class="form-control" placeholder="Last Name" value="<?= $valLastName ?>" />
                                            <label for="scholarLastName">Last Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating form-floating-outline">
                                            <input type="text" id="scholarFirstName" name="scholarFirstName" class="form-control" placeholder="First Name" value="<?= $valFirstName ?>" />
                                            <label for="scholarFirstName">First Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating form-floating-outline">
                                            <input type="text" id="scholarMiddleName" name="scholarMiddleName" class="form-control" placeholder="Middle Name" value="<?= $valMiddleName ?>" />
                                            <label for="scholarMiddleName">Middle Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating form-floating-outline">
                                            <select id="scholarSuffix" name="scholarSuffix" class="form-control">
                                                <option><?= $valSuffix ?></option>
                                                <option value="Jr.">Jr.</option>
                                                <option value="Sr.">Sr.</option>
                                                <option value="II">II</option>
                                                <option value="III">III</option>
                                                <option value="IV">IV</option>
                                                <option value="V">V</option>
                                                <option value="VI">VI</option>
                                            </select>
                                            <label for="scholarSuffix">Suffix/Qualifier</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating form-floating-outline">
                                            <select id="scholarGender" name="scholarGender" class="form-control">
                                                <option><?= $valGender ?></option>
                                                <option value="Female">Female</option>
                                                <option value="Male">Male</option>
                                            </select>
                                            <label for="scholarGender">Gender</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating form-floating-outline">
                                            <select id="scholarCs" name="scholarCs" class="form-control">
                                                <option><?= $valCs ?></option>
                                                <option value="Single">Single</option>
                                                <option value="Married">Married</option>
                                                <option value="Separated">Separated</option>
                                                <option value="Widowed">Widowed</option>
                                            </select>
                                            <label for="scholarCs">Civil Status</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating form-floating-outline">
                                        <input
                                            type="date"
                                            id="scholarBday"
                                            name="scholarBday"
                                            class="form-control" 
                                            max="<?= date("Y-m-d") ?>"
                                            value="<?= $valBday ?>" />
                                        <label for="scholarBday">Birthday</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating form-floating-outline">
                                            <input type="text" id="scholarBPlace" name="scholarBPlace" class="form-control" placeholder="Birth Place" value="<?= $valBPlace ?>" />
                                            <label for="scholarBPlace">Birth Place</label>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-floating form-floating-outline">
                                            <input type="text" id="scholarContact" name="scholarContact" class="form-control" placeholder="Contact Number" value="<?= $valContact ?>" />
                                            <label for="scholarContact">Contact Number</label>
                                        </div>
                                    </div>

                                    <hr class="my-4 mx-n4" />
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
                                                <option value="No Religion">No Religion</option>
                                                <option value="Others">Others</option>
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

                                    <hr class="my-2 mx-n4" />
                                    <h6 class="fst-italic">*Other Personal Information</h6>
                                    <div class="col-md-4">
                                        <label class=""> Are you a person with disability (PWD)? </label>
                                        <div class="form-floating form-floating-outline">
                                            
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="0" id="scholarPWDNo" name="scholarPWD" <?= isChecked($valPWD, 0) ?> />
                                                <label class="form-check-label" for="scholarPWD"> No </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="1" id="scholarPWDYes"
                                                name="scholarPWD" <?= isChecked($valPWD, 1) ?> />
                                                <label class="" for="scholarPWD"> Yes </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label class=""> Are you a single parent?</label>
                                        <div class="form-floating form-floating-outline">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="0" id="scholarSinglePNo" name="scholarSingleP" <?= isChecked($valSingleParent, 0) ?> />
                                                <label class="form-check-label" for="scholarSingleP"> No </label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="radio" value="1" id="scholarSinglePYes"
                                                name="scholarSingleP" <?= isChecked($valSingleParent, 1) ?> />
                                                <label class="" for="scholarSingleP"> Yes </label>
                                            </div>

                                            <div class="form-floating form-floating-outline">
                                                <input type="text" id="scholarSingleID" name="scholarSingleID" class="form-control" placeholder="Single Parent ID No." value="<?= $valSingleParentId ?>" >
                                                <label for="scholarSingleID">Single Parent ID No.</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-floating form-floating-outline">
                                            <select id="scholarTribe" name="scholarTribe" class="form-control">
                                                
                                                <option value="<?= $valTribe ?>"><?= $valTribe ?></option>
                                                <option value="None">None</option>
                                                <?php
                                                //get tribe
                                                $getTribe = selectTribe();
                                                while ($tribe = $getTribe->fetch(PDO::FETCH_ASSOC)) {
                                                ?>
                                                    <option value="<?= $tribe['prow_tribe_name'] ?>"><?= $tribe['prow_tribe_name'] ?></option>
                                                <?php } ?>
                                            </select>
                                            <label for="scholarTribe">Tribal Affiliation</label>
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
                                <h5><i class="mdi mdi-home-map-marker me-2 mdi-20px"></i>Address Information - Pin your address</h5>
                                <h6 class="fst-italic">*Drag the Pin to your exact address</h6>
                                
                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <div id="studentMap"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating form-floating-outline">
                                            <input type="number" id="scholarLong" name="scholarLong" class="form-control" value="<?= getScholarLong($scholarCode) ?>" readonly />
                                            <label for="scholarLong">Longtitude</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating form-floating-outline">
                                            <input type="number" id="scholarLat" name="scholarLat" class="form-control" value="<?= getScholarLat($scholarCode) ?>" readonly />
                                            <label for="scholarLat">Latitude</label>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="input-group input-group-merge">
                                            <div class="form-floating form-floating-outline">
                                                <input type="text" id="scholarStreet" name="scholarStreet" class="form-control multi-steps-mobile" placeholder="Street" value="<?= $valDesc ?>" />
                                                <label for="scholarStreet">Street</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-floating form-floating-outline">
                                            <select id="multiStepsMunicipality" name="multiStepsMunicipality" class="form-control" >
                                                <option><?= $valCity ?></option>
                                                <?php  
                                                    //get barangays
                                                    $getMunicipalities=selectMunicipalities();
                                                    while ($municipalities=$getMunicipalities->fetch(PDO::FETCH_ASSOC)) {
                                                ?>
                                                <option value="<?= $municipalities['prow_mun_name'] ?>"><?= $municipalities['prow_mun_name'] ?></option>
                                                <?php } ?>
                                            </select>
                                            <label for="multiStepsMunicipality">City/Municipality</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-floating form-floating-outline">
                                            <select id="multiStepsBarangay" name="multiStepsBarangay" class="form-control" >
                                                <option><?= $valBrgy ?></option>
                                            </select>
                                            <label for="multiStepsBarangay">Barangay</label>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-floating form-floating-outline">
                                            <input type="number" id="scholarZip" name="scholarZip" class="form-control" value="<?= $valZip ?>" />
                                            <label for="scholarZip">Zip Code</label>
                                        </div>
                                    </div>

                                </div>

                               

                                <div class="pt-4">
                                    <button type="submit" id="fillUpFormStep1" class="btn btn-primary me-sm-3 me-1">Update</button>
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