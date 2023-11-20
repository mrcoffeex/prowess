<?php  
    
    require '../../config/includes.php';
    require '_session.php';

    if (isset($_POST['scholarBloodType'])) {

        $scholarBloodType =clean_string ($_POST['scholarBloodType']);
        $scholarHeight = clean_float ($_POST['scholarHeight']);
        $scholarWeight = clean_float ($_POST['scholarWeight']);
        $scholarReligion = clean_string ($_POST['scholarReligion']);
        $scholarFatherName = clean_string ($_POST['scholarFatherName']);
        $scholarFatherCont = clean_string ($_POST['scholarFatherCont']);
        $scholarFatherOccu = clean_string ($_POST['scholarFatherOccu']);
        $scholarMotherName = clean_string ($_POST['scholarMotherName']);
        $scholarMotherCont = clean_string ($_POST['scholarMotherCont']);
        $scholarMotherOccu = clean_string ($_POST['scholarMotherOccu']);
        $scholarGuardianName = clean_string ($_POST['scholarGuardianName']);
        $scholarGuardianCont = clean_string ($_POST['scholarGuardianCont']);
        $scholarGuardianOccu = clean_string ($_POST['scholarGuardianOccu']);
        $scholarSchoolID = clean_int ($_POST['scholarSchoolID']);
        $enrollemntschooName = clean_string ($_POST['enrollemntschooName']);
        $enrollmentCourse = clean_string ($_POST['enrollmentCourse']);
        $enrollmentYearLevel = clean_string ($_POST['enrollmentYearLevel']);
        $enrollmentSemester = clean_string ($_POST['enrollmentSemester']);
        $enrollmentSchoolYear = clean_string ($_POST['enrollmentSchoolYear']);
        $scholarIncome = clean_string ($_POST['scholarIncome']);
        $scholarLong = clean_string ($_POST['scholarLong']);
        $scholarLat = clean_string ($_POST['scholarLat']);

        if (empty($_POST['scholarTalent'])) {
            $scholarTalentArray = "";
        } else {
            $scholarTalentArray = implode(',', $_POST['scholarTalent']);
        }
        
        $appLogCode= randInt(6);
        $filledupStatus = 0;

        if (checkScholarInformation($scholarCode) == true) {
            $request1 = updateScholarInformation(
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
                $scholarIncome
            );
        } else {
            $request1 = addScholarInformation(
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
                $scholarIncome
            );
        }

        $request2 = addScholarEnrollment(
            $scholarCode, 
            $appLogCode,
            $enrollemntschooName, 
            $enrollmentCourse, 
            $enrollmentYearLevel, 
            $enrollmentSchoolYear, 
            $enrollmentSemester
        );

        $request3 = updateScholarSchoolID(
            $scholarSchoolID,
            $filledupStatus,
            $scholarCode

        );

        $request4 = addrequirements(
            $scholarCode,
            $appLogCode, 
            "", 
            "", 
            "", 
            "", 
            ""
        );

        $request5 = updateScholarCoordinates($scholarCode, $scholarLong, $scholarLat);

        if ($request1 == true && $request2 == true && $request3 == true && $request4 == true && $request5 == true) {
            header("location: fillupForm_old2?note=updated");
        } else {
            header("location: fillupForm_old?note=error");
        }
    
    } else {
        header("location: fillupForm_old?note=invalid");
    }
    

?>