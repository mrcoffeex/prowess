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
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="">
                            <h5>Posted Jobs</h5>
                            <!--Search Form -->
                            <div class="row mb-5 px-2">
                                <div class="col-md-6 col-lg-4 mb-3">
                                    <div class="card h-100">
                                        <!-- //<img class="card-img-top image-thumbnail" src="../../assets/img/elements/2.jpg" alt="Card image cap" /> -->
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">
                                                Some quick example text to build on the card title and make up the bulk of the card's content.
                                            </p>
                                            <a href="javascript:void(0)" class="btn btn-outline-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>
                            <div class="card-body">

                            </div>

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