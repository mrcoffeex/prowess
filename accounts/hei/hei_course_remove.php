<?php  
    
    require '../../config/includes.php';
    require '_session.php';
    
    $courseId = clean_string($_GET['courseId']);

    if (!empty($courseId)) {

        $request = removeHeiCourseAndSubjects($courseId);      

        if ($request == true) {
            header("location: heiProfile?note=course_removed");
        } else {
            header("location: heiProfile?note=error");
        }
        
    } else {
        header("location: heiProfile?note=invalid");
    }
    

?>