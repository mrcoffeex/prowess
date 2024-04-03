<?php  
    require '../../config/includes.php';
    require '_session.php';

    //redirects

    if (isset($_POST['scholarInformationBtn'])) {

        $scholarCode = clean_string($_POST['scholarCode']);
        $schoolId = clean_string($_POST['schoolId']);
        $scholarName = clean_string($_POST['scholarName']);
        $school = clean_int($_POST['school']);
        $status = clean_string($_POST['status']);
        $municipality = clean_int($_POST['municipality']);
        $schoolYear = clean_string($_POST['schoolYear']);
        $semester = clean_int($_POST['semester']);

        if (empty($scholarCode) && empty($schoolId) && empty($scholarName) && empty($school) && empty($status) && empty($municipality) && empty($schoolYear) && empty($semester)) {
            header("location: scholarInformation?note=empty_search");
        } else {
            header("location: scholarInformationSearch?scholarCode=" . $scholarCode . "&schoolId=" . $schoolId . "&scholarName=" . $scholarName . "&school=" . $school . "&status=" . $status . "&municipality=" . $municipality . "&schoolYear=" . $schoolYear . "&semester=" . $semester);
        }

    }

    if (isset($_POST['scholarPendingBtn'])) {

        $scholarCode = clean_string($_POST['scholarCode']);
        $schoolId = clean_string($_POST['schoolId']);
        $scholarName = clean_string($_POST['scholarName']);
        $school = clean_int($_POST['school']);
        $municipality = clean_int($_POST['municipality']);
        $schoolYear = clean_string($_POST['schoolYear']);
        $semester = clean_int($_POST['semester']);

        if (empty($scholarCode) && empty($schoolId) && empty($scholarName) && empty($school) && empty($municipality) && empty($schoolYear) && empty($semester)) {
            header("location: scholarPending?note=empty_search");
        } else {
            header("location: scholarPendingSearch?scholarCode=" . $scholarCode . "&schoolId=" . $schoolId . "&scholarName=" . $scholarName . "&school=" . $school . "&municipality=" . $municipality . "&schoolYear=" . $schoolYear . "&semester=" . $semester);
        }

    }

    if (isset($_POST['nameSearch'])) {

        $nameSearch = clean_string($_POST['nameSearch']);
        $userType = clean_string($_POST['userType']);

        if (empty($nameSearch) && empty($userType)) {
            header("location: systemUsers?note=empty_search");
        } else {
            header("location: systemUserSearch?nameSearch=" . $nameSearch . "&userType=" . $userType);
        }

    }

    if (isset($_POST['searchAnn'])) {

        $searchAnn = clean_string($_POST['searchAnn']);

        if (empty($searchAnn)) {
            header("location: announcements?note=empty_search");
        } else {
            header("location: announcementSearch?searchAnn=" . $searchAnn);
        }

    }
?>