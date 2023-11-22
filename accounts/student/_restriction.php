<?php  

    //scholar type 1- old ,2-new
    //scholar already fill up 0- no ,1-yes
    // if (checkProfileForm($scholarCode) == 0 && checkscholartype($scholarCode) == 2 ) {
    //     header("location: index_inc");
    // } else if (checkProfileForm($scholarCode) == 0 && checkscholartype($scholarCode) == 1){
    //     header("location: fillupForm_old");
    // }else {
    //     header("location: ./");
    // }

    if (checkAppLogs($scholarCode) > 0) {
        // old
        $getCurrentApplication=selectCurrentApplication($scholarCode);
        $current=$getCurrentApplication->fetch(PDO::FETCH_ASSOC);

        if ($current['prow_sy'] == getSchoolYearLatest()) {
            // already filled up the new application
            $fillUpStatus = "update";
        } else {
            // no new application
            $fillUpStatus = "new";
        }

    } else {
        // new
        $fillUpStatus = "new";
        //header("location: fillupForm");
    }
    

?>