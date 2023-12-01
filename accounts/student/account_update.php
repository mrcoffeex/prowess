<?php
require '../../config/includes.php';
require '_session.php';

$username = $_POST['username'];
$password = md5($_POST['password']);
$curPass = md5($_POST['currentPassword']);

if($curPass == $userPassword){
    $imgDir = imageUpdate("userImage", "../../imagebankProfiles/");
    if($imgDir == 'empty'){
        $updateProfile = updateUser($scholarCode, $username, $password, $userImg);
    }else{
        $updateProfile = updateUser($scholarCode, $username, $password, $imgDir);
    }

    if($updateProfile == true){
        echo 'success';
    }else{
        echo 'error';
    }   
}else{
    echo 'Wrong pass';

}







?>
