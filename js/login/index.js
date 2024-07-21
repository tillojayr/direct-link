$(function () {
  console.log("js");
});

$("#login_form").submit(function (e) {
  e.preventDefault();
});

$("#login_button").click(function () {
  if ($("#login_form").valid()) {
    $(this).html('<div class="loading-btn"><div class="spinner-border spinner-border-sm" role="status"><span class="sr-only"></span></div><span> Logging in...</span></div>').prop('disabled', true);
    login($("#login_form").serialize());
  }
});

function login($formData) {
  $.ajax({
    url: "php_scripts/login.php",
    dataType: "json",
    type: "POST",
    data: $formData,
  }).then(function (response) {
    console.log(response);
    if (response["registered"] == true) {
      switch(response["role"]) {
        case 'ADMIN':
          location.href = "dashboard-admin.php";
          break;
        case 'EMPLOYER':
          location.href = "dashboard-employer.php";
          break;
        case 'JOB SEEKER':
          location.href = "dashboard.php";
          break;
        default:
          alert('Error: User undefined role');
      }
    } else {
      alert(response["message"]);
    }
    $('#login_button').html('<span>Log In</span>').prop('disabled', false);
  });
}
