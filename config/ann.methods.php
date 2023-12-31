<?php  

    function createAnn($annType, $annExpire, $annImage, $annTitle, $annContent, $userId){

        $stmt=PWD()->prepare("INSERT INTO prow_announcements
                            (
                                prow_ann_type, 
                                prow_ann_expire, 
                                prow_ann_image, 
                                prow_ann_title, 
                                prow_ann_content, 
                                prow_user_id, 
                                prow_ann_created, 
                                prow_ann_updated
                            ) 
                            VALUES
                            (
                                :prow_ann_type, 
                                :prow_ann_expire, 
                                :prow_ann_image, 
                                :prow_ann_title, 
                                :prow_ann_content, 
                                :prow_user_id, 
                                NOW(), 
                                NOW()
                            )");
        $stmt->execute([
            'prow_ann_type' => $annType,
            'prow_ann_expire' => $annExpire,
            'prow_ann_image' => $annImage,
            'prow_ann_title' => $annTitle,
            'prow_ann_content' => $annContent,
            'prow_user_id' => $userId
        ]);

        if ($stmt) {
            return true;
        } else {
            return false;
        }
        
    }

    function updateAnn($annType, $annExpire, $annImage, $annTitle, $annContent, $userId, $annId){

        $stmt=PWD()->prepare("UPDATE prow_announcements
                            SET
                            prow_ann_type = :prow_ann_type, 
                            prow_ann_expire = :prow_ann_expire, 
                            prow_ann_image = :prow_ann_image, 
                            prow_ann_title = :prow_ann_title, 
                            prow_ann_content = :prow_ann_content, 
                            prow_user_id = :prow_user_id, 
                            prow_ann_updated = NOW()
                            Where
                            prow_ann_id =:prow_ann_id
                             ");
        $stmt->execute([
            'prow_ann_type' => $annType,
            'prow_ann_expire' => $annExpire,
            'prow_ann_image' => $annImage,
            'prow_ann_title' => $annTitle,
            'prow_ann_content' => $annContent,
            'prow_user_id' => $userId,
            'prow_ann_id' => $annId
        ]);

        if ($stmt) {
            return true;
        } else {
            return false;
        }
        
    }

    function removeAnn($annId){

        $stmt=PWD()->prepare("DELETE FROM prow_announcements
                            Where
                            prow_ann_id = :prow_ann_id");
        $stmt->execute([
            'prow_ann_id' => $annId
        ]);

        if ($stmt) {
            return true;
        } else {
            return false;
        }
        
    }

    function selectAnnById($annId){

        $stmt=PWD()->prepare("SELECT * FROM prow_announcements
                            Where
                            prow_ann_id = :prow_ann_id");
        $stmt->execute([
            'prow_ann_id' => $annId
        ]);

        return $stmt;

    }

    function createAnnLike($scholarCode, $annId){

        $stmt=PWD()->prepare("INSERT INTO prow_announcements_likes
                            (
                                prow_scholar_code, 
                                prow_ann_id, 
                                prow_like_created
                            )
                            Values
                            (
                                :prow_scholar_code, 
                                :prow_ann_id, 
                                NOW()
                            )");
        $stmt->execute([
            'prow_scholar_code' => $scholarCode,
            'prow_ann_id' => $annId
        ]);

        if ($stmt) {
            return true;
        } else {
            return false;
        }

    }

    function checkLikeStatus($scholarCode, $annId){

        $stmt=PWD()->prepare("SELECT * FROM prow_announcements_likes
                            Where
                            prow_scholar_code = :prow_scholar_code
                            AND
                            prow_ann_id = :prow_ann_id");
        $stmt->execute([
            'prow_scholar_code' => $scholarCode,
            'prow_ann_id' => $annId
        ]);

        $count=$stmt->rowCount();

        return $count;

    }

    function countAnnLike($annId){

        $stmt=PWD()->prepare("SELECT * FROM prow_announcements_likes
                            Where
                            prow_ann_id = :prow_ann_id");
        $stmt->execute([
            'prow_ann_id' => $annId
        ]);

        $count=$stmt->rowCount();

        return $count;

    }

    function countAnn($type){

        if (empty($type)) {
            
            $stmt=PWD()->prepare("SELECT 
                                prow_ann_id 
                                FROM
                                prow_announcements");
            $stmt->execute();

        } else {
            $stmt=PWD()->prepare("SELECT 
                                prow_ann_id 
                                FROM
                                prow_announcements
                                Where
                                prow_ann_type = :prow_ann_type");
            $stmt->execute([
                'prow_ann_type' => $type
            ]);
        }
        
        $count=$stmt->rowCount();

        return $count;

    }

?>