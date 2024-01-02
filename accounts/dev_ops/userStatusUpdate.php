<?php

    require '../../config/includes.php';
    require '_session.php';

    $userId = clean_string($_GET['userId']);
    $pn = clean_string($_GET['pn']);
    $nameSearch = clean_string($_GET['nameSearch']);
    $userType = clean_string($_GET['userType']);

    if ($nameSearch != "" || $userType != "") {
        $redirect1 = "location: systemUsers?rand=". randStrInt(100) ."&pn=$pn&nameSearch=$nameSearch&userType=$userType&note=updated";
        $redirect2 = "location: systemUsers?rand=". randStrInt(100) ."&pn=$pn&nameSearch=$nameSearch&userType=$userType&note=error";
        $redirect3 = "location: systemUsers?rand=". randStrInt(100) ."&pn=$pn&nameSearch=$nameSearch&userType=$userType&note=invalid";
    } else {
        $redirect1 = "location: systemUsers?rand=". randStrInt(100) ."&pn=$pn&note=updated";
        $redirect2 = "location: systemUsers?rand=". randStrInt(100) ."&pn=$pn&note=error";
        $redirect3 = "location: systemUsers?rand=". randStrInt(100) ."&pn=$pn&note=invalid";
    }

    if (isset($_POST['userStatus'])) {

        $userStatus = clean_string($_POST['userStatus']);
        
        $request=updateUserStatus($userId, $userStatus);
    
        if ($request == true) {
            header($redirect1);
        } else {
            header($redirect2);
        }
        
    } else {
        header($redirect3);
    }
    

?>