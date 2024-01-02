<?php
    require '../../config/includes.php';
    require '_session.php';

    $title = "System Users";
    $nameSearch = clean_string($_GET['nameSearch']);
    $userType = clean_string($_GET['userType']);

    include 'systemUserSearch.paginate.php';
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
                                <small class="text-muted">Scholars</small>
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
                                <small class="text-muted">HEI</small>
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
                                    <h5 class="mb-0">0</h5>
                                </div>
                                <small class="text-muted">Industry</small>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="card">
                        <h5 class="card-header">
                            <a href="systemusers"><button type="button" class="btn btn-dark btn-sm">back to list</button></a>&nbsp;
                            System Users List
                            <span class="float-end"><?= $countRes ?> <small>result(s)</small></span>
                        </h5>
                        <!--Search Form -->
                        <div class="card-body">
                            <form class="dt_adv_search" method="POST" action="_redirect" onsubmit="btnLoader(this.searchUser)">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row g-3">
                                            <div class="col-12 col-sm-6 col-lg-4">
                                                <div class="form-floating form-floating-outline">
                                                    <input type="text" name="nameSearch" class="form-control dt-input" data-column="3" placeholder="*John Doe" data-column-index="2" value="<?= $nameSearch ?>" />
                                                    <label>Name search</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-lg-4">
                                                <div class="form-floating form-floating-outline">
                                                    <select name="userType" id="userType" class="form-control">
                                                        <option value="<?= $userType ?>"><?= getUserType($userType) ?></option>
                                                        <option value="4">Scholar</option>
                                                        <option value="3">HEI</option>
                                                        <option value="5">Industry</option>
                                                    </select>
                                                    <label for="status">Usertype</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-lg-4">
                                                <button type="submit" id="searchUser" class="btn btn-primary"><i class="mdi mdi mdi-magnify me-1"></i>Search</button>
                                                <!-- <a href="" target="_blank" class="btn btn-success">
                                                    <i class="mdi mdi-printer-outline me-1"></i>Print List
                                                </a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <hr class="mt-0" />
                        <div class="card-datatable table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>usercode</th>
                                        <th>Name</th>
                                        <th>userType</th>
                                        <th>username</th>
                                        <th>verified</th>
                                        <th>Status</th>
                                        <th>registered</th>
                                        <th class="text-center">opt</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        while ($user=$paginate->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                    <tr>
                                        <td class="text-primary"><?= $user['prow_user_code'] ?></td>
                                        <td><strong><?= $user['prow_user_fullname']  ?></strong></td>
                                        <td><?= getUserType($user['prow_user_type']) ?></td>
                                        <td><?= $user['prow_user_uname']  ?></td>
                                        <td><?= verified($user['prow_user_verify']) ?></td>
                                        <td><?= getUserStatus($user['prow_user_status']) ?></td>
                                        <td><?= properDate($user['prow_user_created']) ?></td>
                                        <td class="text-center">
                                            <button 
                                            type="button" 
                                            class="btn btn-primary btn-sm"
                                            data-bs-toggle="modal"
                                            data-bs-target="#convert_<?= $user['prow_user_id'] ?>">
                                                <i class="mdi mdi-account-convert"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="convert_<?= $user['prow_user_id'] ?>" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-sm" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="exampleModalLabel2">User Status</h4>
                                                    <button
                                                        type="button"
                                                        class="btn-close"
                                                        data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form action="userStatusUpdate?rand=<?= randStrInt(100) ?>&userId=<?= $user['prow_user_id'] ?>&pn=<?= $pagenum ?>&nameSearch=<?= $nameSearch ?>&userType=<?= $userType ?>" method="post" onsubmit="btnLoader(this.updateuserStatus)">
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col mb-4 mt-2">
                                                                <div class="form-floating form-floating-outline">
                                                                    <select name="userStatus" id="userStatus" class="form-control">
                                                                        <option value="<?= $user['prow_user_status'] ?>"><?= getUserStatus($user['prow_user_status']) ?></option>
                                                                        <option value="0">Active</option>
                                                                        <option value="1">Suspended</option>
                                                                    </select>
                                                                    <label for="nameSmall">Status</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" id="updateuserStatus" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </form>
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