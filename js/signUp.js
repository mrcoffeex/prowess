/**
 *  Page auth register multi-steps
 */

'use strict';

// Select2 (jquery)
$(function () {
  var select2 = $('.select2');

  // select2
  if (select2.length) {
    select2.each(function () {
      var $this = $(this);
      $this.wrap('<div class="position-relative"></div>');
      $this.select2({
        placeholder: 'Select a city/municipality',
        dropdownParent: $this.parent()
      });
    });
  }
});

// Multi Steps Validation
// --------------------------------------------------------------------
document.addEventListener('DOMContentLoaded', function (e) {
  (function () {

    const stepsValidation = document.querySelector('#multiStepsValidation');
    if (typeof stepsValidation !== undefined && stepsValidation !== null) {
      // Multi Steps form
      const stepsValidationForm = stepsValidation.querySelector('#multiStepsForm');
      // Form steps
      const stepsValidationFormStep1 = stepsValidationForm.querySelector('#accountDetailsValidation');
      const stepsValidationFormStep2 = stepsValidationForm.querySelector('#personalInfoValidation');
      const stepsValidationFormStep3 = stepsValidationForm.querySelector('#addressLinksValidation');
      // Multi steps next prev button
      const stepsValidationNext = [].slice.call(stepsValidationForm.querySelectorAll('.btn-next'));
      const stepsValidationPrev = [].slice.call(stepsValidationForm.querySelectorAll('.btn-prev'));

      // const cleave = new Cleave('#multiStepsBirthday', {
      //   date: true,
      //   datePattern: ['Y', 'm', 'd']
      // });

      let validationStepper = new Stepper(stepsValidation, {
        linear: true
      });

      // Account details
      const multiSteps1 = FormValidation.formValidation(stepsValidationFormStep1, {
        fields: {
          multiStepsUsername: {
            validators: {
              notEmpty: {
                message: 'Please enter username'
              },
              stringLength: {
                min: 6,
                max: 30,
                message: 'The name must be more than 6 and less than 30 characters long'
              },
              regexp: {
                regexp: /^[a-zA-Z0-9 ]+$/,
                message: 'The name can only consist of alphabetical, number and space'
              }
            }
          },
          multiStepsEmail: {
            validators: {
              notEmpty: {
                message: 'Please enter email address'
              },
              emailAddress: {
                message: 'The value is not a valid email address'
              }
            }
          },
          multiStepsPass: {
            validators: {
              notEmpty: {
                message: 'Please enter password'
              },
              stringLength: {
                min: 8,
                max: 16,
                message: 'The name must be more than 8 and less than 16 characters long'
              }
            }
          },
          multiStepsConfirmPass: {
            validators: {
              notEmpty: {
                message: 'Confirm Password is required'
              },
              identical: {
                compare: function () {
                  return stepsValidationFormStep1.querySelector('[name="multiStepsPass"]').value;
                },
                message: 'The password and its confirm are not the same'
              }
            }
          }
        },
        plugins: {
          trigger: new FormValidation.plugins.Trigger(),
          bootstrap5: new FormValidation.plugins.Bootstrap5({
            // Use this for enabling/changing valid/invalid class
            // eleInvalidClass: '',
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
        // Jump to the next step when all fields in the current step are valid
        validationStepper.next();
      });

      // Personal info
      const multiSteps2 = FormValidation.formValidation(stepsValidationFormStep2, {
        fields: {
          multiStepsFirstName: {
            validators: {
              notEmpty: {
                message: 'Please enter first name'
              }
            }
          },
          multiStepsLastName: {
            validators: {
              notEmpty: {
                message: 'Please enter last name'
              }
            }
          },
          multiStepsCS: {
            validators: {
              notEmpty: {
                message: 'Please select your civil status'
              }
            }
          },
          multiStepsGender: {
            validators: {
              notEmpty: {
                message: 'Please select your gender'
              }
            }
          },
          multiStepsBirthday: {
            validators: {
              notEmpty: {
                message: 'Please enter your birthday'
              }
            }
          },
          multiStepsMobile: {
            validators: {
              notEmpty: {
                message: 'Please enter your mobile number'
              },
              stringLength: {
                max: 10,
                message: 'Mobile number must be 10 character long ex. 9123456778'
              }
            }
          },
          multiStepsBirthPlace: {
            validators: {
              notEmpty: {
                message: 'Please enter first Birthplace'
              }
            }
          }
        },
        plugins: {
          trigger: new FormValidation.plugins.Trigger(),
          bootstrap5: new FormValidation.plugins.Bootstrap5({
            // Use this for enabling/changing valid/invalid class
            // eleInvalidClass: '',
            eleValidClass: '',
            rowSelector: function (field, ele) {
              // field is the field name
              // ele is the field element
              switch (field) {
                case 'multiStepsFirstName':
                  return '.col-sm-6';
                default:
                  return '.row';
              }
            }
          }),
          autoFocus: new FormValidation.plugins.AutoFocus(),
          submitButton: new FormValidation.plugins.SubmitButton()
        }
      }).on('core.form.valid', function () {
        // Jump to the next step when all fields in the current step are valid
        validationStepper.next();
      });

      // Social links
      const multiSteps3 = FormValidation.formValidation(stepsValidationFormStep3, {
        fields: {
          multiStepsAddress: {
            validators: {
              notEmpty: {
                message: 'Please enter your address'
              }
            }
          },
          multiStepsMunicipality: {
            validators: {
              notEmpty: {
                message: 'Please enter your municipality'
              }
            }
          },
          multiStepsBarangay: {
            validators: {
              notEmpty: {
                message: 'Please enter your barangay'
              }
            }
          },
          multiStepsZipCode: {
            validators: {
              notEmpty: {
                message: 'Please enter your zipcode'
              }
            }
          }
        },
        plugins: {
          trigger: new FormValidation.plugins.Trigger(),
          bootstrap5: new FormValidation.plugins.Bootstrap5({
            // Use this for enabling/changing valid/invalid class
            // eleInvalidClass: '',
            eleValidClass: '',
            rowSelector: function (field, ele) {
              // field is the field name
              // ele is the field element
              switch (field) {
                case 'multiStepsAddress':
                  return '.col-sm-12';

                default:
                  return '.col-sm-6';
              }
            }
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
        // stepsValidationForm.submit()
        // or send the form data to server via an Ajax request
        // To make the demo simple, I just placed an alert
        var signUpBtn = document.querySelector('#signUpBtn');

        var multiStepsUsername = $('#multiStepsUsername').val();
        var multiStepsEmail = $('#multiStepsEmail').val();
        var multiStepsPass = $('#multiStepsPass').val();

        var multiStepsFirstName = $('#multiStepsFirstName').val();
        var multiStepsLastName = $('#multiStepsLastName').val();
        var multiStepsMiddleName = $('#multiStepsMiddleName').val();
        var multiStepsQualifier = $('#multiStepsQualifier').val();
        var multiStepsCS = $('#multiStepsCS').val();
        var multiStepsGender = $('#multiStepsGender').val();
        var multiStepsBirthday = $('#multiStepsBirthday').val();
        var multiStepsMobile = $('#multiStepsMobile').val();
        var multiStepsBirthPlace = $('#multiStepsBirthPlace').val();
        
        var multiStepsMunicipality = $('#multiStepsMunicipality').val();
        var multiStepsBarangay = $('#multiStepsBarangay').val();
        var multiStepsProvince = $('#multiStepsProvince').val();
        var multiStepsZipCode = $('#multiStepsZipCode').val();
        var multiStepsAddress = $('#multiStepsAddress').val();

        signUpBtn.disabled = true;

        $.ajax({
          url: 'signUpProcess.php', // Replace with your server endpoint URL
          type: 'POST',
          data: {
            multiStepsUsername: multiStepsUsername,
            multiStepsEmail: multiStepsEmail,
            multiStepsPass: multiStepsPass,
            multiStepsFirstName: multiStepsFirstName,
            multiStepsLastName: multiStepsLastName,
            multiStepsMiddleName: multiStepsMiddleName,
            multiStepsQualifier: multiStepsQualifier,
            multiStepsCS: multiStepsCS,
            multiStepsGender: multiStepsGender,
            multiStepsBirthday: multiStepsBirthday,
            multiStepsMobile: multiStepsMobile,
            multiStepsBirthPlace: multiStepsBirthPlace,
            multiStepsMunicipality: multiStepsMunicipality,
            multiStepsBarangay: multiStepsBarangay,
            multiStepsProvince: multiStepsProvince,
            multiStepsZipCode: multiStepsZipCode,
            multiStepsAddress: multiStepsAddress
            // Add more fields as needed
          },
          success: function(response) {
            // Handle success response here
            toastr.success('Registered successfully!');
            console.log(response);  
            window.location.href = 'signupComplete'
          },
          error: function(error) {
            // Handle error response here
            toastr.error('Error: ' + error);
            console.log(error);  
            window.location.href = '404?error=' + error
          }
        });

      });

      stepsValidationNext.forEach(item => {
        item.addEventListener('click', event => {
          // When click the Next button, we will validate the current step
          switch (validationStepper._currentIndex) {
            case 0:
              multiSteps1.validate();
              break;

            case 1:
              multiSteps2.validate();
              break;

            case 2:
              multiSteps3.validate();
              break;

            default:
              break;
          }
        });
      });

      stepsValidationPrev.forEach(item => {
        item.addEventListener('click', event => {
          switch (validationStepper._currentIndex) {
            case 2:
              validationStepper.previous();
              break;

            case 1:
              validationStepper.previous();
              break;

            case 0:

            default:
              break;
          }
        });
      });
    }
  })();
});
