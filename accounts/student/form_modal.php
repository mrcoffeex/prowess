<div class="modal fade" id="educationModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel1">Educational Attainment</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h6>Senior High School</h6>
                <div class="row">
                    <div class="col mb-4 mt-2">
                        <div class="form-floating form-floating-outline">
                            <select id="scholarschooName" name="scholarschooName" class="form-control">
                                <option value="UM Digos College">UM Digos College</option>
                                <option value="Cor Jesu College">Cor Jesu College</option>
                            </select>
                            <label for="scholarschooName">School Name</label>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col mb-4 mt-2">
                        <div class="form-floating form-floating-outline">
                            <select id="scholarStrand" name="scholarStrand" class="form-control">
                                <option value="ABM">ABM (Accountancy, Business and Management Strand)</option>
                                <option value="GAS">GAS (General Academic Strand)</option>
                                <option value="HUMSS">HUMSS (Humanities and Social Science Strand)</option>
                                <option value="STEM">STEM (Science, Technology, Engineering, and Mathematics Strand)</option>
                                <option value="TVL">TVL (Technical-Vocational-Livelihood Track)</option>
                            </select>
                            <label for="scholarStrand">Strand</label>
                        </div>
                    </div>
                    <div class="col mb-4 mt-2">
                        <div class="form-floating form-floating-outline">
                            <select id="scholarYrGrad" name="scholarYrGrad" class="form-control">
                            </select>
                            <label for="scholarYrGrad">Year Graduated</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-4 mt-2">
                        <div class="form-floating form-floating-outline">
                            <select id="scholarTalents" name="scholarTalents" class="form-control">
                                <option value="Dancing">Dancing</option>
                                <option value="Singing">Singing</option>
                            </select>
                            <label for="scholarTalents">Talents</label>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enrollmentModal">Proceed</button>
            </div>
        </div>
    </div>
</div>

<!-- Enrollment Info -->

<div class="modal fade" id="enrollmentModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel1">Enrollment Information</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-4 mt-2">
                        <div class="form-floating form-floating-outline">
                            <input type="text" id="enrollmentID" class="form-control" placeholder="Enter Name" />
                            <label for="enrollmentID">School ID</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-4 mt-2">
                        <div class="form-floating form-floating-outline">
                            <select id="enrollemntschooName" name="enrollemntschooName" class="form-control">
                                <option value="UM Digos College">UM Digos College</option>
                                <option value="Cor Jesu College">Cor Jesu College</option>
                            </select>
                            <label for="enrollemntschooName">School Name</label>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col mb-4 mt-2">
                        <div class="form-floating form-floating-outline">
                            <select id="enrollmentCourse" name="enrollmentCourse" class="form-control">
                                <option value="BSIT">BSIT (Bachelor of Science in Information Technology)</option>
                            </select>
                            <label for="enrollmentCourse">Course</label>
                        </div>
                    </div>
                    <div class="col mb-4 mt-2">
                        <div class="form-floating form-floating-outline">
                            <select id="enrollmentYearLevel" name="enrollmentYearLevel" class="form-control">
                                <option value="1">1st</option>
                                <option value="2">2nd</option>
                                <option value="3">3rd</option>
                                <option value="4">4th</option>
                                <option value="5">5th</option>
                            </select>
                            <label for="enrollmentYearLevel">Year Level</label>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">
                    Skip
                </button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#uploadRequirements">Proceed</button>
            </div>
        </div>
    </div>
</div>

<!-- Upload Requirements -->

<div class="modal fade" id="uploadRequirements" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel1">Upload Needed Requirements</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="formFile" class="form-label">Enrollement Form</label>
                    <input class="form-control" type="file" id="formFile" />
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Birth Certificate</label>
                    <input class="form-control" type="file" id="formFile" />
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Certificate of Low Income</label>
                    <input class="form-control" type="file" id="formFile" />
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Report Card</label>
                    <input class="form-control" type="file" id="formFile" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="">Submit</button>
            </div>
        </div>
    </div>
</div>