/**
 * Page auth register single-step form
 */

'use strict';



// Form Validation
// --------------------------------------------------------------------
document.addEventListener('DOMContentLoaded', function (e) {
  (function () {

    const form = document.querySelector('#addhei');

    if (typeof form !== 'undefined' && form !== null) {
      // Account details form validation
      const formValidation = FormValidation.formValidation(form, {
        fields: {
              // Add form fields for the provided variables
          heiname: {
            validators: {
              notEmpty: {
                message: 'Please enter HEI Name'
              }
            }
          },
          heicontactperson: {
            validators: {
              notEmpty: {
                message: 'Please enter contact person'
              }
            }
          },
          heicontact: {
            validators: {
              notEmpty: {
                message: 'Please enter contact number'
              }
            }
          },
          heiemail: {
            validators: {
              notEmpty: {
                message: 'Please enter email'
              },
              emailAddress: {
                message: 'The value is not a valid email address'
              }
            }
          },
          heiaddress: {
            validators: {
              notEmpty: {
                message: 'Please enter address'
              }
            }
          },
          heibarangay: {
            validators: {
              notEmpty: {
                message: 'Please enter barangay'
              }
            }
          },
          heimunicipality: {
            validators: {
              notEmpty: {
                message: 'Please enter municipality'
              }
            }
          },
          heiprovince: {
            validators: {
              notEmpty: {
                message: 'Please enter province'
              }
            }
          },
          heizip: {
            validators: {
              notEmpty: {
                message: 'Please enter ZIP code'
              }
            }
          },
        },
        plugins: {
          trigger: new FormValidation.plugins.Trigger(),
          bootstrap5: new FormValidation.plugins.Bootstrap5({
            eleValidClass: '',
            rowSelector: '.col-sm-6'
          }),
          autoFocus: new FormValidation.plugins.AutoFocus(),
          submitButton: new FormValidation.plugins.SubmitButton()
        },
        init: instance => {
          instance.on('plugins.message.placed', function (e) {
            if (e.element.parentElement.classList.contains('input-group')) {
              e.element.parentElement.insertAdjacentElement('afterend', e.messageElement);
            }
          });
        }
      }).on('core.form.valid', function () {
        // You can submit the form
        // form.submit()
        // or send the form data to the server via an Ajax request
        // To make the demo simple, I just placed an alert
        var signUpBtn = form.querySelector('#heiSaveBtn');

        // Add form field values for the provided variables
        var $heicode = $('#heicode').val();
        var $heiname = $('#heiname').val();
        var $heicontactperson = $('#heicontactperson').val();
        var $heicontact = $('#heicontact').val();
        var $heiemail = $('#heiemail').val();
        var $heibuildingnum = $('#heibuildingnum').val();
        var $heistreet = $('#heistreet').val();
        var $heipurok = $('#heipurok').val();
        var $heibarangay = $('#heibarangay').val();
        var $heimunicipality = $('#heimunicipality').val();
        var $heiprovince = $('#heiprovince').val();
        var $heizip = $('#heizip').val();

        signUpBtn.disabled = true;

        $.ajax({
          url: 'signUpProcess.php', // Replace with your server endpoint URL
          type: 'POST',
          data: {
            multiStepsUsername: multiStepsUsername,
            multiStepsEmail: multiStepsEmail,
            multiStepsPass: multiStepsPass,
            // Add form data for the provided variables
            $heicode: $heicode,
            $heiname: $heiname,
            $heicontactperson: $heicontactperson,
            $heicontact: $heicontact,
            $heiemail: $heiemail,
            $heibuildingnum: $heibuildingnum,
            $heistreet: $heistreet,
            $heipurok: $heipurok,
            $heibarangay: $heibarangay,
            $heimunicipality: $heimunicipality,
            $heiprovince: $heiprovince,
            $heizip: $heizip
            // Add more fields as needed
          },
          success: function (response) {
            // Handle success response here
            toastr.success('Registered successfully!');
            console.log(response);
            window.location.href = 'signupComplete';
          },
          error: function (error) {
            // Handle error response here
            toastr.error('Error: ' + error);
            console.log(error);
            window.location.href = '404?error=' + error;
          }
        });
      });
    }
  })();
});
