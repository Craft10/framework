function navbar() {
  var x = document.getElementsByClassName("navbar")[0];
	var items = document.getElementsByClassName("items")[0];
	
  if (x.className === "navbar") {
    x.className += " responsive";
    items.className += " ite";
  } else {
    x.className = "navbar";
  }
}

// Get the modal
var modal = document.getElementsByClassName("m")[0];

// Get the button that opens the modal
var btn = document.getElementsByClassName("modald")[0];

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}