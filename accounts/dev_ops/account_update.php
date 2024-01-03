<?php
    require '../../config/includes.php';
    require '_session.php';

    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $curPass = md5($_POST['currentPassword']);

    if($curPass == $userPassword){
        if($imgDir == 'empty'){
            $updateProfile = updateUser($scholarCode, $username, $password, $userImg);
        }else{
            $updateProfile = updateUser($scholarCode, $username, $password, $imgDir);
        }

        if($updateProfile == true){
            header("location: account_settings?note=updated");
        }else{
            header("location: account_settings?note=error");
        }
    }else{
        header("location: account_settings?note=incorrect_pass");
    }
?>
