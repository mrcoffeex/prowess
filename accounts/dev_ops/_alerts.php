<?php  
    //put alerts here
    $currpage = str_replace('.php', '', basename($_SERVER['PHP_SELF']));
    $note = @$_GET['note'];


    if ($note == "error") {
        echo "
            <script>
                toastr.error('Course cannot be duplicated');
            </script>
        ";
    } else {

        //index
        
        if ($currpage == "hei_profile") {
        
            if ($note == "duplicate") {
                echo "
                    <script>
                        toastr.error('Course already exists');
                    </script>
                ";
            } 

        }

        //error page

        if ($currpage == "error") {
            
            if ($note == "not_string") {
                echo "
                    <script>
                        toastr.error('Input is not a string');
                    </script>
                ";
            }else if ($note == "not_post_email") {
                echo "
                    <script>
                        toastr.error('Input is not a POST email');
                    </script>
                ";
            }else if ($note == "not_get_email") {
                echo "
                    <script>
                        toastr.error('Input is not a GET email');
                    </script>
                ";
            }else if ($note == "not_post_int") {
                echo "
                    <script>
                        toastr.error('Input is not a POST integer');
                    </script>
                ";
            }else if ($note == "not_get_int") {
                echo "
                    <script>
                        toastr.error('Input is not a GET integer');
                    </script>
                ";
            }else if ($note == "no_username") {
                echo "
                    <script>
                        toastr.error('username not found');
                    </script>
                ";
            }else{
                echo "";
            }

        }

    }


    if ($note == "not_string" && $currpage == "error") {
        echo "
            <script>
                toastr.error('Input is not a string');
            </script>
        ";
    }else if ($note == "not_post_email" && $currpage == "error") {
        echo "
            <script>
                toastr.error('Input is not a POST email');
            </script>
        ";
    }else if ($note == "not_get_email" && $currpage == "error") {
        echo "
            <script>
                toastr.error('Input is not a GET email');
            </script>
        ";
    }else if ($note == "not_post_int" && $currpage == "error") {
        echo "
            <script>
                toastr.error('Input is not a POST integer');
            </script>
        ";
    }else if ($note == "not_get_int" && $currpage == "error") {
        echo "
            <script>
                toastr.error('Input is not a GET integer');
            </script>
        ";
    }else{
        echo "";
    }
?>