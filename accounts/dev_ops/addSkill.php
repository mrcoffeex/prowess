<?php
  require '../../config/includes.php';
  require '_session.php';
  include "_head.php";
  include 'addSkill_paginate.php';
  

?>

  <body>
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <div class="layout-page">
         <?php include "_sidemenu.php";?>

          <div class="content-wrapper">
            <?php include "_topnavigation.php"; ?>
            
            <div class="container-xxl flex-grow-1 container-p-y">
                <div class="card">
                    <h5 class="card-header"> <span><a href="settings">Settings</a></span> / Skills List</h5>
                    <div class="card-body">
                        <div class="d-flex justify-content-end">
                            <div class="mt-3">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                                    Add Skill
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                                <div class="modal-header">
                                                <h4 class="modal-title" id="exampleModalLabel1">Add Skill</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="hei_information_create" method="POST">
                                                    <div class="col-sm-12 mt-3 mb-4">
                                                        <div class="form-floating form-floating-outline">
                                                            <select id="skillCategory" name="skillCategory" class="form-control">
                                                                <option value="">Select Category</option>
                                                                <option value="Technical Skill">Technical Skill</option>
                                                                <option value="Soft Skill">Soft Skill</option>
                                                                <option value="Industry Specific Skill">Industry Specific Skill</option>
                                                                <option value="Vocational Skill">Vocational Skill</option>
                                                            </select>
                                                            <label for="skillCategory">Skill Category</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 mt-3 mb-4">
                                                        <div class="form-floating form-floating-outline">
                                                            <input type="text" name="skillName" id="skillName" class="form-control" placeholder="Enter Name" />
                                                            <label for="skillName">Skill Name</label>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">
                                                            Close
                                                        </button>
                                                        <button type="submit" id="heiSaveBtn" name="heiSaveBtn" class="btn btn-primary">Save Skill</button>
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
                                        <div class="col-12 col-sm-6 col-lg-3">
                                            <div class="form-floating form-floating-outline">
                                                <input type="text" class="form-control dt-input" data-column="3" placeholder="1234ABCD-202310111" data-column-index="2" />
                                                <label>Skill Name</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-lg-3">
                                            <div class="form-floating form-floating-outline">
                                                <select id="skillCategory" name="skillCategory" class="form-control">
                                                    <option value="">Select Category</option>
                                                    <option value="Technical Skill">Technical Skill</option>
                                                    <option value="Soft Skill">Soft Skill</option>
                                                    <option value="Industry Specific Skill">Industry Specific Skill</option>
                                                    <option value="Vocational Skill">Vocational Skill</option>
                                                </select>
                                                <label for="skillCategory">Skill Category</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-lg-3">
                                            <div class="form-floating form-floating-outline">
                                                <select id="skillCategory" name="skillCategory" class="form-control">
                                                    <option value="">Select Category</option>
                                                    <option value="Technical Skill">Technical Skill</option>
                                                    <option value="Soft Skill">Soft Skill</option>
                                                    <option value="Industry Specific Skill">Industry Specific Skill</option>
                                                    <option value="Vocational Skill">Vocational Skill</option>
                                                </select>
                                                <label for="skillCategory">Skill Category</label>
                                            </div>
                                        </div>
                                        <div class="btn-align-vertical col-12 col-sm-6 col-lg-4">
                                            <button type="submit" id="searchStudent" class="btn btn-primary"><i class="mdi mdi mdi-magnify me-1"></i>Search</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <hr class="mt-0" />
                    <div class="card-datatable table-responsive px-3">
                        <table class=" datatables-ajax dt-advanced-search table table-bordered mb-3">
                            <thead>
                                <tr>
                                    <th>Skill Name</th>
                                    <th>Skill Type</th>
                                    <th>Skill Category</th>
                                    <th class="w-23">Action</th>
                                    
                                </tr>
                            </thead>
                            <tbody>                            
                               
                                    <?php
                                        while($data=$paginate->fetch(PDO::FETCH_ASSOC)){
                                    ?>
                                     <tr>
                                        <td><?= $data['prow_skill_name']  ?></td>
                                        <td><?= $data['prow_skill_type_name']  ?></td>
                                        <td><?= $data['prow_skill_category']  ?></td>
                                        <td class="text-center p-3">
                                            <a href="" target="">
                                                <button 
                                                type="button" 
                                                class="btn btn-primary btn-sm">
                                                <i class="ti-user mdi mdi-pencil-outline"></i>
                                                </button>
                                            </a>
                                            <a href="" target="">
                                                <button 
                                                type="button" 
                                                class="btn btn-danger btn-sm">
                                                <i class="ti-user mdi mdi-delete-outline"></i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php }?>
                               
                            </tbody>
                        </table>

                        <div class ="d-flex justify-content-center">
                            <ul class="list-group list-group-horizontal-sm">
                                <?= $paginationCtrls ?>
                            </ul>
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

    <?php include "_scripts.php" ?>
    <?php include '_alerts.php' ?>
  </body>
</html>
