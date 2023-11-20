<?php  
    //pagination

    $scholarCodeText = (!empty($scholarCode)) ? "%$scholarCode%" : '%';
    $schoolIdText = (!empty($schoolId)) ? "%$schoolId%" : '%';
    $scholarNameText = (!empty($scholarName)) ? "%$scholarName%" : '%';
    $schoolText = (!empty($school)) ? "%$school%" : '%';
    $statusText = (!empty($status)) ? "%$status%" : '%';
    $municipalityText = (!empty($municipality)) ? "%$municipality%" : '%';
    $schoolYearText = (!empty($schoolYear)) ? "%$schoolYear%" : '%';
    $semesterText = (!empty($semester)) ? "%$semester%" : '%';
        
    if (checkAppLogs($scholarCode) > 0) {
        $getPaginate=PWD()->prepare("SELECT 
                                    COUNT(prow_scholar_id) 
                                    FROM 
                                    prow_scholar
                                    LEFT JOIN
                                    prow_scholar_address
                                    ON
                                    prow_scholar.prow_scholar_code = prow_scholar_address.prow_scholar_code
                                    LEFT JOIN
                                    prow_scholar_app_logs
                                    ON
                                    prow_scholar.prow_scholar_code = prow_scholar_app_logs.prow_scholar_code
                                    Where
                                    (prow_scholar.prow_scholar_code LIKE :prow_scholar_code)
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
                                    (prow_hei_id LIKE :prow_hei_id)
                                    AND
                                    (prow_scholar_acct_status LIKE :prow_scholar_acct_status)
                                    AND
                                    (prow_address_municipality LIKE :prow_address_municipality)
                                    AND
                                    (prow_sy_year LIKE :prow_sy_year)
                                    AND
                                    (prow_sem LIKE :prow_sem)
                                    Order By
                                    prow_scholar_lastname
                                    ASC");
        $getPaginate->execute([
            'prow_scholar_code' => $scholarCodeText,
            'prow_scholar_school_id' => $schoolIdText,
            'scholarName' => $scholarNameText,
            'prow_hei_id' => $schoolText,
            'prow_scholar_acct_status' => $statusText,
            'prow_address_municipality' => $municipalityText,
            'prow_sy_year' => $schoolYearText,
            'prow_sem' => $semesterText
        ]);
    } else {
        $getPaginate=PWD()->prepare("SELECT 
                                    COUNT(prow_scholar_id) 
                                    FROM 
                                    prow_scholar
                                    LEFT JOIN
                                    prow_scholar_address
                                    ON
                                    prow_scholar.prow_scholar_code = prow_scholar_address.prow_scholar_code
                                    Where
                                    (prow_scholar.prow_scholar_code LIKE :prow_scholar_code)
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
                                    (prow_scholar_acct_status LIKE :prow_scholar_acct_status)
                                    AND
                                    (prow_address_municipality LIKE :prow_address_municipality)
                                    Order By
                                    prow_scholar_lastname
                                    ASC");
        $getPaginate->execute([
            'prow_scholar_code' => $scholarCodeText,
            'prow_scholar_school_id' => $schoolIdText,
            'scholarName' => $scholarNameText,
            'prow_scholar_acct_status' => $statusText,
            'prow_address_municipality' => $municipalityText
        ]);
    }
    

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

    if (checkAppLogs($scholarCode) > 0) {
        $paginate=PWD()->prepare("SELECT 
                                *
                                FROM 
                                prow_scholar
                                LEFT JOIN
                                prow_scholar_address
                                ON
                                prow_scholar.prow_scholar_code = prow_scholar_address.prow_scholar_code
                                LEFT JOIN
                                prow_scholar_app_logs
                                ON
                                prow_scholar.prow_scholar_code = prow_scholar_app_logs.prow_scholar_code
                                Where
                                (prow_scholar.prow_scholar_code LIKE :prow_scholar_code)
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
                                (prow_hei_id LIKE :prow_hei_id)
                                AND
                                (prow_scholar_acct_status LIKE :prow_scholar_acct_status)
                                AND
                                (prow_address_municipality LIKE :prow_address_municipality)
                                AND
                                (prow_sy_year LIKE :prow_sy_year)
                                AND
                                (prow_sem LIKE :prow_sem)
                                Order By
                                prow_scholar_lastname
                                ASC
                                $limit");
        $paginate->execute([
            'prow_scholar_code' => $scholarCodeText,
            'prow_scholar_school_id' => $schoolIdText,
            'scholarName' => $scholarNameText,
            'prow_hei_id' => $schoolText,
            'prow_scholar_acct_status' => $statusText,
            'prow_address_municipality' => $municipalityText,
            'prow_sy_year' => $schoolYearText,
            'prow_sem' => $semesterText
        ]);
    } else {
        $paginate=PWD()->prepare("SELECT 
                                *
                                FROM 
                                prow_scholar
                                LEFT JOIN
                                prow_scholar_address
                                ON
                                prow_scholar.prow_scholar_code = prow_scholar_address.prow_scholar_code
                                Where
                                (prow_scholar.prow_scholar_code LIKE :prow_scholar_code)
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
                                (prow_scholar_acct_status LIKE :prow_scholar_acct_status)
                                AND
                                (prow_address_municipality LIKE :prow_address_municipality)
                                Order By
                                prow_scholar_lastname
                                ASC
                                $limit");
        $paginate->execute([
            'prow_scholar_code' => $scholarCodeText,
            'prow_scholar_school_id' => $schoolIdText,
            'scholarName' => $scholarNameText,
            'prow_scholar_acct_status' => $statusText,
            'prow_address_municipality' => $municipalityText
        ]);
    }

    $countRes=$paginate->rowCount();
    
    $paginationCtrls = '';

    if($last != 1){
        if ($pagenum > 1) {
            $previous = $pagenum - 1;
            $paginationCtrls .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'" ><i class="ti-angle-left"></i></a></li>';
            for($i = $pagenum-4; $i < $pagenum; $i++){
                if($i > 0){
                    $paginationCtrls .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" >'.$i.'</a></li>';
                }
            }
        }

        $paginationCtrls .= '<li class="page-item active"><a class="page-link">'.$pagenum.'</a></li>';
        for($i = $pagenum+1; $i <= $last; $i++){
            $paginationCtrls .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" >'.$i.'</a></li>';
            if($i >= $pagenum+4){
                break;
            }
        }

        if ($pagenum != $last) {
            $next = $pagenum + 1;
            $paginationCtrls .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'" ><i class="ti-angle-right"></i></a></li>';
        }
    }
?>