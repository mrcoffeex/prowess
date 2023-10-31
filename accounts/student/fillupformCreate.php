<?php  
    
    include '../../config/includes.php';

    if (isset($_POST['scholarBloodType'])) {
        $scholarBloodType = $_POST['scholarBloodType'];
        $scholarHeight = $_POST['scholarHeight'];
        $scholarWeight = $_POST['scholarWeight'];
        $scholarReligion = $_POST['scholarReligion'];
        $scholarFatherName = $_POST['scholarFatherName'];
        $scholarFatherCont = $_POST['scholarFatherCont'];
        $scholarFatherOccu = $_POST['scholarFatherOccu'];
        $scholarMotherName = $_POST['scholarMotherName'];
        $scholarMotherCont = $_POST['scholarMotherCont'];
        $scholarMotherOccu = $_POST['scholarMotherOccu'];
        $scholarGuardianName = $_POST['scholarGuardianName'];
        $scholarGuardianCont = $_POST['scholarGuardianCont'];
        $scholarGuardianOccu = $_POST['scholarGuardianOccu'];
        $scholarSchoolID = $_POST['scholarSchoolID'];
        $enrollemntschooName = $_POST['enrollemntschooName'];
        $enrollmentCourse = $_POST['enrollmentCourse'];
        $enrollmentYearLevel = $_POST['enrollmentYearLevel'];
        $birthCertFile = $_POST['birthCertFile'];
        $lowIncomeFile = $_POST['lowIncomeFile'];
        $reportCardFile = $_POST['reportCardFile'];
        $endorsementFile = $_POST['endorsementFile'];
        



        if (empty($_POST['scholarTalent'])) {
            $scholarTalentArray = "";
        } else {
            $scholarTalentArray = implode(',', $_POST['scholarTalent']);
        }
        
    
        
    } else {
        # code...
    }
    

?>