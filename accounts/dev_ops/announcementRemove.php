<?php  

    require '../../config/includes.php';
    require '_session.php';

    $annId = clean_int($_GET['annId']);

    if (empty($annId)) {
        
        header("location: announcementEdit?rand".randStrInt(100)."&annId=$annId&note=invalid");

    } else {
        
        $request = removeAnn($annId);

        if ($request == true) {
            header("location: announcements?note=removed");
        } else {
            header("location: announcementEdit?rand".randStrInt(100)."&annId=$annId&note=error");
        }

    }
    

?>