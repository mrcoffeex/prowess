<?php  

    require '../../config/includes.php';
    require '_session.php';

    $scholarCode = clean_string($_GET['scholarCode']);
    updateScholarStatus($scholarCode, 1);
    header("location: scholar_profile?rand=" . my_rand_str(100) . "&scholarCode=$scholarCode&note=status_change");
    
?>