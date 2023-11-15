<?php  
    
    require '../../config/includes.php';
    require '_session.php';
   
    $hei_id = clean_string($_GET['hei_id']);

    if (isset($_POST['listcourse'])) {
        $listcourse = clean_int($_POST['listcourse']);
        $courseName = getCourse($listcourse);


        $request1 = createHeiCourse(
            $hei_id, 
            $listcourse, 
            $courseName           
        );      

        if ($request1 == true) {
            header("location: hei_profile?hei_id=$hei_id&note=added");
        } else {
            header("location: hei_profile?hei_id=$hei_id&note=duplicate");
        }
    
        
    } else {
        # code...
    }
    

?>