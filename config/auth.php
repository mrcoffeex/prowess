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

        $scholarCode = $row['prow_scholar_code'];

        $_SESSION['hotkopi_prow_session_id'] = $row['prow_user_id'];
        $_SESSION['hotkopi_prow_session_type'] = $row['prow_user_type'];

        if($count > 0){
            if ($row['prow_user_verify'] == 1 ) {
              
                if($row['prow_user_type'] == 0){
    
                    createLog("Login", $prowUsername, "auth");
                    header("location: ../accounts/dev_ops/");
    
                }else if($row['prow_user_type'] == 4){
    
                    createLog("Login", $prowUsername, "auth");
                    header("location: ../accounts/student/");
    
                }elseif($row['prow_user_type'] == 1){
    
                    createLog("Login", $prowUsername, "auth");
                    header("location: ../accounts/staff/");
    
                }elseif($row['prow_user_type'] == 2){
    
                    createLog("Login", $prowUsername, "auth");
                    header("location: ../accounts/industry/");
    
                }elseif($row['prow_user_type'] == 3){
    
                    createLog("Login", $prowUsername, "auth");
                    header("location: ../accounts/hei/");
    
                }else{
                    createLog("Login Attempt", $prowUsername, "attempt");
                    session_destroy();
                    header("location: ../login?note=noexist&uname=$prowUsername");
                }

            }else{

                echo "Verify first the email";
                header("location: ../login?note=noverify&uname=$prowUsername");
                session_destroy();
            }

        }else{
            createLog("Login Attempt", $prowUsername, "attempt");
            session_destroy();
            header("location: ../login?note=noexist&uname=$prowUsername");
        }
	}
		
?>