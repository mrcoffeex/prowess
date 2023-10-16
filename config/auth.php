<?php  
	session_start();

	require 'includes.php';

	if(isset($_POST['prowUsername'])){

		$prowUsername = clean_string($_POST['prowUsername']);
		$prowPassword = clean_string(md5($_POST['prowPassword']));
			
        $statement=PWD()->prepare("SELECT * From prow_users Where 
                                prow_user_uname = :prowUsername 
                                AND 
                                prow_user_pword = :keypassword");
        $statement->execute([ 
            'prowUsername' => $prowUsername,
            'keypassword' => $prowPassword
        ]);
                                
        $count=$statement->rowCount();
        $row=$statement->fetch(PDO::FETCH_ASSOC);

        $_SESSION['hotkopi_prow_session_id'] = $row['prow_user_id'];
        $_SESSION['hotkopi_prow_session_type'] = $row['prow_user_type'];

        if($count > 0){
            if ($row['prow_user_status'] == 0) {

                //reset unlock account
                // unlockUser($row['prow_user_id']);
                
                if($row['prow_user_type'] == 0){
    
                    createLog("Login", $prowUsername, "auth");
                    header("location: ../accounts/dev_ops/");
    
                }else if($row['prow_user_type'] == 4){
    
                    createLog("Login", $prowUsername, "auth");
                    header("location: ../accounts/student/");
    
                }else{
                    createLog("Login Attempt", $prowUsername, "attempt");
                    session_destroy();
                    header("location: ../login?note=noexist&uname=$prowUsername");
                }

            }else{
                createLog("Login Attempt", $prowUsername, "attempt");
                session_destroy();
                header("location: ../login?note=suspended&uname=$prowUsername");
            }

        }else{
            createLog("Login Attempt", $prowUsername, "attempt");
            session_destroy();
            header("location: ../login?note=noexist&uname=$prowUsername");
        }
	}
		
?>