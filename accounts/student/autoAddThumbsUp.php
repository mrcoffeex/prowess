<?php  

    require '../../config/includes.php';
    require '_session.php';

    $annId = clean_int($_GET['annId']);
    
    if (empty($annId)) {
        echo "invalid";
    } else {
        
        $request = createAnnLike($scholarCode, $annId);

        if ($request == true) {
            echo "success";
        } else {
            echo "error";
        }

    }
    

?>