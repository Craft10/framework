var modal = document.getElementsByClassName("modal")[0];
var btn = document.getElementsByClassName("modalb")[0];
var span = document.getElementsByClassName("close")[0];
var x = document.getElementsByClassName("nav")[0];
var items = document.getElementsByClassName("items")[0];


function popup() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}

btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


function navbar() {

	
  if (x.className === "nav") {
    x.className += " responsive";
  } else {
    x.className = "nav";
  }
	  }

