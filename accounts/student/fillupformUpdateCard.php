<?php  
    require '../../config/includes.php';
    require '_session.php';

    $getPending=selectScholarPendingApplication($scholarCode);
    $pending=$getPending->fetch(PDO::FETCH_ASSOC);

    $appLogCode = $pending['prow_app_log_code'];

    if (isset($_FILES['reportCards'])) {

        $uploadDir = "../../imagebank/";
        $maxPhotos = 5; 
        $uploadedFiles = [];
        $errors = "";

        if (count($_FILES['reportCards']['name']) <= $maxPhotos) { 
            
            foreach ($_FILES['reportCards']['name'] as $key => $name) {

                $tempName = $_FILES['reportCards']['tmp_name'][$key];
                $targetFilePath = $uploadDir . basename($name);
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

                if (getimagesize($tempName)) {
                    
                    if ($_FILES['reportCards']['size'][$key] <= 5 * 1024 * 1024) {
                        
                        $newFileName = uniqid() . '.' . $fileType;

                        if (move_uploaded_file($tempName, $uploadDir . $newFileName)) {
                            
                            $uploadedFiles[] = $newFileName;

                        } else {
                            $errors = "error_upload";
                            header("location: fillupForm_old3?note=error_upload");
                        }
                    } else {
                        $errors = "invalid_size";
                        header("location: fillupForm_old3?note=invalid_size");
                    }
                } else {
                    $errors = "invalid";
                    header("location: fillupForm_old3?note=invalid");
                }
            }

            if ($errors == "") {

                $implodedFileNames = implode(',', $uploadedFiles);
  
                $request = updateReportCard($scholarCode, $appLogCode, $implodedFileNames);

                if ($request == true) {
                    header("location: fillupForm_old3?note=uploaded");
                } else {
                    header("location: fillupForm_old3?note=error");
                }

            } else {
                header("location: fillupForm_old3?note=$errors");
            }

        } else {
            header("location: fillupForm_old3?note=max_photos");
        }

    } else {
        header("location: fillupForm_old3?note=invalid");
    }

    
?>