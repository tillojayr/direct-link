$(function () {
  console.log("asd");
});

$("#register_form").submit(function (e) {
  e.preventDefault();
});

$("#create_button").click(function () {
  if ($("#register_form").valid()) {
    $(this).html('<div class="loading-btn"><div class="spinner-border spinner-border-sm" role="status"><span class="sr-only"></span></div><span> Loading...</span></div>').prop('disabled', true);
    saveRegistration($("#register_form").serialize());
  }
});

function saveRegistration($formData) {
  $.ajax({
    url: "php_scripts/register.php",
    dataType: "json",
    type: "POST",
    data: $formData,
  }).then(function (response) {
    console.log(response);
    if(response == true){
      const role = $('#role').val();
      Swal.fire({
        position: "center",
        icon: "success",
        title: "Account successfuly created!",
        showConfirmButton: false,
        timer: 1000
      }).then((result) => {
        switch(role) {
          case 'ADMIN':
            location.href = "login-admin.php";
            break;
          case 'EMPLOYER':
            location.href = "login-employer.php";
            break;
          case 'JOB SEEKER':
            location.href = "login-jobseeker.php";
            break;
          default:
            alert('Error: User undefined role');
        }
      });
    }
    else if(response == false){
      alert('error');
    }
    else{
      alert(response);
    }
    $("#create_button").html('<span>Create</span></div>').prop('disabled', false);
  });
}
