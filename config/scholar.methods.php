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
        $scholarCode = date('Y') . randStrInt(17);

        $createUser = createUser($userCode, $scholarCode, $fullname, $uname, $pword);
        $createScholar = createScholarProfile($scholarCode, $lname, $fname, $mname, $suffix, $gender, $cs, $birthday, $birthplace, $contact, $email);
        $createScholarAddress = createScholarAddress($scholarCode, $addressDescription, $barangay, $municipality, $province, $zipcode);

        //send email

        sendOTP($userCode, $email, "phpmailer/PHPMailerAutoload.php");

        if ($createUser == true && $createScholar == true && $createScholarAddress == true) {
            return true;
        } else {
            return false;
        }

    }

?>