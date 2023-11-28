function setCookie(cname, cvalue, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
  var expires = "expires=" + d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(";");
  for (var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == " ") {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

document
  .querySelector(".reservationForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();
    setCookie("name", document.getElementById("name").value, 7);
    setCookie("date", document.getElementById("date").value, 7);
    setCookie("time", document.getElementById("time").value, 7);
    setCookie("people", document.getElementById("people").value, 7);
    var newWindow = window.open("", "Reserva", "width=600,height=400");
    newWindow.document.write(
      "Nombre: " +
        getCookie("name") +
        "<br>Fecha: " +
        getCookie("date") +
        "<br>Hora: " +
        getCookie("time") +
        "<br>Número de personas: " +
        getCookie("people")
    );
    
  });
