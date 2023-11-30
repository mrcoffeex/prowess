<?php  
    require '../../config/includes.php';
    require '_session.php';

    if (isset($_POST['skillCategory'])) {
        
        $skillCategory = clean_int($_POST['skillCategory']);
        $skills = clean_string($_POST['skills']);
        $proficiency = clean_string($_POST['proficiency']);

        $request = createScholarSkill($scholarCode, $skillCategory, $skills, $proficiency);

        if ($request == true) {
            header("location: studentProfile2?note=skill_added");
        } else {
            header("location: studentProfile2?note=error");
        }

    } else {
        header("location: studentProfile2?note=invalid");
    }
    
?>