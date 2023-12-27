<?php

    require '../../config/includes.php';
    require '_session.php';

    $request=updateScholarAppLogStatus($scholarCode, 2);

    if ($request == true) {
        header("location: studentProfile?note=submitted");
    } else {
        header("location: studentProfile?note=error");
    }

?>