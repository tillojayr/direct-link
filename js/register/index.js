$(function () {
  console.log("asd");
});

$("#register_form").submit(function (e) {
  e.preventDefault();
});

$("#create_button").click(function () {
  if ($("#register_form").valid()) {
    console.log($("#register_form").serialize());
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
    alert(response);
  });
}
