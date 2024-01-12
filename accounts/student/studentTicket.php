<?php
    require '../../config/includes.php';
    require '_session.php';

    if (isset($_POST['ticketSubject'])) {
        $ticketSubject =clean_string ($_POST['ticketSubject']);
        $ticketDescription = clean_float ($_POST['ticketDescription']);
        $ticketAttachment = imageUpload("ticketAttachment", "../../imagebank/");
        
        $request1 = addStudentTicket(
            $scholarCode, 
            $ticketSubject,
            ticketDescription,
            $ticketAttachment
        );

        if ($request1 == true) {
            header("location: _support?note=updated");
        } else {
            echo "location: _support?note=error";
        }
    
        
    } else {
        # code...
    }
    

?>