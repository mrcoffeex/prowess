<?php  
    require '../../config/includes.php';

    $courseId = clean_int($_GET['courseId']);

    $courses="";

    $getcourse=selectCoursebyHeiId($courseId);
    while ($course=$getcourse->fetch(PDO::FETCH_ASSOC)) {
        
        $courses .= ",".$course['prow_course_name'];

    }

    $res = substr($courses, 1);

    print($res);
?>