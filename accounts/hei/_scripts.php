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
<script src="../../assets/vendor/libs/quill/katex.js"></script>
<script src="../../assets/vendor/libs/quill/quill.js"></script>
<script src="../../assets/vendor/libs/apex-charts/apexcharts.js"></script>
<script src="../../assets/vendor/libs/swiper/swiper.js"></script>

<!-- Database JS -->


<!-- Main JS -->
<script src="../../assets/js/main.js"></script>

<!-- Page JS -->
<script src="../../assets/js/dashboards-analytics.js"></script>
<script src="../../assets/js/pages-profile.js"></script>


<!-- Custom JS -->

<script>

    //modal autofocus
    $(document).on('shown.bs.modal', function() {
      $(this).find('[autofocus]').focus();
      $(this).find('[autofocus]').select();
    });

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

    // Define the range of years you want to include
    const startYear = new Date().getFullYear();
    const endYear = 2000;

    // Populate the select element with options for each year in the range
    for (let year = startYear; year >= endYear; year--) {
        const option = document.createElement('option');
        option.value = year;
        option.text = year;
        yearSelect.appendChild(option);
    }

    function imagePreview(fileId, filePreviewId) {

        $(fileId).on("change", function() {
            var input = this;
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    var img = $("<img>").attr("src", e.target.result);
                    $(filePreviewId).html(img);
                    $(".image-preview-div img").addClass("image-preview");
                };
                reader.readAsDataURL(input.files[0]);
                console.log("yes");
            }else{
                console.log("no");
            }
        });

    }

</script>

<script>
    var selDiv2 = $("#uploadedAvatar");
    var userprof2 = $("#userprofileAvatar");
    var navDiv2 = $("#navigationDiv");
    var navpopDiv2 = $("#navpopDiv");
    var storedFiles2 = [];
    var defaultImage2 = '../../assets/img/avatars/1.png'; // Replace with the path to your default image
    var userImageURL2 = '<?= (empty(@$scholarImage)) ?  "../../assets/img/avatars/1.png" : $scholarImage ?>'; 
    var imageDir2 = '../../imagebank/';// Variable to store the user's image URL

    $(document).ready(function () {
        // Fetch the user's image URL from the database using AJAX
        if(userImageURL2 != ""){
            displayUserImage();
        }else{
            displayDefaultImage();
        }

        $("#userImage").on("change", handleFileSelect);
        selDiv2 = $("#uploadedAvatar");
    });

    function displayDefaultImage() {
        var htmlset2 = '<img src="' + defaultImage2 + '" alt="default-avatar" class="d-block w-px-120 h-px-120 rounded">';
        var html2 = '<img src="' + defaultImage2 + '" alt="default-avatar" class="d-block w-px-120 h-px-120 ms-0 ms-sm-4 rounded user-profile-img">';
        var Navhtml2 = '<img src="' + defaultImage2 + '" alt="default-avatar" class="h-px-40 w-px-40 rounded-circle">';
        selDiv2.html(htmlset2);
        userprof2.html(html2);
        navDiv2.html(Navhtml2);
        navpopDiv2.html(Navhtml2);
    }

    function displayUserImage() {
        var htmlset2 = '<img src="' + imageDir2 + userImageURL2 + '" alt="user-avatar" class="d-block w-px-120 h-px-120 rounded">';
        var html2 = '<img src="' + imageDir2 + userImageURL2 + '" alt="user-avatar" class="d-block w-px-120 h-px-120 ms-0 ms-sm-4 rounded user-profile-img">';
        var Navhtml2 = '<img src="' + imageDir2 + userImageURL2 + '" alt="user-avatar" class="h-px-40 w-px-40 rounded-circle">';
        selDiv2.html(htmlset2);
        userprof2.html(html2);
        navDiv2.html(Navhtml2);
        navpopDiv2.html(Navhtml2);
    }

    function handleFileSelect(e) {
        var files2 = e.target.files;
        var filesArr2 = Array.prototype.slice.call(files2);
        console.log(filesArr2);
        filesArr2.forEach(function (f) {
        if (!f.type.match("image.*")) {
            return;
        }
        storedFiles.push(f);

        var reader2 = new FileReader();
        reader2.onload = function (e) {
            var htmlset2 =
            '<img src="' +
            e.target.result +
            '" data-file="' +
            f.name +
            '" alt="user-avatar" class="d-block w-px-120 h-px-120 rounded">';
            selDiv2.html(htmlset2);
        };
        reader2.readAsDataURL(f);
        });
    }
</script>