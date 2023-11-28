<?php  
    require '../../config/includes.php';
    require '_session.php';

    $getPending=selectScholarPendingApplication($scholarCode);
    $pending=$getPending->fetch(PDO::FETCH_ASSOC);

    $appLogCode = $pending['prow_app_log_code'];

    if (isset($_FILES['reportCardFile'])) {

        $reportCardFile = imageUpload("reportCardFile", "../../imagebank/");

        if ($reportCardFile == "error") {
            header("location: fillupForm_old3?note=invalid_upload");
        } else {

            $request = updateReportCard($scholarCode, $appLogCode, $reportCardFile);

            if ($request == true) {
                header("location: fillupForm_old3?note=uploaded");
            } else {
                header("location: fillupForm_old3?note=error");
            }
        }

    } else {
        header("location: fillupForm_old3?note=invalid");
    }
    
?>