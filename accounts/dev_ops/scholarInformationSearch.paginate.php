<?php  
    //pagination

    $scholarCodeText = ($scholarCode != "") ? "%$scholarCode%" : '%';
    $schoolIdText = ($schoolId != "") ? "%$schoolId%" : '%';
    $scholarNameText = ($scholarName != "") ? "%$scholarName%" : '%';
    $schoolText = ($school != "") ? "%$school%" : '%';
    $statusText = ($status != "") ? "%$status%" : '%';
    $municipalityText = ($municipality != "") ? "%$municipality%" : '%';
    $schoolYearText = ($schoolYear != "") ? "%$schoolYear%" : '%';
    $semesterText = ($semester != "") ? "%$semester%" : '%';
        
    $getPaginate=PWD()->prepare("SELECT 
                                COUNT(prow_scholar_app_logs_id) 
                                FROM 
                                prow_scholar_app_logs
                                LEFT JOIN
                                prow_scholar
                                ON
                                prow_scholar_app_logs.prow_scholar_code = prow_scholar.prow_scholar_code
                                LEFT JOIN
                                prow_scholar_address
                                ON
                                prow_scholar_app_logs.prow_scholar_code = prow_scholar_address.prow_scholar_code
                                Where
                                (prow_scholar_app_logs.prow_scholar_code LIKE :prow_scholar_code)
                                AND
                                (prow_scholar_school_id LIKE :prow_scholar_school_id)
                                AND
                                (CONCAT
                                (
                                    prow_scholar_firstname,
                                    prow_scholar_firstname, ' ' , prow_scholar_lastname,
                                    prow_scholar_firstname, ' ' , prow_scholar_middlename, ' ' , prow_scholar_lastname,
                                    prow_scholar_firstname, ' ' , prow_scholar_middlename, ' ' , prow_scholar_lastname, ' '  , prow_scholar_suffix
                                ) 
                                LIKE :scholarName)
                                AND
                                (prow_hei LIKE :prow_hei)
                                AND
                                (prow_scholar_acct_status LIKE :prow_scholar_acct_status)
                                AND
                                (prow_address_municipality LIKE :prow_address_municipality)
                                AND
                                (prow_sy LIKE :prow_sy)
                                AND
                                (prow_sem LIKE :prow_sem)
                                AND
                                (prow_app_log_status = :prow_app_log_status)");
    $getPaginate->execute([
        'prow_scholar_code' => $scholarCodeText,
        'prow_scholar_school_id' => $schoolIdText,
        'scholarName' => $scholarNameText,
        'prow_hei' => $schoolText,
        'prow_scholar_acct_status' => $statusText,
        'prow_address_municipality' => $municipalityText,
        'prow_sy' => $schoolYearText,
        'prow_sem' => $semesterText,
        'prow_app_log_status' => 2
    ]);
    

    $paginates=$getPaginate->fetch(PDO::FETCH_BOTH);

    $page_rows = 15;
    $last = ceil($paginates[0]/$page_rows);
    
    if($last < 1){
        $last = 1;
    }
    
    $pagenum = 1;
    
    if(isset($_GET['pn'])){
        $pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
    }
    
    if ($pagenum < 1) { 
        $pagenum = 1; 
    } else if ($pagenum > $last) { 
        $pagenum = $last; 
    }
    
    $limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;

    $paginate=PWD()->prepare("SELECT 
                            *
                            FROM 
                            prow_scholar_app_logs
                            LEFT JOIN
                            prow_scholar
                            ON
                            prow_scholar_app_logs.prow_scholar_code = prow_scholar.prow_scholar_code
                            LEFT JOIN
                            prow_scholar_address
                            ON
                            prow_scholar_app_logs.prow_scholar_code = prow_scholar_address.prow_scholar_code
                            Where
                            (prow_scholar_app_logs.prow_scholar_code LIKE :prow_scholar_code)
                            AND
                            (prow_scholar_school_id LIKE :prow_scholar_school_id)
                            AND
                            (CONCAT
                            (
                                prow_scholar_firstname,
                                prow_scholar_firstname, ' ' , prow_scholar_lastname,
                                prow_scholar_firstname, ' ' , prow_scholar_middlename, ' ' , prow_scholar_lastname,
                                prow_scholar_firstname, ' ' , prow_scholar_middlename, ' ' , prow_scholar_lastname, ' ' , prow_scholar_suffix
                            ) 
                            LIKE :scholarName)
                            AND
                            (prow_hei LIKE :prow_hei)
                            AND
                            (prow_scholar_acct_status LIKE :prow_scholar_acct_status)
                            AND
                            (prow_address_municipality LIKE :prow_address_municipality)
                            AND
                            (prow_sy LIKE :prow_sy)
                            AND
                            (prow_sem LIKE :prow_sem)
                            AND
                            (prow_app_log_status = :prow_app_log_status)
                            Order By
                            prow_scholar_lastname
                            ASC
                            $limit");
    $paginate->execute([
        'prow_scholar_code' => $scholarCodeText,
        'prow_scholar_school_id' => $schoolIdText,
        'scholarName' => $scholarNameText,
        'prow_hei' => $schoolText,
        'prow_scholar_acct_status' => $statusText,
        'prow_address_municipality' => $municipalityText,
        'prow_sy' => $schoolYearText,
        'prow_sem' => $semesterText,
        'prow_app_log_status' => 2
    ]);

    $countRes=$paginate->rowCount();
    
    $paginationCtrls = '';

    if($last != 1){
        if ($pagenum > 1) {
            $previous = $pagenum - 1;
            $paginationCtrls .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].
            '?pn='.$previous.
            '&scholarCode='.$scholarCode.
            '&schoolId='.$schoolId.
            '&scholarName='.$scholarName.
            '&school='.$school.
            '&status='.$status.
            '&municipality='.$municipality.
            '&schoolYear='.$schoolYear.
            '&semester='.$semester.
            '" ><i class="ti-angle-left"></i></a></li>';
            for($i = $pagenum-4; $i < $pagenum; $i++){
                if($i > 0){
                    $paginationCtrls .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].
                    '?pn='.$i.
                    '&scholarCode='.$scholarCode.
                    '&schoolId='.$schoolId.
                    '&scholarName='.$scholarName.
                    '&school='.$school.
                    '&status='.$status.
                    '&municipality='.$municipality.
                    '&schoolYear='.$schoolYear.
                    '&semester='.$semester.
                    '" >'.$i.'</a></li>';
                }
            }
        }

        $paginationCtrls .= '<li class="page-item active"><a class="page-link">'.$pagenum.'</a></li>';
        for($i = $pagenum+1; $i <= $last; $i++){
            $paginationCtrls .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].
            '?pn='.$i.
            '&scholarCode='.$scholarCode.
            '&schoolId='.$schoolId.
            '&scholarName='.$scholarName.
            '&school='.$school.
            '&status='.$status.
            '&municipality='.$municipality.
            '&schoolYear='.$schoolYear.
            '&semester='.$semester.
            '" >'.$i.'</a></li>';
            if($i >= $pagenum+4){
                break;
            }
        }

        if ($pagenum != $last) {
            $next = $pagenum + 1;
            $paginationCtrls .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].
            '?pn='.$next.
            '&scholarCode='.$scholarCode.
            '&schoolId='.$schoolId.
            '&scholarName='.$scholarName.
            '&school='.$school.
            '&status='.$status.
            '&municipality='.$municipality.
            '&schoolYear='.$schoolYear.
            '&semester='.$semester.
            '" ><i class="ti-angle-right"></i></a></li>';
        }
    }
?>