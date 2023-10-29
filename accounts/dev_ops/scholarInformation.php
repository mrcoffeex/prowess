<?php
    require '../../config/includes.php';
    require '_session.php';
    include 'scholarInformation.paginate.php';
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
                                    <h5 class="mb-0">8,458</h5>
                                    <div class="mdi mdi-chevron-down text-danger mdi-24px"></div>
                                    <small class="text-danger">8.1%</small>
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
                                    <div class="mdi mdi-poll mdi-24px"></div>
                                </div>
                                </div>
                                <div class="ms-3">
                                <div class="d-flex align-items-center">
                                    <h5 class="mb-0">$28.5K</h5>
                                    <div class="mdi mdi-chevron-up text-success mdi-24px"></div>
                                    <small class="text-success">18.2%</small>
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
                                    <div class="mdi mdi-trending-up mdi-24px"></div>
                                </div>
                                </div>
                                <div class="ms-3">
                                <div class="d-flex align-items-center">
                                    <h5 class="mb-0">2,450K</h5>
                                    <div class="mdi mdi-chevron-down text-danger mdi-24px"></div>
                                    <small class="text-danger">24.6%</small>
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
                                    <div class="mdi mdi-currency-usd mdi-24px"></div>
                                </div>
                                </div>
                                <div class="ms-3">
                                <div class="d-flex align-items-center">
                                    <h5 class="mb-0">$48.2K</h5>
                                    <div class="mdi mdi-chevron-down text-success mdi-24px"></div>
                                    <small class="text-success">22.5%</small>
                                </div>
                                <small class="text-muted">Graduated</small>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="card">
                        <h5 class="card-header">Advanced Search</h5>
                        <!--Search Form -->
                        <div class="card-body">
                            <form class="dt_adv_search" method="POST" action="scholarInformation.paginate">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row g-3">
                                            <div class="col-12 col-sm-6 col-lg-4">
                                                <div class="form-floating form-floating-outline">
                                                    <input type="text" name = "scholar_code" class="form-control dt-input" data-column="3" placeholder="2023AbCd123" data-column-index="2" />
                                                    <label>Scholar Code</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-lg-4">
                                                <div class="form-floating form-floating-outline">
                                                    <input type="text" name = "schoolID" class="form-control dt-input" data-column="3" placeholder="042001" data-column-index="2" />
                                                    <label>School ID</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-lg-4">
                                                <div class="form-floating form-floating-outline">
                                                    <input type="text" name = "scholar_name" class="form-control dt-input" data-column="3" placeholder="Juan Dela Cruz" data-column-index="2" />
                                                    <label>Name</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-lg-4">
                                                <div class="form-floating form-floating-outline">
                                                    <select name="multiStepsSchool" id="multiStepsSchool" class="form-control ">
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
                                                    <select name="multiStepStatus" id="multiStepStatus" class="form-control ">
                                                        <option value=""></option>
                                                        <option value="Male">Active</option>
                                                        <option value="Female">Inactive</option>
                                                        <option value="Female">Alumni</option>
                                                    </select>
                                                    <label for="multiStepStatus">Status</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-lg-4">
                                            <div class="form-floating form-floating-outline">
                                                    <select name="multiMunicipalites" id="multiStepsGender" class="form-control ">
                                                        <option value=""></option>
                                                               <?php  
                                                                    //get municipalites
                                                                    $getMunicipalities=selectMunicipalities();
                                                                    while ($municipalities=$getMunicipalities->fetch(PDO::FETCH_ASSOC)) {
                                                                    ?>
                                                                    <option value="<?= $municipalities['prow_mun_id'] ?>"><?= $municipalities['prow_mun_name'] ?></option>
                                                                <?php } ?>
                                                    </select>
                                                    <label for="multiMunicipalites">Municipality</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-lg-4">
                                                <div class="form-floating form-floating-outline">
                                                    <input type="date" name = "scholar_date" class="form-control dt-date flatpickr-range dt-input" data-column="5" placeholder="StartDate to EndDate" data-column-index="4" id="dt_date" name="dt_date" />
                                                    <label for="dt_date">Date</label>
                                                </div>
                                                <input type="hidden" class="form-control dt-date start_date dt-input" data-column="5" data-column-index="4" name="value_from_start_date" />
                                                <input type="hidden" class="form-control dt-date end_date dt-input" name="value_from_end_date" data-column="5" data-column-index="4" />
                                            </div>
                                            <div class="col-12 col-sm-6 col-lg-4">
                                                <a href="javascript:void(0)" class="btn btn-primary">
                                                    <i class="mdi mdi-printer-outline me-1"></i>Print List
                                                </a>

                                                 <a href="javascript:void(0)" class="btn btn-primary">
                                                    <i class="mdi mdi mdi-magnify me-1"></i>Search
                                                </a>
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
                                        <th>Scholar Code</th>
                                        <th>Fullname</th>
                                        <th>Status</th>
                                        <th>School</th>
                                        <th>Municipality</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        while ($scholar=$paginate->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                    <tr>
                                        <td class="text-center p-2">
                                            <a href="scholar_profile?rand=<?= my_rand_str(100) ?>&scholarCode=<?= $scholar['prow_scholar_code'] ?>" target="_NEW">
                                                <button 
                                                type="button" 
                                                class="btn btn-primary btn-sm">
                                                <i class="ti-user mdi mdi-account-eye"></i>
                                                </button>
                                            </a>
                                        </td>
                                        <td class="p-2 text-bold"><?= $scholar['prow_scholar_code'] ?></td>
                                        <td class="p-2 text-bold"><?= getFullname($scholar['prow_scholar_code'])  ?></td>
                                        <td class="p-2 text-bold"><?= getScholarStatus($scholar['prow_scholar_acct_status'])?></td>
                                        <td class="p-2 text-bold"><?= getScholarSchool($scholar['prow_scholar_code'])  ?></td>
                                        <td class="p-2 text-bold"><?= getScholarMuni($scholar['prow_scholar_code'])  ?></td>
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

    <?php
        include "_scripts.php";
    ?>
    <script src="../../assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
    <script src="../../assets/js/tables-datatables-advanced.js"></script>

</body>

</html>