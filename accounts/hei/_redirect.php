<?php  
    require '../../config/includes.php';
    require '_session.php';

    //redirects

    if (isset($_POST['scholarCode'])) {

        $scholarCode = clean_string($_POST['scholarCode']);
        $schoolId = clean_string($_POST['schoolId']);
        $scholarName = clean_string($_POST['scholarName']);
        $status = clean_string($_POST['status']);
        $municipality = clean_int($_POST['municipality']);
        $schoolYear = clean_string($_POST['schoolYear']);
        $semester = clean_int($_POST['semester']);

        if (empty($scholarCode) && empty($schoolId) && empty($scholarName) && empty($status) && empty($municipality) && empty($schoolYear) && empty($semester)) {
            header("location: scholarList?note=empty_search");
        } else {
            header("location: scholarListSearch?scholarCode=" . $scholarCode . "&scholarName=" . $scholarName . "&schoolId=" . $schoolId . "&status=" . $status . "&municipality=" . $municipality . "&schoolYear=" . $schoolYear . "&semester=" . $semester);
        }

    }

    if (isset($_POST['scholarCodePending'])) {

        $scholarCode = clean_string($_POST['scholarCodePending']);
        $schoolId = clean_string($_POST['schoolId']);
        $scholarName = clean_string($_POST['scholarName']);
        $municipality = clean_int($_POST['municipality']);
        $schoolYear = clean_string($_POST['schoolYear']);
        $semester = clean_int($_POST['semester']);

        if (empty($scholarCode) && empty($schoolId) && empty($scholarName) && empty($municipality) && empty($schoolYear) && empty($semester)) {
            header("location: scholarListPending?note=empty_search");
        } else {
            header("location: scholarListPendingSearch?scholarCode=" . $scholarCode . "&schoolId=" . $schoolId . "&scholarName=" . $scholarName . "&municipality=" . $municipality . "&schoolYear=" . $schoolYear . "&semester=" . $semester);
        }

    }
?>