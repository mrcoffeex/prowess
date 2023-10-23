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

?>