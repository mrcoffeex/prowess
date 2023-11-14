<?php  

    function createScholarProfile($scholarCode, $lname, $fname, $mname, $suffix, $gender, $cs, $birthday, $birthplace, $contact, $email){
       
        $stmt=PWD()->prepare("INSERT INTO prow_scholar
                            (
                                prow_scholar_code, 
                                prow_scholar_school_id, 
                                prow_scholar_img, 
                                prow_scholar_lastname, 
                                prow_scholar_firstname, 
                                prow_scholar_middlename, 
                                prow_scholar_suffix, 
                                prow_scholar_gender, 
                                prow_scholar_cs, 
                                prow_scholar_birthday, 
                                prow_scholar_birthplace, 
                                prow_scholar_con, 
                                prow_scholar_email,  
                                prow_scholar_created, 
                                prow_scholar_updated
                            ) 
                            VALUES
                            (
                                :prow_scholar_code, 
                                :prow_scholar_school_id, 
                                :prow_scholar_img, 
                                :prow_scholar_lastname, 
                                :prow_scholar_firstname, 
                                :prow_scholar_middlename, 
                                :prow_scholar_suffix, 
                                :prow_scholar_gender, 
                                :prow_scholar_cs, 
                                :prow_scholar_birthday, 
                                :prow_scholar_birthplace, 
                                :prow_scholar_con, 
                                :prow_scholar_email,
                                NOW(), 
                                NOW()
                            )");
        $stmt->execute([
            'prow_scholar_code' => $scholarCode, 
            'prow_scholar_school_id' => 0, 
            'prow_scholar_img' => "", 
            'prow_scholar_lastname' => $lname, 
            'prow_scholar_firstname' => $fname, 
            'prow_scholar_middlename' => $mname, 
            'prow_scholar_suffix' => $suffix, 
            'prow_scholar_gender' => $gender, 
            'prow_scholar_cs' => $cs, 
            'prow_scholar_birthday' => $birthday, 
            'prow_scholar_birthplace' => $birthplace, 
            'prow_scholar_con' => $contact, 
            'prow_scholar_email' => $email
        ]);

        if ($stmt) {
            return true;
        } else {
            return false;
        }

    }

    function createScholarAddress($scholarCode, $addressDescription, $barangay, $municipality, $province, $zipcode){

        $stmt=PWD()->prepare("INSERT INTO prow_scholar_address
                            (
                                prow_scholar_code, 
                                prow_address_description, 
                                prow_address_brgy, 
                                prow_address_municipality, 
                                prow_address_province, 
                                prow_address_zipcode, 
                                prow_address_created, 
                                prow_address_updated
                            ) 
                            VALUES
                            (
                                :prow_scholar_code, 
                                :prow_address_description, 
                                :prow_address_brgy, 
                                :prow_address_municipality, 
                                :prow_address_province, 
                                :prow_address_zipcode, 
                                NOW(), 
                                NOW()
                            )");
        $stmt->execute([
            'prow_scholar_code' => $scholarCode, 
            'prow_address_description' => $addressDescription, 
            'prow_address_brgy' => $barangay, 
            'prow_address_municipality' => $municipality, 
            'prow_address_province' => $province, 
            'prow_address_zipcode' => $zipcode
        ]);

        if ($stmt) {
            return true;
        } else {
            return false;
        }

    }

    function signUpScholar(
        $fullname, 
        $uname, 
        $pword, 
        $lname, 
        $fname, 
        $mname, 
        $suffix, 
        $gender, 
        $cs, 
        $birthday, 
        $birthplace, 
        $contact, 
        $email,
        $addressDescription, 
        $barangay, 
        $municipality, 
        $province, 
        $zipcode
        ){

        $userCode = date('YmdHis') . randStrInt(10);
        $scholarCode = date('Y') . randStrInt(6);

        $createUser = createUser($userCode, $scholarCode, $fullname, $uname, $pword);
        $createScholar = createScholarProfile($scholarCode, $lname, $fname, $mname, $suffix, $gender, $cs, $birthday, $birthplace, $contact, $email);
        $createScholarAddress = createScholarAddress($scholarCode, $addressDescription, $barangay, $municipality, $province, $zipcode);

        //send email

        sendVerification($userCode, $email, "phpmailer/PHPMailerAutoload.php");

        if ($createUser == true && $createScholar == true && $createScholarAddress == true) {
            return true;
        } else {
            return false;
        }

    }

    function addScholarInformation(
            $scholarCode, 
            $scholarHeight, 
            $scholarWeight, 
            $scholarBloodType, 
            $scholarReligion, 
            $scholarTalentArray, 
            $scholarFatherName, 
            $scholarFatherCont, 
            $scholarFatherOccu, 
            $scholarMotherName, 
            $scholarMotherCont, 
            $scholarMotherOccu, 
            $scholarGuardianName, 
            $scholarGuardianCont, 
            $scholarGuardianOccu
    ){

        $stmt=PWD()->prepare("INSERT INTO prow_scholar_profile
                (
                    prow_scholar_code, 
                    prow_prof_height, 
                    prow_prof_weight, 
                    prow_prof_blood_type, 
                    prow_prof_religion, 
                    prow_prof_talent, 
                    prow_prof_father, 
                    prow_prof_father_cont,
                    prow_prof_father_occu,
                    prow_prof_mother,
                    prow_prof_mother_cont,
                    prow_prof_mother_occu,
                    prow_prof_guardian,
                    prow_prof_guardian_cont,
                    prow_prof_guardian_occu,
                    prow_prof_created,
                    prow_prof_updated


                ) 
                VALUES
                (
                    :prow_scholar_code, 
                    :prow_prof_height, 
                    :prow_prof_weight, 
                    :prow_prof_blood_type, 
                    :prow_prof_religion, 
                    :prow_prof_talent, 
                    :prow_prof_father, 
                    :prow_prof_father_cont,
                    :prow_prof_father_occu,
                    :prow_prof_mother,
                    :prow_prof_mother_cont,
                    :prow_prof_mother_occu,
                    :prow_prof_guardian,
                    :prow_prof_guardian_cont,
                    :prow_prof_guardian_occu,
                    NOW(), 
                    NOW()
                )");
        $stmt->execute([
            'prow_scholar_code' => $scholarCode,
            'prow_prof_height' => $scholarHeight,
            'prow_prof_weight' => $scholarWeight,
            'prow_prof_blood_type' => $scholarBloodType,
            'prow_prof_religion' => $scholarReligion,
            'prow_prof_talent' => $scholarTalentArray,
            'prow_prof_father' => $scholarFatherName,
            'prow_prof_father_cont' => $scholarFatherCont,
            'prow_prof_father_occu' => $scholarFatherOccu,
            'prow_prof_mother' => $scholarMotherName,
            'prow_prof_mother_cont' => $scholarMotherCont,
            'prow_prof_mother_occu' => $scholarMotherOccu,
            'prow_prof_guardian' => $scholarGuardianName,
            'prow_prof_guardian_cont' => $scholarGuardianCont,
            'prow_prof_guardian_occu' => $scholarGuardianOccu,
        ]);

        if ($stmt) {
        return true;
        } else {
        return false;
        }


    }

    function addScholarEnrollment(
            $scholarCode, 
            $appLogCode, 
            $enrollemntschooName, 
            $enrollmentCourse, 
            $enrollmentYearLevel, 
            $enrollmentSchoolYear, 
            $enrollmentSemester
    ){
        $stmt=PWD()->prepare("INSERT INTO prow_scholar_app_logs
                            (
                                prow_scholar_code, 
                                prow_app_log_code,
                                prow_hei, 
                                prow_course, 
                                prow_yr_lvl, 
                                prow_sy, 
                                prow_sem, 
                                prow_app_logs_created
                            ) 
                            VALUES
                            (
                                :prow_scholar_code, 
                                :prow_app_log_code,
                                :prow_hei, 
                                :prow_course, 
                                :prow_yr_lvl, 
                                :prow_sy, 
                                :prow_sem, 
                                NOW()
                            )");
        $stmt->execute([
            'prow_scholar_code' => $scholarCode,
            'prow_app_log_code' => $appLogCode,  
            'prow_hei' => $enrollemntschooName, 
            'prow_course' => $enrollmentCourse, 
            'prow_yr_lvl' => $enrollmentYearLevel, 
            'prow_sy' => $enrollmentSchoolYear, 
            'prow_sem' => $enrollmentSemester
        ]);

        if ($stmt) {
            return true;
        } else {
            return false;
        }

    }

    function addrequirements(
        $scholarCode, 
        $appLogCode,
        $enrollmentFormFile, 
        $birthCertFile, 
        $lowIncomeFile, 
        $reportCardFile, 
        $endorsementFile
    ){
        $stmt=PWD()->prepare("INSERT INTO prow_scholar_requirements
                (
                    prow_scholar_code,
                    prow_scholar_app_logs_code, 
                    prow_req_cert_low_income, 
                    prow_req_endorsement, 
                    prow_req_birth_certificate,
                    prow_req_school_card,
                    prow_req_enrollment_form,
                    prow_req_created
                ) 
                VALUES
                (
                    :prow_scholar_code, 
                    :prow_scholar_app_logs_code,
                    :prow_req_cert_low_income, 
                    :prow_req_endorsement, 
                    :prow_req_birth_certificate,
                    :prow_req_school_card,
                    :prow_req_enrollment_form, 
                    NOW()
                )");
        $stmt->execute([
        'prow_scholar_code' => $scholarCode, 
        'prow_scholar_app_logs_code' => $appLogCode, 
        'prow_req_cert_low_income' => $lowIncomeFile, 
        'prow_req_endorsement' => $endorsementFile, 
        'prow_req_birth_certificate' => $birthCertFile, 
        'prow_req_school_card' => $reportCardFile, 
        'prow_req_enrollment_form' => $enrollmentFormFile
        ]);

        if ($stmt) {
            return true;
        } else {
            return false;
        }

    }


    function updateScholarSchoolID($scholarSchoolID,$filledupStatus){
        $stmt=PWD()->prepare("UPDATE prow_scholar SET prow_scholar_school_id = :prow_scholar_school_id, prow_scholar_filled_up = :prow_scholar_filled_up");
        $stmt->execute([
            'prow_scholar_school_id' => $scholarSchoolID,
            'prow_scholar_filled_up' => $filledupStatus
        ]);

        if ($stmt) {
            return true;
        } else {
            return false;
        }

    }

    //check if scholar has already fill up form
    function checkProfileForm($profileCode){
        $statement=PWD()->prepare("SELECT
                                            prow_scholar_filled_up
                                            FROM
                                            prow_scholar
                                            Where
                                            prow_scholar_code = :prow_scholar_code
                                            AND 
                                            prow_scholar_filled_up = :prow_scholar_filled_up");
        $statement->execute([
            'prow_scholar_code' => $profileCode,
            'prow_scholar_filled_up' => 1,
        ]);

        $res=$statement->fetch(PDO::FETCH_ASSOC);
        $filledUp = $res['prow_scholar_filled_up'];

        return $filledUp;
        

    }

    //Count all Active Scholars
     function countScholarActive($scholarID){

        if (empty($scholarID)) {
            
            $statement=PWD()->prepare("SELECT
                                            prow_scholar_id
                                            FROM
                                            prow_scholar
                                            Where
                                            prow_scholar_acct_status = :prow_scholar_acct_status");
            $statement->execute([
                'prow_scholar_acct_status' => 1
            ]);

        } else {
            
            $statement=PWD()->prepare("SELECT
                                            prow_scholar_id
                                            FROM
                                            prow_scholar
                                            Where
                                            prow_scholar_status = :prow_scholar_status AND
                                            prow_scholar_id = :prow_scholar_id");
            $statement->execute([
                'prow_scholar_acct_status' => 1,
                'prow_scholar_id' => $scholarID
            ]);

        }

        $count=$statement->rowCount();

        return $count;

    }


    //Count all Pending Scholars
     function countScholarPending($scholarID){

        if (empty($scholarID)) {
            
            $statement=PWD()->prepare("SELECT
                                            prow_scholar_id
                                            FROM
                                            prow_scholar
                                            Where
                                            prow_scholar_acct_status = :prow_scholar_acct_status");
            $statement->execute([
                'prow_scholar_acct_status' => 2
            ]);

        } else {
            
            $statement=PWD()->prepare("SELECT
                                            prow_scholar_id
                                            FROM
                                            prow_scholar
                                            Where
                                            prow_scholar_status = :prow_scholar_status AND
                                            prow_scholar_id = :prow_scholar_id");
            $statement->execute([
                'prow_scholar_acct_status' => 2,
                'prow_scholar_id' => $scholarID
            ]);

        }

        $count=$statement->rowCount();

        return $count;

    }

    //Scholar fullname
    function getFullname($profileCode){

        $statement=PWD()->prepare("SELECT
                                        prow_scholar_lastname,
                                        prow_scholar_firstname,
                                        prow_scholar_middlename,
                                        prow_scholar_suffix
                                        From
                                        prow_scholar
                                        Where
                                        prow_scholar_code = :prow_scholar_code");
        $statement->execute([
            'prow_scholar_code' => $profileCode
        ]);

        $res=$statement->fetch(PDO::FETCH_ASSOC);

        if (is_array($res)) {

            $middleInitial = substr($res['prow_scholar_middlename'], 0, 1);

            if (empty($res['prow_scholar_middlename']) && empty($res['prow_scholar_suffix'])) {

                $result = $res['prow_scholar_lastname'] . ", " . $res['prow_scholar_firstname'];
    
            } else if (empty($res['prow_scholar_middlename'])) {
    
                $result = $res['prow_scholar_lastname'] . ", " . $res['prow_scholar_firstname'] . " " . $res['prow_scholar_suffix'];
    
            } else if (empty($res['prow_scholar_suffix'])) {
    
                $result = $res['prow_scholar_lastname'] . ", " . $res['prow_scholar_firstname'] . " " . $middleInitial . ". ";
    
            } else {
                
                $result = $res['prow_scholar_lastname'] . ", " . $res['prow_scholar_firstname'] . " " . $middleInitial . ". " . $res['prow_scholar_suffix'];
    
            }
    
            return $result;

        } else {
            return null;
        }
    }

     function getUserRole($profileCode){
         $statement=PWD()->prepare("SELECT
                                        *
                                        From
                                        prow_users
                                        Where
                                        prow_scholar_code = :prow_scholar_code");
        $statement->execute([
            'prow_scholar_code' => $profileCode
        ]);

        $res=$statement->fetch(PDO::FETCH_ASSOC);
        
        $role = $res['prow_user_type'];
        
        if ($role==0){
            $userRole = "SuperAdmin";
        }else if ($role==1){
            $userRole = "Admin";
        }else if ($role==2){
            $userRole = "Staff";
        }else if ($role==3){
            $userRole = "HEI";
        }else if ($role==4){
            $userRole = "Student";
        }else{
            $userRole = "Industry";
        }

        return $userRole;
    
    }

    function getUserName($profileCode){
         $statement=PWD()->prepare("SELECT
                                        *
                                        From
                                        prow_users
                                        Where
                                        prow_scholar_code = :prow_scholar_code");
        $statement->execute([
            'prow_scholar_code' => $profileCode
        ]);

        $res=$statement->fetch(PDO::FETCH_ASSOC);
        
        $username = $res['prow_user_uname'];
        
        return $username;
    
    }


    function getScholar_Status($profileCode){
         $statement=PWD()->prepare("SELECT
                                        prow_scholar_acct_status
                                        From
                                        prow_scholar
                                        Where
                                        prow_scholar_code = :prow_scholar_code");
        $statement->execute([
            'prow_scholar_code' => $profileCode
        ]);

        $res=$statement->fetch(PDO::FETCH_ASSOC);
        
        $status = $res['prow_scholar_acct_status'];
        
        if ($status==1){
            $scholar_status = "Approved";
        }else if ($status==2){
            $scholar_status = "Pending";
        }else if ($status==3){
            $scholar_status = "For Reapplication";
        }

        return $scholar_status;
    
    }


    //Separate month and year
    function separateMonthYear($datetime) {
        $timestamp = strtotime($datetime);
        $year = date('Y', $timestamp);
        $monthNumber = date('m', $timestamp);
        $monthName = DateTime::createFromFormat('!m', $monthNumber)->format('F');
        return $monthName . ' ' . $year;
    }


    function getScholar_Joined($profileCode){
         $statement=PWD()->prepare("SELECT
                                        prow_scholar_created
                                        From
                                        prow_scholar
                                        Where
                                        prow_scholar_code = :prow_scholar_code");
        $statement->execute([
            'prow_scholar_code' => $profileCode
        ]);

        $res=$statement->fetch(PDO::FETCH_ASSOC);
        
        $scholar_joined = $res['prow_scholar_created'];
    
        $joined= separateMonthYear($scholar_joined);

        return $joined;
    }
    
    //Get Scholar status
     function getScholarStatus($acct_status){
        if ($acct_status==1){
            $status = "Approved";
        }else if ($acct_status==2){
            $status = "Pending";
        }else{
            $status = "For Reapplication";
        }

        return $status;
    
    }

    //Get School of Scholar
    function getSchoolScholar($profileCode){
        $statement=PWD()->prepare("SELECT
                                        *
                                        From
                                        prow_scholar_app_logs
                                        Where
                                        prow_scholar_code = :prow_scholar_code");
        $statement->execute([
            'prow_scholar_code' => $profileCode
        ]);
        
        return $statement;

    }

    function getScholarCourse($profileCode){
        $statement=PWD()->prepare("SELECT
                                        *
                                        From
                                        prow_scholar_app_logs
                                        Where
                                        prow_scholar_code = :prow_scholar_code");
        $statement->execute([
            'prow_scholar_code' => $profileCode
        ]);
        
        $res=$statement->fetch(PDO::FETCH_ASSOC);

        if (!empty($res['prow_course'])) {
            return $res['prow_course'];
        } else {         
            return "Not yet enrolled";
        }

    }

    function getScholarYrLvl($profileCode){
        $statement=PWD()->prepare("SELECT
                                        *
                                        From
                                        prow_scholar_app_logs
                                        Where
                                        prow_scholar_code = :prow_scholar_code");
        $statement->execute([
            'prow_scholar_code' => $profileCode
        ]);
        $res=$statement->fetch(PDO::FETCH_ASSOC);

        if (empty($res['prow_yr_lvl'])) {
            return "Not yet enrolled";
        } else {         
            return $res['prow_yr_lvl'];
        }

    }


    function getCourseName($courseID){
        $statement=PWD()->prepare("SELECT
                                        *
                                        From
                                        prow_list_course
                                        Where
                                        prow_course_id = :prow_course_id");
        $statement->execute([
            'prow_course_id' => $courseID
        ]);

        $res=$statement->fetch(PDO::FETCH_ASSOC);
        if (empty($res['prow_course_name'])) {
            return "Not yet enrolled";
        } else {
            return $res['prow_course_name'];
        }        

    }

    function getCourse($courseID){
        $statement=PWD()->prepare("SELECT
                                        *
                                        From
                                        prow_list_course
                                        Where
                                        prow_course_id = :prow_course_id");
        $statement->execute([
            'prow_course_id' => $courseID
        ]);

        $res=$statement->fetch(PDO::FETCH_ASSOC);

        return $res['prow_course_name'];
    }


    function selectProfile($profileCode){
        $statement=PWD()->prepare("SELECT
                                      *
                                        From
                                        prow_scholar
                                        Where
                                        prow_scholar_code = :prow_scholar_code");
        $statement->execute([
            'prow_scholar_code' => $profileCode
        ]);

        return $statement;

    }

    function getAddressScholar($profileCode){
        $statement=PWD()->prepare("SELECT
                                        *
                                        From
                                        prow_scholar_address
                                        Where
                                        prow_scholar_code = :prow_scholar_code");
        $statement->execute([
            'prow_scholar_code' => $profileCode
        ]);

        return $statement;

    }

    function getSYReqScholar($app_code,$scholarCode){
        $statement=PWD()->prepare("SELECT
                                        *
                                        From
                                        prow_scholar_app_logs
                                        Where
                                        prow_scholar_code = :prow_scholar_code 
                                        And
                                        prow_app_log_code = :prow_app_log_code");
        $statement->execute([
            'prow_scholar_code' => $scholarCode,
            'prow_app_log_code' => $app_code
        ]);

        return $statement;

    }

    function getReqScholar($app_code,$scholarCode){
        $statement=PWD()->prepare("SELECT
                                        *
                                        From
                                        prow_scholar_requirements
                                        Where
                                        prow_scholar_code = :prow_scholar_code 
                                        And
                                        prow_scholar_app_logs_code = :prow_scholar_app_logs_code");
        $statement->execute([
            'prow_scholar_code' => $scholarCode,
            'prow_scholar_app_logs_code' => $app_code
        ]);

        return $statement;

    }

    function getScholarSYRequirements($scholarCode, $sy){
        $statement=PWD()->prepare("SELECT
                                    prow_app_log_code
                                    From
                                    prow_scholar_app_logs
                                    Where
                                    prow_scholar_code = :prow_scholar_code
                                    AND
                                    prow_sy = :prow_sy");
        $statement->execute([
            'prow_scholar_code' => $scholarCode,
            'prow_sy' => $sy
        ]);
        
        $count=$statement->rowCount();

        if ($count > 0) {
            
            $res=$statement->fetch(PDO::FETCH_ASSOC);
            
            return $res['prow_app_log_code'];

        } else {
            return null;
        }     

    }

    function selectScholarRequirementsBylogCode($scholarCode, $logCode){

        $statement=PWD()->prepare("SELECT 
                                    *
                                    FROM
                                    prow_scholar_requirements
                                    Where
                                    prow_scholar_code = :prow_scholar_code
                                    AND
                                    prow_scholar_app_logs_code = :prow_scholar_app_logs_code");
        $statement->execute([
            'prow_scholar_code' => $scholarCode,
            'prow_scholar_app_logs_code' => $logCode
        ]);

        return $statement;
        
    }

    function selectTalent(){

        $statement=PWD()->prepare("SELECT
                                        *
                                        FROM
                                        prow_list_talents
                                        Order By
                                        prow_talent_name
                                        ASC");
        $statement->execute();

        return $statement;


    }

    function selectOccupation(){

        $statement=PWD()->prepare("SELECT
                                        *
                                        FROM
                                        prow_list_occu
                                        Order By
                                        prow_occu_name
                                        ASC");
        $statement->execute();

        return $statement;


    }

    function selectSY(){

        $statement=PWD()->prepare("SELECT
                                        *
                                        FROM
                                        prow_list_sy
                                        Order By
                                        prow_school_year
                                        ASC");
        $statement->execute();

        return $statement;


    }



    //application history
    function checkAppLogs($scholarCode){

        $stmt=PWD()->prepare("SELECT 
                            prow_scholar_app_logs_id
                            FROM
                            prow_scholar_app_logs
                            Where
                            prow_scholar_code = :prow_scholar_code");
        $stmt->execute([
            'prow_scholar_code' => $scholarCode
        ]);

        $count=$stmt->rowCount();

        return $count;

    }

    function getBannerImg($userType){

        if ($userType==0){
            $userbanner="../../assets/img/pages/header-light.png";
        }else if($userType==1){
            $userbanner="../../assets/img/pages/2.png";
        }else if($userType==2){
            $userbanner="../../assets/img/pages/3.png";
        }else if($userType==3){
            $userbanner="../../assets/img/pages/4.png";
        }else if($userType==4){
            $userbanner="../../assets/img/pages/scholar1.png";
        }else if($userType==5){
            $userbanner="../../assets/img/pages/4.png";
        }

        return $userbanner;

    }
    
    function createScholarRequirementsEntry($scholarCode, $appLogId, $status){

        $stmt=PWD()->prepare("INSERT INTO prow_scholar_requirements
                            (
                                prow_scholar_code, 
                                prow_scholar_app_logs_id,
                                prow_req_status, 
                                prow_req_created, 
                                prow_req_updated
                            )
                            Values
                            (
                                :prow_scholar_code, 
                                :prow_scholar_app_logs_id,
                                :prow_req_status,
                                NOW(),
                                NOW()
                            )");
        $stmt->execute([
            'prow_scholar_code' => $scholarCode,
            'prow_scholar_app_logs_id' => $appLogId,
            'prow_req_status' => $status
        ]);

        if ($stmt) {
            return true;
        } else {
            return false;
        } 

    }


    function selectPersonalInfomation($scholarCode){

        $stmt=PWD()->prepare("SELECT
                            *
                            FROM
                            prow_scholar_profile
                            Where
                            prow_scholar_code = :prow_scholar_code");
        $stmt->execute([
            'prow_scholar_code' => $scholarCode
        ]);

        return $stmt;

    }

    function scholarshipStatus($scholarCode, $selected){

        if ($selected == "personal_information") {
            
            $getPersonal=selectPersonalInfomation($scholarCode);
            $countPersonal=$getPersonal->rowCount();
            $personal=$getPersonal->fetch(PDO::FETCH_ASSOC);

            if (empty($countPersonal)) {
                $res = "empty";
            } else {
                if (
                    !empty($personal['prow_prof_height']) && 
                    !empty($personal['prow_prof_weight']) && 
                    !empty($personal['prow_prof_blood_type']) && 
                    !empty($personal['prow_prof_religion']) && 
                    !empty($personal['prow_prof_father']) && 
                    !empty($personal['prow_prof_mother']) && 
                    !empty($personal['prow_prof_guardian']) 
                    ) {
                    $res = "complete";
                } else {
                    $res = "incomplete";
                }
            }

        } else if ($selected == "requirements") {

            $appLogCode = getScholarSYRequirements($scholarCode, getSchoolYearLatest());
            $getRequirements=getReqScholar($appLogCode, $scholarCode);
            $countReq=$getRequirements->rowCount();
            $req=$getRequirements->fetch(PDO::FETCH_ASSOC);

            if (empty($countReq)) {
                $res = "empty";
            } else {
                if (
                    !empty($req['prow_req_cert_low_income']) && 
                    !empty($req['prow_req_endorsement']) && 
                    !empty($req['prow_req_school_card']) && 
                    !empty($req['prow_req_enrollment_form']) && 
                    !empty($req['prow_req_birth_certificate'])
                    ) {
                    $res = "complete";
                } else {
                    $res = "incomplete";
                }
            }

        } else if ($selected == "approval") {
            $res = "empty";
        } else {
            $res = "empty";
        }
        
        return $res;
    }

    function getPersonalInformationCreatedDate($scholarCode){

        $statement=PWD()->prepare("SELECT
                                    prow_prof_created
                                    From
                                    prow_scholar_profile
                                    Where
                                    prow_scholar_code = :prow_scholar_code");
        $statement->execute([
            'prow_scholar_code' => $scholarCode
        ]);
        
        $count=$statement->rowCount();

        if ($count > 0) {
            
            $res=$statement->fetch(PDO::FETCH_ASSOC);
            
            return $res['prow_prof_created'];

        } else {
            return null;
        } 

    }

    function getRequimentsCreatedDate($scholarCode){

        $appLogCode = getScholarSYRequirements($scholarCode, getSchoolYearLatest());

        $statement=PWD()->prepare("SELECT
                                    prow_req_created
                                    From
                                    prow_scholar_requirements
                                    Where
                                    prow_scholar_code = :prow_scholar_code
                                    AND
                                    prow_scholar_app_logs_code = :prow_scholar_app_logs_code");
        $statement->execute([
            'prow_scholar_code' => $scholarCode,
            'prow_scholar_app_logs_code' => $appLogCode
        ]);
        
        $count=$statement->rowCount();

        if ($count > 0) {
            
            $res=$statement->fetch(PDO::FETCH_ASSOC);
            
            return $res['prow_req_created'];

        } else {
            return null;
        } 

    }


?>