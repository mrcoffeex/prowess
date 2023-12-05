<?php
require '../../config/includes.php';
require '_session.php';

$heicode = $_POST['heiCode'];
$heidefimg = $_POST['defimage'];

if($curPass == $userPassword){
    $imgDir = imageUpdate("heilogo", "../../imagebankHeiLogo/");
    if($imgDir == 'empty'){
        $updateProfile = updateHei($heicoden, $userImg);
    }else{
        $updateProfile = updateHei($scholarCode, $imgDir);
    }

    if($updateProfile == true){
        header("location: hei_profile_edit?'".my_rand_str(100)."'&hei_id='".$heicode."'&note=updated");
    }else{
        header("location: hei_profile_edit?'".my_rand_str(100)."'&hei_id='".$heicode."'&note=error");
    }   
}

?>
