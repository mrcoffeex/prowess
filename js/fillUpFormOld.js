
$(document).ready(function() {

    $('#scholarTalent').select2({
        multiple: true
    });


    $('input[name="scholarSingleP"]').change(function(){
      
      if ($('#scholarSinglePNo').is(':checked')) {
        $('#scholarSingleID').attr('readonly', true);
        $('#scholarSingleID').val('');
      } else {
        $('#scholarSingleID').attr('readonly', false);
      }

    });
  
});
  
  document.addEventListener('DOMContentLoaded', function (e) {
      (function () {
  
        const formValidation = document.getElementById('formValidation');
    
        const fv = FormValidation.formValidation(formValidation, {
          fields: {
            scholarReligion: {
              validators: {
                notEmpty: {
                  message: 'Please enter your religion'
                }
              }
            },
            scholarHeight: {
              validators: {
                notEmpty: {
                  message: 'Please enter your height(cm)'
                }
              }
            },
            scholarWeight: {
              validators: {
                notEmpty: {
                  message: 'Please enter your weight(kg)'
                }
              }
            },
            scholarSchoolID: {
              validators: {
                notEmpty: {
                  message: 'Please enter your School ID'
                }
              }
            },
            enrollemntschooName: {
              validators: {
                notEmpty: {
                  message: 'Please select your School'
                }
              }
            },
            enrollmentCourse: {
              validators: {
                notEmpty: {
                  message: 'Please select your enrolled course'
                }
              }
            },
            enrollmentYearLevel: {
              validators: {
                notEmpty: {
                  message: 'Please select your year level'
                }
              }
            },
            enrollmentSemester: {
              validators: {
                notEmpty: {
                  message: 'Please select your semester'
                }
              }
            },
            enrollmentSchoolYear: {
              validators: {
                notEmpty: {
                  message: 'Please select your school year'
                }
              }
            },
            scholarIncome: {
              validators: {
                notEmpty: {
                  message: 'Please select your income'
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
                // field is the field name & ele is the field element
                switch (field) {
                  case 'scholarHeight':
                  case 'scholarWeight':
                  case 'contactNumber':
                  case 'scholarTalent':
                  case 'scholarSchoolID':
                  case 'enrollemntschooName':
                  case 'enrollmentCourse':
                  case 'enrollmentYearLevel':
                  default:
                    return '.row';
                }
              }
            }),
            submitButton: new FormValidation.plugins.SubmitButton(),
            // Submit the form when all fields are valid
            defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
            autoFocus: new FormValidation.plugins.AutoFocus()
          },
          init: instance => {
            instance.on('plugins.message.placed', function (e) {
              //* Move the error message out of the `input-group` element
              if (e.element.parentElement.classList.contains('input-group')) {
                // `e.field`: The field name
                // `e.messageElement`: The message element
                // `e.element`: The field element
                e.element.parentElement.insertAdjacentElement('afterend', e.messageElement);
              }
              //* Move the error message out of the `row` element for custom-options
              if (e.element.parentElement.parentElement.classList.contains('custom-option')) {
                e.element.closest('.row').insertAdjacentElement('afterend', e.messageElement);
              }
            });
          }
        });
    
        //? Revalidation third-party libs inputs on change trigger
    
        // Flatpickr
        flatpickr(formValidation.querySelector('[name="formValidationDob"]'), {
          enableTime: false,
          // See https://flatpickr.js.org/formatting/
          dateFormat: 'Y/m/d',
          // After selecting a date, we need to revalidate the field
          onChange: function () {
            fv.revalidateField('formValidationDob');
          }
        });
    
        // Select2 (talent)
        if (scholarTalent.length) {
          scholarTalent.wrap('<div class="position-relative"></div>');
          scholarTalent
            .select2({
              placeholder: 'Select talent',
              dropdownParent: scholarTalent.parent()
            })
            .on('change.select2', function () {
              // Revalidate the color field when an option is chosen
              fv.revalidateField('scholarTalent');
            });
        }
  
        if (scholarBloodType.length) {
          scholarBloodType.wrap('<div class="position-relative"></div>');
          scholarBloodType
            .select2({
              placeholder: 'Select talent',
              dropdownParent: scholarBloodType.parent()
            })
            .on('change.select2', function () {
              // Revalidate the color field when an option is chosen
              fv.revalidateField('scholarBloodType');
            });
        }
    
        // Tagify
        let formValidationLangTagify = new Tagify(formValidationLangEle);
        formValidationLangEle.addEventListener('change', onChange);
        function onChange() {
          fv.revalidateField('formValidationLang');
        }
    
        //Bootstrap select
        enrollemntschooName.on('changed.bs.select', function (e, clickedIndex, isSelected, previousValue) {
          fv.revalidateField('formValidationTech');
        });
        formValidationHobbiesEle.on('changed.bs.select', function (e, clickedIndex, isSelected, previousValue) {
          fv.revalidateField('formValidationHobbies');
        });
      })();
    });
    