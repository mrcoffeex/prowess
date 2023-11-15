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
    function checkHeiCourseDuplicate($hei_id,$listcourse){
        $statement=PWD()->prepare("SELECT
                                    *
                                    FROM
                                    prow_hei_course
                                    Where
                                    prow_hei_id = :prow_hei_id
                                    AND
                                    prow_course_id = :prow_course_id");
        $statement->execute([
            'prow_hei_id' => $hei_id,
            'prow_course_id' => $listcourse,
        ]);

        $count=$statement->rowCount();

        return $count;
    }

    function createHeiCourse($hei_id,$listcourse, $courseName){


        if (checkHeiCourseDuplicate($hei_id,$listcourse) > 0) {
            //add alert for duplication
        } else {
                $stmt=PWD()->prepare("INSERT INTO prow_hei_course 
                    (
                        prow_hei_id, 
                        prow_course_id, 
                        prow_course_name
                    ) 
                    VALUES
                    (
                        :prow_hei_id, 
                        :prow_course_id, 
                        :prow_course_name
                    )");
            $stmt->execute([
                    'prow_hei_id' => $hei_id, 
                    'prow_course_id' => $listcourse, 
                    'prow_course_name' => $courseName
            ]);

            if($stmt){
                return true;
            }else{
                return false;
            }
        }
        

       

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

    function selectCoursebyHeiId($courseId){

        $statement=PWD()->prepare("SELECT
                                        *
                                        FROM
                                        prow_hei_course
                                        WHERE
                                        prow_hei_id = :prow_hei_id
                                        Order By
                                        prow_course_name
                                        ASC");
        $statement->execute([
            'prow_hei_id' => $courseId
        ]);

        return $statement;

    } 

    function getSchoolName($heiID){
        
        $statement=PWD()->prepare("SELECT
                                        *
                                        From
                                        prow_hei
                                        Where
                                        prow_hei_id = :prow_hei_id");
        $statement->execute([
            'prow_hei_id' => $heiID
        ]);

        $res=$statement->fetch(PDO::FETCH_ASSOC);
        
        if (empty($res['prow_hei_name'])) {
            return "";
        } else {
            return $res['prow_hei_name'];
        }

    }

    
    function getScholarSchool($profileCode){
        $statement=PWD()->prepare("SELECT
                                        *
                                        From
                                        prow_scholar_app_logs
                                        Where
                                        prow_scholar_code = :prow_scholar_code");
        $statement->execute([
            'prow_scholar_code' => $profileCode
        ]);
        $res=$statement->fetch(PDO::FETCH_ASSOC);

        if (empty($res['prow_hei'])) {
            return "Not yet enrolled";
        } else {         
            return getSchoolName($res['prow_hei']);
        }

    }

    function heiFullAddress($heiID){
        $statement=PWD()->prepare("SELECT
                                        *
                                        From
                                        prow_hei
                                        Where
                                        prow_hei_id = :prow_hei_id");
        $statement->execute([
            'prow_hei_id' => $heiID
        ]);

        $res=$statement->fetch(PDO::FETCH_ASSOC);
        return $res['prow_hei_street'].", ".$res['prow_hei_barangay'].", ".$res['prow_hei_municipality'];
    }

    function getHeiLong($heiID){
        $statement=PWD()->prepare("SELECT
                                        *
                                        From
                                        prow_hei
                                        Where
                                        prow_hei_id = :prow_hei_id");
        $statement->execute([
            'prow_hei_id' => $heiID
        ]);

        $res=$statement->fetch(PDO::FETCH_ASSOC);
        return $res['prow_hei_long'];

    }

    function getHeiLat($heiID){
        $statement=PWD()->prepare("SELECT
                                        *
                                        From
                                        prow_hei
                                        Where
                                        prow_hei_id = :prow_hei_id");
        $statement->execute([
            'prow_hei_id' => $heiID
        ]);

        $res=$statement->fetch(PDO::FETCH_ASSOC);
        return $res['prow_hei_lat'];

    }

    function selectHEIProfile($heiID){
        $statement=PWD()->prepare("SELECT
                                        *
                                        From
                                        prow_hei
                                        Where
                                        prow_hei_id = :prow_hei_id");
        $statement->execute([
            'prow_hei_id' => $heiID
        ]);

        
        return $statement;

    }


    function heiStatus($heiID){
         $statement=PWD()->prepare("SELECT
                                        *
                                        From
                                        prow_hei
                                        Where
                                        prow_hei_id = :prow_hei_id");
        $statement->execute([
            'prow_hei_id' => $heiID
        ]);

        $res=$statement->fetch(PDO::FETCH_ASSOC);
        $hei_status = $res['prow_hei_acct_status'];

        if ($hei_status==0){
            $stat="Inactive";
        }else if($hei_status==1){
            $stat="Active";
        }

        return $stat;
    }

    function getHei_Joined($heiID){
        $statement=PWD()->prepare("SELECT
                                       prow_hei_created
                                       From
                                       prow_hei
                                       Where
                                       prow_hei_id = :prow_hei_id");
       $statement->execute([
           'prow_hei_id' => $heiID
       ]);

       $res=$statement->fetch(PDO::FETCH_ASSOC);
       
       $scholar_joined = $res['prow_hei_created'];
   
       $joined= separateMonthYear($scholar_joined);

       return $joined;
   }

   function selectCoursebyHeiIds($heiID){

    $statement=PWD()->prepare("SELECT
                                *
                                FROM
                                prow_hei_course
                                WHERE
                                prow_hei_id = :prow_hei_id
                                Order By
                                prow_course_name
                                ASC");
    $statement->execute([
        'prow_hei_id' => $heiID
    ]);

    return $statement;

    } 

    function countCoursebyHei($heiID){

        $stmt=PWD()->prepare("SELECT 
                            prow_course_id
                            FROM
                            prow_hei_course
                            Where
                            prow_hei_id = :prow_hei_id");
        $stmt->execute([
            'prow_hei_id' => $heiID
        ]);

        $count=$stmt->rowCount();

        return $count;

    }

    
    function selectCourseList(){

        $statement=PWD()->prepare("SELECT
                                        *
                                        FROM
                                        prow_list_course
                                        Order By
                                        prow_course_name
                                        ASC");
        $statement->execute();

        return $statement;

    }

    
    function selectHeiCourse($courseId){

        $statement=PWD()->prepare("SELECT
                                *
                                FROM
                                prow_hei_course
                                Where
                                prow_hei_course_id = :prow_hei_course_id");
        $statement->execute([
            'prow_hei_course_id' => $courseId
        ]);

        return $statement;

    }

    function selectHeiCourseSubjects($courseId){

        $statement=PWD()->prepare("SELECT
                                *
                                FROM
                                prow_hei_subjects
                                Where
                                prow_hei_course_id = :prow_hei_course_id
                                Order By
                                prow_subject_code
                                ASC");
        $statement->execute([
            'prow_hei_course_id' => $courseId
        ]);

        return $statement;

    }

    function createHeiCourseSubject($courseId, $subjectCode, $subjectDesc, $subjectUnits){

        $statement=PWD()->prepare("INSERT INTO prow_hei_subjects
                                ( 
                                    prow_hei_course_id, 
                                    prow_subject_code, 
                                    prow_subject_desc, 
                                    prow_subject_units, 
                                    prow_subject_created, 
                                    prow_subject_updated
                                ) 
                                VALUES
                                (
                                    :prow_hei_course_id, 
                                    :prow_subject_code, 
                                    :prow_subject_desc, 
                                    :prow_subject_units, 
                                    NOW(), 
                                    NOW()
                                )");
        $statement->execute([
            'prow_hei_course_id' => $courseId,
            'prow_subject_code' => $subjectCode,
            'prow_subject_desc' => $subjectDesc,
            'prow_subject_units' => $subjectUnits
        ]);

        if ($statement) {
            return true;
        } else {
            return true;
        }
        
    }

    function updateHeiCourseSubject($subjectCode, $subjectDesc, $subjectUnits, $subjectId){

        $statement=PWD()->prepare("UPDATE prow_hei_subjects
                                SET
                                prow_subject_code = :prow_subject_code, 
                                prow_subject_desc = :prow_subject_desc, 
                                prow_subject_units = :prow_subject_units,  
                                prow_subject_updated = NOW()
                                Where
                                prow_subject_id = :prow_subject_id
                                ");
        $statement->execute([
            'prow_subject_code' => $subjectCode,
            'prow_subject_desc' => $subjectDesc,
            'prow_subject_units' => $subjectUnits,
            'prow_subject_id' => $subjectId
        ]);

        if ($statement) {
            return true;
        } else {
            return true;
        }
        
    }

    function removeHeiCourseSubject($subjectId){

        $statement=PWD()->prepare("DELETE FROM prow_hei_subjects
                                Where
                                prow_subject_id = :prow_subject_id
                                ");
        $statement->execute([
            'prow_subject_id' => $subjectId
        ]);

        if ($statement) {
            return true;
        } else {
            return true;
        }
        
    }



?>