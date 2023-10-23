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
        $createScholar = createScholarProfile($scholarCode, $lname, $fname, $mname, $suffix, $gender, $cs, $birthday, $birthplace, $contact, $email, $acc_status);
        $createScholarAddress = createScholarAddress($scholarCode, $addressDescription, $barangay, $municipality, $province, $zipcode);

        //send email

        sendVerification($userCode, $email, "phpmailer/PHPMailerAutoload.php");

        if ($createUser == true && $createScholar == true && $createScholarAddress == true) {
            return true;
        } else {
            return false;
        }

    }


    //Select ALL Scholars
    function selectScholar(){

        $statement=PWD()->prepare("SELECT
                                        *
                                        FROM
                                        prow_scholar");
        $statement->execute();

        return $statement;

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
                                        prow_scholar_hei_id
                                        From
                                        prow_scholar_academe
                                        Where
                                        prow_scholar_code = :prow_scholar_code");
        $statement->execute([
            'prow_scholar_code' => $profileCode
        ]);

        if ($statement == null){
            return $statement;
        }else{
            return null;
        }
        

    }




?>