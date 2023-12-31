<?php
require '../../config/includes.php';
require '_session.php';
include "_head.php";
?>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <?php include "_sidemenu.php"; ?>
            <div class="layout-page">
                <?php include "_topnavigation.php"; ?>

                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h1>About Us</h1>
                        <div class="col-md-12 col-lg-13">

                            <div class="card mb-4 py-3">
                                <div class="row g-0">
                                    <div class="col-md-3">
                                        <img class="img-fluid rounded-start px-5" src="../../assets/img/prowess_logov2.png" alt="alternative">
                                    </div>
                                    <div class="col-md-8 ms-1">
                                        <h3 class="card-title mt-5 ">
                                            What is PROWESS
                                        </h3>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus odio quasi quo ipsam similique repellat dignissimos neque delectus molestias doloremque. Quae quidem consequuntur et odio aperiam possimus deleniti, temporibus at.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-4 py-3">
                                <div class="row g-0">
                                    <div class="col-md-8 ms-5">
                                        <h3 class="card-title mt-5 ">
                                            The GODDESS Project Team
                                        </h3>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus odio quasi quo ipsam similique repellat dignissimos neque delectus molestias doloremque. Quae quidem consequuntur et odio aperiam possimus deleniti, temporibus at.
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <img class="img-fluid rounded-start px-5" src="../../assets/img/prowess_logov2.png" alt="alternative">
                                    </div>
                                </div>
                            </div>

                            <h3 class="card-title mb-2">
                                Contact Us
                            </h3>

                            <div class="row">
                                <div class="col-12 col-sm-3 mb-2">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center flex-wrap gap-2">
                                                <div class="avatar me-3">
                                                    <div class="avatar-initial bg-label-success rounded">
                                                        <i class="mdi mdi-24px mdi-phone-dial-outline text-success"> </i>
                                                    </div>
                                                </div>
                                                <div class="card-info">
                                                    <div class="d-flex align-items-center">
                                                        <h5 class="mb-0">+639820173819</h5>
                                                        <!-- {{-- <i class="mdi mdi-chevron-down text-danger mdi-24px"></i> --}} -->
                                                    </div>
                                                    <small class="text-muted">Mobile Number</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3 mb-2">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center flex-wrap gap-2">
                                                <div class="avatar me-3">
                                                    <div class="avatar-initial bg-label-success rounded">
                                                        <i class="mdi mdi-24px mdi-email-fast-outline text-success"> </i>
                                                    </div>
                                                </div>
                                                <div class="card-info">
                                                    <div class="d-flex align-items-center">
                                                        <h5 class="mb-0">prowess@gmail.com</h5>
                                                        <!-- {{-- <i class="mdi mdi-chevron-down text-danger mdi-24px"></i> --}} -->
                                                    </div>
                                                    <small class="text-muted">Email</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-5 mb-2">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center flex-wrap gap-2">
                                                <div class="avatar me-3">
                                                    <div class="avatar-initial bg-label-success rounded">
                                                        <i class="mdi mdi-24px mdi-map-marker-outline text-success"> </i>
                                                    </div>
                                                </div>
                                                <div class="card-info">
                                                    <div class="d-flex align-items-center">
                                                        <h5 class="mb-0">Roxas Extentsion, Digos City, Davao del Sur</h5>
                                                        <!-- {{-- <i class="mdi mdi-chevron-down text-danger mdi-24px"></i> --}} -->
                                                    </div>
                                                    <small class="text-muted">Address</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>



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
</body>

</html>