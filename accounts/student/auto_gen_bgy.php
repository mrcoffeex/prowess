<?php  
    require '../../config/includes.php';

    $municipalityname = $_GET['municipalityId'];

    $municipalityId = getMunicipalityID($municipalityname);

    $brgys="";

    $getBrgy=selectBarangaybyMunId($municipalityId);
    while ($brgy=$getBrgy->fetch(PDO::FETCH_ASSOC)) {
        
        $brgys .= ",".$brgy['prow_brgy_name'];

    }

    $res = substr($brgys, 1);

    print($res);
?>