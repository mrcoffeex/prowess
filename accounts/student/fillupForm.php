<?php
    require '../../config/includes.php';
    require '_session.php';
    include "_head.php";


?>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            <?php
            include "_sidemenu.php";
            ?>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                <?php
                include "_topnavigation.php";
                ?>
                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="card mb-4">
                            <h3 class="card-header">
                            <i class="mdi mdi-book-edit-outline me-2 mdi-20px"></i>Scholar Information <?= $userUsername ?></h3>

                            <div class="card-body divider text-start">
                                <div class="divider-text">
                                     <i class="mdi mdi-white-balance-sunny"></i>
                                </div>
                            </div>


                            <form id="formValidation" class="card-body" enctype="multipart/form-data" method="POST" action="fillupformCreate">
                                <h5><i class="mdi mdi-account me-2 mdi-20px"></i>Personal Information</h5>
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <div class="form-floating form-floating-outline">
                                            <select id="scholarBloodType" name="scholarBloodType" class="form-control">
                                                <option>Select Blood Type</option>
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
                                            <input type="number" id="scholarHeight" name="scholarHeight" class="form-control" placeholder="Height in centimeter" />
                                            <label for="scholarHeight">Height (cm)</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating form-floating-outline">
                                            <input type="number" id="scholarWeight" name="scholarWeight" class="form-control" placeholder="Weight in Kilograms" />
                                            <label for="scholarWeight">Weight (kg)</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating form-floating-outline">
                                            <select id="scholarReligion" name="scholarReligion" class="form-control">
                                                <option>Select Religion</option>
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
                                            </select>
                                            <label for="scholarReligion">Religion</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8 select2-primary">
                                        <div class="form-floating form-floating-outline">
                                            <select id="scholarTalent" name="scholarTalent[]" class="select2 form-select" multiple >
                                            <option></option>
                                                         <?php
                                                            //get talents
                                                            $getTalent=selectTalent();
                                                            while ($talent=$getTalent->fetch(PDO::FETCH_ASSOC)) {
                                                        ?>
                                                        <option><?= $talent['prow_talent_name'] ?></option>
                                                        <?php } ?>
                                            </select>
                                            <label for="scholarTalent">Talents (You can select multiple)</label>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4 mx-n4" />
                                <h5><i class="mdi mdi-account-group-outline me-2 mdi-20px"></i>Family Information</h5>
                                <div class="row g-3">
                                    <!-- Father Information -->
                                    <div class="col-md-4">
                                        <div class="form-floating form-floating-outline">
                                            <input type="text" id="scholarFatherName" name="scholarFatherName" class="form-control" placeholder="Juan Dela Cruz" />
                                            <label for="scholarFatherName">Father Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text">PH (+63)</span>
                                            <div class="form-floating form-floating-outline">
                                                <input type="text" id="contactNumber" name="scholarFatherCont" class="form-control multi-steps-mobile" placeholder="09121314151" />
                                                <label for="scholarFatherCont">Contact No.</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating form-floating-outline">
                                            <select id="scholarFatherOccu" name="scholarFatherOccu" class="form-control">
                                            <option>Select Occupation</option>
                                                        <?php
                                                            //get Occupation
                                                            $geOccu=selectOccupation();
                                                            while ($occu=$geOccu->fetch(PDO::FETCH_ASSOC)) {
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
                                            <input type="text" id="scholarMotherName" name="scholarMotherName" class="form-control" placeholder="Juana Dela Cruz" />
                                            <label for="scholarMotherName">Mother Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text">PH (+63)</span>
                                            <div class="form-floating form-floating-outline">
                                                <input type="text" id="contactNumber" name="scholarMotherCont" class="form-control multi-steps-mobile" placeholder="09121314151" />
                                                <label for="scholarMotherCont">Contact No.</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating form-floating-outline">
                                            <select id="scholarMotherOccu" name="scholarMotherOccu" class="form-control">
                                                <option>Select Occupation</option>
                                                        <?php
                                                            //get Occupation
                                                            $geOccu=selectOccupation();
                                                            while ($occu=$geOccu->fetch(PDO::FETCH_ASSOC)) {
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
                                            <input type="text" id="scholarGuardianName" name="scholarGuardianName" class="form-control" placeholder="Guardian's Name" />
                                            <label for="scholarGuardianName">Guardian Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text">PH (+63)</span>
                                            <div class="form-floating form-floating-outline">
                                                <input type="text" id="contactNumber" name="scholarGuardianCont" class="form-control multi-steps-mobile" placeholder="09121314151" />
                                                <label for="scholarGuardianCont">Contact No.</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating form-floating-outline">
                                            <select id="scholarGuardianOccu" name="scholarGuardianOccu" class="form-control">
                                            <option>Select Occupation</option>
                                                        <?php
                                                            //get Occupation
                                                            $geOccu=selectOccupation();
                                                            while ($occu=$geOccu->fetch(PDO::FETCH_ASSOC)) {
                                                        ?>
                                                        <option value="<?= $occu['prow_occu_name'] ?>"><?= $occu['prow_occu_name'] ?></option>
                                                        <?php } ?>
                                            </select>
                                            <label for="scholarGuardianOccu">Occupation</label>
                                        </div>
                                    </div>
                                </div>

                                <hr class="my-4 mx-n4" />
                                <h5><i class="mdi mdi-town-hall me-2 mdi-20px"></i>Enrollment Information</h5>
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <div class="form-floating form-floating-outline">
                                            <input type="text" id="scholarSchoolID" name="scholarSchoolID" class="form-control" placeholder="Enter Name" />
                                            <label for="scholarSchoolID">School ID</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating form-floating-outline">
                                            <select id="enrollemntschooName" name="enrollemntschooName" class="form-control">
                                            <option>Select School</option>
                                                         <?php
                                                            //get HEI
                                                            $getHei=selectHei();
                                                            while ($hei=$getHei->fetch(PDO::FETCH_ASSOC)) {
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
                                            <option>Select Course</option>
                                            </select>
                                            <label for="enrollmentCourse">Course</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating form-floating-outline">
                                            <select id="enrollmentYearLevel" name="enrollmentYearLevel" class="form-control">
                                                <option value="1">1st</option>
                                                <option value="2">2nd</option>
                                                <option value="3">3rd</option>
                                                <option value="4">4th</option>
                                                <option value="5">5th</option>
                                            </select>
                                            <label for="enrollmentYearLevel">Year Level</label>
                                        </div>
                                    </div>
                                </div>

                                <hr class="my-4 mx-n4" />
                                <h5><i class="mdi mdi-file-upload-outline me-2 mdi-20px"></i>Upload Requirements</h5>
                                <p class="fst-italic">*Ensure that the necessary documents are scanned clearly before uploading. Uploading blurred images will result in a delay in processing your scholarship application. Please take the time to review and provide high-quality scans for a smoother application process</p>
                                <div class="row g-3 mt-3">
                                    
                                <div class="row">
                                    <!-- Basic  -->
                                    <div class="col-12">
                                    <div class="card mb-4">
                                        <h5 class="card-header">Basic</h5>
                                        <div class="card-body">
                                        <form action="/upload" class="dropzone needsclick" id="dropzone-basic">
                                            <div class="dz-message needsclick">
                                            Drop files here or click to upload
                                            <span class="note needsclick"
                                                >(This is just a demo dropzone. Selected files are <strong>not</strong> actually
                                                uploaded.)</span
                                            >
                                            </div>
                                            <div class="fallback">
                                            <input name="file" type="file" />
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                    </div>
                                    <!-- /Basic  -->
                                </div>
                                    <!-- <label for="formFile" class="form-label">Enrollment Form</label>
                                        <input class="form-control" type="file" id="enrollmentFormFile" name="enrollmentFormFile" accept="image/jpeg, image/png, image/gif"/> -->
                                    <!-- <div class="col-md-4">
                                        <label for="formFile" class="form-label">Birth Certificate</label>
                                        <input class="form-control" type="file" id="birthCertFile" name="birthCertFile" />
                                    </div>
                                    <div class="col-md-4">
                                        <label for="formFile" class="form-label">Certificate of Low Income</label>
                                        <input class="form-control" type="file" id="lowIncomeFile" name="lowIncomeFile" />
                                    </div>
                                    <div class="col-md-4">
                                        <label for="formFile" class="form-label">Report Card</label>
                                        <input class="form-control" type="file" id="reportCardFile" name="reportCardFile"/>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="formFile" class="form-label">Endorsement Letter</label>
                                        <input class="form-control" type="file" id="endorsementFile" name="reportCardFile"/>
                                    </div>--> 
                                    <div class="pt-4">
                                        <button type="reset" class="btn btn-label-secondary">Cancel</button>
                                        <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                                     </div>
                                </div> 

                               
                            </form>
                        </div>
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    <?php
                    include "_footer.php";

                    ?>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>

        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
    </div>

    <?php include "_scripts.php"; ?>
    <script src="../../js/custom_validation.js"></script>
    
    <script>
        $('#scholarTalent').select2({
            multiple: true
        });
    </script>
</body>

</html>