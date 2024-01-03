<?php  
    //Sanitizer hand
    function clean_string($value){

        include 'vars.php';
		
		if (empty($value)) {
            return $value;
        } else {
            if (!filter_var($value, FILTER_SANITIZE_STRING)) {
                header($input_error."?note=not_real_string");
            } else {
                return $value;
            }
        }
        
	} 

    function clean_email($value){

        include 'vars.php';

        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            header($input_error."?note=not_real_email");
        } else {
            return $value;
        }

    }

    function clean_int($value){

        include 'vars.php';

        if (empty($value)) {
            return $value;
        } else {
            if (!filter_var($value, FILTER_VALIDATE_INT)) {
                header($input_error."?note=not_real_int");
            } else {
                return $value;
            }
        }        
    }

    function clean_float($value){

        include 'vars.php';

        if (empty($value)) {
            return $value;
        } else {
            if (!filter_var($value, FILTER_VALIDATE_FLOAT)) {
                header($input_error."?note=not_real_float");
            } else {
                return $value;
            }
        }        
    }

    function randStrInt( $length ) {
        $chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";   

        $str="";
        
        $size = strlen( $chars );
        for( $i = 0; $i < $length; $i++ ) {
            $str .= $chars[ rand( 0, $size - 1 ) ];
        }

        return $str;
    }

    function randStr( $length ) {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";   

        $str="";
        
        $size = strlen( $chars );
        for( $i = 0; $i < $length; $i++ ) {
            $str .= $chars[ rand( 0, $size - 1 ) ];
        }

        return $str;
    }

    function randInt( $length ) {
        $chars = "0123456789";   

        $str="";
        
        $size = strlen( $chars );
        for( $i = 0; $i < $length; $i++ ) {
            $str .= $chars[ rand( 0, $size - 1 ) ];
        }

        return $str;
    }
    
    function RealNumber($value, $decimal){

        if ($value == 0) {
            $res = number_format(0, $decimal);
        } else {
            if ($decimal == "") {
                $res = number_format($value);
            } else {
                $res = number_format($value, $decimal);
            }
        }
        
        return $res;
    }

    function getTimePassed($basetime, $currenttime){

        $secs = strtotime($currenttime) - strtotime($basetime);

        $mins = $secs / 60;
        $hours = $secs / 3600;
        $days = $secs / 86400;

        if ($secs < 60) {
            $res = "Just Now";
        } else if ($secs >= 60 && $secs < 3600) {
            $res = floor($mins) . " minute(s) ago";
        } else if ($secs >= 3600 && $secs < 86400) {
            $res = floor($hours) . " hour(s) ago";
        } else {
            if ($days < 7) {
                $res = floor($days) . " day(s) ago";
            } else if ($days >= 7 && $days < 30.5) {
                $res = floor($days / 7)." week(s) ago";
            } else if ($days >= 30.5 && $days < 365.25) {
                $res = floor(($days / 30.5))." month(s) ago";
            } else {
                $res = floor(($days / 365.25))." year(s) ago";
            }
        }
        
        return $res;
    }

    function isChecked($value, $checkboxValue){

        if ($checkboxValue == $value) {
            $res = "checked";
        } else {
            $res = "";
        }
        
        return $res;
    }

    function stringLimit($name, $limit){

        if (strlen($name) > $limit){
            $name = substr($name, 0, $limit) . '...';
        }else{
            $name = $name;
        }

        return $name;
    }

    function previewImage($image, $default_image, $directory){

        if ($image == "empty" || $image == "") {
            $res = $default_image;
        }else{
            $res = $directory . "" . $image;
        }

        return $res;

    }

    function imageUpload($input, $location){

        $errors= array();
        $file_name = $_FILES[$input]['name'];

        if (empty($file_name)) {
            $res = "empty";
        } else {
            $file_size =$_FILES[$input]['size'];
            $file_tmp =$_FILES[$input]['tmp_name'];
            $file_type=$_FILES[$input]['type'];
            $file_extension = pathinfo($_FILES[$input]['name'], PATHINFO_EXTENSION);

            $final_filename = date("YmdHis")."_".$file_name;

            $extensions= array("jpeg","jpg","png");

            if(in_array($file_extension, $extensions)=== false){
                $errors[]="extension not allowed, please choose a JPEG or PNG file.";
            }

            if($file_size > 26000000){
                $errors[]='File size must be excately 10 MB';
            }

            $file_directory = $location."".$final_filename;

            if(empty($errors)==true){

                move_uploaded_file($file_tmp, $file_directory);
                $res = $final_filename;

            }else{

                if ($file_tmp == "") {
                    $res = "empty";
                }else{
                    $res = "error";
                }

            }
        }

        return $res;

    }

    function properDate($datetime){

        if ($datetime == "") {
            $res = "";
        }else{
            $res = date("Md Y", strtotime($datetime));
        }

        return $res;

    }

    function properTime($datetime){

        if ($datetime == "") {
            $res = "";
        }else{
            $res = date("g:i A", strtotime($datetime));
        }

        return $res;

    }

    function sendEmail($emailTo, $emailSubject, $emailBodyTitle, $emailBodyMessage, $autoload){

        require $autoload;
    
        $mail = new PHPMailer;
        $mail->isSMTP();
        
        $mail->Host = 'smtp.hostinger.com';
        $mail->Port = 465;
        $mail->SMTPSecure = 'ssl';
        $mail->SMTPAuth = true;
        $mail->Username = "noreply@e4psmap.com";
        $mail->Password = "Semicircle_123";
        $mail->IsHTML(true);
        
        $mail->setFrom('noreply@e4psmap.com', 'Prowess');
        $mail->addAddress($emailTo, '');
        $mail->Subject = $emailSubject;
        
        $mail->Body = '

        <!DOCTYPE>
        <html style="padding:0;Margin:0">
        <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta name="x-apple-disable-message-reformatting">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="telephone=no" name="format-detection">
        <title>PROWESS Email</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i" rel="stylesheet">
        <style type="text/css">
        #outlook a {
        padding:0;
        }
        .ExternalClass {
        width:100%;
        }
        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
        line-height:100%;
        }
        .es-button {
        mso-style-priority:100!important;
        text-decoration:none!important;
        }
        a[x-apple-data-detectors] {
        color:inherit!important;
        text-decoration:none!important;
        font-size:inherit!important;
        font-family:inherit!important;
        font-weight:inherit!important;
        line-height:inherit!important;
        }
        .es-desk-hidden {
        display:none;
        float:left;
        overflow:hidden;
        width:0;
        max-height:0;
        line-height:0;
        mso-hide:all;
        }
        @media only screen and (max-width:600px) {p, ul li, ol li, a { line-height:150%!important } h1, h2, h3, h1 a, h2 a, h3 a { line-height:120%!important } h1 { font-size:30px!important; text-align:center } h2 { font-size:26px!important; text-align:center } h3 { font-size:20px!important; text-align:center } .es-header-body h1 a, .es-content-body h1 a, .es-footer-body h1 a { font-size:30px!important } .es-header-body h2 a, .es-content-body h2 a, .es-footer-body h2 a { font-size:26px!important } .es-header-body h3 a, .es-content-body h3 a, .es-footer-body h3 a { font-size:20px!important } .es-menu td a { font-size:16px!important } .es-header-body p, .es-header-body ul li, .es-header-body ol li, .es-header-body a { font-size:16px!important } .es-content-body p, .es-content-body ul li, .es-content-body ol li, .es-content-body a { font-size:16px!important } .es-footer-body p, .es-footer-body ul li, .es-footer-body ol li, .es-footer-body a { font-size:16px!important } .es-infoblock p, .es-infoblock ul li, .es-infoblock ol li, .es-infoblock a { font-size:12px!important } *[class="gmail-fix"] { display:none!important } .es-m-txt-c, .es-m-txt-c h1, .es-m-txt-c h2, .es-m-txt-c h3 { text-align:center!important } .es-m-txt-r, .es-m-txt-r h1, .es-m-txt-r h2, .es-m-txt-r h3 { text-align:right!important } .es-m-txt-l, .es-m-txt-l h1, .es-m-txt-l h2, .es-m-txt-l h3 { text-align:left!important } .es-m-txt-r img, .es-m-txt-c img, .es-m-txt-l img { display:inline!important } .es-button-border { display:block!important } a.es-button, button.es-button { font-size:20px!important; display:block!important; padding:15px 25px 15px 25px!important } .es-btn-fw { border-width:10px 0px!important; text-align:center!important } .es-adaptive table, .es-btn-fw, .es-btn-fw-brdr, .es-left, .es-right { width:100%!important } .es-content table, .es-header table, .es-footer table, .es-content, .es-footer, .es-header { width:100%!important; max-width:600px!important } .es-adapt-td { display:block!important; width:100%!important } .adapt-img { width:100%!important; height:auto!important } .es-m-p0 { padding:0px!important } .es-m-p0r { padding-right:0px!important } .es-m-p0l { padding-left:0px!important } .es-m-p0t { padding-top:0px!important } .es-m-p0b { padding-bottom:0!important } .es-m-p20b { padding-bottom:20px!important } .es-mobile-hidden, .es-hidden { display:none!important } tr.es-desk-hidden, td.es-desk-hidden, table.es-desk-hidden { width:auto!important; overflow:visible!important; float:none!important; max-height:inherit!important; line-height:inherit!important } tr.es-desk-hidden { display:table-row!important } table.es-desk-hidden { display:table!important } td.es-desk-menu-hidden { display:table-cell!important } .es-menu td { width:1%!important } table.es-table-not-adapt, .esd-block-html table { width:auto!important } table.es-social { display:inline-block!important } table.es-social td { display:inline-block!important } .es-desk-hidden { display:table-row!important; width:auto!important; overflow:visible!important; max-height:inherit!important } }
        </style>
        </head>
        <body style="width:100%;font-family:lato,  helvetica, arial, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0">
        <div class="es-wrapper-color" style="background-color:#F4F4F4">
        <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top;background-color:#F4F4F4">
        <tr class="gmail-fix" height="0" style="border-collapse:collapse">
        <td style="padding:0;Margin:0">
        <table cellspacing="0" cellpadding="0" border="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;width:600px">
        <tr style="border-collapse:collapse">
        <td cellpadding="0" cellspacing="0" border="0" style="padding:0;Margin:0;line-height:1px;min-width:600px" height="0"><img src="https://sdxesn.stripocdn.email/content/guids/CABINET_837dc1d79e3a5eca5eb1609bfe9fd374/images/41521605538834349.png" style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;max-height:0px;min-height:0px;min-width:600px;width:600px" alt width="600" height="1"></td>
        </tr>
        </table></td>
        </tr>
        <tr style="border-collapse:collapse">
        <td valign="top" style="padding:0;Margin:0">
        <table cellpadding="0" cellspacing="0" class="es-content" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%">
        <tr style="border-collapse:collapse">
        <td align="center" style="padding:0;Margin:0">
        <table class="es-content-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px" cellspacing="0" cellpadding="0" align="center">
        <tr style="border-collapse:collapse">
        <td align="left" style="Margin:0;padding-left:10px;padding-right:10px;padding-top:15px;padding-bottom:15px">
        <table class="es-left" cellspacing="0" cellpadding="0" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left">
        <tr style="border-collapse:collapse">
        <td align="left" style="padding:0;Margin:0;width:282px">
        <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
        <tr style="border-collapse:collapse">
        <td class="es-infoblock es-m-txt-c" align="left" style="padding:0;Margin:0;line-height:14px;font-size:12px;color:#CCCCCC"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, helvetica, sans-serif;line-height:14px;color:#CCCCCC;font-size:12px">PROWESS<br></p></td>
        </tr>
        </table></td>
        </tr>
        </table>
        <table class="es-right" cellspacing="0" cellpadding="0" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right">
        <tr style="border-collapse:collapse">
        <td align="left" style="padding:0;Margin:0;width:278px">
        <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
        <tr style="border-collapse:collapse">
        <td align="right" class="es-infoblock es-m-txt-c" style="padding:0;Margin:0;line-height:14px;font-size:12px;color:#CCCCCC"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:lato,  helvetica, arial, sans-serif;line-height:14px;color:#CCCCCC;font-size:12px"><a href="#" class="view" target="_blank" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#CCCCCC;font-size:12px;font-family:arial,  helvetica, sans-serif">Visit Website</a></p></td>
        </tr>
        </table></td>
        </tr>
        </table></td>
        </tr>
        </table></td>
        </tr>
        </table>
        <table class="es-header" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:#00A5EC;background-repeat:repeat;background-position:center top">
        <tr style="border-collapse:collapse">
        <td align="center" style="padding:0;Margin:0">
        <table class="es-header-body" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px">
        <tr style="border-collapse:collapse">
        <td align="left" style="Margin:0;padding-bottom:10px;padding-left:10px;padding-right:10px;padding-top:20px">
        <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
        <tr style="border-collapse:collapse">
        <td valign="top" align="center" style="padding:0;Margin:0;width:580px">
        <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
        <tr style="border-collapse:collapse">
        <td align="center" style="Margin:0;padding-left:10px;padding-right:10px;padding-top:25px;padding-bottom:25px;font-size:0">
            <img src="" alt style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic" width="40">
        </td>
        </tr>
        </table></td>
        </tr>
        </table></td>
        </tr>
        </table></td>
        </tr>
        </table>
        <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%">
        <tr style="border-collapse:collapse">
        <td style="padding:0;Margin:0;background-color:#00A5EC" bgcolor="#00A5EC" align="center">
        <table class="es-content-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px" cellspacing="0" cellpadding="0" align="center">
        <tr style="border-collapse:collapse">
        <td align="left" style="padding:0;Margin:0">
        <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
        <tr style="border-collapse:collapse">
        <td valign="top" align="center" style="padding:0;Margin:0;width:600px">
        <table style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:separate;border-spacing:0px;background-color:#ffffff;border-radius:4px" width="100%" cellspacing="0" cellpadding="0" bgcolor="#ffffff" role="presentation">
        <tr style="border-collapse:collapse">
        <td align="center" style="Margin:0;padding-bottom:5px;padding-left:30px;padding-right:30px;padding-top:35px"><h1 style="Margin:0;line-height:58px;mso-line-height-rule:exactly;font-family:lato,  helvetica, arial, sans-serif;font-size:48px;font-style:normal;font-weight:normal;color:#111111">' . $emailBodyTitle . '</h1></td>
        </tr>
        <tr style="border-collapse:collapse">
        <td bgcolor="#ffffff" align="center" style="Margin:0;padding-top:5px;padding-bottom:5px;padding-left:20px;padding-right:20px;font-size:0">
        <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
        <tr style="border-collapse:collapse">
        <td style="padding:0;Margin:0;border-bottom:1px solid #ffffff;background:#FFFFFF none repeat scroll 0% 0%;height:1px;width:100%;margin:0px"></td>
        </tr>
        </table></td>
        </tr>
        </table></td>
        </tr>
        </table></td>
        </tr>
        </table></td>
        </tr>
        </table>
        <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%">
        <tr style="border-collapse:collapse">
        <td align="center" style="padding:0;Margin:0">
        <table class="es-content-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px" cellspacing="0" cellpadding="0" align="center">
        <tr style="border-collapse:collapse">
        <td align="left" style="padding:0;Margin:0">
        <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
        <tr style="border-collapse:collapse">
        <td valign="top" align="center" style="padding:0;Margin:0;width:600px">
        <table style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:separate;border-spacing:0px;border-radius:4px;background-color:#ffffff" width="100%" cellspacing="0" cellpadding="0" bgcolor="#ffffff" role="presentation">
        <tr style="border-collapse:collapse">
        <td class="es-m-txt-l" bgcolor="#ffffff" align="left" style="Margin:0;padding-top:20px;padding-bottom:20px;padding-left:30px;padding-right:30px">
                <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:lato,  helvetica, arial, sans-serif;line-height:27px;color:#666666;font-size:18px">
                ' . $emailBodyMessage . '
            </p>
        </td>
        </tr>
        <tr style="border-collapse:collapse">
        <td class="es-m-txt-l" align="left" style="Margin:0;padding-top:20px;padding-left:30px;padding-right:30px;padding-bottom:40px">
            <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:lato,  helvetica, arial, sans-serif;line-height:27px;color:#666666;font-size:18px">
                PROWESS Support Team
            </p>
        </td>
        </tr>
        </table></td>
        </tr>
        </table></td>
        </tr>
        </table></td>
        </tr>
        </table>
        <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%">
        <tr style="border-collapse:collapse">
        <td align="center" style="padding:0;Margin:0">
        <table class="es-content-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px" cellspacing="0" cellpadding="0" align="center">
        <tr style="border-collapse:collapse">
        <td align="left" style="padding:0;Margin:0">
        <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
        <tr style="border-collapse:collapse">
        <td valign="top" align="center" style="padding:0;Margin:0;width:600px">
        <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
        <tr style="border-collapse:collapse">
        <td align="center" style="Margin:0;padding-top:10px;padding-bottom:20px;padding-left:20px;padding-right:20px;font-size:0">
        <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
        <tr style="border-collapse:collapse">
        <td style="padding:0;Margin:0;border-bottom:1px solid #f4f4f4;background:#FFFFFF none repeat scroll 0% 0%;height:1px;width:100%;margin:0px"></td>
        </tr>
        </table></td>
        </tr>
        </table></td>
        </tr>
        </table></td>
        </tr>
        </table></td>
        </tr>
        </table>
        <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%">
        <tr style="border-collapse:collapse">
        <td align="center" style="padding:0;Margin:0">
        <table class="es-content-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px" cellspacing="0" cellpadding="0" align="center">
        <tr style="border-collapse:collapse">
        <td align="left" style="padding:0;Margin:0">
        <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
        <tr style="border-collapse:collapse">
        <td valign="top" align="center" style="padding:0;Margin:0;width:600px">
        <table style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:separate;border-spacing:0px;background-color:#b5d6f1;border-radius:4px" width="100%" cellspacing="0" cellpadding="0" bgcolor="#b5d6f1" role="presentation">
        <tr style="border-collapse:collapse">
        <td align="center" style="padding:0;Margin:0;padding-top:30px;padding-left:30px;padding-right:30px"><h3 style="Margin:0; margin-bottom: 10px;line-height:24px;mso-line-height-rule:exactly;font-family:lato,  helvetica, arial, sans-serif;font-size:20px;font-style:normal;font-weight:normal;color:#111111">Visit PROWESS Website</h3></td>
        </tr>
        <tr style="border-collapse:collapse">
        <td esdev-links-color="#00A5EC" align="center" style="padding:0;Margin:0;padding-bottom:30px;padding-left:30px;padding-right:30px"><a target="_blank" href="#" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#00A5EC;font-size:18px">click here</a></td>
        </tr>
        </table></td>
        </tr>
        </table></td>
        </tr>
        </table></td>
        </tr>
        </table>
        <table cellpadding="0" cellspacing="0" class="es-footer" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top">
        <tr style="border-collapse:collapse">
        <td align="center" style="padding:0;Margin:0">
        <table class="es-footer-body" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px">
        <tr style="border-collapse:collapse">
        <td align="left" style="Margin:0;padding-top:30px;padding-bottom:30px;padding-left:30px;padding-right:30px">
        <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
        <tr style="border-collapse:collapse">
        <td valign="top" align="center" style="padding:0;Margin:0;width:540px">
        <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
        <tr style="border-collapse:collapse">
        <td align="left" style="padding:0;Margin:0;padding-top:25px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:lato,  helvetica, arial, sans-serif;line-height:21px;color:#666666;font-size:14px;text-align: center;">This is a system generated email, please do not reply.</p></td>
        </tr>
        </table></td>
        </tr>
        </table></td>
        </tr>
        </table></td>
        </tr>
        </table>
        <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%">
        <tr style="border-collapse:collapse">
        <td align="center" style="padding:0;Margin:0">
        <table class="es-content-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px" cellspacing="0" cellpadding="0" align="center">
        <tr style="border-collapse:collapse">
        <td align="left" style="Margin:0;padding-left:20px;padding-right:20px;padding-top:30px;padding-bottom:30px">
        <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
        <tr style="border-collapse:collapse">
        <td valign="top" align="center" style="padding:0;Margin:0;width:560px">
        <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
        </table></td>
        </tr>
        </table></td>
        </tr>
        </table></td>
        </tr>
        </table></td>
        </tr>
        </table>
        </div>
        </body>
        </html>
        
        ';
        
        if ($mail->send()) {
            return true;
        } else {
            return false;
        }

    }

    //notifications

    function createLog($note_text, $user, $type){

    	$my_notification_full = $note_text." - ".$user;
    	
    	//INSERT to database
    	$statement=PWD()->prepare("INSERT Into prow_notifications(
                                prow_notif_type,
                                prow_notif_text,
                                prow_notif_date) 
                                Values(
                                    :mytype,
                                    :mynotification,
                                    NOW() )");
        $statement->execute([
            'mytype' => $type,
            'mynotification' => $my_notification_full
        ]);

        if ($statement) {
            return true;
        } else {
            return false;
        }
        
    }

    function verified($val){

        if ($val == 0) {
            $res = "not verified";
        } else {
            $res = "verified";
        }
        
        return $res;
    }

    // otp

    function createOTP($userCode){

        $randomNumber = randInt(6);

        $statement=PWD()->prepare("INSERT INTO 
                                        prow_otp
                                        (
                                            prow_otp_code, 
                                            prow_user_code, 
                                            prow_otp_status,
                                            prow_otp_created,
                                            prow_otp_updated
                                        ) 
                                        VALUES
                                        (
                                            :prow_otp_code, 
                                            :prow_user_code, 
                                            :prow_otp_status,
                                            NOW(),
                                            NOW()
                                        )");
        $statement->execute([
            'prow_otp_code' => $randomNumber, 
            'prow_user_code' => $userCode,
            'prow_otp_status' => 0,
        ]);

        return $randomNumber;

    }

    function sendOTP($userCode, $emailTo, $autoload){

        $otp = createOTP($userCode);

        $title = "Verification Code";

        $subject = "Verification Code: " . $otp;
        $message = "<p>Hi dear Scholars! Here is your verification code:</p>";
        $message .= "<h4>" . $otp . "</h4>\n\n";
        $message .= "<p>If this request did not come from you, change your account password immediately to prevent further unauthorized access.</p>";
        $message .= "<p>This is a system generated email. Do not reply.</p>";

        $request = sendEmail($emailTo, $subject, $title, $message, $autoload);

        if ($request == true) {
            return true;
        } else {
            return false;
        }

    }

    function sendVerification($userCode, $emailTo, $autoload){

        $otp = createOTP($userCode);

        $title = "Email Verification";

        $subject = "Email Verification";
        $message = "<p>Hi dear Scholars! Here is your verification link:</p>";
        $message .= "<a href='".$verificationDirectory."verify?token=".randStrInt(30)."&usercode=".$userCode."&otp=".$otp."'>".$verificationDirectory."verify</a>\n\n";
        $message .= "<p>If this request did not come from you, change your account password immediately to prevent further unauthorized access.</p>";
        $message .= "<p>This is a system generated email. Do not reply.</p>";

        $request = sendEmail($emailTo, $subject, $title, $message, $autoload);

        if ($request == true) {
            return true;
        } else {
            return false;
        }

    }

    function verifyAccount($userCode, $otp){

        $stmt=PWD()->prepare("SELECT 
                            * 
                            FROM 
                            prow_otp 
                            Where 
                            prow_user_code = :prow_user_code
                            AND
                            prow_otp_code = :prow_otp_code");
        $stmt->execute([
            'prow_user_code' => $userCode,
            'prow_otp_code' => $otp
        ]);

        $count=$stmt->rowCount();
        $res=$stmt->fetch(PDO::FETCH_ASSOC);

        if ($count > 0) {
            
            if ($res['prow_otp_status'] == 0) {

                $stmt1=PWD()->prepare("UPDATE 
                                    prow_otp 
                                    SET
                                    prow_otp_status = :prow_otp_status
                                    Where 
                                    prow_user_code = :prow_user_code
                                    AND
                                    prow_otp_code = :prow_otp_code");
                $stmt1->execute([
                    'prow_otp_status' => 1,
                    'prow_user_code' => $userCode,
                    'prow_otp_code' => $otp
                ]);


                $stmt2=PWD()->prepare("UPDATE 
                                    prow_users
                                    SET
                                    prow_user_verify = :prow_user_verify
                                    Where 
                                    prow_user_code = :prow_user_code
                                    ");
                $stmt2->execute([
                    'prow_user_verify' => 1,
                    'prow_user_code' => $userCode
                ]);

                if ($stmt1 && $stmt2) {
                    return "verified";
                } else {
                    return "error_verification";
                }
                
            } else {
                return "verified";
            }

        } else {
            return "notfound";
        }

    }

    function my_rand_str( $length ) {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";   

        $str="";
        
        $size = strlen( $chars );
        for( $i = 0; $i < $length; $i++ ) {
            $str .= $chars[ rand( 0, $size - 1 ) ];
        }

        return $str;
    }

    function scholarStatus($status){

        if ($status == 1) {
            $res = "Active";
        } else if ($status == 2) {
            $res = "Pending";
        } else if ($status == 3) {
            $res = "Alumni";
        } else {
            $res = "";
        }
        
        return $res;
    }

    function semester($semester){

        if ($semester == 1) {
            $res = "1st Semester";
        } else if ($semester == 2) {
            $res = "2nd Semester";
        } else {
            $res = "";
        }
        
        return $res;
    }

    function yearLevel($yearLevel){

        if ($yearLevel == 1) {
            $res = "1st";
        } else if ($yearLevel == 2) {
            $res = "2nd";
        } else if ($yearLevel == 3) {
            $res = "3rd";
        } else if ($yearLevel == 4) {
            $res = "4th";
        } else if ($yearLevel == 5) {
            $res = "5th";
        } else {
            $res = "";
        }
        
        return $res;
    }

    function selectSchoolYears(){

        $stmt=PWD()->prepare("SELECT 
                            *
                            FROM
                            prow_list_sy
                            Order By
                            prow_sy_year
                            DESC");
        $stmt->execute();

        return $stmt;

    }

    function getSchoolYearLatest(){

        $stmt=PWD()->prepare("SELECT 
                            prow_sy_year
                            FROM
                            prow_list_sy
                            Where
                            prow_sy_current = :prow_sy_current");
        $stmt->execute([
            'prow_sy_current' => 1
        ]);
        $res=$stmt->fetch(PDO::FETCH_ASSOC);

        return $res['prow_sy_year'];

    }

    function selectSkillTypes(){

        $stmt=PWD()->prepare("SELECT
                            *
                            FROM
                            prow_skill_type
                            Order By
                            prow_skill_type_name
                            ASC");
        $stmt->execute();

        return $stmt;

    }

    function selectSkillsByType($skillTypeId){

        $stmt=PWD()->prepare("SELECT
                            *
                            FROM
                            prow_skills
                            Where
                            prow_skill_type_id = :prow_skill_type_id
                            Order By
                            prow_skill_name
                            ASC");
        $stmt->execute([
            'prow_skill_type_id' => $skillTypeId
        ]);

        return $stmt;

    }

    function getSkillType($skillTypeId){

        $stmt=PWD()->prepare("SELECT
                            prow_skill_type_name
                            FROM
                            prow_skill_type
                            Where
                            prow_skill_type_id = :prow_skill_type_id");
        $stmt->execute([
            'prow_skill_type_id' => $skillTypeId
        ]);

        $res=$stmt->fetch(PDO::FETCH_ASSOC);

        return $res['prow_skill_type_name'];

    }

    function getSkillCategory($skillTypeId){

        $stmt=PWD()->prepare("SELECT
                            prow_skill_category
                            FROM
                            prow_skill_type
                            Where
                            prow_skill_type_id = :prow_skill_type_id");
        $stmt->execute([
            'prow_skill_type_id' => $skillTypeId
        ]);

        $res=$stmt->fetch(PDO::FETCH_ASSOC);

        return $res['prow_skill_category'];

    }

    function getAllSkill(){

        $stmt=PWD()->prepare("SELECT 
                            * FROM 
                            `prow_skills` 
                            INNER JOIN 
                            prow_skill_type 
                            ON 
                            prow_skills.prow_skill_type_id = prow_skill_type.prow_skill_type_id");
        $stmt->execute();
    
        return $stmt;

    }

    function getImg($userCode){

        $stmt=PWD()->prepare("SELECT 
                            * FROM 
                            prow_users
                            WHERE 
                            prow_scholar_code = :userCode");
        $stmt->execute([
            'userCode' => $userCode
        ]);

        $res=$stmt->fetch(PDO::FETCH_ASSOC);

        return $res['prow_user_picture'];
    }
?>