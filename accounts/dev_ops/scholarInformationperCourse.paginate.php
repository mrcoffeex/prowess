<?php  
    //pagination
        
    // echo $count;
    // $getPaginate=PWD()->prepare("SELECT 
    //                             COUNT(prow_scholar_app_logs_id)
    //                             FROM
    //                             prow_scholar_app_logs
    //                             Where
    //                             prow_app_log_status = :prow_app_log_status");
    // $getPaginate->execute([
    //     'prow_app_log_status' => 2
    // ]);
    // $paginates=$getPaginate->fetch(PDO::FETCH_BOTH);
    $page_rows = 15;
    $last = ceil($count/$page_rows);
    echo $last;
    
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
                                prow_scholar AS a
                            INNER JOIN 
                                prow_scholar_app_logs AS b ON a.prow_scholar_code = b.prow_scholar_code
                            WHERE
                                b.prow_hei = :prow_hei
                            AND
                                b.prow_course = :prow_course
                            ORDER BY a.prow_scholar_lastname $limit
                           ");
    $paginate->execute([
        'prow_hei' => $hei_id,
        'prow_course' => $hei_course
    ]);
    
    $paginationCtrls = '';

    if($last != 1){
        if ($pagenum > 1) {
            $previous = $pagenum - 1;
            $paginationCtrls .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'&hei_id='.$hei_id.'&course_id='.$hei_course.'" ><i class="ti-angle-left"></i></a></li>';
            for($i = $pagenum-4; $i < $pagenum; $i++){
                if($i > 0){
                    $paginationCtrls .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'&hei_id='.$hei_id.'&course_id='.$hei_course.'" >'.$i.'</a></li>';
                }
            }
        }

        $paginationCtrls .= '<li class="page-item active"><a class="page-link">'.$pagenum.'</a></li>';
        for($i = $pagenum+1; $i <= $last; $i++){
            $paginationCtrls .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'&hei_id='.$hei_id.'&course_id='.$hei_course.'" >'.$i.'</a></li>';
            if($i >= $pagenum+4){
                break;
            }
        }

        if ($pagenum != $last) {
            $next = $pagenum + 1;
            $paginationCtrls .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'&hei_id='.$hei_id.'&course_id='.$hei_course.'" ><i class="ti-angle-right"></i></a></li>';
        }
    }
?>