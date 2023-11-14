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

                    <div class="row">
                        <div class="col-12">
                            <div class="card mb-4">
                                <h5 class="card-header">Create Announcement</h5>
                                <div class="card-body">
                                    <form action="" method="post">
                                        <div class="row">
                                            <div class="col-12 col-sm-6 col-lg-3 mb-3">
                                                <div class="form-floating form-floating-outline">
                                                    <select name="status" id="status" class="form-control">
                                                        <option></option>
                                                        <option>news</option>
                                                        <option>activity</option>
                                                        <option>meeting</option>
                                                    </select>
                                                    <label for="status">Announcement Type</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-3">
                                                <label for="formFile" class="form-label">Announcement Image</label>
                                                <div id="annImagePreview" class="image-preview-div"></div>
                                                <input class="form-control" type="file" id="annImage" name="annImage" accept="image/jpeg, image/png, image/gif"/>
                                            </div>
                                            <div class="col-lg-12 mb-3">
                                                <div class="form-group">
                                                    <label for="" class="form-label">Caption</label>
                                                    <div id="snow-toolbar">
                                                        <span class="ql-formats">
                                                            <select class="ql-font"></select>
                                                            <select class="ql-size"></select>
                                                        </span>
                                                        <span class="ql-formats">
                                                            <button class="ql-bold"></button>
                                                            <button class="ql-italic"></button>
                                                            <button class="ql-underline"></button>
                                                            <button class="ql-strike"></button>
                                                        </span>
                                                        <span class="ql-formats">
                                                            <select class="ql-color"></select>
                                                            <select class="ql-background"></select>
                                                        </span>
                                                        <span class="ql-formats">
                                                            <button class="ql-script" value="sub"></button>
                                                            <button class="ql-script" value="super"></button>
                                                        </span>
                                                        <span class="ql-formats">
                                                            <button class="ql-header" value="1"></button>
                                                            <button class="ql-header" value="2"></button>
                                                            <button class="ql-blockquote"></button>
                                                            <button class="ql-code-block"></button>
                                                        </span>
                                                    </div>
                                                    <div id="snow-editor">
                                                        
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="col-lg-12">
                                                <button type="submit" id="createAnnBtn" class="btn btn-primary">Submit</button>
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

    <?php include "_scripts.php"; ?>
    <script src="../../js/editors.js"></script>

</body>

</html>