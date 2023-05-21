function Validate() {
  var name = document.getElementById("name");
  var email = document.getElementById("email");
  var phone = document.getElementById("phone");
  var address = document.getElementById("address");

  if (
    name.value.trim() == "" ||
    email.value.trim() == "" ||
    phone.value.trim() == "" ||
    address.value.trim() == ""
  ) {
    alert(" Username and Password Field can't be empty");
    return false;
  } else {
    return true;
  }
}

function validateForm() {
  var name = document.getElementById("name").value;
  if (name == "") {
    alert("Name should not be empty.");
    return false;
  }

  var name = document.getElementById("email").value;
  if (name == "") {
    alert("Email should not be empty.");
    return false;
  }

  var name = document.getElementById("contact").value;
  if (name == "") {
    alert("Contact should not be empty.");
    return false;
  }

  var name = document.getElementById("address").value;
  if (name == "") {
    alert("Address should not be empty.");
    return false;
  }
  return true;
}

function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
