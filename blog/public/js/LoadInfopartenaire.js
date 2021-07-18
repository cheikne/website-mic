
function DisplaySubsMenuBar() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
function DisplaySubsMenuBarPartenaire(){
  // DisplaySubsMenuBar();
  document.getElementById("subsMenuPartners").innerHTML=`
    <button class="w3-bar-item w3-button w3-padding-large" onclick="displayDropdown('DisplaySubsMenuPartners')">Partenaire du Projet <i class="fa fa-caret-down"></i></button>`;
  document.getElementById("DisplaySubsMenuPartners").innerHTML=`
      <div class="w3-bar-block">
        <h5 class="w3-bar-item w3-button"><b>Partenaires Industriels</b></h5>
      <a class="w3-bar-item w3-button w3-padding-large hiddenImgPartners " id="partners"  href="/Accueil/Partenaire-Projet/Managem">Industrie Managem</a>
      <a class="w3-bar-item w3-button w3-padding-large hiddenImgPartners " id="partners" href="/Accueil/Partenaire-Projet/Reminex">Industrie Reminex</a>
      <a class="w3-bar-item w3-button w3-padding-large hiddenImgPartners " id="partners"  href="/Accueil/Partenaire-Projet/Mascir">Industrie Macsir</a>
      <h5><b>Partenaires Academiques</b></h5>
      <a class="w3-bar-item w3-button w3-padding-large hiddenImgPartners " id="partners" href="/Accueil/Partenaire-Projet/UCA">Academie UCA</a>
      <a class="w3-bar-item w3-button w3-padding-large hiddenImgPartners " id="partners"  href="/Accueil/Partenaire-Projet/ENIM">Academie ENIM</a> 
      <a class="w3-bar-item w3-button w3-padding-large hiddenImgPartners " id="partners" href="/Accueil/Partenaire-Projet/ENSIAS">Academie ENSIAS</a> 
      <a class="w3-bar-item w3-button w3-padding-large hiddenImgPartners " id="partners" href="/Accueil/Partenaire-Projet/CNRST">Centre CNRST</a> 
      </div>`;
    // document.getElementById("navDemo").style.display="none";
} 
//Definition de la function DisplayDropdown

function displayDropdown(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-theme";
  } else { 
    x.className = x.className.replace("w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-theme", "");
  }
}

// $(document).ready(function(){
//     $("#subsMenuPartners").click(function(){
//     $("#DisplaySubsMenuPartners").slideToggle("slow");
//     console.log("je suis fort");
//   });
// });



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

function displayActuRecent(id_img,id_resum,id_current,id_edit_width){
  // alert(id_img);
  var x =document.getElementById(id_img);
  if(x.style.display=="block"){
      x.style.display="none";
      document.getElementById(id_edit_width).style.width="100%";
      document.getElementById(id_current).innerHTML="Decouvrir  -";
    }
    else{
      document.getElementById(id_edit_width).style.width="80%";
      x.style.display="block";
      document.getElementById(id_current).innerHTML="Decouvrir  +";
    }
  $(document).ready(function(){
    $("#"+id_resum).slideToggle("slow");
  });
}