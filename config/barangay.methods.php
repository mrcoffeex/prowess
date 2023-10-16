<?php 

    //barangays

    function selectBarangaybyMunId($munId){

        $statement=PWD()->prepare("SELECT
                                        *
                                        FROM
                                        prow_barangay
                                        WHERE
                                        prow_mun_id = :prow_mun_id
                                        Order By
                                        prow_brgy_name
                                        ASC");
        $statement->execute([
            'prow_mun_id' => $munId
        ]);

        return $statement;

    } 

?>