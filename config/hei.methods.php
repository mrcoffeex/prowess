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

    function createHEI($heicode, $heiname, $heicontactperson, $heicontact, $heiemail, $heiarradress, $heibarangay, $heimunicipality, $heiprovince, $heizip){

    $stmt=PWD()->prepare("INSERT INTO prow_hei 
                        (
                            prow_hei_code, 
                            prow_hei_name, 
                            prow_hei_logo,
                            prow_hei_cover_photo,
                            prow_hei_contact_person, 
                            prow_hei_contact, 
                            prow_hei_email, 
                            prow_hei_street, 
                            prow_hei_barangay, 
                            prow_hei_municipality, 
                            prow_hei_province, 
                            prow_hei_zip, 
                            prow_hei_lat, 
                            prow_hei_long, 
                            prow_hei_created,
                            prow_hei_updated
                        ) 
                        VALUES
                        (
                            :prow_hei_code, 
                            :prow_hei_name, 
                            :prow_hei_logo,
                            :prow_hei_cover_photo,
                            :prow_hei_contact_person, 
                            :prow_hei_contact, 
                            :prow_hei_email, 
                            :prow_hei_street, 
                            :prow_hei_barangay, 
                            :prow_hei_municipality, 
                            :prow_hei_province, 
                            :prow_hei_zip, 
                            :prow_hei_lat, 
                            :prow_hei_long, 
                            NOW(),
                            NOW()
                        )");
            $stmt->execute([
                'prow_hei_code' => $heicode, 
                'prow_hei_name' => $heiname, 
                'prow_hei_logo' => "",
                'prow_hei_cover_photo' => "",
                'prow_hei_contact_person'=> $heicontactperson, 
                'prow_hei_contact' => $heicontact, 
                'prow_hei_email' => $heiemail, 
                'prow_hei_street' => $heiarradress, 
                'prow_hei_barangay' => $heibarangay, 
                'prow_hei_municipality' => $heimunicipality, 
                'prow_hei_province' => $heiprovince, 
                'prow_hei_zip' => $heizip, 
                'prow_hei_lat' => 0, 
                'prow_hei_long' => 0, 
            ]);

            if($stmt){
                return true;
            }else{
                return false;
            }
    }



?>