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

?>