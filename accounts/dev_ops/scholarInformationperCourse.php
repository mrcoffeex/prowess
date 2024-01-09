<?php
    require '../../config/includes.php';
    require '_session.php';
    include "_head.php";
    $hei_id = $_GET['hei_id'];
    $hei_course = $_GET['course_id'];
    $count = countAllScholarbyCourse($hei_id,$hei_course);
    include 'scholarInformationperCourse.paginate.php';
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
                    <div class="card">
                        <h4 class="card-header">Student List</h4>
                        <h5 class="card-header">Course</h>
                        <!--Search Form -->
                        <div class="card-body">
                            <form class="dt_adv_search" method="POST" action="_redirect" onsubmit="btnLoader(this.searchStudent)">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row g-3">
                                            
                                            <div class="col-12 col-sm-6 col-lg-4">
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
                                        <th>Status</th>
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

</body>

</html>