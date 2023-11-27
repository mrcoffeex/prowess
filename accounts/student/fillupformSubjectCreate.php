<?php  
    require '../../config/includes.php';
    require '_session.php';

    if (isset($_POST['gradeSY'])) {
        
        $gradeSY = clean_string($_POST['gradeSY']);
        $gradeSem = clean_int($_POST['gradeSem']);
        $gradeSubjectId = clean_int($_POST['gradeSubjectId']);
        $gradeScore = clean_float($_POST['gradeScore']);

        if (checkScholarSubject($scholarCode, $gradeSubjectId, $gradeSY, $gradeSem) > 0) {
            
            header("location: fillupForm_old2?note=duplicate");

        } else {

            $request = createScholarGrade($scholarCode, $gradeSY, $gradeSem, $gradeSubjectId, $gradeScore);

            if ($request == true) {
                header("location: fillupForm_old3?note=subject_added");
            } else {
                header("location: fillupForm_old3?note=error");
            }

        }

    } else {
        header("location: fillupForm_old3?note=invalid");
    }
    
?>