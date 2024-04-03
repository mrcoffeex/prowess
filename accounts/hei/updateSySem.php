<?php  

    require '../../config/includes.php';
    require '_session.php';

    if (isset($_POST['syFrom'])) {
        $syFrom = clean_string($_POST['syFrom']);
        $syTo = clean_string($_POST['syTo']);
        $semester = clean_string($_POST['semester']);

        $sysem = $syFrom . "-" . $syTo . "-" . $semester; 

        $request = updateHeiSY($sysem, $heiId);

        if ($request == true) {
            header("location: settings?note=updated");
        } else {
            header("location: settings?note=error");
        }
        
    } else {
        header("location: settings?note=invalid");
    }
    

?>