<script src="../../assets/vendor/libs/jquery/jquery.js"></script>
<script src="../../assets/vendor/libs/popper/popper.js"></script>
<script src="../../assets/vendor/js/bootstrap.js"></script>
<script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="../../assets/vendor/libs/node-waves/node-waves.js"></script>

<script src="../../assets/vendor/libs/hammer/hammer.js"></script>
<script src="../../assets/vendor/libs/i18n/i18n.js"></script>
<script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>
<script src="../../assets/vendor/libs/toastr/toastr.js"></script>

<script src="../../assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="../../assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
<script src="../../assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
<script src="../../assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>

<script src="../../assets/vendor/libs/select2/select2.js"></script>
<script src="../../assets/vendor/libs/tagify/tagify.js"></script>
<script src="../../assets/vendor/libs/bootstrap-select/bootstrap-select.js"></script>
<script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>
<script src="../../assets/vendor/libs/bloodhound/bloodhound.js"></script>
<script src="../../assets/vendor/libs/dropzone/dropzone.js"></script>
<!-- Main JS -->
<script src="../../assets/js/main.js"></script>

<!-- Page JS -->
<script src="../../assets/js/dashboards-analytics.js"></script>
<script src="../../assets/js/forms-selects.js"></script>
<script src="../../assets/js/forms-tagify.js"></script>
<script src="../../assets/js/forms-typeahead.js"></script>
<script src="../../js/fileUpload.js"></script>

<!-- Custom JS -->

<script>
    //validations
    function btnLoader(formObj) {
        formObj.disabled = true;
        formObj.innerHTML = "processing ...";
        return true;
    }
    // Municipality to barangay
    $(document).ready(function() {

        $('#heimunicipality').change(function() {

            $.ajax({
                type: "GET",
                url: "../../auto_gen_bgy.php",
                data: {
                    municipalityId: $('#heimunicipality').val()
                },
                success: function(data) {

                    $('#heibarangay').find('option').remove();

                    var municipality = data.split(",");
                    var option = '<option></option>';

                    for (var i = 0; i < municipality.length; i++) {
                        option += '<option>' + municipality[i] + '</option>';
                    }

                    $('#heibarangay').append(option);
                }
            });

        });

    });


    const yearSelect = document.getElementById('scholarYrGrad');
    const startYear = 2000;
    const endYear = new Date().getFullYear();;
    for (let year = startYear; year <= endYear; year++) {
        const option = document.createElement('option');
        option.value = year;
        option.text = year;
        yearSelect.appendChild(option);
    }
</script>


<script>
	function btnLoader(formObj){
        formObj.disabled = true;
        formObj.innerHTML = "processing ...";
        return true;  
    }

    $(document).ready(function() {

        $('#enrollemntschooName').change(function(){

            $.ajax({
				type: "GET",
				url: "auto_gen_course.php",
				data: {courseId: $('#enrollemntschooName').val()},              
				success: function (data) {

                    $('#enrollmentCourse').find('option').remove();

					var course = data.split(",");
                    var option = '<option></option>';
                    
                    for (var i=0; i<course.length; i++){
                        option += '' + course[i] + '';
                    }

                    $('#enrollmentCourse').append(option);
				}
			});
            
        });

        $('#skillCategory').change(function(){

            $.ajax({
				type: "GET",
				url: "auto_gen_skills.php",
				data: {skillTypeId: $('#skillCategory').val()},              
				success: function (data) {

                    $('#skills').find('option').remove();

					var skills = data.split(",");
                    var option = '<option></option>';
                    
                    for (var i=0; i<skills.length; i++){
                        option += '<option>' + skills[i] + '</option>';
                    }

                    $('#skills').append(option);
				}
			});
            
        });

    });

</script>

<script>
    var selDiv = $("#uploadedAvatar");
    var storedFiles = [];
    var defaultImage = '../../assets/img/avatars/1.png'; // Replace with the path to your default image
    var userImageURL = '<?= $userImg?>'; 
    var imageDir = '../../imagebank_userprofiles/';// Variable to store the user's image URL

    $(document).ready(function () {
        // Fetch the user's image URL from the database using AJAX
        console.log(userImageURL);
        if(userImageURL != ""){
            displayUserImage();
        }else{
            displayDefaultImage();
        }

        $("#upload").on("change", handleFileSelect);
        selDiv = $("#uploadedAvatar");
    });

    function displayDefaultImage() {
        var html = '<img src="' + defaultImage + '" alt="default-avatar" class="d-block w-px-120 h-px-120 rounded">';
        selDiv.html(html);
    }

    function displayUserImage() {
        var html = '<img src="' + imageDir + userImageURL + '" alt="user-avatar" class="d-block w-px-120 h-px-120 rounded">';
        selDiv.html(html);
    }

    function handleFileSelect(e) {
        var files = e.target.files;
        var filesArr = Array.prototype.slice.call(files);
        console.log(filesArr);
        filesArr.forEach(function (f) {
        if (!f.type.match("image.*")) {
            return;
        }
        storedFiles.push(f);

        var reader = new FileReader();
        reader.onload = function (e) {
            var html =
            '<img src="' +
            e.target.result +
            '" data-file="' +
            f.name +
            '" alt="user-avatar" class="d-block w-px-120 h-px-120 rounded">';
            selDiv.html(html);
        };
        reader.readAsDataURL(f);
        });
    }
</script>