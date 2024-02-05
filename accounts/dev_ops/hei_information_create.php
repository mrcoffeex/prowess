<?php

    include '../../config/includes.php';

    if (isset($_POST['heiname'])) {
        
        $heicode = date('YmdHis') . randStrInt(10);
        $heiname = $_POST['heiname'];
        $heicontactperson = $_POST['heicontactperson'];
        $heicontact = $_POST['heicontact'];
        $heiemail = $_POST['heiemail'];
        $heibarangay = $_POST['heibarangay'];
        $heimunicipality = $_POST['heimunicipality'];
        $heiprovince = $_POST['heiprovince'];
        $heizip = $_POST['heizip'];
        $heiarradress = $_POST['heiaddress'];
        $heiLong = clean_string ($_POST['heiLong']);
        $heiLat = clean_string ($_POST['heiLat']);   
        
        $userCode = date('YmdHis') . randStrInt(10);
        $heiCreds = md5(randStr(8));
        $scholarCode = 0;

        $request = createHEI(
            $heicode, 
            $heiname, 
            $heicontactperson, 
            $heicontact, 
            $heiemail, 
            $heiarradress, 
            $heibarangay, 
            $heimunicipality, 
            $heiprovince, 
            $heizip,
            $heiLat,
            $heiLong
        );

        $request2 = createUser($userCode, $scholarCode, $heicode, 0, $heiname, $heiCreds, $heiCreds, 3, 1);

        if($request == true && $request2 == true){
            header("location: hei_information?note=added");
        }else{
            header("location: hei_information?note=error");
        }
    } else {
        header("location: hei_information?note=invalid");
    }
    

    
?>