<?php
    require '../../config/includes.php';
    require '_session.php';
    include "_head.php";
?>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <?php include "_sidemenu.php"; ?>
            <div class="layout-page">
                <?php include "_topnavigation.php"; ?>

                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h1>Support</h1>
                        <div class="col-md-12 col-lg-13">

                            <h3 class="card-title mb-2">
                                Contact Information
                            </h3>

                            <div class="row mb-2">
                                <div class="col-12 col-sm-3 mb-2">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center flex-wrap gap-2">
                                                <div class="avatar me-3">
                                                    <div class="avatar-initial bg-label-success rounded">
                                                        <i class="mdi mdi-24px mdi-phone-dial-outline text-success"> </i>
                                                    </div>
                                                </div>
                                                <div class="card-info">
                                                    <div class="d-flex align-items-center">
                                                        <h5 class="mb-0">+639282657552</h5>
                                                        <!-- {{-- <i class="mdi mdi-chevron-down text-danger mdi-24px"></i> --}} -->
                                                    </div>
                                                    <small class="text-muted">Mobile Number</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4 mb-2">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center flex-wrap gap-2">
                                                <div class="avatar me-3">
                                                    <div class="avatar-initial bg-label-success rounded">
                                                        <i class="mdi mdi-24px mdi-email-fast-outline text-success"> </i>
                                                    </div>
                                                </div>
                                                <div class="card-info">
                                                    <div class="d-flex align-items-center">
                                                        <h5 class="mb-0">prowess@umindanao.edu.ph</h5>
                                                        <!-- {{-- <i class="mdi mdi-chevron-down text-danger mdi-24px"></i> --}} -->
                                                    </div>
                                                    <small class="text-muted">Email</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-5 ">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center flex-wrap gap-2">
                                                <div class="avatar me-3">
                                                    <div class="avatar-initial bg-label-success rounded">
                                                        <i class="mdi mdi-24px mdi-map-marker-outline text-success"> </i>
                                                    </div>
                                                </div>
                                                <div class="card-info">
                                                    <div class="d-flex align-items-center">
                                                        <h5 class="mb-0">Roxas Extentsion, Digos City, Davao del Sur</h5>
                                                        <!-- {{-- <i class="mdi mdi-chevron-down text-danger mdi-24px"></i> --}} -->
                                                    </div>
                                                    <small class="text-muted">Address</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h3 class="card-title mt-4">
                                Frequently Asked Questions
                            </h3>

                            <div class="col-md mb-4 mb-md-2">

                                <div class="accordion mt-2" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionOne" aria-expanded="true" aria-controls="accordionOne">
                                                How to apply for a scholarship using the PROWESS system?
                                            </button>
                                        </h2>

                                        <div id="accordionOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                            To apply for a scholarship using the PROWESS system, start by creating an account on the website. Follow the application steps and ensure all required information and documents are provided for a smooth process. Complete documentation is crucial to avoid delays in the approval of your scholarship application. Sign up, follow the steps, and submit a comprehensive application to maximize your chances of success.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo">
                                                How to renew my scholarship?
                                            </button>
                                        </h2>
                                        <div id="accordionTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                            To renew your scholarship, scholars will receive notifications through the app and email, indicating the start of the renewal process. Updating your profile is crucial, including personal information, skills, and grades, along with providing a screenshot of your proof of grades. The school will then review and authenticate your records. Upon verification, the scholarship coordinator will give final approval, ensuring the renewal process is complete and your scholarship is continued.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionThree" aria-expanded="false" aria-controls="accordionThree">
                                                How will I know if my scholarship is already approved?
                                            </button>
                                        </h2>
                                        <div id="accordionThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                            Once your scholarship application has been approved, you'll receive a confirmation email notifying you of the successful outcome. Additionally, check your student profile on the institution's portal for updated scholarship status. A key indicator of approval is the disabling of the "Update Application" button, signaling that your application is in its final stages. Official communication from the scholarship coordinator or office may provide more details about your award, duration, and any specific requirements. If you're eager for updates, contacting the scholarship office directly can offer the most accurate information. Stay patient, and congratulations on your potential scholarship  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h3 class="card-title mt-4 mb-3">
                                Need more help?
                            </h3>

                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <h5 class="card-header">Submit a Ticket</h5>
                                    <!-- <small class="accordion-body text-muted">You may raise your concern, feedback by submitting a ticket and we will give a response before 24 hours end</small> -->
                                    <div class="card-body demo-vertical-spacing demo-only-element">
                                        <form action="studentTicket" method="POST" enctype="multipart/form-data">
                                            <div class="form-floating form-floating-outline mb-4">
                                                <input type="text" class="form-control" id="ticketSubject" name="ticketSubject" placeholder="Request Subject" />
                                                <label for="ticketSubject">What is your concern?</label>
                                            </div>
                                            <div class="form-floating form-floating-outline mb-4">
                                                <textarea class="form-control h-px-100" id="ticket_Descript" name="ticket_Descript" placeholder="Comments here..."></textarea>
                                                <label for="ticket_Descript">Add description of your concern</label>
                                            </div>
                                            <div class="mb-3">
                                                <label for="ticketAttachment" class="form-label">Add Screenshot of your concern</label>
                                                <input class="form-control" type="file" id="ticketAttachment" name="ticketAttachment" accept="image/png, image/jpeg"/>
                                            </div>
                                            <button id="btn_ticket" name="btn_ticket" type="submit" class="btn btn-primary me-sm-3 me-1">Submit Ticket</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <?php include "_footer.php"; ?>
                    <div class="content-backdrop fade"></div>
                </div>

            </div>
        </div>
        <div class="layout-overlay layout-menu-toggle"></div>
        <div class="drag-target"></div>
    </div>
    <?php include "_scripts.php"; ?>
</body>

</html>