<?php  
    //pagination
        
    $getPaginate=PWD()->prepare("SELECT 
                                COUNT(prow_scholar_app_logs_id)
                                FROM
                                prow_scholar
                                LEFT JOIN
                                prow_scholar_app_logs
                                ON
                                prow_scholar.prow_scholar_code = prow_scholar_app_logs.prow_scholar_code
                                Where
                                prow_hei = :prow_hei
                                AND
                                prow_scholar_acct_status != :prow_scholar_acct_status");
    $getPaginate->execute([
        'prow_hei' => $heiId,
        'prow_scholar_acct_status' => 2
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

    $countRes=$paginates[0];
    
    $paginate=PWD()->prepare("SELECT 
                            *
                            FROM
                            prow_scholar
                            LEFT JOIN
                            prow_scholar_app_logs
                            ON
                            prow_scholar.prow_scholar_code = prow_scholar_app_logs.prow_scholar_code
                            Where
                            prow_hei = :prow_hei
                            AND
                            prow_scholar_acct_status != :prow_scholar_acct_status
                            Order By
                            prow_app_logs_created 
                            DESC
                            $limit");
    $paginate->execute([
        'prow_hei' => $heiId,
        'prow_scholar_acct_status' => 2
    ]);
    
    $paginationCtrls = '';

    if($last != 1){
        if ($pagenum > 1) {
            $previous = $pagenum - 1;
            $paginationCtrls .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'" ><i class="mdi mdi-chevron-double-left"></i></a></li>';
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
            $paginationCtrls .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'" ><i class="mdi mdi-chevron-double-right"></i></a></li>';
        }
    }
?>