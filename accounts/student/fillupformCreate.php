<?php  
    
    include '../../config/includes.php';

    if (isset($_POST['scholarBloodType'])) {
        $scholarBloodType = $_POST['scholarBloodType'];
        $scholarTalent = $_POST['scholarTalent'];
        $scholarTalentArray = implode(',', $scholarTalent);

        echo $scholarTalentArray;
        
    } else {
        # code...
    }
    

?>