document.getElementById("myForm").addEventListener("submit", function (event) {
  event.preventDefault();
  var formData = new FormData(document.getElementById("myForm"));

  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      location.reload();
    }
  };

  xhr.open("POST", "senddata.php", true);
  xhr.send(formData);
});
