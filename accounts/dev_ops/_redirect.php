<?php  
    require '../../config/includes.php';
    require '_session.php';

    //redirects

    if (isset($_POST['scholarCode'])) {

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
?>