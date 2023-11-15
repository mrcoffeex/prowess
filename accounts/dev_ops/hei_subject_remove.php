<?php  
    
    require '../../config/includes.php';
    require '_session.php';
    
    $hei_id = clean_string($_GET['hei_id']);
    $course_id = clean_string($_GET['course_id']);
    $subject_id = clean_string($_GET['subject_id']);

    if (!empty($subject_id)) {

        $request = removeHeiCourseSubject($subject_id);      

        if ($request == true) {
            header("location: hei_subjects?hei_id=$hei_id&course_id=$course_id&note=removed");
        } else {
            header("location: hei_subjects?hei_id=$hei_id&course_id=$course_id&note=error");
        }
    
        
    } else {
        header("location: hei_subjects?hei_id=$hei_id&course_id=$course_id&note=invalid");
    }
    

?>