<?php
    require '../../config/includes.php';
    require '_session.php';

    $title = "Settings";

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
                        <h1>Settings</h1>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <h5 class="card-header">School Year and Semester Settings <span class="badge bg-primary rounded-pill ms-auto">Current: <?= getHeiSySem($heiId) ?></span></h5>
                                    <div class="card-body demo-vertical-spacing demo-only-element">
                                        <form action="updateSySem" method="POST" enctype="multipart/form-data" onsubmit="btnLoader(this.createSySemBtn)">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-floating form-floating-outline mb-4">
                                                        <input type="number" class="form-control" id="syFrom" name="syFrom" placeholder="xxxx" min="2020" max="3000" value="<?= sysem(getHeiSySem($heiId), "from") ?>" autofocus required>
                                                        <label for="syFrom">From</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating form-floating-outline mb-4">
                                                        <input type="number" class="form-control" id="syTo" name="syTo" placeholder="xxxx" min="2020" max="3000" value="<?= sysem(getHeiSySem($heiId), "to") ?>" required>
                                                        <label for="syTo">To</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating form-floating-outline mb-4">
                                                <select class="form-control text-center" id="semester" name="semester" required>
                                                    <option value="<?= sysem(getHeiSySem($heiId), "sem") ?>"><?= semester(sysem(getHeiSySem($heiId), "sem")) ?></option>
                                                    <option value="1">1st Semester</option>
                                                    <option value="2">2nd Semester</option>
                                                    <option value="3">3rd Semester</option>
                                                </select>
                                                <label for="semester">Select Semester</label>
                                            </div>
                                            <button id="createSySemBtn" name="createSySemBtn" type="submit" class="btn btn-primary me-sm-3 me-1">Update School Year</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <h5 class="card-header">School Year Records</h5>
                                    <div class="card-body demo-vertical-spacing demo-only-element">
                                        <div class="card-datatable table-responsive">
                                            <table class=" datatables-ajax dt-advanced-search table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">School Year</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php  
                                                        $getSY=selectHeiSchoolYears($heiId);
                                                        while ($sy=$getSY->fetch(PDO::FETCH_ASSOC)) {
                                                    ?>
                                                    <tr>
                                                        <td class="text-center"><?= $sy['school_year'] ?></td>
                                                    </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
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
    <?php include "_alerts.php"; ?>
</body>

</html>