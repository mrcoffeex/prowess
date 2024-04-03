<?php  

    require '../../config/includes.php';
    require '_session.php';

    $appLogId = clean_string($_GET['appLogId']);

    if (isset($_POST['fundingStatus'])) {

        $fundingStatus = clean_string($_POST['fundingStatus']);
        $dateRelease = clean_string($_POST['dateRelease']);

        if ($fundingStatus == 0) {
            $dateRelease = "0000-00-00";
        } else {
            $dateRelease = $dateRelease;
        }
        
        $request = updateScholarFundingStatus($appLogId, $fundingStatus, $dateRelease);

        if ($request == true) {
            header("location: scholarFunding?note=updated");
        } else {
            header("location: scholarFunding?note=error");
        }
        

    } else {
        header("location: scholarFunding?note=invalid");
    }
    
?>