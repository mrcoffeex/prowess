<?php  
    
    require '../../config/includes.php';
    require '_session.php';
   

    if (isset($_POST['listcourse'])) {
        $listcourse = clean_int($_POST['listcourse']);
        $courseName = getCourse($listcourse);


        $request1 = createHeiCourse(
            $heiId, 
            $listcourse, 
            $courseName           
        );      

        if ($request1 == true) {
            header("location: hei_profile?hei_id=$heiId&note=added");
        } else {
            header("location: hei_profile?hei_id=$heiId&note=duplicate");
        }
    
        
    } else {
        # code...
    }
    

?>