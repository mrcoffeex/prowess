<?php  
    
    require '../../config/includes.php';
    require '_session.php';

    if (isset($_POST['scholarBloodType'])) {
        $scholarBloodType =clean_string ($_POST['scholarBloodType']);
        $scholarHeight = clean_float ($_POST['scholarHeight']);
        $scholarWeight = clean_float ($_POST['scholarWeight']);
        $scholarReligion = clean_string ($_POST['scholarReligion']);
        $scholarFatherName = clean_string ($_POST['scholarFatherName']);
        $scholarFatherCont = clean_int ($_POST['scholarFatherCont']);
        $scholarFatherOccu = clean_string ($_POST['scholarFatherOccu']);
        $scholarMotherName = clean_string ($_POST['scholarMotherName']);
        $scholarMotherCont = clean_int ($_POST['scholarMotherCont']);
        $scholarMotherOccu = clean_string ($_POST['scholarMotherOccu']);
        $scholarGuardianName = clean_string ($_POST['scholarGuardianName']);
        $scholarGuardianCont = clean_int ($_POST['scholarGuardianCont']);
        $scholarGuardianOccu = clean_string ($_POST['scholarGuardianOccu']);
        $scholarSchoolID = clean_int ($_POST['scholarSchoolID']);
        $enrollemntschooName = clean_string ($_POST['enrollemntschooName']);
        $enrollmentCourse = clean_string ($_POST['enrollmentCourse']);
        $enrollmentYearLevel = clean_string ($_POST['enrollmentYearLevel']);
        $enrollmentSemester = clean_string ($_POST['enrollmentSemester']);
        $enrollmentSchoolYear = clean_string ($_POST['enrollmentSchoolYear']);

        $enrollmentFormFile = imageUpload("enrollmentFormFile", "../../imagebank/");
        $birthCertFile = imageUpload("birthCertFile", "../../imagebank/");
        $lowIncomeFile = imageUpload("lowIncomeFile", "../../imagebank/");
        $reportCardFile = imageUpload("reportCardFile", "../../imagebank/");
        $endorsementFile = imageUpload("endorsementFile", "../../imagebank/");

        if ($enrollmentFormFile == "error" || $birthCertFile == "error" || $lowIncomeFile == "error" || $reportCardFile == "error" || $endorsementFile == "error") {

            header("location: profile?rand=" . my_rand_str(30) . "&note=invalid_upload");
				
		}else{}

        if (empty($_POST['scholarTalent'])) {
            $scholarTalentArray = "";
        } else {
            $scholarTalentArray = implode(',', $_POST['scholarTalent']);
        }
        
        $appLogCode= randInt(6);
        $filledupStatus = 1;
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
            $scholarGuardianOccu
        );

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
            $filledupStatus
        );

        $request4 = addrequirements(
            $scholarCode,
            $appLogCode, 
            $enrollmentFormFile, 
            $birthCertFile, 
            $lowIncomeFile, 
            $reportCardFile, 
            $endorsementFile
        );
        

       

        if ($request1 == true && $request2 == true && $request3 == true  && $request4 == true) {
            header("location: studentProfile?scholarCode=$scholarCode&app_code=$appLogCode");
        } else {
            echo "error";
        }
    
        
    } else {
        # code...
    }
    

?>