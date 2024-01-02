<?php
    require '../../config/includes.php';
    require '_session.php';
    // include 'announcements.paginate.php';
    
    $title = "Announcements";
    include "_head.php";
?>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <?php
                include "_sidemenu.php";
            ?>
            
            <div class="layout-page">
                <?php
                    include "_topnavigation.php";
                ?>
                <div class="container-xxl flex-grow-1 container-p-y">
                <div class="row g-4 mb-4">
                        <div class="col-sm-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar">
                                    <div class="avatar-initial bg-label-primary rounded">
                                        <span class="mdi mdi-bullhorn-outline"></span>
                                    </div>
                                    </div>
                                    <div class="ms-3">
                                    <div class="d-flex align-items-center">
                                        <h5 class="mb-0">0</h5>
                                    </div>
                                    <small class="text-muted">News</small>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar">
                                    <div class="avatar-initial bg-label-warning rounded">
                                        <span class="mdi mdi-bullhorn-outline"></span>
                                    </div>
                                    </div>
                                    <div class="ms-3">
                                    <div class="d-flex align-items-center">
                                        <h5 class="mb-0">0</h5>
                                    </div>
                                    <small class="text-muted">Activity</small>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar">
                                    <div class="avatar-initial bg-label-info rounded">
                                        <span class="mdi mdi-bullhorn-outline"></span>
                                    </div>
                                    </div>
                                    <div class="ms-3">
                                    <div class="d-flex align-items-center">
                                        <h5 class="mb-0">0</h5>
                                    </div>
                                    <small class="text-muted">Meeting</small>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <h5 class="card-header">
                            Announcements
                            <span class="float-end">
                                <a href="announcementCreate" target="_blank" rel="noopener noreferrer">
                                    <button type="button" class="btn btn-primary">Create</button>
                                </a>
                            </span>
                        </h5>
                        <!--Search Form -->
                        <div class="card-body">
                            <form class="dt_adv_search" method="POST" action="_redirect" onsubmit="btnLoader(this.searchStudent)">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row g-3">
                                            <div class="col-12 col-sm-12 col-lg-12">
                                                <div class="form-floating form-floating-outline">
                                                    <input type="text" name="searchAnn" class="form-control dt-input" data-column="3" placeholder="title / description / etc" data-column-index="2" />
                                                    <label>Search</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <hr class="mt-0" />
                        <div class="card-datatable table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">Actions</th>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Type</th>
                                        <th class="text-center">Views</th>
                                        <th class="text-center">Ups</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center mt-3">
                            <ul class="pagination flex-wrap pagination-rounded">
                                <!-- <?= $paginationCtrls; ?> -->
                            </ul>
                        </div>
                    </div>

                    <?php
                        include "_footer.php";
                    ?>

                    <div class="content-backdrop fade"></div>
                </div>
            </div>
        </div>


        <div class="layout-overlay layout-menu-toggle"></div>
        <div class="drag-target"></div>
    </div>

    <?php include "_scripts.php"; ?>
    <?php include "_alerts.php"; ?>

</body>

</html>