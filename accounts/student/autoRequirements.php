<?php  

    require '../../config/includes.php';
    require '_session.php';

    $schoolYear = clean_string($_GET['schoolYear']);
    $scholarCode = clean_string($_GET['scholarCode']);

    if (!empty($schoolYear && $scholarCode)) {
        
        $logCode = getScholarSYRequirements($scholarCode, $schoolYear);

        if (!empty($logCode)) {
            
            $getRequirements = selectScholarRequirementsBylogCode($scholarCode, $logCode);
            $req=$getRequirements->fetch(PDO::FETCH_ASSOC);
                
            echo '
            <div class="col-md-6 col-lg-6 mb-3">
                <div class="card h-100">
                    <img class="card-img-top" src="../../imagebank/'. $req['prow_req_cert_low_income'] .'" alt="image here .." />
                    <div class="card-body text-center">
                        <h5 class="card-title">Low Income Certificate</h5>
                        <a href="viewImage?image='. $req['prow_req_cert_low_income'] .'" target="_blank" class="btn btn-outline-primary">Full view</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 mb-3">
                <div class="card h-100">
                    <img class="card-img-top" src="../../imagebank/'. $req['prow_req_endorsement'] .'" alt="image here .." />
                    <div class="card-body text-center">
                        <h5 class="card-title">Endoresement Letter</h5>
                        <a href="viewImage?image='. $req['prow_req_cert_low_income'] .'" target="_blank" class="btn btn-outline-primary">Full view</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 mb-3">
                <div class="card h-100">
                    <img class="card-img-top" src="../../imagebank/'. $req['prow_req_school_card'] .'" alt="image here .." />
                    <div class="card-body text-center">
                        <h5 class="card-title">School Card</h5>
                        <a href="viewImage?image='. $req['prow_req_cert_low_income'] .'" target="_blank" class="btn btn-outline-primary">Full view</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 mb-3">
                <div class="card h-100">
                    <img class="card-img-top" src="../../imagebank/'. $req['prow_req_enrollment_form'] .'" alt="image here .." />
                    <div class="card-body text-center">
                        <h5 class="card-title">Encrollment Form</h5>
                        <a href="viewImage?image='. $req['prow_req_cert_low_income'] .'" target="_blank" class="btn btn-outline-primary">Full view</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 mb-3">
                <div class="card h-100">
                    <img class="card-img-top" src="../../imagebank/'. $req['prow_req_birth_certificate'] .'" alt="image here .." />
                    <div class="card-body text-center">
                        <h5 class="card-title">Birth Certificate</h5>
                        <a href="viewImage?image='. $req['prow_req_cert_low_income'] .'" target="_blank" class="btn btn-outline-primary">Full view</a>
                    </div>
                </div>
            </div>
            ';

        } else {
            echo '<p class="text-center text-danger">no result</p>';
        }

    } else {
        echo '<p class="text-center text-danger">no result</p>';
    }
    

?>