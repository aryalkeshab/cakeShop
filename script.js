

function Validate(){
  var name = document.getElementById("name");
  var email = document.getElementById("email");
  var phone = document.getElementById("phone");
  var address = document.getElementById("address");


  if(name.value.trim() == "" email.value.trim() == "" ||phone.value.trim() == "" ||address.value.trim() == "" )
    {
      alert(" Username and Password Field can't be empty");
      return false;
    }
    else  {
      return true;
    }
}


function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}


function validateForm(){
    var name = document.getElementById('name').value;
    if (name == ""){
      alert("Name should not be empty.");
      return false;
    }

    var name = document.getElementById('email').value;
    if (name == ""){
      alert("Email should not be empty.");
      return false;
    }

    var name = document.getElementById('contact').value;
    if (name == ""){
      alert("Contact should not be empty.");
      return false;
    }

    var name = document.getElementById('address').value;
    if (name == ""){
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
