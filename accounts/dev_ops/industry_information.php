<?php
    include '../../config/includes.php';
    require '_session.php';
    include 'industry_information_paginate.php';
    include "_head.php";
?>

<style>
    #industryMap {
        height: 400px;
        width: 100%;
    }
</style>
<link rel="stylesheet" href="../../assets/vendor/libs/select2/select2.css" />


<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <?php include "_sidemenu.php";?>
            <div class="layout-page">
                <?php include "_topnavigation.php";?>

                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="content-wrapper">
                        <div class="card">
                            <h5 class="card-header">Industy Information</h5>
                            <div class="card-body">
                                <div class="d-flex justify-content-end">
                                    <div class="mt-3">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                                            Add Industry
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">

                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="exampleModalLabel1">Add Industry</h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <form action="industryn_information_create" method="POST">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="form-floating form-floating-outline">
                                                                        <input type="text" name="industryname" id="industryname" class="form-control" placeholder="Enter Name" />
                                                                        <label for="industryname">Industry Name</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 mt-3">
                                                                    <div class="form-floating form-floating-outline">
                                                                        <input type="text" name="industrycontactperson" id="industrycontactperson" class="form-control" placeholder="Enter Name" />
                                                                        <label for="industrycontactperson">Industry Contact Person</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 mt-3 mb-4">
                                                                    <div class="form-floating form-floating-outline">
                                                                        <textarea type="text" name="industryabout" id="industryabout" class="form-control" placeholder="Enter Name" ></textarea>
                                                                        <label for="industryabout">About the Industry</label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <p class="" id="exampleModalLabel1">Industry Details</p>

                                                            <div class="row g-2 mb-4">
                                                                <div class="col-sm-6">
                                                                    <div class="form-floating form-floating-outline">
                                                                        <select id="industrytype" name="industrytype" class="form-control">
                                                                            <option></option>
                                                                        </select>
                                                                        <label for="industrytype">Type of Industry</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6 select2-primary">
                                                                    <div class="form-floating form-floating-outline">
                                                                        <select id="industrybenefits" name="industrybenefits[]" class="select2 form-select" multiple>
                                                                            <option> Sample 1</option>
                                                                            <option> Sample 2</option>
                                                                            <option> Sample 3</option>
                                                                        </select>
                                                                        <label for="industrybenefits">Industry Benefits</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-floating form-floating-outline">
                                                                        <select id="industrysize" name="industrysize" class="form-control">
                                                                            <option></option>
                                                                            <option>1-50</option>
                                                                            <option>51-100</option>
                                                                            <option>101-300</option>
                                                                            <option>301-500</option>
                                                                            <option>More than 500</option>
                                                                        </select>
                                                                        <label for="industrysize">Industry Size</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-floating form-floating-outline">
                                                                        <select id="industryworkinghours" name="industryworkinghours" class="form-control">
                                                                            <option></option>
                                                                            <option>Mon to Fri, 8:00-5:00</option>
                                                                            <option>Mon to Fri, 6:00-4:00</option>
                                                                        </select>
                                                                        <label for="industryworkinghours">Working Hours</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-floating form-floating-outline">
                                                                        <select id="industrydresscode" name="industrydresscode" class="form-control">
                                                                            <option></option>
                                                                            <option>Formal</option>
                                                                            <option>Company/Industry Uniform</option>
                                                                            <option>No Dress Code</option>
                                                                        </select>
                                                                        <label for="industrydresscode">Industry Dress Code</label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <p class="" id="exampleModalLabel1">Address</p>
                                                            <div class="row g-2">
                                                                <div class="col-sm-6">
                                                                    <div class="form-floating form-floating-outline">
                                                                        <select id="industrymunicipality" name="industrymunicipality" class="form-control">
                                                                            <option></option>
                                                                            <?php
                                                                            //get barangays
                                                                            $getMunicipalities = selectMunicipalities();
                                                                            while ($municipalities = $getMunicipalities->fetch(PDO::FETCH_ASSOC)) {
                                                                            ?>
                                                                                <option value="<?= $municipalities['prow_mun_name'] ?>"><?= $municipalities['prow_mun_name'] ?></option>
                                                                            <?php } ?>
                                                                        </select>
                                                                        <label for="industrymunicipality">City/Municipality</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-floating form-floating-outline">
                                                                        <select id="industrybarangay" name="industrybarangay" class="form-control">
                                                                            <option></option>
                                                                        </select>
                                                                        <label for="industrybarangay">Barangay</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-floating form-floating-outline">
                                                                        <select id="industryprovince" name="industryprovince" class="form-control">
                                                                            <option value="Davao del Sur">Davao del Sur</option>
                                                                        </select>
                                                                        <label for="industryprovince">Province</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-floating form-floating-outline">
                                                                        <input type="text" id="industryzip" name="industryzip" class="form-control multi-steps-pincode" placeholder="Postal Code" maxlength="4" />
                                                                        <label for="industryzip">Zip Code</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-floating form-floating-outline">
                                                                        <input type="text" id="industryaddress" name="industryaddress" class="form-control" placeholder="Address" />
                                                                        <label for="industryaddress">Building #, Street Name, Purok</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col mb-4 mt-2">
                                                                    <div class="input-group input-group-merge">
                                                                        <span class="input-group-text">PH (+63)</span>
                                                                        <div class="form-floating form-floating-outline">
                                                                            <input type="text" id="industrycontact" name="industrycontact" class="form-control multi-steps-mobile" placeholder="09121314151" />
                                                                            <label for="industrycontact">Mobile</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col mb-4 mt-2">
                                                                    <div class="form-floating form-floating-outline">
                                                                        <input type="text" name="industryemail" id="industryemail" class="form-control" placeholder="Enter Name" />
                                                                        <label for="industryemail">Email</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                            <h5><i class="mdi mdi-home-map-marker me-2 mdi-20px"></i>Pin Industry Address</h5>
                                                                    <h6 class="fst-italic">*Drag the Pin to your exact address</h6>
                                                                    <div class="row g-3">
                                                                        <div class="col-md-12">
                                                                            <div id="industryMap"></div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-floating form-floating-outline">
                                                                                <input type="number" id="industryLong" name="industryLong" class="form-control" value="<?= getheiLong($scholarCode) ?>" readonly />
                                                                                <label for="industryLong">Longtitude</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-floating form-floating-outline">
                                                                                <input type="number" id="industryLat" name="industryLat" class="form-control" value="<?= getheiLat($scholarCode) ?>" readonly />
                                                                                <label for="industryLat">Latitude</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            <hr class="my-4 mx-n4" />
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
                                                        <label>Industry Name</label>
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
                                <table class=" datatables-ajax dt-advanced-search table table-bordered mb-3">
                                    <thead>
                                        <tr>
                                            <th>Action</th>
                                            <th>Industry Name</th>
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
                                                <a href="industry_profile?rand=<?= my_rand_str(100) ?>&industry_id=<?= $row['prow_industry_id'] ?>" target="_NEW">
                                                    <button 
                                                    type="button" 
                                                    class="btn btn-primary btn-sm">
                                                    <i class="ti-user mdi mdi-office-building"></i>
                                                    </button>
                                                </a>
                                            </td>
                                            <td><?= $row['prow_industry_name']?></td>
                                            <td><?= industryFullAddress($row['prow_industry_id']) ?></td>
                                            <td><?= $row['prow_industry_cont_person'] ?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                                </table>
                                <div class ="d-flex justify-content-center">
                                    <ul class="list-group list-group-horizontal-sm">
                                        <?= $paginationCtrls ?>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <?php include "_footer.php"; ?>
                    <div class="content-backdrop fade"></div>
                    </div>
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
    
    <script>
        function initMap() {

            var initialLocation = { lat: 6.7445944749889835, lng: 125.35688568920658 };

            var map = new google.maps.Map(document.getElementById('industryMap'), {
                zoom: 17,
                center: initialLocation,
                styles: [
                            {
                        featureType: "poi",
                        elementType: "labels",
                        stylers: [{ color: "#35373b" }],
                    },
                    {
                        featureType: "label",
                        elementType: "labels.icon",
                        stylers: [{ color: "#35373b" }],
                    },
                    {
                        featureType: "label",
                        elementType: "labels.text.fill",
                        stylers: [{ color: "#35373b" }], // Set the color you want for labels
                    },{
                        featureType: "label",
                        elementType: "labels.text.stroke",
                        stylers: [{ color: "#ffffff" }],
                    },
                ]
            });

            var marker = new google.maps.Marker({
                position: initialLocation,
                map: map,
                draggable: true // Allow marker to be dragged
            });

            google.maps.event.addListener(marker, 'dragend', function (event) {
                updateLatLng(marker.getPosition().lat(), marker.getPosition().lng());
            });

            updateLatLng(initialLocation.lat, initialLocation.lng);
        }

        function updateLatLng(lat, lng) {
            document.getElementById('industryLong').value = lng;
            document.getElementById('industryLat').value = lat;
        }
    </script>
    <script src="../../assets/js/forms-selects.js"></script>
    <script src="../../assets/vendor/libs/select2/select2.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDl37fY99htQLQOK1zIErOwsxMiTQ3AxmA&callback=initMap" async defer></script>
</body>
</html>