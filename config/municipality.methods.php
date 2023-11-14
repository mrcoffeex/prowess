<?php 

    //method for municipalities
    function selectMunicipalities(){

        $statement=PWD()->prepare("SELECT
                                        *
                                        FROM
                                        prow_municipalities
                                        Order By
                                        prow_mun_name
                                        ASC");
        $statement->execute();

        return $statement;

    }

    function getMunicipalityName($mun_id){
        
        $statement=PWD()->prepare("SELECT
                                        *
                                        From
                                        prow_municipalities
                                        Where
                                        prow_mun_id = :prow_mun_id");
        $statement->execute([
            'prow_mun_id' => $mun_id
        ]);

        $res=$statement->fetch(PDO::FETCH_ASSOC);

        if (!empty($res['prow_mun_name'])) {
            return $res['prow_mun_name'];
        } else {
            return "";
        }

    }

    function getScholarMuni($profileCode){
        $statement=PWD()->prepare("SELECT
                                        *
                                        From
                                        prow_scholar_address
                                        Where
                                        prow_scholar_code = :prow_scholar_code");
        $statement->execute([
            'prow_scholar_code' => $profileCode
        ]);

        $res=$statement->fetch(PDO::FETCH_ASSOC);

        return $res['prow_address_municipality'];
    }


    function getMunicipalityID($munName){
        $statement=PWD()->prepare("SELECT
                                        *
                                        From
                                        prow_municipalities
                                        Where
                                        prow_mun_name = :prow_mun_name");
        $statement->execute([
            'prow_mun_name' => $munName
        ]);

        $res=$statement->fetch(PDO::FETCH_ASSOC);

        if (!empty($res['prow_mun_id'])) {
            return $res['prow_mun_id'];
        } else {
            return "";
        }
    }

    
?>