<?php  
    require '../../config/includes.php';
    require '_session.php';

    $gradeId = clean_int($_GET['gradeId']);

    if ($gradeId != "") {

        $request = removeScholarSubject($gradeId);

        if ($request == true) {
            header("location: fillupForm_old2?note=subject_removed");
        } else {
            header("location: fillupForm_old2?note=error");
        }

    } else {
        header("location: fillupForm_old2?note=invalid");
    }
    
?>