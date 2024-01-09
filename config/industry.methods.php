<?php
     //Count all Active industry
     function countIndustryActive(){
            $statement=PWD()->prepare("SELECT
                                            prow_industry_id
                                            FROM
                                            prow_industry
                                            Where
                                            prow_industry_acct_status = :prow_industry_acct_status");
            $statement->execute([
                'prow_industry_acct_status' => 1
            ]);

        $count=$statement->rowCount();

        return $count;

    }

    function industryFullAddress($heiID){
        $statement=PWD()->prepare("SELECT
                                        *
                                        From
                                        prow_industry
                                        Where
                                        prow_industry_id = :prow_industry_id");
        $statement->execute([
            'prow_industry_id' => $heiID
        ]);

        $res=$statement->fetch(PDO::FETCH_ASSOC);
        return $res['prow_industry_street'].", ".$res['prow_industry_barangay'].", ".$res['prow_industry_municipality'];
    }

?>