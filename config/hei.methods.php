<?php 

    //method for municipalities
    function selectHei(){

        $statement=PWD()->prepare("SELECT
                                        *
                                        FROM
                                        prow_hei
                                        Order By
                                        prow_hei_name
                                        ASC");
        $statement->execute();

        return $statement;

    }

     //Count all Active HEI
     function countHEIActive(){
            $statement=PWD()->prepare("SELECT
                                            prow_hei_id
                                            FROM
                                            prow_hei
                                            Where
                                            prow_hei_acct_status = :prow_hei_acct_status");
            $statement->execute([
                'prow_hei_acct_status' => 1
            ]);

        $count=$statement->rowCount();

        return $count;

    }

?>