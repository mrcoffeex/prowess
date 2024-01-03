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

    function createScholarAddress($scholarCode, $addressDescription, $barangay, $municipality, $province, $zipcode, $long, $lat){

        $stmt=PWD()->prepare("INSERT INTO prow_scholar_address
                            (
                                prow_scholar_code, 
                                prow_address_description, 
                                prow_address_brgy, 
                                prow_address_municipality, 
                                prow_address_province, 
                                prow_address_zipcode, 
                                prow_address_long, 
                                prow_address_lat, 
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
                                :prow_address_long, 
                                :prow_address_lat, 
                                NOW(), 
                                NOW()
                            )");
        $stmt->execute([
            'prow_scholar_code' => $scholarCode, 
            'prow_address_description' => $addressDescription, 
            'prow_address_brgy' => $barangay, 
            'prow_address_municipality' => $municipality, 
            'prow_address_province' => $province, 
            'prow_address_zipcode' => $zipcode, 
            'prow_address_long' => $long, 
            'prow_address_lat' => $lat
        ]);

        if ($stmt) {
            return true;
        } else {
            return false;
        }

    }

    function updateScholarCoordinates($scholarCode, $long, $lat){

        $stmt=PWD()->prepare("UPDATE prow_scholar_address
                            SET
                            prow_address_long = :prow_address_long,
                            prow_address_lat = :prow_address_lat
                            Where
                            prow_scholar_code = :prow_scholar_code");
        $stmt->execute([
            'prow_address_long' => $long,
            'prow_address_lat' => $lat,
            'prow_scholar_code' => $scholarCode
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
        $createScholarAddress = createScholarAddress($scholarCode, $addressDescription, $barangay, $municipality, $province, $zipcode, 0, 0);

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
            $scholarGuardianOccu, 
            $scholarIncome,
            $scholarPWD,
            $scholarSingleP,
            $scholarSingleID,
            $scholarTribe
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
                    prow_prof_income,
                    prow_prof_pwd,
                    prow_prof_single_p,
                    prow_prof_single_id,
                    prow_prof_tribal,
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
                    :prow_prof_income,
                    :prow_prof_pwd,
                    :prow_prof_single_p,
                    :prow_prof_single_id,
                    :prow_prof_tribal,
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
            'prow_prof_income' => $scholarIncome,
            'prow_prof_pwd' => $scholarPWD,
            'prow_prof_single_p' => $scholarSingleP,
            'prow_prof_single_id' => $scholarSingleID,
            'prow_prof_tribal' => $scholarTribe
        ]);

        if ($stmt) {
        return true;
        } else {
        return false;
        }

    }

    function updateScholarInformation(
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
            $scholarGuardianOccu, 
            $scholarIncome,
            $scholarPWD,
            $scholarSingleP,
            $scholarSingleID,
            $scholarTribe
    ){

        $stmt=PWD()->prepare("UPDATE prow_scholar_profile
                            SET 
                            prow_prof_height = :prow_prof_height, 
                            prow_prof_weight = :prow_prof_weight, 
                            prow_prof_blood_type = :prow_prof_blood_type, 
                            prow_prof_religion = :prow_prof_religion, 
                            prow_prof_talent = :prow_prof_talent, 
                            prow_prof_father = :prow_prof_father, 
                            prow_prof_father_cont = :prow_prof_father_cont,
                            prow_prof_father_occu = :prow_prof_father_occu,
                            prow_prof_mother = :prow_prof_mother,
                            prow_prof_mother_cont = :prow_prof_mother_cont,
                            prow_prof_mother_occu = :prow_prof_mother_occu,
                            prow_prof_guardian = :prow_prof_guardian,
                            prow_prof_guardian_cont = :prow_prof_guardian_cont,
                            prow_prof_guardian_occu = :prow_prof_guardian_occu,
                            prow_prof_income = :prow_prof_income,
                            prow_prof_pwd = :prow_prof_pwd,
                            prow_prof_single_p = :prow_prof_single_p,
                            prow_prof_single_id = :prow_prof_single_id,
                            prow_prof_tribal = :prow_prof_tribal,
                            prow_prof_updated = NOW()
                            Where
                            prow_scholar_code = :prow_scholar_code");
        $stmt->execute([
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
            'prow_prof_income' => $scholarIncome,
            'prow_prof_pwd' => $scholarPWD,
            'prow_prof_single_p' => $scholarSingleP,
            'prow_prof_single_id' => $scholarSingleID,
            'prow_prof_tribal' => $scholarTribe,
            'prow_scholar_code' => $scholarCode
        ]);

        if ($stmt) {
        return true;
        } else {
        return false;
        }

    }

    function updateScholarBasicInfo(
            $scholarCode, 
            $scholarLastName, 
            $scholarFirstName, 
            $scholarMiddleName, 
            $scholarSuffix, 
            $scholarGender,
            $scholarCs, 
            $scholarBday, 
            $scholarBPlace, 
            $scholarContact
    ){

        $stmt=PWD()->prepare("UPDATE prow_scholar
                            SET 
                            prow_scholar_lastname = :prow_scholar_lastname, 
                            prow_scholar_firstname = :prow_scholar_firstname, 
                            prow_scholar_middlename	 = :prow_scholar_middlename	, 
                            prow_scholar_suffix = :prow_scholar_suffix, 
                            prow_scholar_gender = :prow_scholar_gender, 
                            prow_scholar_cs = :prow_scholar_cs, 
                            prow_scholar_birthday = :prow_scholar_birthday,
                            prow_scholar_birthplace = :prow_scholar_birthplace,
                            prow_scholar_con = :prow_scholar_con,
                            prow_scholar_updated = NOW()
                            Where
                            prow_scholar_code = :prow_scholar_code");
        $stmt->execute([
            'prow_scholar_lastname' => $scholarLastName,
            'prow_scholar_firstname' => $scholarFirstName,
            'prow_scholar_middlename' => $scholarMiddleName,
            'prow_scholar_suffix' => $scholarSuffix,
            'prow_scholar_gender' => $scholarGender,
            'prow_scholar_cs' => $scholarCs,
            'prow_scholar_birthday' => $scholarBday,
            'prow_scholar_birthplace' => $scholarBPlace,
            'prow_scholar_con' => $scholarContact,
            'prow_scholar_code' => $scholarCode
        ]);

        if ($stmt) {
        return true;
        } else {
        return false;
        }

    }

    function updateScholarAddress(
        $scholarLong,
        $scholarLat,
        $scholarStreet,
        $multiStepsMunicipality,
        $multiStepsBarangay,
        $scholarZip,
        $scholarCode
    ){

        $stmt=PWD()->prepare("UPDATE prow_scholar_address
                            SET 
                            prow_address_description = :prow_address_description, 
                            prow_address_brgy = :prow_address_brgy, 
                            prow_address_municipality	 = :prow_address_municipality	, 
                            prow_address_zipcode = :prow_address_zipcode, 
                            prow_address_long = :prow_address_long, 
                            prow_address_lat = :prow_address_lat,
                            prow_address_updated = NOW()
                            Where
                            prow_scholar_code = :prow_scholar_code");
        $stmt->execute([
            'prow_address_description' => $scholarStreet,
            'prow_address_brgy' => $multiStepsBarangay,
            'prow_address_municipality' => $multiStepsMunicipality,
            'prow_address_zipcode' => $scholarZip,
            'prow_address_long' => $scholarLong,
            'prow_address_lat' => $scholarLat,
            'prow_scholar_code' => $scholarCode
        ]);

        if ($stmt) {
        return true;
        } else {
        return false;
        }

    }
    
    function checkScholarInformation($scholarCode){

        $stmt=PWD()->prepare("SELECT prow_prof_id
                            FROM
                            prow_scholar_profile
                            Where
                            prow_scholar_code = :prow_scholar_code");
        $stmt->execute([
            'prow_scholar_code' => $scholarCode
        ]);

        $count=$stmt->rowCount();

        if ($count > 0) {
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

    function updateScholarEnrollment(
            $scholarCode, 
            $appLogCode, 
            $enrollemntschooName, 
            $enrollmentCourse, 
            $enrollmentYearLevel, 
            $enrollmentSchoolYear, 
            $enrollmentSemester
    ){
        $stmt=PWD()->prepare("UPDATE prow_scholar_app_logs
                            SET
                            prow_hei = :prow_hei, 
                            prow_course = :prow_course, 
                            prow_yr_lvl = :prow_yr_lvl, 
                            prow_sy = :prow_sy, 
                            prow_sem = :prow_sem
                            Where
                            prow_scholar_code = :prow_scholar_code
                            AND
                            prow_app_log_code = :prow_app_log_code
                            ");
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

    function updaterequirementsOld(
        $scholarCode, 
        $appLogCode,
        $reportCardFile
    ){
        $stmt=PWD()->prepare("UPDATE 
                            prow_scholar_requirements
                            SET
                            prow_req_school_card = :prow_req_school_card
                            Where
                            prow_scholar_code = :prow_scholar_code
                            AND
                            prow_scholar_app_logs_code = :prow_scholar_app_logs_code
                            ");
        $stmt->execute([
        'prow_scholar_code' => $scholarCode,
        'prow_scholar_app_logs_code' => $appLogCode,
        'prow_req_school_card' => $reportCardFile
        ]);

        if ($stmt) {
            return true;
        } else {
            return false;
        }

    }


    function updateScholarSchoolID($scholarSchoolID, $filledupStatus,$scholarCode){

        $stmt=PWD()->prepare("UPDATE prow_scholar SET prow_scholar_school_id = :prow_scholar_school_id, prow_scholar_filled_up = :prow_scholar_filled_up WHERE prow_scholar_code = :prow_scholar_code");
        $stmt->execute([
            'prow_scholar_school_id' => $scholarSchoolID,
            'prow_scholar_filled_up' => $filledupStatus,
            'prow_scholar_code' => $scholarCode
        ]);

        if ($stmt) {
            return true;
        } else {
            return false;
        }

    }

    function updateInitialApprove($scholarCode){

        $stmt=PWD()->prepare("UPDATE prow_scholar SET prow_initial_approve = :prow_initial_approve, prow_initial_updated = NOW()  WHERE prow_scholar_code = :prow_scholar_code");

        $stmt->execute([
            'prow_initial_approve' => 1,
            'prow_scholar_code' => $scholarCode
        ]);

        if ($stmt) {
            return true;
        } else {
            return false;
        }

    }

    function updateScholarAppLogStatus($scholarCode, $status){

        $stmt=PWD()->prepare("UPDATE 
                            prow_scholar_app_logs 
                            SET 
                            prow_app_log_status = :prow_app_log_status
                            WHERE 
                            prow_scholar_code = :prow_scholar_code");
        
        $stmt->execute([
            'prow_app_log_status' => $status,
            'prow_scholar_code' => $scholarCode
        ]);

        if ($stmt) {
            return true;
        } else {
            return false;
        }

    }

    function updateScholarStatus($scholarCode, $status){

        $stmt=PWD()->prepare("UPDATE 
                            prow_scholar 
                            SET 
                            prow_scholar_acct_status = :prow_scholar_acct_status, 
                            prow_scholar_updated = NOW()  
                            WHERE 
                            prow_scholar_code = :prow_scholar_code");
        
        $stmt->execute([
            'prow_scholar_acct_status' => $status,
            'prow_scholar_code' => $scholarCode
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

    //check if scholar if new or old
    function checkscholartype($profileCode){
        $statement=PWD()->prepare("SELECT
                                prow_account_type
                                FROM
                                prow_scholar
                                Where
                                prow_scholar_code = :prow_scholar_code
                                ");
        $statement->execute([
            'prow_scholar_code' => $profileCode
        ]);

        $res=$statement->fetch(PDO::FETCH_ASSOC);
        $accountype = $res['prow_account_type'];
        return $accountype;

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
        }else{
            $scholar_status = "No Application";
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

    function getScholarAppLogStatusLatest($scholarCode){

        $stmt=PWD()->prepare("SELECT
                            prow_app_log_status
                            FROM
                            prow_scholar_app_logs
                            Where
                            prow_scholar_code = :prow_scholar_code
                            Order By
                            prow_scholar_app_logs_id
                            DESC LIMIT 1");
        $stmt->execute([
            'prow_scholar_code' => $scholarCode
        ]);

        $res=$stmt->fetch(PDO::FETCH_ASSOC);

        return $res['prow_app_log_status'];

    }

    function getScholarAppLogStatus($acct_status){

        if ($acct_status==1){
            $status = "Approved";
        }else if ($acct_status==2){
            $status = "Pending";
        }else if ($acct_status==3){
            $status = "For Reapplication";
        }else{
            $status = "No Application";
        }

        return $status;
    
    }

    function getScholarAppLogStatusColor($acct_status){

       if ($acct_status==1){
           $status = "text-success";
       }else if ($acct_status==2){
           $status = "text-warning";
       }else if ($acct_status==3){
           $status = "text-danger";
       }else{
           $status = "text-warning";
       }

       return $status;
   
   }

   function getScholarAppLogStatusIcon($acct_status){

      if ($acct_status==1){
          $status = "mdi mdi-account-check";
      }else if ($acct_status==2){
          $status = "mdi mdi-close";
      }else if ($acct_status==3){
          $status = "mdi mdi-close";
      }else{
          $status = "mdi mdi-close";
      }

      return $status;
  
  }

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
        
        $res=$statement->fetch(PDO::FETCH_ASSOC);

        $schoolName = getSchoolNamebyID($res['prow_hei']);

        if (!empty($schoolName)) {
            return $schoolName;
        } else {         
            return "Not yet enrolled";
        }
    }

    function getSchoolNamebyID($schoolId){
         $statement=PWD()->prepare("SELECT
                                    *
                                    From
                                    prow_hei
                                    Where
                                    prow_hei_id = :prow_school_id");
        $statement->execute([
            'prow_school_id' => $schoolId
        ]);
        
        $res=$statement->fetch(PDO::FETCH_ASSOC);

        if (!empty($res['prow_hei_name'])) {
            return $res['prow_hei_name'];
        } else {         
            return null;
        }
    }

    function getScholarCourse($profileCode){
        $statement=PWD()->prepare("SELECT
                                        prow_course
                                        From
                                        prow_scholar_app_logs
                                        Where
                                        prow_scholar_code = :prow_scholar_code");
        $statement->execute([
            'prow_scholar_code' => $profileCode
        ]);
        
        $res=$statement->fetch(PDO::FETCH_ASSOC);
        $heiCOurse= $res['prow_course'];

        if (!empty($heiCOurse)) {
            $stmt=PWD()->prepare("SELECT
                                    *
                                    From
                                    prow_hei_course
                                    Where
                                    prow_hei_course_id = :prow_hei_course_id");
            $stmt->execute([
            'prow_hei_course_id' => $heiCOurse
            ]);

            $res2=$stmt->fetch(PDO::FETCH_ASSOC);
            return $res2['prow_course_name'];

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

    function selectScholar($profileCode){
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

    function selectScholarAddress($profileCode){
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

    function countScholarAppLogPending(){

        $stmt=PWD()->prepare("SELECT 
                            prow_scholar_app_logs_id
                            FROM
                            prow_scholar_app_logs
                            Where
                            prow_app_log_status = :prow_app_log_status");
        $stmt->execute([
            'prow_app_log_status' => 2
        ]);

        $count=$stmt->rowCount();

        return $count;

    }

    function selectScholarAppLogPending(){

        $stmt=PWD()->prepare("SELECT 
                            *
                            FROM
                            prow_scholar_app_logs
                            Where
                            prow_app_log_status != :prow_app_log_status");
        $stmt->execute([
            'prow_app_log_status' => 1
        ]);

        return $stmt;

    }

    function selectCurrentApplication($scholarCode){

        $stmt=PWD()->prepare("SELECT 
                            *
                            FROM
                            prow_scholar_app_logs
                            Where
                            prow_scholar_code = :prow_scholar_code
                            Order By
                            prow_app_logs_created
                            DESC
                            LIMIT 1");
        $stmt->execute([
            'prow_scholar_code' => $scholarCode
        ]);

        return $stmt;

    }

    function getBannerImg($userType){

        if ($userType==0){
            $userbanner="../../assets/img/pages/profile-banner.png";
        }else if($userType==1){
            $userbanner="../../assets/img/pages/2.png";
        }else if($userType==2){
            $userbanner="../../assets/img/pages/profile-banner.png";
        }else if($userType==3){
            $userbanner="../../assets/img/pages/profile-banner.png";
        }else if($userType==4){
            $userbanner="../../assets/img/pages/scholar1.png";
        }else if($userType==5){
            $userbanner="../../assets/img/pages/profile-banner.png";
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

    function initialApproveStatus($scholarCode){

        $stmt=PWD()->prepare("SELECT
                            *
                            FROM
                            prow_scholar
                            Where
                            prow_scholar_code = :prow_scholar_code
                            AND
                            prow_initial_approve = :prow_initial_approve");
        $stmt->execute([
            'prow_scholar_code' => $scholarCode,
            'prow_initial_approve' => 1
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

    function selectEnrollment($scholarCode){

        $stmt=PWD()->prepare("SELECT
                            *
                            FROM
                            prow_scholar_app_logs
                            Where
                            prow_scholar_code = :prow_scholar_code");
        $stmt->execute([
            'prow_scholar_code' => $scholarCode
        ]);

        return $stmt;

    }

    function selectGrades($scholarCode){

        $stmt=PWD()->prepare("SELECT
                            *
                            FROM
                            prow_scholar_grades
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

    function scholarshipStatusOld($scholarCode, $selected){

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
                    !empty($personal['prow_prof_talent'])
                    ) {
                     $res = "complete";
                } else {
                     $res = "incomplete";
                }
            }

            return $res;

        } 
        
        if ($selected == "address_information") {
            
            $getAddress=selectScholarAddress($scholarCode);
            $countAddress=$getAddress->rowCount();
            $address=$getAddress->fetch(PDO::FETCH_ASSOC);

            if (empty($countAddress)) {
                $res = "empty";
            } else {
                if (
                    !empty($address['prow_address_description']) && 
                    !empty($address['prow_address_brgy']) && 
                    !empty($address['prow_address_municipality']) && 
                    !empty($address['prow_address_province']) && 
                    !empty($address['prow_address_zipcode']) &&
                    !empty($address['prow_address_long']) && 
                    !empty($address['prow_address_lat'])
                    ) {
                     $res = "complete";
                } else {
                     $res = "incomplete";
                }
            }

            return $res;

        } 

        if ($selected == "family_information") {
            
            $getPersonal=selectPersonalInfomation($scholarCode);
            $countPersonal=$getPersonal->rowCount();
            $personal=$getPersonal->fetch(PDO::FETCH_ASSOC);

            if (empty($countPersonal)) {
                $res = "empty";
            } else {
                if (
                    !empty($personal['prow_prof_guardian']) && 
                    !empty($personal['prow_prof_income'])
                    ) {
                     $res = "complete";
                } else {
                     $res = "incomplete";
                }
            }

            return $res;

        } 


        if ($selected == "skills_information") {
            
            $getPersonal=selectScholarSkills($scholarCode);
            $countPersonal=$getPersonal->rowCount();
            $personal=$getPersonal->fetch(PDO::FETCH_ASSOC);

            if (empty($countPersonal)) {
                $res = "empty";
            } else {
                if (
                    !empty($personal['prow_skills'])
                    ) {
                     $res = "complete";
                } else {
                     $res = "incomplete";
                }
            }

            return $res;

        } 

        if ($selected == "enroll_information") {
            
            $getPersonal=selectEnrollment($scholarCode);
            $countPersonal=$getPersonal->rowCount();
            $personal=$getPersonal->fetch(PDO::FETCH_ASSOC);

            if (empty($countPersonal)) {
                $res = "empty";
            } else {
                if (
                    !empty($personal['prow_hei']) &&
                    !empty($personal['prow_course']) &&
                    !empty($personal['prow_yr_lvl']) &&
                    !empty($personal['prow_sy']) &&
                    !empty($personal['prow_sem']) 
                    ) {
                     $res = "complete";
                } else {
                     $res = "incomplete";
                }
            }

            return $res;

        } 
      
        if ($selected == "grades") {
            
            $getPersonal=selectGrades($scholarCode);
            $countPersonal=$getPersonal->rowCount();
            $personal=$getPersonal->fetch(PDO::FETCH_ASSOC);

            if (empty($countPersonal)) {
                $res = "empty";
            } else {
                if (
                    !empty($personal['prow_subject_id']) &&
                    !empty($personal['prow_scholar_grades_semester']) &&
                    !empty($personal['prow_scholar_grades_sy']) &&
                    !empty($personal['prow_scholar_grades_percent'])
                    ) {
                     $res = "complete";
                } else {
                     $res = "incomplete";
                }
            }

            return $res;

        } 
        if ($selected == "requirements") {

            $appLogCode = getScholarSYRequirements($scholarCode, getSchoolYearLatest());
            $getRequirements=getReqScholar($appLogCode, $scholarCode);
            $countReq=$getRequirements->rowCount();
            $req=$getRequirements->fetch(PDO::FETCH_ASSOC);

            if (empty($countReq)) {
                $res = "empty";
            } else {
                if (
                    !empty($req['prow_req_school_card'])
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

    function getScholarLong($scholarCode){

        $statement=PWD()->prepare("SELECT
                                    prow_address_long
                                    From
                                    prow_scholar_address
                                    Where
                                    prow_scholar_code = :prow_scholar_code");
        $statement->execute([
            'prow_scholar_code' => $scholarCode
        ]);
        
        $count=$statement->rowCount();

        if ($count > 0) {
            
            $res=$statement->fetch(PDO::FETCH_ASSOC);
            
            return $res['prow_address_long'];

        } else {
            return null;
        } 

    }

    function getScholarLat($scholarCode){

        $statement=PWD()->prepare("SELECT
                                    prow_address_lat
                                    From
                                    prow_scholar_address
                                    Where
                                    prow_scholar_code = :prow_scholar_code");
        $statement->execute([
            'prow_scholar_code' => $scholarCode
        ]);
        
        $count=$statement->rowCount();

        if ($count > 0) {
            
            $res=$statement->fetch(PDO::FETCH_ASSOC);
            
            return $res['prow_address_lat'];

        } else {
            return null;
        } 

    }

    function selectScholarSkills($scholarCode){

        $stmt=PWD()->prepare("SELECT
                            *
                            FROM
                            prow_scholar_skills
                            Where
                            prow_scholar_code = :prow_scholar_code");
        $stmt->execute([
            'prow_scholar_code' => $scholarCode
        ]);

        return $stmt;

    }

    function createScholarSkill($scholarCode, $skillTypeId, $skill, $proficiency){

        $stmt=PWD()->prepare("INSERT INTO
                            prow_scholar_skills
                            (
                                prow_scholar_code,
                                prow_skill_type_id,
                                prow_skills,
                                prow_skills_proficiency
                            )
                            Values
                            (
                                :prow_scholar_code,
                                :prow_skill_type_id,
                                :prow_skills,
                                :prow_skills_proficiency
                            )");
        $stmt->execute([
            'prow_scholar_code' => $scholarCode,
            'prow_skill_type_id' => $skillTypeId,
            'prow_skills' => $skill,
            'prow_skills_proficiency' => $proficiency
        ]);

        if ($stmt) {
            return true;
        } else {
            return false;
        }
        
    }

    function removeScholarSkill($skillsId){

        $stmt=PWD()->prepare("DELETE FROM
                            prow_scholar_skills
                            Where
                            prow_skills_id = :prow_skills_id");
        $stmt->execute([
            'prow_skills_id' => $skillsId
        ]);

        if ($stmt) {
            return true;
        } else {
            return false;
        }
        
    }

    function selectScholarPendingApplication($scholarCode){

        $stmt=PWD()->prepare("SELECT
                            *
                            FROM
                            prow_scholar_app_logs
                            Where
                            prow_scholar_code = :prow_scholar_code
                            AND
                            prow_app_log_status != :prow_app_log_status
                            Order By
                            prow_scholar_app_logs_id
                            DESC LIMIT 1");
        $stmt->execute([
            'prow_scholar_code' => $scholarCode,
            'prow_app_log_status' => 1
        ]);

        return $stmt;

    }

    function selectScholarGrades($scholarCode){

        $stmt=PWD()->prepare("SELECT
                            *
                            FROM
                            prow_scholar_grades
                            Where
                            prow_scholar_code = :prow_scholar_code
                            Order By
                            prow_scholar_grades_sy DESC,  
                            prow_scholar_grades_semester ASC");
        $stmt->execute([
            'prow_scholar_code' => $scholarCode
        ]);

        return $stmt;

    }

    function selectScholarType($scholarCode){

        $stmt=PWD()->prepare("SELECT
                            *
                            FROM
                            prow_scholar
                            Where
                            prow_scholar_code = :prow_scholar_code
                            ");
        $stmt->execute([
            'prow_scholar_code' => $scholarCode
        ]);
        $res=$stmt->fetch(PDO::FETCH_ASSOC);
        return $res['prow_account_type'];


    }
    function selectScholarGradesBySySem($scholarCode, $sy, $sem){

        $stmt=PWD()->prepare("SELECT
                            *
                            FROM
                            prow_scholar_grades
                            Where
                            prow_scholar_code = :prow_scholar_code
                            AND
                            prow_scholar_grades_semester = :prow_scholar_grades_semester
                            AND
                            prow_scholar_grades_sy = :prow_scholar_grades_sy
                            Order By
                            prow_subject_id
                            ASC");
        $stmt->execute([
            'prow_scholar_code' => $scholarCode,
            'prow_scholar_grades_sy' => $sy,
            'prow_scholar_grades_semester' => $sem
        ]);

        return $stmt;

    }

    function checkScholarSubject($scholarCode, $subjectId, $sy, $sem){

        $stmt=PWD()->prepare("SELECT
                            prow_scholar_grades_id
                            FROM
                            prow_scholar_grades
                            Where
                            prow_scholar_code = :prow_scholar_code
                            AND
                            prow_subject_id = :prow_subject_id
                            AND
                            prow_scholar_grades_sy = :prow_scholar_grades_sy
                            AND
                            prow_scholar_grades_semester = :prow_scholar_grades_semester");
        $stmt->execute([
            'prow_scholar_code' => $scholarCode,
            'prow_subject_id' => $subjectId,
            'prow_scholar_grades_sy' => $sy,
            'prow_scholar_grades_semester' => $sem
        ]);

        $count=$stmt->fetch(PDO::FETCH_ASSOC);

        return $count;

    }

    function createScholarGrade($scholarCode, $sy, $sem, $subjectId, $grade){

        $stmt=PWD()->prepare("INSERT INTO 
                            prow_scholar_grades
                            (
                                prow_scholar_code, 
                                prow_subject_id, 
                                prow_scholar_grades_semester, 
                                prow_scholar_grades_sy, 
                                prow_scholar_grades_percent, 
                                prow_scholar_grades_created, 
                                prow_scholar_grades_updated
                            )
                            Values
                            (
                                :prow_scholar_code, 
                                :prow_subject_id, 
                                :prow_scholar_grades_semester, 
                                :prow_scholar_grades_sy, 
                                :prow_scholar_grades_percent, 
                                NOW(), 
                                NOW()
                            )");
        $stmt->execute([
            'prow_scholar_code' => $scholarCode,
            'prow_subject_id' => $subjectId,
            'prow_scholar_grades_semester' => $sem,
            'prow_scholar_grades_sy' => $sy,
            'prow_scholar_grades_percent' => $grade
        ]);

        if ($stmt) {
            return true;
        } else {
            return false;
        }
        
    }

    function updateScholarGrade($grade, $gradeId){

        $stmt=PWD()->prepare("UPDATE
                            prow_scholar_grades
                            SET
                            prow_scholar_grades_percent = :prow_scholar_grades_percent, 
                            prow_scholar_grades_updated = NOW()
                            Where
                            prow_scholar_grades_id = :prow_scholar_grades_id
                            ");
        $stmt->execute([
            'prow_scholar_grades_percent' => $grade,
            'prow_scholar_grades_id' => $gradeId
        ]);

        if ($stmt) {
            return true;
        } else {
            return false;
        }

    }

    function removeScholarSubject($gradeId){

        $stmt=PWD()->prepare("DELETE FROM
                            prow_scholar_grades
                            Where
                            prow_scholar_grades_id = :prow_scholar_grades_id
                            ");
        $stmt->execute([
            'prow_scholar_grades_id' => $gradeId
        ]);

        if ($stmt) {
            return true;
        } else {
            return false;
        }

    }

    function selectScholarGradeByid($gradeId){

        $stmt=PWD()->prepare("SELECT
                            *
                            FROM
                            prow_scholar_grades
                            Where
                            prow_scholar_grades_id = :prow_scholar_grades_id
                            ");
        $stmt->execute([
            'prow_scholar_grades_id' => $gradeId
        ]);

        return $stmt;

    }

    function selectTribe(){

        $statement=PWD()->prepare("SELECT
                                        *
                                        FROM
                                        prow_list_tribe
                                        Order By
                                        prow_tribe_name
                                        ASC");
        $statement->execute();

        return $statement;

    }

    function updateReportCard($scholarCode, $appLogCode, $reportCardFile){

        $stmt=PWD()->prepare("UPDATE
                            prow_scholar_requirements
                            SET
                            prow_req_school_card = :prow_req_school_card
                            Where
                            prow_scholar_code = :prow_scholar_code
                            AND
                            prow_scholar_app_logs_code = :prow_scholar_app_logs_code
                            ");
        $stmt->execute([
            'prow_req_school_card' => $reportCardFile,
            'prow_scholar_code' => $scholarCode,
            'prow_scholar_app_logs_code' => $appLogCode
        ]);

        if ($stmt) {
            return true;
        } else {
            return false;
        }

    }

?>