<?php  

    function createUser($userCode, $scholarCode, $fullname, $uname, $pword){

        $stmt=PWD()->prepare("INSERT INTO prow_users
                            (
                                prow_user_code, 
                                prow_scholar_code, 
                                prow_user_fullname, 
                                prow_user_uname, 
                                prow_user_pword,
                                prow_user_type, 
                                prow_user_status,
                                prow_user_created, 
                                prow_user_updated
                            ) 
                            VALUES
                            (
                                :prow_user_code, 
                                :prow_scholar_code, 
                                :prow_user_fullname, 
                                :prow_user_uname, 
                                :prow_user_pword,
                                :prow_user_type, 
                                :prow_user_status,
                                NOW(), 
                                NOW()
                            )");
        $stmt->execute([
            'prow_user_code' => $userCode, 
            'prow_scholar_code' => $scholarCode, 
            'prow_user_fullname' => $fullname, 
            'prow_user_uname' => $uname, 
            'prow_user_pword' => $pword,
            'prow_user_type' => 4, 
            'prow_user_status' => 0
        ]);

        if ($stmt) {
            return true;
        } else {
            return false;
        }
        
    }

    function getUserType($userType){

        if ($userType == 0){
            $res = "SuperAdmin";
        } else if ($userType == 1){
            $res = "Admin";
        } else if ($userType == 2){
            $res = "Staff";
        } else if ($userType == 3){
            $res = "HEI";
        } else if ($userType == 4){
            $res = "Scholar";
        } else if ($userType == 5){
            $res = "Industry";
        }else{
            $res = "";
        }

        return $res;

    }

    function getUserStatus($userType){

        if ($userType == 0){
            $res = "Active";
        } else if ($userType == 1){
            $res = "Suspended";
        }else{
            $res = "";
        }

        return $res;

    }

    function updateUser($scholarCode, $username, $password, $image){
        

        $stmt = PWD()->prepare("UPDATE prow_users 
                                SET 
                                prow_user_uname= :username,
                                prow_user_pword= :userPassword,
                                prow_user_picture= :userImage,
                                prow_user_updated = NOW()
                                WHERE 
                                prow_scholar_code= :scholarCode");

        $stmt->execute([
            'username' => $username,
            'userPassword' => $password,
            'userImage' => $image,
            'scholarCode' => $scholarCode
        ]);

        if ($stmt) {
            return true;
        } else {
            return false;
        }
        
    }

    function updateUserStatus($userId, $status){
        
        $stmt=PWD()->prepare("UPDATE prow_users 
                            SET 
                            prow_user_status = :prow_user_status,
                            prow_user_updated = NOW()
                            WHERE 
                            prow_user_id = :prow_user_id");

        $stmt->execute([
            'prow_user_status' => $status,
            'prow_user_id' => $userId
        ]);

        if ($stmt) {
            return true;
        } else {
            return false;
        }
        
    }

    function imageUpdate($input, $location){

        $errors= array();
        $file_name = $_FILES[$input]['name'];

        if (empty($file_name)) {
            $res = "empty";
        } else {
            $file_size =$_FILES[$input]['size'];
            $file_tmp =$_FILES[$input]['tmp_name'];
            $file_type=$_FILES[$input]['type'];
            $file_extension = pathinfo($_FILES[$input]['name'], PATHINFO_EXTENSION);

            $final_filename = date("YmdHis")."_".$file_name;

            $extensions= array("jpeg","jpg","png");

            if(in_array($file_extension, $extensions)=== false){
                $errors[]="extension not allowed, please choose a JPEG or PNG file.";
            }

            if($file_size > 26000000){
                $errors[]='File size must be excately 10 MB';
            }

            $file_directory = $location."".$final_filename;

            if(empty($errors)==true){

                move_uploaded_file($file_tmp, $file_directory);
                $res = $final_filename;

            }else{

                if ($file_tmp == "") {
                    $res = "empty";
                }else{
                    $res = "error";
                }

            }
        }

        return $res;

    }


?>