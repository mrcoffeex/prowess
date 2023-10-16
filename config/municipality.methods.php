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
    
?>