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
    }else if ($note == "invalid") {
        echo "
            <script>
                toastr.error('Invalid!');
            </script>
        ";
    } else {

        //fillupForm_old2
        
        if ($currpage == "fillupForm_old2") {
        
            if ($note == "updated") {
                echo "
                    <script>
                        toastr.success('Changes saved');
                    </script>
                ";
            } else if ($note == "skill_added") {
                echo "
                    <script>
                        toastr.success('Skill added');
                    </script>
                ";
            } else if ($note == "skill_removed") {
                echo "
                    <script>
                        toastr.success('Skill removed');
                    </script>
                ";
            } else if ($note == "subject_added") {
                echo "
                    <script>
                        toastr.success('Subject added');
                    </script>
                ";
            } else if ($note == "subject_removed") {
                echo "
                    <script>
                        toastr.success('Subject removed');
                    </script>
                ";
            } else if ($note == "duplicate") {
                echo "
                    <script>
                        toastr.error('Duplicate entry');
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
?>