<?php

    include '../../config/includes.php';


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

    if($request == true){
        header("location: hei_information");
    }else{
        echo "error";
    }
?>