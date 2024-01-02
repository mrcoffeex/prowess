<?php  

    require '../../config/includes.php';
    require '_session.php';

    if (isset($_POST['annStatus'])) {

        $annStatus = clean_string($_POST['annStatus']);
        $annContent = clean_string($_POST['annContent']);
        $annImage = imageUpload("annImage", "../../imagebank/");

        if ($annImage == "error") {

            header("location: announcementCreate?note=invalid_upload");
				
		} else {

            

        }

    } else {
        header("location: announcementCreate?note=invalid");
    }
    

?>