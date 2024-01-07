
<?php  

    require '_config.php';

    function deleteInfo($scholarCode){

        $stmt1=PWD()->prepare("DELETE FROM prow_scholar Where prow_scholar_code = :prow_scholar_code");
        $stmt1->execute([
            'prow_scholar_code' => $scholarCode
        ]);

        $stmt2=PWD()->prepare("DELETE FROM prow_users Where prow_scholar_code = :prow_scholar_code");
        $stmt2->execute([
            'prow_scholar_code' => $scholarCode
        ]);

        $stmt3=PWD()->prepare("DELETE FROM prow_scholar_address Where prow_scholar_code = :prow_scholar_code");
        $stmt3->execute([
            'prow_scholar_code' => $scholarCode
        ]);

        $stmt4=PWD()->prepare("DELETE FROM prow_scholar_app_logs Where prow_scholar_code = :prow_scholar_code");
        $stmt4->execute([
            'prow_scholar_code' => $scholarCode
        ]);

        $stmt5=PWD()->prepare("DELETE FROM prow_scholar_profile Where prow_scholar_code = :prow_scholar_code");
        $stmt5->execute([
            'prow_scholar_code' => $scholarCode
        ]);

        $stmt6=PWD()->prepare("DELETE FROM prow_scholar_requirements Where prow_scholar_code = :prow_scholar_code");
        $stmt6->execute([
            'prow_scholar_code' => $scholarCode
        ]);

        $stmt7=PWD()->prepare("DELETE FROM prow_scholar_skills Where prow_scholar_code = :prow_scholar_code");
        $stmt7->execute([
            'prow_scholar_code' => $scholarCode
        ]);

        if ($stmt1 && $stmt2 && $stmt3 && $stmt4 && $stmt5 && $stmt6 && $stmt7) {
            return true;
        } else {
            return false;
        }

    }

    if (isset($_POST['submit'])) {
        
        $scholarCode = clean_string($_POST['scholarCode']);

        $request = deleteInfo($scholarCode);

        if ($request == true) {
            echo "
                <script>
                    window.alert('data removed');
                </script>
            ";
        } else {
            echo "
                <script>
                    window.alert('error');
                </script>
            ";
        }
        

    } else {
        //nothing
    }
    

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>duplicate removeS</title>
</head>
<body>
    <div style="margin-top: 200px; text-align: center;">
        <form action="" enctype="multipart/form-data" method="post">
            ScholarCode: <input type="text" name="scholarCode" id="scholarCode" autofocus>
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>