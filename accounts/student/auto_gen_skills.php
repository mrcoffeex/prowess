<?php  
    require '../../config/includes.php';

    $skillTypeId = clean_int($_GET['skillTypeId']);

    $skills="";

    $getSkills=selectSkillsByType($skillTypeId);
    while ($skill=$getSkills->fetch(PDO::FETCH_ASSOC)) {
        
        $skills .= ",".$skill['prow_skill_name'];

    }

    $res = substr($skills, 1);

    print($res);
?>