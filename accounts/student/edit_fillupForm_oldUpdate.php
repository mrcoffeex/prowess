<?php  
    
    require '../../config/includes.php';
    require '_session.php';

    if (isset($_POST['scholarBloodType'])) {

        $scholarLastName = clean_string ($_POST['scholarLastName']);
        $scholarFirstName = clean_string ($_POST['scholarFirstName']);
        $scholarMiddleName = clean_string ($_POST['scholarMiddleName']);
        $scholarSuffix = $_POST['scholarSuffix'];
        $scholarGender = clean_string ($_POST['scholarGender']);
        $scholarCs = clean_string ($_POST['scholarCs']);
        $scholarBday = $_POST['scholarBday'];
        $scholarBPlace = clean_string ($_POST['scholarBPlace']);
        $scholarContact = $_POST['scholarContact'];


        $scholarBloodType =$_POST['scholarBloodType'];
        $scholarHeight = clean_float ($_POST['scholarHeight']);
        $scholarWeight = clean_float ($_POST['scholarWeight']);
        $scholarReligion = $_POST['scholarReligion'];
        $scholarPWD = clean_string ($_POST['scholarPWD']);
        $scholarSingleP = clean_string ($_POST['scholarSingleP']);
        $scholarSingleID = clean_string ($_POST['scholarSingleID']);
        $scholarTribe = clean_string ($_POST['scholarTribe']);
        $scholarFatherName = clean_string ($_POST['scholarFatherName']);
        $scholarFatherCont = clean_string ($_POST['scholarFatherCont']);
        $scholarFatherOccu = clean_string ($_POST['scholarFatherOccu']);
        $scholarMotherName = clean_string ($_POST['scholarMotherName']);
        $scholarMotherCont = clean_string ($_POST['scholarMotherCont']);
        $scholarMotherOccu = clean_string ($_POST['scholarMotherOccu']);
        $scholarGuardianName = clean_string ($_POST['scholarGuardianName']);
        $scholarGuardianCont = clean_string ($_POST['scholarGuardianCont']);
        $scholarGuardianOccu = clean_string ($_POST['scholarGuardianOccu']);
        $scholarIncome = clean_string ($_POST['scholarIncome']);

        $scholarLong = clean_string ($_POST['scholarLong']);
        $scholarLat = clean_string ($_POST['scholarLat']);
        $scholarStreet = clean_string ($_POST['scholarStreet']);
        $multiStepsMunicipality = clean_string ($_POST['multiStepsMunicipality']);
        $multiStepsBarangay = clean_string ($_POST['multiStepsBarangay']);
        $scholarZip = clean_string ($_POST['scholarZip']);

        if (empty($_POST['scholarTalent'])) {
            $scholarTalentArray = "";
        } else {
            $scholarTalentArray = implode(',', $_POST['scholarTalent']);
        }
        
        $appLogCode= randInt(6);
        $filledupStatus = 0;
            //update scholar basic info
            $request1 = updateScholarBasicInfo(
                $scholarCode, 
                $scholarLastName, 
                $scholarFirstName, 
                $scholarMiddleName, 
                $scholarSuffix, 
                $scholarGender,
                $scholarCs, 
                $scholarBday, 
                $scholarBPlace, 
                $scholarContact
            );

            //update personal info
            $request2 = updateScholarInformation(
                $scholarCode, 
                $scholarHeight, 
                $scholarWeight, 
                $scholarBloodType, 
                $scholarReligion, 
                $scholarTalentArray,
                $scholarFatherName, 
                $scholarFatherCont, 
                $scholarFatherOccu, 
                $scholarMotherName, 
                $scholarMotherCont, 
                $scholarMotherOccu, 
                $scholarGuardianName, 
                $scholarGuardianCont, 
                $scholarGuardianOccu,
                $scholarIncome,
                $scholarPWD,
                $scholarSingleP,
                $scholarSingleID,
                $scholarTribe
            );

            //update scholar address
            $request3 = updateScholarAddress(
                $scholarLong,
                $scholarLat,
                $scholarStreet,
                $multiStepsMunicipality,
                $multiStepsBarangay,
                $scholarZip,
                $scholarCode

            );
        

      

        if ($request1 == true && $request2 == true && $request3 == true) {
            header("location: fillupForm_old2?note=updated");
        } else {
            header("location: edit_fillupForm_old?note=error");
        }
    
    } else {
        header("location: edit_fillupForm_old?note=invalid");
    }


?>