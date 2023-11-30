<?php  
    require '../../config/includes.php';
    require '_session.php';

    $skills_id = clean_int($_GET['skills_id']);

    if (!empty($skills_id)) {

        $request = removeScholarSkill($skills_id);

        if ($request == true) {
            header("location: studentProfile2?note=skill_removed");
        } else {
            header("location: studentProfile2?note=error");
        }

    } else {
        header("location: studentProfile2?note=invalid");
    }
    
?>