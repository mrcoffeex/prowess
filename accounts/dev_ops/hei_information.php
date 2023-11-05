<?php
include '../../config/includes.php';
require '_session.php';
include 'hei_information_paginate.php';
include "_head.php";
?>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <?php include "_sidemenu.php";?>
            <div class="layout-page">
                <?php include "_topnavigation.php";?>
                <div class="content-wrapper">
                    <div class="card">
                        <h5 class="card-header">HEI Information</h5>
                        <div class="card-body">
                            <div class="d-flex justify-content-end">
                                <div class="mt-3">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                                        Add HEI
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">

                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="exampleModalLabel1">Add HEI</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>

                                                <div class="modal-body">
                                                    <form action="hei_information_create" method="POST">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="form-floating form-floating-outline">
                                                                    <input type="text" name="heiname" id="heiname" class="form-control" placeholder="Enter Name" />
                                                                    <label for="heiname">HEI Name</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 mt-3 mb-4">
                                                                <div class="form-floating form-floating-outline">
                                                                    <input type="text" name="heicontactperson" id="heicontactperson" class="form-control" placeholder="Enter Name" />
                                                                    <label for="heicontactperson">HEI Contact Person</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="" id="exampleModalLabel1">Address</p>
                                                        <div class="row g-2">
                                                            <div class="col-sm-6">
                                                                <div class="form-floating form-floating-outline">
                                                                    <select id="heimunicipality" name="heimunicipality" class="form-control">
                                                                        <option></option>
                                                                        <?php
                                                                        //get barangays
                                                                        $getMunicipalities = selectMunicipalities();
                                                                        while ($municipalities = $getMunicipalities->fetch(PDO::FETCH_ASSOC)) {
                                                                        ?>
                                                                            <option value="<?= $municipalities['prow_mun_name'] ?>"><?= $municipalities['prow_mun_name'] ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                    <label for="heimunicipality">City/Municipality</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-floating form-floating-outline">
                                                                    <select id="heibarangay" name="heibarangay" class="form-control">
                                                                        <option></option>
                                                                    </select>
                                                                    <label for="heibarangay">Barangay</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-floating form-floating-outline">
                                                                    <select id="heiprovince" name="heiprovince" class="form-control">
                                                                        <option value="Davao del Sur">Davao del Sur</option>
                                                                    </select>
                                                                    <label for="heiprovince">Province</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-floating form-floating-outline">
                                                                    <input type="text" id="heizip" name="heizip" class="form-control multi-steps-pincode" placeholder="Postal Code" maxlength="4" />
                                                                    <label for="heizip">Zip Code</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-floating form-floating-outline">
                                                                    <input type="text" id="heiaddress" name="heiaddress" class="form-control" placeholder="Address" />
                                                                    <label for="heiaddress">Building #, Street Name, Purok</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-4 mt-2">
                                                                <div class="input-group input-group-merge">
                                                                    <span class="input-group-text">PH (+63)</span>
                                                                    <div class="form-floating form-floating-outline">
                                                                        <input type="text" id="heicontact" name="heicontact" class="form-control multi-steps-mobile" placeholder="09121314151" />
                                                                        <label for="heicontact">Mobile</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mb-4 mt-2">
                                                                <div class="form-floating form-floating-outline">
                                                                    <input type="text" name="heiemail" id="heiemail" class="form-control" placeholder="Enter Name" />
                                                                    <label for="heiemail">Email</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">
                                                                Close
                                                            </button>
                                                            <button type="submit" id="heiSaveBtn" name="heiSaveBtn" class="btn btn-primary">Save HEI</button>
                                                        </div>
                                                    </form>
                                                </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <br>
                            <form class="dt_adv_search" method="POST">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row g-3">
                                            <div class="col-12 col-sm-6 col-lg-4">
                                                <div class="form-floating form-floating-outline">
                                                    <input type="text" class="form-control dt-input" data-column="3" placeholder="1234ABCD-202310111" data-column-index="2" />
                                                    <label>HEI Name</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-lg-4">
                                                <div class="form-floating form-floating-outline">
                                                    <input type="text" class="form-control dt-input" data-column="3" placeholder="Jhon Doe" data-column-index="2" />
                                                    <label>Address</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-lg-4">
                                                <div class="form-floating form-floating-outline">
                                                    <input type="text" class="form-control dt-input" data-column="3" placeholder="Jhon Doe" data-column-index="2" />
                                                    <label>Contact Person</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-lg-4">
                                                <button type="submit" id="searchStudent" class="btn btn-primary"><i class="mdi mdi mdi-magnify me-1"></i>Search</button>

                                                <a href="" target="_blank" class="btn btn-success">
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
                            <table class=" datatables-ajax dt-advanced-search table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Action</th>
                                        <th>HEI Name</th>
                                        <th>Address</th>
                                        <th>Contact Person</th>
                                    </tr>
                                </thead>
                               <tbody>
                                    <?php
                                        while ($row=$paginate->fetch(PDO::FETCH_ASSOC)) {
                                    ?>                                            

                                <tr>
                                        <td class="text-center p-2">
                                            <a href="hei_profile?rand=<?= my_rand_str(100) ?>&hei_id=<?= $row['prow_hei_id'] ?>" target="_NEW">
                                                <button 
                                                type="button" 
                                                class="btn btn-primary btn-sm">
                                                <i class="ti-user mdi mdi-town-hall"></i>
                                                </button>
                                            </a>
                                        </td>
                                        <td><?= getSchoolName($row['prow_hei_id'])?></td>
                                        <td><?= heiFullAddress($row['prow_hei_id']) ?></td>
                                        <td><?= $row['prow_hei_contact_person'] ?></td>
                                </tr>
                                <?php } ?>
                               </tbody>
                            </table>
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

    <script>
      window.Helpers.initCustomOptionCheck();
    </script>
 
    <?php include "_scripts.php";?>
  
    <script src="../../assets/js/ui-modals.js"></script>
    <script src="../../js/signUp.js"></script>
    <script src="../../js/hei.js"></script>
</body>
</html>