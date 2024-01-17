<?php
    require '../../config/includes.php';
    require '_session.php';

    if (isset($_POST['btn_ticket'])) {
        $ticketSubject =clean_string ($_POST['ticketSubject']);
        $ticket_Descript = $_POST['ticket_Descript'];
        $ticketAttachment = imageUpload("ticketAttachment", "../../imagebank/");
        
        $request1 = addStudentTicket(
            $scholarCode,
            $ticketSubject,
            $ticket_Descript,
            $ticketAttachment
        );

        if ($request1 == true) {
            header("location: _support?note=updated");
        } else {
            echo "error";
        }
    
        
    } else {
        echo "error not accessible";
    }
    

?>