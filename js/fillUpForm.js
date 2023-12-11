
$(document).ready(function() {

  $('#scholarTalent').select2({
      multiple: true
  });

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

  // function previewImages(elemId, elemPreview) {

  //   $(elemId).on("change", function() {
  //     const previewContainer = document.getElementById(elemPreview);
  //     previewContainer.innerHTML = '';

  //     const files = elemId.target.files;

  //     for (const file of files) {
  //         if (file.type.startsWith('image/')) {

  //             const reader = new FileReader();

  //             reader.onload = function (e) {
  //                 const img = document.createElement('img');
  //                 img.src = e.target.result;
  //                 img.classList.add('image-preview');
  //                 previewContainer.appendChild(img);
  //             };

  //             reader.readAsDataURL(file);
  //         }
  //     }
  //   });
    
  // }

  // previewImages("reportCards", "reportCardsPreview");

  imagePreview("#enrollmentFormFile", "#enrollmentFormFilePreview");
  imagePreview("#birthCertFile", "#birthCertFilePreview");
  imagePreview("#lowIncomeFile", "#lowIncomeFilePreview");
  imagePreview("#reportCardFile", "#reportCardFilePreview");
  imagePreview("#endorsementFile", "#endorsementFilePreview");

});

document.addEventListener('DOMContentLoaded', function (e) {
    (function () {

      const formValidation = document.getElementById('formValidation'),
        formValidationSelect2Ele = jQuery(formValidation.querySelector('[name="enrollmentCourse"]')),
        enrollemntschooName = jQuery(formValidation.querySelector('[name="enrollemntschooName"]')),
        formValidationLangEle = formValidation.querySelector('[name="enrollmentYearLevel"]'),
        formValidationHobbiesEle = jQuery(formValidation.querySelector('[name="formValidationHobbies"]'));
  
      const fv = FormValidation.formValidation(formValidation, {
        fields: {
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
          scholarFatherCont: {
            validators: {
              stringLength: {
                max: 10,
                message: 'The contact number must be 10 characters long'
              }
            }
          },
          scholarTalent: {
            validators: {
              notEmpty: {
                message: 'Please enter your talent/s'
              }
            }
          },
          scholarMotherCont: {
            validators: {
              stringLength: {
                max: 10,
                message: 'Mobile number must be 10 character long ex. 9123456778'
              }
            }
          },
          scholarGuardianCont: {
            validators: {
              stringLength: {
                max: 10,
                message: 'Mobile number must be 10 character long ex. 9123456778'
              }
            }
          },
          scholarTalent: {
            validators: {
              notEmpty: {
                message: 'Mobile number must be 10 character long ex. 9123456778'
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
          enrollmentFormFile: {
            validators: {
              notEmpty: {
                message: 'Please upload the image of your enrollment form'
              }
            }
          },
          birthCertFile: {
            validators: {
              notEmpty: {
                message: 'Please upload the image of your birth certificate'
              }
            }
          },
          lowIncomeFile: {
            validators: {
              notEmpty: {
                message: 'Please upload the image of your Certificate of Low Income from the Barangay or BIR'
              }
            }
          },
          reportCardFile: {
            validators: {
              notEmpty: {
                message: 'Please upload the image of High School Report Card for incoming freshmen or Report of rating of last semester attendance in college for non-freshmen or enrollment form'
              }
            }
          },
          endorsementFile: {
            validators: {
              notEmpty: {
                message: 'Please upload the image of Endorsement Letter'
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
                case 'enrollmentFormFile':
                case 'birthCertFile':
                case 'lowIncomeFile':
                case 'reportCardFile':
                case 'endorsementFile':
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
  