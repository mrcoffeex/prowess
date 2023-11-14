<?php 
    require '../../config/includes.php';
    require '_session.php';
	session_destroy();
?>

<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
	    <meta http-equiv="refresh" content="1;url=../../login">
        <title>Logout</title>
    </head>
</html>