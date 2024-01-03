<?php  

    require '../../config/includes.php';
    require '_session.php';

    if (isset($_POST['annType'])) {

        $annType = clean_string($_POST['annType']);
        $annExpire = clean_string($_POST['annExpire']);
        $annTitle = clean_string($_POST['annTitle']);
        $annContent = clean_string($_POST['annContent']);
        $annImage = imageUpload("annImage", "../../imagebank/");

        if ($annImage == "error") {

            header("location: announcementCreate?note=invalid_upload");
				
		} else {

            $request = createAnn($annType, $annExpire, $annImage, $annTitle, $annContent, $userId);

            if ($request == true) {
                header("location: announcementCreate?note=added");
            } else {
                header("location: announcementCreate?note=error");
            }

        }

    } else {
        header("location: announcementCreate?note=invalid");
    }
    

?>