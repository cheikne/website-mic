$(document).ready(()=>{
    $("#header").load("view/header)");
    $("#footer").load("footer.blade.php");
 });
function DisplayMenuBar() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
