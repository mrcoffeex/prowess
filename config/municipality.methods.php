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
        
        $mun_name = $res['prow_mun_name'];

        return $mun_name;


    }


    
?>