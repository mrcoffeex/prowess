/**
 * Form Editors
 */

'use strict';

(function () {
  // Snow Theme
  // --------------------------------------------------------------------
  const snowEditor = new Quill('#snow-editor', {
    bounds: '#snow-editor',
    modules: {
      formula: true,
      toolbar: '#snow-toolbar'
    },
    theme: 'snow'
  });
  
})();

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

imagePreview("#annImage", "#annImagePreview");
