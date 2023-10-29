<?php
include '../../config/includes.php';
include "_head.php";

?>

<body>
    <!-- Content -->

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

                    <!-- Advanced Search -->
                    <div class="card">
                        <h5 class="card-header">List of Scholars</h5>
                        <!--Search Form -->
                        <div class="card-body">
                            <form class="dt_adv_search" method="POST">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row g-3">
                                            <div class="col-12 col-sm-6 col-lg-4">
                                                <div class="form-floating form-floating-outline">
                                                    <input type="text" id="scholarListCode" name="scholarListCode" class="form-control dt-input" data-column="3" placeholder="1234ABCD-202310111" data-column-index="2" />
                                                    <label>Scholar Code</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-lg-4">
                                                <div class="form-floating form-floating-outline">
                                                    <input type="text" id="scholarListName" name="scholarListName" class="form-control dt-input" data-column="3" placeholder="Jhon Doe" data-column-index="2" />
                                                    <label>Name</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-lg-4">
                                                <div class="form-floating form-floating-outline">
                                                    <select name="scholarListID" id="scholarListID" class="form-control ">
                                                        <option value=""></option>
                                                        <option value="1st">1st</option>
                                                        <option value="2nd">2nd</option>
                                                        <option value="3rd">3rd</option>
                                                        <option value="4th">4th</option>
                                                        <option value="5th">5th</option>
                                                    </select>
                                                    <label for="scholarListID">Year Level</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-lg-4">
                                                <div class="form-floating form-floating-outline">
                                                    <select name="scholarListStatus" id="scholarListStatus" class="form-control ">
                                                        <option value=""></option>
                                                        <option value="Male">Active</option>
                                                        <option value="Female">Inactive</option>
                                                        <option value="Female">Alumni</option>
                                                    </select>
                                                    <label for="scholarListStatus">Status</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-lg-4">
                                                <div class="form-floating form-floating-outline">
                                                    <select name="scholarListMuni" id="scholarListMuni" class="form-control ">
                                                        <option value="">Select Municipality</option>
                                                        <?php
                                                        //get barangays
                                                        $getMunicipalities = selectMunicipalities();
                                                        while ($municipalities = $getMunicipalities->fetch(PDO::FETCH_ASSOC)) {
                                                        ?>
                                                            <option value="<?= $municipalities['prow_mun_id'] ?>"><?= $municipalities['prow_mun_name'] ?></option>
                                                        <?php } ?>
                                                    </select>
                                                    <label for="scholarListMuni">Municipality</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-lg-4">
                                                <div class="form-floating form-floating-outline">
                                                    <input type="date" class="form-control dt-date flatpickr-range dt-input" data-column="5" placeholder="StartDate to EndDate" data-column-index="4" id="scholarListDate" name="scholarListDate" />
                                                    <label for="scholarListDate">Date</label>
                                                </div>
                                                <input type="hidden" class="form-control dt-date start_date dt-input" data-column="5" data-column-index="4" name="value_from_start_date" />
                                                <input type="hidden" class="form-control dt-date end_date dt-input" name="value_from_end_date" data-column="5" data-column-index="4" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <hr class="mt-0" />
                        <div class="card-datatable table-responsive">
                            <table class=" datatables-ajax dt-advanced-search table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Action</th>
                                        <th>Fullname</th>
                                        <th>Status</th>
                                        <th>Municipality</th>
                                        <th>Year Level</th>
                                        <th>Course</th>
                                    </tr>
                                </thead>
                                <!-- <tfoot>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Post</th>
                                        <th>City</th>
                                        <th>Date</th>
                                        <th>Salary</th>
                                    </tr>
                                </tfoot> -->
                            </table>
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

    <!-- / Content -->

    <!-- Core JS -->
    <?php
    include "_scripts.php";

    ?>
    <!-- temporary data -->
    <script src="../../assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
    <script src="../../assets/js/tables-datatables-advanced.js"></script>

    <!-- Page JS -->
</body>

</html>