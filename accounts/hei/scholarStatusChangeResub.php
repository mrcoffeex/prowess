<?php  

    require '../../config/includes.php';
    require '_session.php';

    $scholarCode = clean_string($_GET['scholarCode']);

    if (isset($_POST['comment'])) {
        
        $comment = clean_string($_POST['comment']);
        
        $request = createUserNotification($scholarCode, $comment);
        
        if ($request == true) {
            updateScholarStatus($scholarCode, 2);
            header("location: scholar_profile?rand=" . my_rand_str(100) . "&scholarCode=$scholarCode&note=status_change");
        } else {
            header("location: scholar_profile?rand=" . my_rand_str(100) . "&scholarCode=$scholarCode&note=error");
        }
    
    } else {
        header("location: scholar_profile?rand=" . my_rand_str(100) . "&scholarCode=$scholarCode&note=invalid");
    }
    
?>