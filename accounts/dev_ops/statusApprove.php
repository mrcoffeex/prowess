<?php

    require '../../config/includes.php';
    require '_session.php';

    $scholarCode = clean_string($_GET['scholarCode']);
    $request=updateScholarAppLogStatus($scholarCode, 1);

    if ($request == true) {
        updateScholarStatus($scholarCode, 1);
        header("location: scholar_profile?rand=". randStrInt(100) ."&scholarCode=$scholarCode&note=approve");
    } else {
        header("location: scholar_profile?rand=". randStrInt(100) ."&scholarCode=$scholarCode&note=error");
    }

?>