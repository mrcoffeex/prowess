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
                        <h5 class="card-header">HEI Information</h5>
                        <!--Search Form -->
                        <div class="card-body">
                            <div class="d-flex justify-content-end">
                                <div class="mt-3">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                                        Add HEI
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">

                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="exampleModalLabel1">Add HEI</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>

                                                <div class="modal-body">
                                                    <form action="submitHEI.php" method="POST">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="form-floating form-floating-outline">
                                                                    <input type="text" name="heiname" id="heiname" class="form-control" placeholder="Enter Name" />
                                                                    <label for="heiname">HEI Name</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 mt-3 mb-4">
                                                                <div class="form-floating form-floating-outline">
                                                                    <input type="text" name="heicontactperson" id="heicontactperson" class="form-control" placeholder="Enter Name" />
                                                                    <label for="heicontactperson">HEI Contact Person</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="" id="exampleModalLabel1">Address</p>
                                                        <div class="row g-2">
                                                            <div class="col-sm-6">
                                                                <div class="form-floating form-floating-outline">
                                                                    <select id="heimunicipality" name="heimunicipality" class="form-control">
                                                                        <option></option>
                                                                        <?php
                                                                        //get barangays
                                                                        $getMunicipalities = selectMunicipalities();
                                                                        while ($municipalities = $getMunicipalities->fetch(PDO::FETCH_ASSOC)) {
                                                                        ?>
                                                                            <option value="<?= $municipalities['prow_mun_id'] ?>"><?= $municipalities['prow_mun_name'] ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                    <label for="heimunicipality">City/Municipality</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-floating form-floating-outline">
                                                                    <select id="heibarangay" name="heibarangay" class="form-control">
                                                                        <option></option>
                                                                    </select>
                                                                    <label for="heibarangay">Barangay</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-floating form-floating-outline">
                                                                    <select id="heiprovince" name="heiprovince" class="form-control">
                                                                        <option value="Davao del Sur">Davao del Sur</option>
                                                                    </select>
                                                                    <label for="heiprovince">Province</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-floating form-floating-outline">
                                                                    <input type="text" id="heizip" name="heizip" class="form-control multi-steps-pincode" placeholder="Postal Code" maxlength="4" />
                                                                    <label for="heizip">Zip Code</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-floating form-floating-outline">
                                                                    <input type="text" id="heiaddress" name="heiaddress" class="form-control" placeholder="Address" />
                                                                    <label for="heiaddress">Building #, Street Name, Purok</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-4 mt-2">
                                                                <div class="input-group input-group-merge">
                                                                    <span class="input-group-text">PH (+63)</span>
                                                                    <div class="form-floating form-floating-outline">
                                                                        <input type="text" id="heicontact" name="heicontact" class="form-control multi-steps-mobile" placeholder="09121314151" />
                                                                        <label for="heicontact">Mobile</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mb-4 mt-2">
                                                                <div class="form-floating form-floating-outline">
                                                                    <input type="text" name="heiemail" id="heiemail" class="form-control" placeholder="Enter Name" />
                                                                    <label for="heiemail">Email</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">
                                                                Close
                                                            </button>
                                                            <button type="submit" id="heiSaveBtn" name="heiSaveBtn" class="btn btn-primary">Save HEI</button>
                                                        </div>
                                                    </form>
                                                </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <br>
                            <form class="dt_adv_search" method="POST">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row g-3">
                                            <div class="col-12 col-sm-6 col-lg-4">
                                                <div class="form-floating form-floating-outline">
                                                    <input type="text" class="form-control dt-input" data-column="3" placeholder="1234ABCD-202310111" data-column-index="2" />
                                                    <label>HEI Name</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-lg-4">
                                                <div class="form-floating form-floating-outline">
                                                    <input type="text" class="form-control dt-input" data-column="3" placeholder="Jhon Doe" data-column-index="2" />
                                                    <label>Address</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-lg-4">
                                                <div class="form-floating form-floating-outline">
                                                    <input type="text" class="form-control dt-input" data-column="3" placeholder="Jhon Doe" data-column-index="2" />
                                                    <label>Contact Person</label>
                                                </div>
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
                                        <th>HEI Name</th>
                                        <th>Address</th>
                                        <th>Contact</th>
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

    <script>
        // Check selected custom option
        window.Helpers.initCustomOptionCheck();
    </script>
    <!-- Core JS -->
    <?php
    include "_scripts.php";
    ?>
  
    <script src="../../assets/js/ui-modals.js"></script>
    <script src="../../js/signUp.js"></script>
    <script src="../../js/hei.js"></script>
    <!-- Page JS -->
</body>

</html>