<?php  
    //pagination

    $getPaginate=PWD()->prepare("SELECT COUNT(prow_ann_id) FROM prow_announcements
                                Where
                                CONCAT
                                (
                                    prow_ann_type, 
                                    prow_ann_expire, 
                                    prow_ann_image, 
                                    prow_ann_title, 
                                    prow_ann_content,  
                                    prow_ann_created, 
                                    prow_ann_updated
                                )
                                LIKE :keywords");
    $getPaginate->execute([
        'keywords' => "%$searchAnn%"
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
    
    $paginate=PWD()->prepare("SELECT * FROM prow_announcements
                            Where
                            CONCAT
                            (
                                prow_ann_type, 
                                prow_ann_expire, 
                                prow_ann_image, 
                                prow_ann_title, 
                                prow_ann_content,  
                                prow_ann_created, 
                                prow_ann_updated
                            )
                            LIKE :keywords
                            Order By
                            prow_ann_created
                            DESC 
                            $limit");
    $paginate->execute([
        'keywords' => "%$searchAnn%"
    ]);

    $countRes = $paginate->rowCount();
    
    $paginationCtrls = '';

    if($last != 1){
        if ($pagenum > 1) {
            $previous = $pagenum - 1;
            $paginationCtrls .= '<li class="page-item list-unstyled"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.
            '?searchAnn='.$searchAnn.
            '" ><i class="ti-angle-left"></i></a></li>';
            for($i = $pagenum-4; $i < $pagenum; $i++){
                if($i > 0){
                    $paginationCtrls .= '<li class="page-item list-unstyled "><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?pn='.$i.
                    '?searchAnn='.$searchAnn.
                    '" >'.$i.'</a></li>';
                }
            }
        }

        $paginationCtrls .= '<li class="page-item active list-unstyled "><a class="page-link">'.$pagenum.'</a></li>';
        for($i = $pagenum+1; $i <= $last; $i++){
            $paginationCtrls .= '<li class="page-item list-unstyled"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?pn='.$i.
            '?searchAnn='.$searchAnn.
            '" >'.$i.'</a></li>';
            if($i >= $pagenum+4){
                break;
            }
        }

        if ($pagenum != $last) {
            $next = $pagenum + 1;
            $paginationCtrls .= '<li class="page-item list-unstyled"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?pn='.$next.
            '?searchAnn='.$searchAnn.
            '" ><i class="ti-angle-right"></i></a></li>';
        }
    }
?>