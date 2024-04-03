<?php  
    //put alerts here
    $currpage = str_replace('.php', '', basename($_SERVER['PHP_SELF']));
    $note = @$_GET['note'];

    if ($note == "error") {
        echo "
            <script>
                toastr.error('Course cannot be duplicated!');
            </script>
        ";
    } else if ($note == "invalid") {
        echo "
            <script>
                toastr.error('Invalid!');
            </script>
        ";
    } else if ($note == "invalid_upload") {
        echo "
            <script>
                toastr.error('Invalid Upload!');
            </script>
        ";
    } else if ($note == "empty_search") {
        echo "
            <script>
                toastr.error('No Input!');
            </script>
        ";
    } else {

        //hei_profile
        
        if ($currpage == "heiProfile") {
        
            if ($note == "duplicate") {
                echo "
                    <script>
                        toastr.error('Course already exists');
                    </script>
                ";
            } else if ($note == "course_removed") {
                echo "
                    <script>
                        toastr.success('Course removed');
                    </script>
                ";
            } else if ($note == "added") {
                echo "
                    <script>
                        toastr.success('Course added');
                    </script>
                ";
            } else {
                echo "";
            }

        }

        //hei_information
        
        if ($currpage == "hei_information") {
        
            if ($note == "added") {
                echo "
                    <script>
                        toastr.success('HEI added');
                    </script>
                ";
            } else {
                echo "";
            }

        }

        //settings
        
        if ($currpage == "settings") {
        
            if ($note == "updated") {
                echo "
                    <script>
                        toastr.success('Changes saved');
                    </script>
                ";
            } else {
                echo "";
            }

        }

        // hei_subjects
        
        if ($currpage == "hei_subjects") {
        
            if ($note == "added") {
                echo "
                    <script>
                        toastr.success('Subject added');
                    </script>
                ";
            } else if ($note == "updated") {
                echo "
                    <script>
                        toastr.success('Changes saved');
                    </script>
                ";
            } else if ($note == "removed") {
                echo "
                    <script>
                        toastr.success('Subject removed');
                    </script>
                ";
            } else {
                echo "";
            }

        }

        //scholar lsit
        
        if ($currpage == "scholarListPending" || $currpage == "scholarListPendingSearch") {
        
            if ($note == "duplicate") {
                echo "
                    <script>
                        toastr.error('Course already exists');
                    </script>
                ";
            } else if ($note == "added") {
                echo "
                    <script>
                        toastr.success('Course added');
                    </script>
                ";
            } else {
                echo "";
            }

        }

        //scholar_profile
        
        if ($currpage == "scholar_profile") {
        
            if ($note == "status_change") {
                echo "
                    <script>
                        toastr.success('Status changed');
                    </script>
                ";
            } else {
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