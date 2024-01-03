<?php
    require '../../config/includes.php';
    require '_session.php';

    if(isset($_FILES['userImage'])){

        $imgDir = imageUpload("userImage", "../../imagebank/");

        if ($imgDir=="error") {

            header("location: account_settings?note=invalid_upload");

        } else {
            
            $request = updateUserImage($imgDir,$userId);
            $request2 = updateUserImage2($imgDir,$scholarCode);

            if ($request==true and $request2==true) {
                header("location: account_settings?note=updated");
            } else {
                header("location: account_settings?note=error");
            }
            
        }
        
    }else{
        header("location: account_settings?note=invalid");
    }

   
?>
