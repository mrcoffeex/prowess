<?php
    require '../../config/includes.php';
    require '_session.php';

    $heiName = clean_string ($_POST['heiName']);
    $heiContactPerson = clean_string ($_POST['heiContactPerson']);
    $heiContactNo = clean_string ($_POST['heiContactNo']);
    $heiContactEmail = $_POST['heiContactEmail'];
    $heimunicipality = clean_string ($_POST['heimunicipality']);
    $heibarangay = clean_string ($_POST['heibarangay']);
    $heiStreet = $_POST['heiStreet'];
    $heiZip = clean_string ($_POST['heiZip']);
    $HeiLong =$_POST['HeiLong'];
    $HeiLat =$_POST['HeiLat'];

    if(isset($_FILES['heilogo'])){

        $imgDir = imageUpload("heilogo", "../../imagebank/");

        if ($imgDir=="error") {

            header("location: hei_profile_edit?".my_rand_str(100)."&hei_id=".$heiId."&note=invalid_upload");

        } else {

            if ($imgDir == "empty" || $imgDir == "") {
                $imgDir = getHeiImageById($heiId);
            } else {
                $imgDir = $imgDir;
            }
            
            $request = updateHeiImage($imgDir,$heiId);
            $request2 = updateHeiInfo($heiId,
                                    $heiName,
                                    $heiContactPerson,
                                    $heiContactNo,
                                    $heiContactEmail,
                                    $heimunicipality,
                                    $heibarangay,
                                    $heiStreet,
                                    $heiZip,
                                    $HeiLat,
                                    $HeiLong);

            if ($request==true && $request2==true) {
                header("location: hei_profile_edit?".my_rand_str(100)."&hei_id=".$heiId."&note=updated");
            } else {
                header("location: hei_profile_edit?".my_rand_str(100)."&hei_id=".$heiId."&note=error");
            }
            
        }
        
    }else{
        header("location: hei_profile_edit?".my_rand_str(100)."&hei_id=".$heiId."&note=invalid");
    }

?>
