<?php  
    
    require '../../config/includes.php';
    require '_session.php';
    
    $hei_id = clean_string($_GET['hei_id']);
    $course_id = clean_string($_GET['course_id']);
    $subject_id = clean_string($_GET['subject_id']);

    if (isset($_POST['subjectCode'])) {
        $subjectCode = clean_string($_POST['subjectCode']);
        $subjectDesc = clean_string($_POST['subjectDesc']);
        $subjectUnits = clean_int($_POST['subjectUnits']);

        $request = updateHeiCourseSubject(
            $subjectCode, 
            $subjectDesc, 
            $subjectUnits, 
            $subject_id            
        );      

        if ($request == true) {
            header("location: hei_subjects?hei_id=$hei_id&course_id=$course_id&note=updated");
        } else {
            header("location: hei_subjects?hei_id=$hei_id&course_id=$course_id&note=error");
        }
    
        
    } else {
        header("location: hei_subjects?hei_id=$hei_id&course_id=$course_id&note=invalid");
    }
    

?>