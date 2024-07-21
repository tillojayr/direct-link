$(function(){
  // $(this).scrollTop(0);
  window.scrollTo(0, 0);
  fetchuserProfile();
})

function fetchuserProfile(){
  $.ajax({
    url: "php_scripts/profile/getProfile.php",
    dataType: "json",
    type: "GET",
  }).then(function (data) {
    if(data){
      for (var key in data) {
        if (data.hasOwnProperty(key)) {
            var val = data[key];
            if(key == 'description'){
              $('#'+key).text(val);
            }
            else if(key == 'path'){
              if(val != undefined){
                $('#profileImage').attr('src', 'assets/images/profile_pictures/'+val);
              }
            }
            else{
              $('#'+key).val(val);
            }
        }
      }
      if(data['firstname'] == undefined || data['lastname'] == undefined || data['firstname'] == '' || data['lastname'] == ''){
        $('#name').text(data['name']);
      }
      else{
        $('#name').text(data['firstname'] + ' ' + data['lastname']);
      }
    }
  });
}

$("#profile_form").submit(function (e) {
    e.preventDefault();
  });
  
  $("#profile_submit_button").click(function () {
    if ($("#profile_form").valid()) {
      Swal.fire({
        title: "Do you want to save the changes?",
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: "Save",
        denyButtonText: `Don't save`
      }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
          Swal.fire({
            title: 'Saving...',
            html: 'Please wait',
            allowEscapeKey: false,
            allowOutsideClick: false,
            didOpen: () => {
              Swal.showLoading()
            }
          });
          var formData = new FormData();
          var fileInput = $('#profile')[0].files[0];

          if (fileInput) {
              formData.append('profile', fileInput);
          }

          // Serialize the form data and append to the FormData object
          var formSerializedArray = $('#profile_form').serializeArray();
          $.each(formSerializedArray, function(index, field) {
              formData.append(field.name, field.value);
          });
          saveProfile(formData);
        } else if (result.isDenied) {
          Swal.fire("Changes are not saved", "", "info");
        }
      });
      
    }
  });
  
  function saveProfile(formData) {
    // $.ajax({
    //   url: "php_scripts/profile/profile.php",
    //   dataType: "json",
    //   type: "POST",
    //   data: $formData,
    // }).then(function (response) {
      
    // });

    $.ajax({
      url: 'php_scripts/profile/profile.php',
      type: 'POST',
      data: formData,
      contentType: false,
      processData: false,
      success: function(response) {
        if(response != false){
          window.scrollTo(0, 0);
          swal.close();
          Swal.fire({
            position: "center",
            icon: "success",
            title: "Your work has been saved",
            showConfirmButton: false,
            timer: 1500
          }).then((result) => {
            location.reload();
          });
        }
      },
      error: function(jqXHR, textStatus, errorThrown) {
          alert('Form submission failed!');
      }
  });
}

$('#profile').change(function(event) {
  var input = event.target;

  if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function(e) {
          $('#profileImage').attr('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]);
  }
});
