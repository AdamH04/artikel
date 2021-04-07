
function myFunction() {
  var x = document.getElementById("nav-adjust");
  if (x.className === "navbar") {
    x.className += " responsive";
  } else {
    x.className = "navbar";
  }
}