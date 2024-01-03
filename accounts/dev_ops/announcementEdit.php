<?php
    require '../../config/includes.php';
    require '_session.php';

    $annId = clean_int($_GET['annId']);

    $getAnn=selectAnnById($annId);
    $ann=$getAnn->fetch(PDO::FETCH_ASSOC);
    
    $title = $ann['prow_ann_title'];
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
                                        <h5 class="mb-0"><?= $ann['prow_ann_views'] ?></h5>
                                    </div>
                                    <small class="text-muted">Views</small>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card mb-4">
                                <h5 class="card-header">
                                    Edit Announcement: <span class="text-primary"><?= $ann['prow_ann_title'] ?></span>
                                    <span class="float-end">
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#removeAnn">Remove</button>
                                    </span>
                                </h5>
                                <div class="card-body">
                                    <form action="announcementUpdate?rand=<?= randStrInt(100) ?>&annId=<?= $annId ?>" enctype="multipart/form-data" method="POST" onsubmit="btnLoader(this.updateAnnBtn)">
                                        <div class="row">
                                            <div class="col-12 col-sm-6 col-lg-4 mb-3">
                                                <div class="form-group">
                                                    <label for="status" class="form-label">Announcement Type</label>
                                                    <select name="annType" id="annType" class="form-control" required>
                                                        <option><?= $ann['prow_ann_type'] ?></option>
                                                        <option>news</option>
                                                        <option>activity</option>
                                                        <option>meeting</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                <div class="form-group">
                                                    <label for="snowEditorContent" class="form-label">Post until</label>
                                                    <input type="date" class="form-control" name="annExpire" id="annExpire" min="<?= date("Y-m-d", strtotime("+3 days")) ?>" value="<?= $ann['prow_ann_expire'] ?>" required>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 mb-3">
                                                <div class="form-group">
                                                    <label for="annImage" class="form-label">Announcement Image <small>(*keep empty if no changes)</small></label>
                                                    <div id="annImagePreview" class="image-preview-div mb-2"></div>
                                                    <input type="file" class="form-control" name="annImage" id="annImage" accept="image/jpg, image/png">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-3">
                                                <div class="form-group">
                                                    <label for="snowEditorContent" class="form-label">Title</label>
                                                    <input type="text" class="form-control" name="annTitle" id="annTitle" placeholder="title here ..." value="<?= $ann['prow_ann_title'] ?>" required>
                                                </div>
                                            </div> 
                                            <div class="col-lg-12 mb-3">
                                                <div class="form-group">
                                                    <label for="snowEditorContent" class="form-label">Caption</label>
                                                    <textarea class="form-control" name="annContent" id="annContent" rows="7" placeholder="type here ..." required><?= $ann['prow_ann_content'] ?></textarea>
                                                </div>
                                            </div> 
                                            <div class="col-lg-12">
                                                <button type="submit" id="updateAnnBtn" class="btn btn-primary">Update</button>
                                            </div> 
                                        </div>
                                    </form>
                                </div>
                            </div>
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

    <div class="modal fade" id="removeAnn" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel2">Remove</h4>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 mb-4 mt-2">
                            <p class="text-center">
                                Are you sure you want to remove this announcement?
                                <br>
                                <span class="text-danger"><?= $ann['prow_ann_title'] ?></span>
                            </p>
                        </div>
                        <div class="col-md-12 mb-4 mt-2">
                            <a href="announcementRemove?rand=<?= randStrInt(100) ?>&annId=<?= $ann['prow_ann_id'] ?>">
                                <button type="button" class="btn btn-danger btn-block">Remove</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "_scripts.php"; ?>
    <?php include "_alerts.php"; ?>
    
    <script src="../../js/editors.js"></script>

</body>

</html>