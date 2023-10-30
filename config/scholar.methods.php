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

    function getScholarSchool($profileCode){
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

        if (empty($res['prow_hei_id'])) {
            return "Not yet enrolled";
        } else {         
            return getSchoolName($res['prow_hei_id']);
        }

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

        if (empty($res['prow_course_id'])) {
            return "Not yet enrolled";
        } else {         
            return getCourseName($res['prow_course_id']);
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
            return getCourseName($res['prow_yr_lvl']);
        }

    }

    
    function getSchoolName($heiID){
        $statement=PWD()->prepare("SELECT
                                        *
                                        From
                                        prow_hei
                                        Where
                                        prow_hei_id = :prow_hei_id");
        $statement->execute([
            'prow_hei_id' => $heiID
        ]);

        $res=$statement->fetch(PDO::FETCH_ASSOC);
        
        if (empty($res['prow_hei_name'])) {
            return "Not yet enrolled";
        } else {
            return $res['prow_hei_name'];
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

    function selectCoursebyHeiId($courseId){

        $statement=PWD()->prepare("SELECT
                                        *
                                        FROM
                                        prow_hei_course
                                        WHERE
                                        prow_hei_id = :prow_hei_id
                                        Order By
                                        prow_course_name
                                        ASC");
        $statement->execute([
            'prow_hei_id' => $courseId
        ]);

        return $statement;

    } 
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

?>