$(document).ready(function() {
    $('#enrollmentSchoolYear').change(function() {

        var selectedYear = $(this).val();
        var scholarCode = 

        // Make an AJAX request to fetch student info
        $.ajax({
            url: 'autoRequirements', // Replace with your actual URL
            method: 'GET',
            data: { schoolYear: selectedYear, scholarCode: scholarCode },
            success: function(data) {

                var list = $('#studentList');
                list.empty();

                $('#showRequirements').html(data);
            },
            error: function(xhr, status, error) {
                console.error('Error fetching student info:', error);
            }
        });
    });

    // Trigger initial change event to populate list on page load
    $('#enrollmentSchoolYear').trigger('change');
});