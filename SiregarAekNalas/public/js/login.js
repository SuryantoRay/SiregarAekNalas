function validating() {
  var username = document.getElementById("nama").value;
  var password = document.getElementById("password").value;
  if (username == "staff" && password == "staff") {
    window.location.href = "staff.html", true;
    return false;
  } else if (username == "admin" && password == "admin") {
    window.location.href = "admin.html", true;
    return false;
  } else {
    alert("USername dan password Anda Salah");
  }
}