<?php  
    require '../../config/includes.php';
    
        $heiCID = clean_int($_GET['heiCID']);
        $subCode = $_GET['subCode'];
        // $getcourse = selectHeiCourseDesc($heiCID,$subCode);

        // if ($course = $getcourse->fetch(PDO::FETCH_ASSOC)) {
        //     $courseValue = $course['prow_subject_desc'];
        // } else {
        //     $courseValue = 'default_value';
        // }

        print($heiCID);
    
?>