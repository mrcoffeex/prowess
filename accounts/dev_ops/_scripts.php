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


<script>

    //modal autofocus
    $(document).on('shown.bs.modal', function() {
      $(this).find('[autofocus]').focus();
      $(this).find('[autofocus]').select();
    });

	//validations
	function btnLoader(formObj){
        formObj.disabled = true;
        formObj.innerHTML = "processing ...";
        return true;  
    }

    // Municipality to barangay

    $(document).ready(function() {

        $('#heimunicipality').change(function(){

            $.ajax({
				type: "GET",
				url: "../../auto_gen_bgy.php",
				data: {municipalityId: $('#heimunicipality').val()},              
				success: function (data) {

                    $('#heibarangay').find('option').remove();

					var municipality = data.split(",");
                    var option = '<option></option>';
                    
                    for (var i=0; i<municipality.length; i++){
                        option += '<option>' + municipality[i] + '</option>';
                    }

                    $('#heibarangay').append(option);
				}
			});
            
        });

    });

</script>

<script>
    var selDiv = $("#heiAvatar");
    var userprof = $("#userprofileAvatar");
    var navDiv = $("#navigationDiv");
    var navpopDiv = $("#navpopDiv");
    var storedFiles = [];
    var defaultImage = '../../assets/img/avatars/1.png'; // Replace with the path to your default image
    var userImageURL = '<?= ((@$HeiImage == "" || @$HeiImage == "empty")) ?  "" : @$HeiImage ?>'; 
    var imageDir = '../../imagebank/';// Variable to store the user's image URL

    $(document).ready(function () {
        // Fetch the user's image URL from the database using AJAX
        if(userImageURL == ""){
            displayDefaultImage();
        }else{
            displayUserImage();
        }

        $("#heilogo").on("change", handleFileSelect);
        selDiv = $("#heiAvatar");
    });

    function displayDefaultImage() {
        var htmlset = '<img src="' + defaultImage + '" alt="default-avatar" class="d-block w-px-120 h-px-120 rounded">';
        var html = '<img src="' + defaultImage + '" alt="default-avatar" class="d-block w-px-120 h-px-120 ms-0 ms-sm-4 rounded user-profile-img">';
        var Navhtml = '<img src="' + defaultImage + '" alt="default-avatar" class="h-px-40 w-px-40 rounded-circle">';
        selDiv.html(htmlset);
        userprof.html(html);
        navDiv.html(Navhtml);
        navpopDiv.html(Navhtml);
    }

    function displayUserImage() {
        var htmlset = '<img src="' + imageDir + userImageURL + '" alt="user-avatar" class="d-block w-px-120 h-px-120 rounded">';
        var html = '<img src="' + imageDir + userImageURL + '" alt="user-avatar" class="d-block w-px-120 h-px-120 ms-0 ms-sm-4 rounded user-profile-img">';
        var Navhtml = '<img src="' + imageDir + userImageURL + '" alt="user-avatar" class="h-px-40 w-px-40 rounded-circle">';
        selDiv.html(htmlset);
        userprof.html(html);
        navDiv.html(Navhtml);
        navpopDiv.html(Navhtml);
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
            var htmlset =
            '<img src="' +
            e.target.result +
            '" data-file="' +
            f.name +
            '" alt="user-avatar" class="d-block w-px-120 h-px-120 rounded">';
            selDiv.html(htmlset);
        };
        reader.readAsDataURL(f);
        });
    }
</script>


<script>
    var selDiv = $("#uploadedAvatar");
    var userprof = $("#userprofileAvatar");
    var navDiv = $("#navigationDiv");
    var navpopDiv = $("#navpopDiv");
    var storedFiles = [];
    var defaultImage = '../../assets/img/avatars/1.png'; // Replace with the path to your default image
    var userImageURL = '<?= (empty(@$scholarImage)) ?  "'../../assets/img/avatars/1.png" : $scholarImage ?>'; 
    var imageDir = '../../imagebank/';// Variable to store the user's image URL

    $(document).ready(function () {
        // Fetch the user's image URL from the database using AJAX
        if(userImageURL != ""){
            displayUserImage();
        }else{
            displayDefaultImage();
        }

        $("#userImage").on("change", handleFileSelect);
        selDiv = $("#uploadedAvatar");
    });

    function displayDefaultImage() {
        var htmlset = '<img src="' + defaultImage + '" alt="default-avatar" class="d-block w-px-120 h-px-120 rounded">';
        var html = '<img src="' + defaultImage + '" alt="default-avatar" class="d-block w-px-120 h-px-120 ms-0 ms-sm-4 rounded user-profile-img">';
        var Navhtml = '<img src="' + defaultImage + '" alt="default-avatar" class="h-px-40 w-px-40 rounded-circle">';
        selDiv.html(htmlset);
        userprof.html(html);
        navDiv.html(Navhtml);
        navpopDiv.html(Navhtml);
    }

    function displayUserImage() {
        var htmlset = '<img src="' + imageDir + userImageURL + '" alt="user-avatar" class="d-block w-px-120 h-px-120 rounded">';
        var html = '<img src="' + imageDir + userImageURL + '" alt="user-avatar" class="d-block w-px-120 h-px-120 ms-0 ms-sm-4 rounded user-profile-img">';
        var Navhtml = '<img src="' + imageDir + userImageURL + '" alt="user-avatar" class="h-px-40 w-px-40 rounded-circle">';
        selDiv.html(htmlset);
        userprof.html(html);
        navDiv.html(Navhtml);
        navpopDiv.html(Navhtml);
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
            var htmlset =
            '<img src="' +
            e.target.result +
            '" data-file="' +
            f.name +
            '" alt="user-avatar" class="d-block w-px-120 h-px-120 rounded">';
            selDiv.html(htmlset);
        };
        reader.readAsDataURL(f);
        });
    }
</script>