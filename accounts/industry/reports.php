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