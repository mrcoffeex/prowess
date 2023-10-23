<?php
     //Count all current date - sort by time notifications

     function countActiveNotification(){
            $statement=PWD()->prepare("SELECT
                                            prow_jobs_id
                                            FROM
                                            prow_jobs
                                            Where
                                            prow_jobs_status = :prow_jobs_status");
            $statement->execute([
                'prow_jobs_status' => 1
            ]);

        $count=$statement->rowCount();

        return $count;

    }

?>