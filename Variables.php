Sign up Variables

multiStepsUsername
multiStepsEmail
multiStepsPass

multiStepsFirstName
multiStepsLastName
multiStepsMiddleName
multiStepsQualifier
multiStepsCS
multiStepsGender
multiStepsBirthday
multiStepsMobile
multiStepsBirthPlace

multiStepsMunicipality
multiStepsBarangay
multiStepsProvince
multiStepsZip
multiStepsAddress

--- 
Scholar Code
School ID
Profile Picture
Picture of validated School ID

-Create a function for
*limit birthday input to 16 yrs old 2007
*Age according to bday 
*Scholar Code 
*Barangay according to multiStepsMunicipality

------Paginate Code
<?php  
    //pagination
        
    $getPaginate=PWD()->prepare("SELECT COUNT(prow_scholar_id) FROM prow_scholar");
    $getPaginate->execute();
    $paginates=$getPaginate->fetch(PDO::FETCH_BOTH);

    $page_rows = 15;
    $last = ceil($paginates[0]/$page_rows);
    
    if($last < 1){
        $last = 1;
    }
    
    $pagenum = 1;
    
    if(isset($_GET['pn'])){
        $pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
    }
    
    if ($pagenum < 1) { 
        $pagenum = 1; 
    } else if ($pagenum > $last) { 
        $pagenum = $last; 
    }
    
    $limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;
    
    $paginate=PWD()->prepare("SELECT * FROM 
                                    prow_scholar
                                    Order By
                                    prow_scholar_lastname
                                    $limit");
    $paginate->execute();
    
    $paginationCtrls = '';

    if($last != 1){
        if ($pagenum > 1) {
            $previous = $pagenum - 1;
            $paginationCtrls .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'" ><i class="ti-angle-left"></i></a></li>';
            for($i = $pagenum-4; $i < $pagenum; $i++){
                if($i > 0){
                    $paginationCtrls .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" >'.$i.'</a></li>';
                }
            }
        }

        $paginationCtrls .= '<li class="page-item active"><a class="page-link">'.$pagenum.'</a></li>';
        for($i = $pagenum+1; $i <= $last; $i++){
            $paginationCtrls .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" >'.$i.'</a></li>';
            if($i >= $pagenum+4){
                break;
            }
        }

        if ($pagenum != $last) {
            $next = $pagenum + 1;
            $paginationCtrls .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'" ><i class="ti-angle-right"></i></a></li>';
        }
    }
?>








scholarBloodType
scholarHeight
scholarWeight
scholarReligion
scholarTalent
scholarFatherName
scholarFatherCont
scholarFatherOccu
scholarMotherName
scholarMotherCont
scholarMotherOccu
scholarGuardianName
scholarGuardianCont
scholarGuardianOccu
scholarSchoolID
enrollemntschooName
enrollmentCourse
enrollmentYearLevel
enrollmentSemester
enrollmentSchoolYear




enrollmentFormFile
birthCertFile
lowIncomeFile
reportCardFile
endorsementFile


INSERT INTO

prow_scholar_profile
prow_scholar_academe
prow_app_logs
prow_scholar_requirements
prow_notification


UPDATE
prow_scholar
 ----> School ID
 ----> scholar type - 1

        'prow_scholar_code' => $scholarCode, 

'prow_scholar_code' => $scholarCode,
'prow_prof_height => $scholarCode,
'prow_prof_weight => $scholarCode,
'prow_prof_blood_type => $scholarCode,
'prow_prof_religion => $scholarCode,
'prow_prof_talent => $scholarCode,
'prow_prof_father => $scholarCode,
'prow_prof_father_cont => $scholarCode,
'prow_prof_father_occu => $scholarCode,
'prow_prof_mother => $scholarCode,
'prow_prof_mother_cont => $scholarCode,
'prow_prof_mother_occu => $scholarCode,
'prow_prof_guardian => $scholarCode,
'prow_prof_guradian_cont => $scholarCode,
'prow_prof_guardian_occu => $scholarCode,

:prow_scholar_code, 
:prow_hei, 
:prow_course, 
:prow_yr_lvl, 
:prow_sy, 
:prow_sem, 











        $birthCertFile = $_POST['birthCertFile'];
        $lowIncomeFile = $_POST['lowIncomeFile'];
        $reportCardFile = $_POST['reportCardFile'];
        $endorsementFile = $_POST['endorsementFile'];




                               



<?php  
    require '../../config/includes.php';
    require '_session.php';

    if (isset($_FILES['file'])) {

        $profileImg = ezImageUpload("file", "../../imagebank/");

        if ($profileImg == "error") {

            header("location: profile?rand=" . my_rand_str(30) . "&note=invalid_upload");
				
		}else{

            $request = updateProfileImg($profileImg, $e4ps_user_id);

            if ($request == true) {
                header("location: profile?rand=".my_rand_str(30)."&note=profile_img_updated");
            }else{
                header("location: profile?rand=".my_rand_str(30)."&note=error");
            }
        }

    }else{

        header("location: profile?rand=".my_rand_str(30)."&note=invalid");

    }
    
?>




<div class="d-flex justify-content-end">
                                <div class="mt-3">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                                        Add HEI
                                    </button>
                                    <!-- Modal -->
                                    
                                </div>



                  <div class="card mb-4">
                    <h5 class="card-header">Change Password</h5>
                    <div class="card-body">
                      <form id="formAccountSettings" method="POST" onsubmit="return false">
                        <div class="row">
                          <div class="mb-3 col-md-6 form-password-toggle">
                            <div class="input-group input-group-merge">
                              <div class="form-floating form-floating-outline">
                                <input
                                  class="form-control"
                                  type="password"
                                  name="currentPassword"
                                  id="currentPassword"
                                  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                <label for="currentPassword">Current Password</label>
                              </div>
                              <span class="input-group-text cursor-pointer"
                                ><i class="mdi mdi-eye-off-outline"></i
                              ></span>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="mb-4 col-md-6 form-password-toggle">
                            <div class="input-group input-group-merge">
                              <div class="form-floating form-floating-outline">
                                <input
                                  class="form-control"
                                  type="password"
                                  id="newPassword"
                                  name="newPassword"
                                  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                <label for="newPassword">New Password</label>
                              </div>
                              <span class="input-group-text cursor-pointer"
                                ><i class="mdi mdi-eye-off-outline"></i
                              ></span>
                            </div>
                          </div>
                          <div class="mb-4 col-md-6 form-password-toggle">
                            <div class="input-group input-group-merge">
                              <div class="form-floating form-floating-outline">
                                <input
                                  class="form-control"
                                  type="password"
                                  name="confirmPassword"
                                  id="confirmPassword"
                                  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                <label for="confirmPassword">Confirm New Password</label>
                              </div>
                              <span class="input-group-text cursor-pointer"
                                ><i class="mdi mdi-eye-off-outline"></i
                              ></span>
                            </div>
                          </div>
                        </div>
                        <h6 class="text-body">Password Requirements:</h6>
                        <ul class="ps-3 mb-0">
                          <li class="mb-1">Minimum 8 characters long - the more, the better</li>
                          <li class="mb-1">At least one lowercase character</li>
                          <li>At least one number, symbol, or whitespace character</li>
                        </ul>
                        <div class="mt-4">
                          <button type="submit" class="btn btn-primary me-2">Save changes</button>
                          <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                        </div>
                      </form>
                    </div>
                  </div>




























