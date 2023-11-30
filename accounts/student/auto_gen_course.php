<?php  
    require '../../config/includes.php';

    $courseId = clean_int($_GET['courseId']);

    $courses="";

    $getcourse=selectCoursebyHeiId($courseId);
    while ($course=$getcourse->fetch(PDO::FETCH_ASSOC)) {
        
        $courses .= ",<option value='".$course['prow_hei_course_id']."'>".$course['prow_course_name']."</option>";

    }

    $res = substr($courses, 1);

    print($res);
?>