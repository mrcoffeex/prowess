<?php  
    
    require 'config/includes.php';

    $usercode = clean_string($_GET['usercode']);
    $otp = clean_string($_GET['otp']);

    $request = verifyAccount($usercode, $otp);

    header("location: verifyStatus?token=" . randStrInt(50) . "&status=" . $request);

?>