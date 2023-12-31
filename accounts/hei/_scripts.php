<script src="../../assets/vendor/libs/jquery/jquery.js"></script>
<script src="../../assets/vendor/libs/popper/popper.js"></script>
<script src="../../assets/vendor/js/bootstrap.js"></script>
<script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="../../assets/vendor/libs/node-waves/node-waves.js"></script>

<script src="../../assets/vendor/libs/hammer/hammer.js"></script>
<script src="../../assets/vendor/libs/i18n/i18n.js"></script>
<script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>

<script src="../../assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="../../assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
<script src="../../assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
<script src="../../assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>
<!-- <script src="../../assets/vendor/libs/toastr/toastr.js"></script>
<script src="../../assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
<script src="../../assets/vendor/libs/apex-charts/apexcharts.js"></script> -->
<!-- <script src="../../assets/vendor/libs/swiper/swiper.js"></script> -->
<script src="../../assets/vendor/libs/select2/select2.js"></script>
<script src="../../assets/vendor/libs/tagify/tagify.js"></script>
<script src="../../assets/vendor/libs/bootstrap-select/bootstrap-select.js"></script>
<script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>
<script src="../../assets/vendor/libs/bloodhound/bloodhound.js"></script>

<!-- Main JS -->
<script src="../../assets/js/main.js"></script>

<!-- Page JS -->
<!-- <script src="../../assets/js/dashboards-analytics.js"></script> -->
<script src="../../assets/js/forms-selects.js"></script>
<script src="../../assets/js/forms-tagify.js"></script>
<script src="../../assets/js/forms-typeahead.js"></script>


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

    // Define the range of years you want to include
    const startYear = 2000;
    const endYear = new Date().getFullYear();;

    // Populate the select element with options for each year in the range
    for (let year = startYear; year <= endYear; year++) {
        const option = document.createElement('option');
        option.value = year;
        option.text = year;
        yearSelect.appendChild(option);
    }
</script>