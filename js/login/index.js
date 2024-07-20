$(function () {
  console.log("js");
});

$("#login_form").submit(function (e) {
  e.preventDefault();
});

$("#login_button").click(function () {
  if ($("#login_form").valid()) {
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
      location.reload();
    } else {
      alert(response["message"]);
    }
  });
}
