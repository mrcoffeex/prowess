<?php
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
                            <h5 class="card-header">Scholar Information</h5>
                            <form class="card-body">
                                <h6>Personal Information</h6>
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
                                            <input type="number" id="scholarWeight" name="scholarWeight" class="form-control" placeholder="Height in centimeter" />
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
                                            </select>
                                            <label for="scholarReligion">Religion</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8 select2-primary">
                                        <div class="form-floating form-floating-outline">
                                            <select id="scholarTalent" name="scholarTalent" class="select2 form-select" multiple>
                                                <option value="Dancing">Dancing</option>
                                                <option value="Singing">Singing</option>
                                                <option value="Painting">Painting</option>
                                                <option value="Modeling">Modeling</option>
                                            </select>
                                            <label for="scholarTalent">Talents (You can select multiple)</label>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4 mx-n4" />
                                <h6>Family Information</h6>
                                <div class="row g-3">
                                    <!-- Father Information -->
                                    <div class="col-md-4">
                                        <div class="form-floating form-floating-outline">
                                            <input type="text" id="scholarFatherName" name="scholarFatherName" class="form-control" placeholder="Height in centimeter" />
                                            <label for="scholarFatherName">Father Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text">PH (+63)</span>
                                            <div class="form-floating form-floating-outline">
                                                <input type="text" id="scholarFatherCont" name="scholarFatherCont" class="form-control multi-steps-mobile" placeholder="09121314151" />
                                                <label for="scholarFatherCont">Contact No.</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating form-floating-outline">
                                            <select id="scholarFatherOccu" name="scholarFatherOccu" class="form-control">
                                                <option>Select Occupation</option>
                                                <option value="Driver">Driver</option>
                                            </select>
                                            <label for="scholarFatherOccu">Occupation</label>
                                        </div>
                                    </div>
                                    <!-- Mother Information -->
                                    <div class="col-md-4">
                                        <div class="form-floating form-floating-outline">
                                            <input type="text" id="scholarMotherName" name="scholarMotherName" class="form-control" placeholder="Height in centimeter" />
                                            <label for="scholarMotherName">Mother Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text">PH (+63)</span>
                                            <div class="form-floating form-floating-outline">
                                                <input type="text" id="scholarFatherCont" name="scholarMotherCont" class="form-control multi-steps-mobile" placeholder="09121314151" />
                                                <label for="scholarMotherCont">Contact No.</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating form-floating-outline">
                                            <select id="scholarMotherOccu" name="scholarMotherOccu" class="form-control">
                                                <option>Select Occupation</option>
                                                <option value="Driver">Driver</option>
                                            </select>
                                            <label for="scholarMotherOccu">Occupation</label>
                                        </div>
                                    </div>
                                    <!-- Guardian Information -->
                                    <div class="col-md-4">
                                        <div class="form-floating form-floating-outline">
                                            <input type="text" id="scholarGuardianName" name="scholarGuardianName" class="form-control" placeholder="Height in centimeter" />
                                            <label for="scholarGuardianName">Guardian Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text">PH (+63)</span>
                                            <div class="form-floating form-floating-outline">
                                                <input type="text" id="scholarFatherCont" name="scholarGuardianCont" class="form-control multi-steps-mobile" placeholder="09121314151" />
                                                <label for="scholarGuardianCont">Contact No.</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating form-floating-outline">
                                            <select id="scholarGuardianOccu" name="scholarGuardianOccu" class="form-control">
                                                <option>Select Occupation</option>
                                                <option value="Driver">Driver</option>
                                            </select>
                                            <label for="scholarGuardianOccu">Occupation</label>
                                        </div>
                                    </div>
                                </div>

                                <hr class="my-4 mx-n4" />
                                <h6>Enrollment Information</h6>
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
                                                <option value="UM Digos College">UM Digos College</option>
                                                <option value="Cor Jesu College">Cor Jesu College</option>
                                            </select>
                                            <label for="enrollemntschooName">School Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating form-floating-outline">
                                            <select id="enrollmentCourse" name="enrollmentCourse" class="form-control">
                                                <option value="BSIT">BSIT (Bachelor of Science in Information Technology)</option>
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
                                <h6>Upload Requirements</h6>
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <label for="formFile" class="form-label">Enrollement Form</label>
                                        <input class="form-control" type="file" id="formFile" />
                                    </div>
                                    <div class="col-md-4">
                                        <label for="formFile" class="form-label">Birth Certificate</label>
                                        <input class="form-control" type="file" id="formFile" />
                                    </div>
                                    <div class="col-md-4">
                                        <label for="formFile" class="form-label">Certificate of Low Income</label>
                                        <input class="form-control" type="file" id="formFile" />
                                    </div>
                                    <div class="col-md-4">
                                        <label for="formFile" class="form-label">Report Card</label>
                                        <input class="form-control" type="file" id="formFile" />
                                    </div>
                                </div>

                                <div class="pt-4">
                                    <button type="reset" class="btn btn-label-secondary">Cancel</button>
                                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
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
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <?php
    include "_scripts.php";

    ?>
</body>

</html>