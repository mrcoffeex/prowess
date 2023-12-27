<?php

    require '../../config/includes.php';
    require '_session.php';

    $scholarCode = clean_string($_GET['scholarCode']);
    $request=updateScholarAppLogStatus($scholarCode, 3);

    if ($request == true) {
        updateScholarStatus($scholarCode, 2);
        header("location: scholar_profile?rand=". randStrInt(100) ."&scholarCode=$scholarCode&note=reject"); 
    } else {
        header("location: scholar_profile?rand=". randStrInt(100) ."&scholarCode=$scholarCode&note=error");
    }

?>