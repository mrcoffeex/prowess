<?php  

    require '../../config/includes.php';
    require '_session.php';

    $annId = clean_int($_GET['annId']);

    $getAnn=selectAnnById($annId);
    $ann=$getAnn->fetch(PDO::FETCH_ASSOC);

    if (isset($_POST['annType'])) {

        $annType = clean_string($_POST['annType']);
        $annExpire = clean_string($_POST['annExpire']);
        $annTitle = clean_string($_POST['annTitle']);
        $annContent = clean_string($_POST['annContent']);
        $annImage = imageUpload("annImage", "../../imagebank/");

        if ($annImage == "error") {

            header("location: announcementEdit?rand".randStrInt(100)."&annId=$annId&note=invalid_upload");
				
		} else {

            if ($annImage == "empty" || $annImage == "") {
                $annImage = $ann['prow_ann_image'];
            } else {
                $annImage = $annImage;
            }

            $request = updateAnn($annType, $annExpire, $annImage, $annTitle, $annContent, $userId, $annId);

            if ($request == true) {
                header("location: announcementEdit?rand".randStrInt(100)."&annId=$annId&note=updated");
            } else {
                header("location: announcementEdit?rand".randStrInt(100)."&annId=$annId&note=error");
            }

        }

    } else {
        header("location: announcementEdit?rand".randStrInt(100)."&annId=$annId&note=invalid");
    }
    

?>