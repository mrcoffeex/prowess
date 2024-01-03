<?php
    require '../../config/includes.php';
    require '_session.php';

    $searchAnn = clean_string($_GET['searchAnn']);
    include 'announcementSearch.paginate.php';
    
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
                            Announcements Search: <?= $searchAnn ?>
                            <span class="float-end">
                                <a href="announcementCreate" target="_blank" rel="noopener noreferrer">
                                    <button type="button" class="btn btn-primary">Create</button>
                                </a>
                            </span>
                        </h5>
                        <!--Search Form -->
                        <div class="card-body">
                            <form class="dt_adv_search" enctype="multipart/form-data" method="POST" action="_redirect">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row g-3">
                                            <div class="col-12 col-sm-12 col-lg-12">
                                                <div class="form-floating form-floating-outline">
                                                    <input type="text" name="searchAnn" class="form-control dt-input" data-column="3" placeholder="title / description / etc" data-column-index="2" value="<?= $searchAnn ?>" autofocus />
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
                                        <th>Title</th>
                                        <th>Type</th>
                                        <th class="text-center">Views</th>
                                        <th>Created</th>
                                        <th>Expires</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php  
                                        while ($ann=$paginate->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                    <tr>
                                        <td class="text-center">
                                            <button 
                                            type="button" 
                                            class="btn btn-primary" 
                                            title="click to see image" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#img_<?= $ann['prow_ann_id'] ?>">
                                                <i class="mdi mdi-image"></i>
                                            </button>
                                            <a href="announcementEdit?rand=<?= randStrInt(100) ?>&annId=<?= $ann['prow_ann_id'] ?>" target="_blank" rel="noopener noreferrer">
                                                <button type="button" class="btn btn-info" title="click to edit">
                                                    <i class="mdi mdi-pen"></i>
                                                </button>
                                            </a>
                                        </td>
                                        <td><?= $ann['prow_ann_title'] ?></td>
                                        <td><?= $ann['prow_ann_type'] ?></td>
                                        <td class="text-center"><?= $ann['prow_ann_views'] ?> <i class="mdi mdi-eye"></i></td>
                                        <td><?= properDate($ann['prow_ann_created']) ?></td>
                                        <td>expires at <?= properDate($ann['prow_ann_expire']) ?></td>
                                    </tr>

                                    <div class="modal fade" id="img_<?= $ann['prow_ann_id'] ?>" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="exampleModalLabel2">Image</h4>
                                                    <button
                                                        type="button"
                                                        class="btn-close"
                                                        data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col mb-4 mt-2">
                                                            <img src="<?= previewImage($ann['prow_ann_image'], '../../assets/img/no-image-found.png', '../../imagebank/') ?>" class="img-fluid" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center mt-3">
                            <ul class="pagination flex-wrap pagination-rounded">
                                <?= $paginationCtrls; ?>
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