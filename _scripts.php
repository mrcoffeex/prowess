<script src="assets/vendor/libs/jquery/jquery.js"></script>
<script src="assets/vendor/libs/popper/popper.js"></script>
<script src="assets/vendor/js/bootstrap.js"></script>
<script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="assets/vendor/libs/node-waves/node-waves.js"></script>

<script src="assets/vendor/libs/hammer/hammer.js"></script>
<script src="assets/vendor/libs/i18n/i18n.js"></script>
<script src="assets/vendor/libs/typeahead-js/typeahead.js"></script>
<script src="assets/vendor/libs/toastr/toastr.js"></script>

<script src="assets/vendor/js/menu.js"></script>
<!-- Vendors JS -->
<script src="assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
<script src="assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
<script src="assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>

<script src="assets/vendor/libs/cleavejs/cleave.js"></script>
<script src="assets/vendor/libs/cleavejs/cleave-phone.js"></script>
<script src="assets/vendor/libs/bs-stepper/bs-stepper.js"></script>
<script src="assets/vendor/libs/select2/select2.js"></script>

<script src="assets/vendor/js/menu.js"></script>
<script src="assets/js/main.js"></script>

<script>

	//validations
	function btnLoader(formObj){
        formObj.disabled = true;
        formObj.innerHTML = "processing ...";
        return true;  
    }

    // Municipality to barangay

    $(document).ready(function() {

        $('#multiStepsMunicipality').change(function(){

            $.ajax({
				type: "GET",
				url: "auto_gen_bgy.php",
				data: {municipalityId: $('#multiStepsMunicipality').val()},              
				success: function (data) {

                    $('#multiStepsBarangay').find('option').remove();

					var municipality = data.split(",");
                    var option = '<option></option>';
                    
                    for (var i=0; i<municipality.length; i++){
                        option += '<option>' + municipality[i] + '</option>';
                    }

                    $('#multiStepsBarangay').append(option);
				}
			});
            
        });

    });

</script>