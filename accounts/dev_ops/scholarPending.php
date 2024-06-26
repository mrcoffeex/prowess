<?php
    require '../../config/includes.php';
    require '_session.php';
    include 'scholarPending.paginate.php';
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
                                    <div class="mdi mdi-account-outline mdi-24px"></div>
                                </div>
                                </div>
                                <div class="ms-3">
                                <div class="d-flex align-items-center">
                                    <h5 class="mb-0"><?= countScholarActive("") ?></h5>
                                </div>
                                <small class="text-muted">Active Scholars</small>
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
                                    <div class="mdi mdi-account-outline mdi-24px"></div>
                                </div>
                                </div>
                                <div class="ms-3">
                                <div class="d-flex align-items-center">
                                    <h5 class="mb-0">0</h5>
                                </div>
                                <small class="text-muted">Total Scholars</small>
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
                                    <div class="mdi mdi-account-outline mdi-24px"></div>
                                </div>
                                </div>
                                <div class="ms-3">
                                <div class="d-flex align-items-center">
                                    <h5 class="mb-0"><?= countScholarAppLogPending2() ?></h5>
                                </div>
                                <small class="text-muted">Pending Scholars</small>
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
                                <div class="avatar-initial bg-label-success rounded">
                                    <div class="mdi mdi-account-outline mdi-24px"></div>
                                </div>
                                </div>
                                <div class="ms-3">
                                <div class="d-flex align-items-center">
                                    <h5 class="mb-0">0</h5>
                                </div>
                                <small class="text-muted">Graduated</small>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="card">
                        <h5 class="card-header">Pending Student List</h5>
                        <!--Search Form -->
                        <div class="card-body">
                            <form class="dt_adv_search" method="POST" action="_redirect">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row g-3">
                                            <div class="col-12 col-sm-6 col-lg-4">
                                                <div class="form-floating form-floating-outline">
                                                    <input type="text" name="scholarCode" class="form-control dt-input" data-column="3" placeholder="2023AbCd123" data-column-index="2" />
                                                    <label>Scholar Code</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-lg-4">
                                                <div class="form-floating form-floating-outline">
                                                    <input type="text" name="schoolId" class="form-control dt-input" data-column="3" placeholder="042001" data-column-index="2" />
                                                    <label>School ID</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-lg-4">
                                                <div class="form-floating form-floating-outline">
                                                    <input type="text" name="scholarName" class="form-control dt-input" data-column="3" placeholder="Juan Dela Cruz" data-column-index="2" />
                                                    <label>Name</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-lg-4">
                                                <div class="form-floating form-floating-outline">
                                                    <select name="school" id="school" class="form-control">
                                                        <option></option>
                                                         <?php
                                                            //get HEI
                                                            $getHei=selectHei();
                                                            while ($hei=$getHei->fetch(PDO::FETCH_ASSOC)) {
                                                        ?>
                                                        <option value="<?= $hei['prow_hei_id'] ?>"><?= $hei['prow_hei_name'] ?></option>
                                                        <?php } ?>
                                                    </select>
                                                    <label for="multiStepsSchool">School</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-lg-4">
                                                <div class="form-floating form-floating-outline">
                                                    <select name="municipality" id="municipality" class="form-control">
                                                        <option value=""></option>
                                                        <?php  
                                                            //get municipalites
                                                            $getMunicipalities=selectMunicipalities();
                                                            while ($municipalities=$getMunicipalities->fetch(PDO::FETCH_ASSOC)) {
                                                            ?>
                                                            <option value="<?= $municipalities['prow_mun_id'] ?>"><?= $municipalities['prow_mun_name'] ?></option>
                                                        <?php } ?>
                                                    </select>
                                                    <label for="municipality">Municipality</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-lg-4">
                                                <div class="form-floating form-floating-outline">
                                                    <div class="form-floating form-floating-outline">
                                                        <select name="schoolYear" id="schoolYear" class="form-control">
                                                            <option value=""></option>
                                                            <?php  
                                                                //get municipalites
                                                                $getSY=selectSchoolYears();
                                                                while ($sy=$getSY->fetch(PDO::FETCH_ASSOC)) {
                                                                ?>
                                                                <option><?= $sy['prow_sy_year'] ?></option>
                                                            <?php } ?>
                                                        </select>
                                                        <label for="schoolYear">School Year</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-lg-4">
                                                <div class="form-floating form-floating-outline">
                                                    <div class="form-floating form-floating-outline">
                                                        <select name="semester" id="semester" class="form-control">
                                                            <option value=""></option>
                                                            <option value="1">First Semester</option>
                                                            <option value="2">Second Semester</option>
                                                        </select>
                                                        <label for="schoolYear">Semester</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-lg-4">
                                                <button type="submit" name="scholarPendingBtn" id="scholarPendingBtn" class="btn btn-primary"><i class="mdi mdi mdi-magnify me-1"></i>Search</button>

                                                <a href="print_list_scholar" target="_blank" class="btn btn-success">
                                                    <i class="mdi mdi-printer-outline me-1"></i>Print List
                                                </a>
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
                                        <th>Action</th>
                                        <th>Scholar Code</th>
                                        <th>Fullname</th>
                                        <th>Scholarship</th>
                                        <th>School</th>
                                        <th>Municipality</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        while ($pending=$paginate->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                    <tr>
                                        <td class="text-center p-2">
                                            <a href="scholar_profile?rand=<?= my_rand_str(100) ?>&scholarCode=<?= $pending['prow_scholar_code'] ?>" target="_NEW">
                                                <button 
                                                type="button" 
                                                class="btn btn-primary btn-sm">
                                                <i class="ti-user mdi mdi-account-eye"></i>
                                                </button>
                                            </a>
                                        </td>
                                        <td><?= $pending['prow_scholar_code'] ?></td>
                                        <td><?= getFullname($pending['prow_scholar_code'])  ?></td>
                                        <td><?= getScholarAppLogStatus($pending['prow_app_log_status'])?></td>
                                        <td><?= getScholarSchool($pending['prow_scholar_code'])  ?></td>
                                        <td><?= getScholarMuni($pending['prow_scholar_code'])  ?></td>
                                    </tr>
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