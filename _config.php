<?php
	include 'config/includes.php';

    session_start();

    if (isset($_SESSION['hotkopi_prow_session_id'])) {

        if($_SESSION['hotkopi_prow_session_type'] == "0"){ 
            header("location: accounts/dev_ops/");
        }else if($_SESSION['hotkopi_prow_session_type'] == "1"){
            header("location: accounts/staff/");
        }else if($_SESSION['hotkopi_prow_session_type'] == "2"){
            header("location: accounts/hei/");
        }else if($_SESSION['hotkopi_prow_session_type'] == "3"){
            header("location: accounts/industry/");
        }else if($_SESSION['hotkopi_prow_session_type'] == "4"){
            header("location: accounts/student/");
        }else{
            session_destroy();
        }
    }

?>