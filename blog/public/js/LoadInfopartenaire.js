
function LoadInfoPartenaire(id){
  var url = "../../modele/each_Partner.php?id_partners="+id;
  SendToServer(url,callback,id);
  if(id=="Managem")
    document.getElementById("role").innerHTML ="Le role de Managem dans le cadre du projet";
  if(id=="UCA")
    document.getElementById("role").innerHTML ="Le role de de UCA dans le cadre du projet";
}

$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});


function w3_open() {
  var mySidebar = document.getElementById("mySidebar");
  var overlayBg = document.getElementById("myOverlay");
  if (mySidebar.style.display === 'block') {
     // document.getElementById("clear").style.display="block";
    // document.getElementById("fermerSubMenu").style.marginTop="30%";
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } 
  else{
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
    // document.getElementById("clear").style.display="none";
    // document.getElementById("fermerSubMenu").style.marginTop="62%";
}
}

// Close the sidebar with the close button
function w3_close() {
  var mySidebar = document.getElementById("mySidebar");
  var overlayBg = document.getElementById("myOverlay");
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
   // document.getElementById("clear").style.display="block";
     // document.getElementById("fermerSubMenu").style.marginTop="30%";
}
function DisplayMenuBar() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
var largeur=document.documentElement.clientWidth
console.log("hfhfhhhhhfhfhhfhff "+largeur);
// function myFunction() {
//   var w = window.outerWidth;
//   var h = window.outerHeight;
//   var txt = "Window size: width=" + w + ", height=" + h;
//   console.log("hfhfhhhhhfhfhhfhff "+ txt);
// }
// document.getElementById("SubsMenu_").addEventListener("resize",()=>{
//   var w = window.outerWidth;
//   var h = window.outerHeight;
//   if(w <=1125)
//     document.getElementById("search").style.display="none";
//   if(w >1125)
//     document.getElementById("search").style.display="block";
// });
$(document).ready(function(){
  $("#searchButton").click(function(){
    var x = document.getElementById("searchInput");
    if(x.style.display=="block")
      x.style.display="none";
    else
      x.style.display="block";
  });
  $("#searchButton").focusout(function(){
     $("#searchInput").focusout(function(){
      var x = document.getElementById("searchInput");
      x.style.display="none";
  });
  });
});

function DisplaySubsMenuBar() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}