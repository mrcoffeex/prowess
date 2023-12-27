<?php  
    //pagination
    $nameSearchText = ($nameSearch != "") ? "%$nameSearch%" : '%';
    $userTypeText = ($userType != "") ? "%$userType%" : '%';
        
    $getPaginate=PWD()->prepare("SELECT 
                                COUNT(prow_user_id)
                                FROM
                                prow_users
                                Where
                                prow_user_id != :prow_user_id
                                AND
                                prow_user_type LIKE :prow_user_type
                                AND
                                prow_user_fullname LIKE :prow_user_fullname
                                Order By
                                prow_user_fullname
                                ASC");
    $getPaginate->execute([
        'prow_user_id' => $userId,
        'prow_user_type' => $userTypeText,
        'prow_user_fullname' => $nameSearchText
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
                            prow_users
                            Where
                            prow_user_id != :prow_user_id
                            AND
                            prow_user_type LIKE :prow_user_type
                            AND
                            prow_user_fullname LIKE :prow_user_fullname
                            Order By
                            prow_user_fullname
                            ASC
                            $limit");
    $paginate->execute([
        'prow_user_id' => $userId,
        'prow_user_type' => $userTypeText,
        'prow_user_fullname' => $nameSearchText
    ]);

    $countRes=$paginate->rowCount();
    
    $paginationCtrls = '';

    if($last != 1){
        if ($pagenum > 1) {
            $previous = $pagenum - 1;
            $paginationCtrls .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].
            '?pn='.$previous.
            '&nameSearch='.$nameSearch.
            '&userType='.$userType.
            '" ><i class="ti-angle-left"></i></a></li>';
            for($i = $pagenum-4; $i < $pagenum; $i++){
                if($i > 0){
                    $paginationCtrls .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].
                    '?pn='.$i.
                    '&nameSearch='.$nameSearch.
                    '&userType='.$userType.
                    '" >'.$i.'</a></li>';
                }
            }
        }

        $paginationCtrls .= '<li class="page-item active"><a class="page-link">'.$pagenum.'</a></li>';
        for($i = $pagenum+1; $i <= $last; $i++){
            $paginationCtrls .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].
            '?pn='.$i.
            '&nameSearch='.$nameSearch.
            '&userType='.$userType.
            '" >'.$i.'</a></li>';
            if($i >= $pagenum+4){
                break;
            }
        }

        if ($pagenum != $last) {
            $next = $pagenum + 1;
            $paginationCtrls .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].
            '?pn='.$next.
            '&nameSearch='.$nameSearch.
            '&userType='.$userType.
            '" ><i class="ti-angle-right"></i></a></li>';
        }
    }
?>