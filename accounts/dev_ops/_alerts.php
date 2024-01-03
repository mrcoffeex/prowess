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
    } else {

        //hei_profile
        
        if ($currpage == "hei_profile") {
        
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

        // systemUsers
        
        if ($currpage == "systemUsers" || $currpage == "systemUserSearch") {
        
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

        // announcements
        
        if ($currpage == "announcementCreate" || $currpage == "announcementEdit" || $currpage == "announcements") {
        
            if ($note == "added") {
                echo "
                    <script>
                        toastr.success('Announcement added');
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
                        toastr.success('Announcement removed');
                    </script>
                ";
            } else {
                echo "";
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