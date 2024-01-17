<?php  
    
    include 'config/includes.php';

    $multiStepsUsername = $_POST['multiStepsUsername'];
    $multiStepsEmail = $_POST['multiStepsEmail'];
    $multiStepsPass = md5($_POST['multiStepsPass']);
    $multiStepsFirstName = $_POST['multiStepsFirstName'];
    $multiStepsLastName = $_POST['multiStepsLastName'];
    $multiStepsMiddleName = $_POST['multiStepsMiddleName'];
    $multiStepsQualifier = $_POST['multiStepsQualifier'];
    $multiStepsCS = $_POST['multiStepsCS'];
    $multiStepsGender = $_POST['multiStepsGender'];
    $multiStepsBirthday = $_POST['multiStepsBirthday'];
    $multiStepsMobile = $_POST['multiStepsMobile'];
    $multiStepsBirthPlace = $_POST['multiStepsBirthPlace'];
    $multiStepsMunicipality = $_POST['multiStepsMunicipality'];
    $multiStepsBarangay = $_POST['multiStepsBarangay'];
    $multiStepsProvince = $_POST['multiStepsProvince'];
    $multiStepsZipCode = $_POST['multiStepsZipCode'];
    $multiStepsAddress = $_POST['multiStepsAddress'];

    $fullname = $multiStepsFirstName . " " . $multiStepsLastName;

    if (checkScholarDuplicate($multiStepsLastName, $multiStepsFirstName, $multiStepsMiddleName, $multiStepsBirthday, $multiStepsGender, $multiStepsCS, $multiStepsEmail) > 0) {

        echo "duplicate";

    } else {

        $request = signUpScholar(
            $fullname, 
            $multiStepsUsername, 
            $multiStepsPass, 
            $multiStepsLastName, 
            $multiStepsFirstName, 
            $multiStepsMiddleName, 
            $multiStepsQualifier, 
            $multiStepsGender, 
            $multiStepsCS, 
            $multiStepsBirthday, 
            $multiStepsBirthPlace, 
            $multiStepsMobile, 
            $multiStepsEmail, 
            $multiStepsAddress, 
            $multiStepsBarangay, 
            $multiStepsMunicipality, 
            $multiStepsProvince, 
            $multiStepsZipCode
        );

        // $request2=notifSignup();
    
        if ($request == true) {
            echo "success";
        } else {
            echo "error";
        }

    }

?>