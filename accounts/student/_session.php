<?php 

	session_start([
        'cookie_lifetime' => 86400,
    ]);

    
	if(!isset($_SESSION['hotkopi_prow_session_id'])){
        header("location: ../../login");
    }else if ($_SESSION['hotkopi_prow_session_type'] != 4) {
        header("location: ../../login");
    }

    $user_id = $_SESSION['hotkopi_prow_session_id'];
    $user_type = $_SESSION['hotkopi_prow_session_type'];

    //find user
    $getuser=PWD()->prepare("SELECT 
                                *
                                From 
                                prow_users 
                                Where 
                                prow_user_id = :session_user_id");
    $getuser->execute([
        'session_user_id' => $user_id
    ]);
    $row=$getuser->fetch(PDO::FETCH_ASSOC);

    //user
    $userFullname = $row['prow_user_fullname'];
    $scholarCode = $row['prow_scholar_code'];
    $userUsername = $row['prow_user_uname'];
    $userId = $row['prow_user_id'];
    $userType = $row['prow_user_type'];
    $userImg = $row['prow_user_picture'];
    $userPassword = $row['prow_user_pword'];

    //dates
    $datenow = date("Y-m-d H:i:s");
    $onlydate = date("Y-m-d");

    //lock
    $currentPage = str_replace('.php', '', basename($_SERVER['PHP_SELF']));

    // if ($currentPage == "lockscreen") {
    //     if ($row['prow_user_lock'] == 0) {
    //         header("location: ./");
    //     }
    // } else {
    //     if ($row['prow_user_lock'] == 0) {
    //         //do nothing
    //     } else {
    //         header("location: lockscreen");
    //     }
    // }

?>