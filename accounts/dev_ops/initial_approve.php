<?php
      require '../../config/includes.php';
      require '_session.php';

      $scholarCode = clean_string($_GET['scholarCode']);

      $request=updateInitialApprove($scholarCode);

      if ($request==true) {
        header("location: scholar_profile?scholarCode=$scholarCode");
    } else {
        echo "error";
    }

?>