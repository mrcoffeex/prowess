<?php  
    require '../../config/includes.php';
    require '_session.php';

    $gradeId = clean_int($_GET['gradeId']);

    if (isset($_POST['gradeScore'])) {

        $gradeScore = clean_float($_POST['gradeScore']);

        $request = updateScholarGrade($gradeScore, $gradeId);

        if ($request == true) {
            header("location: fillupForm_old2?note=updated");
        } else {
            header("location: fillupForm_old2?note=error");
        }

    } else {
        header("location: fillupForm_old2?note=invalid");
    }
    
?>