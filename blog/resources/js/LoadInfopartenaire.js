function LoadInfoPartenaire(id){
  var url = "../../modele/each_Partner.php?id_partners="+id;
  SendToServer(url,callback,id);
  if(id=="Managem")
    document.getElementById("role").innerHTML ="Le role de Managem dans le cadre du projet";
  if(id=="UCA")
    document.getElementById("role").innerHTML ="Le role de de UCA dans le cadre du projet";
}

function SendToServer(url,callback,id) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      callback(id,this.responseText);
    }
  };
  xhttp.open("GET", url, false);
  xhttp.send();
}
const callback = function(id,response){
   document.getElementById(id).innerHTML = response;
};
$(document).ready(()=>{
    $("#header").load("header.html");
    $("#footer").load("footer.html");
 });


  function LoadDataPartenaire(id){
    document.getElementById('descriptivePartner').innerHTML=`
     <div class="w3-card-4" style="width:75%;margin-left: 20%;">
          <header class="w3-container w3-blue">
            <h1>Industrie Managem</h1>
          </header>
          <div class="w3-container">
              <div id=${id}></div>
              <div id='uca'></div>
              <div id='managem'></div>
            </div>
      <h2 style="text-align: center;">Les actualites du Managem</h2>
    </div>`;
    if(id=="UCA")
      document.getElementById('uca').innerHTML=`
        <strong>Intitulé de la thèse 1:</strong><a href="#">: Développement d’un analyseur en ligne basé sur l’usage des technologies de 
           traitement d’images et de Machine Learning pour la détermination temps réel des teneurs au sein 
           des unités de flottation</a><br>
         <strong>Intitulé de la thèse 2:</strong><a href="#">: : Développement de jumeaux numériques pour l’amélioration des performances 
               opérationnelles des unités de production minières. Cas du procédé de traitement des minerais par 
               flottation.</a><br><br>
             <strong>Site Officiel UCA :</strong><a href="https://www.uca.ma/">https://www.uca.ma/</a>`;
    if(id=="managem")
      document.getElementById('Managem').innerHTML=`
     <strong>Site Officiel Managem :</strong><a href="http://www.managemgroup.com/" style="color: blue;">http://www.managemgroup.com/</a>
              </div><br><br>`;
    LoadInfoPartenaire(id);
  }


function w3_open() {
  var mySidebar = document.getElementById("mySidebar");
  var overlayBg = document.getElementById("myOverlay");
  // if (mySidebar.style.display === 'block') {
  //    document.getElementById("clear").style.display="block";
  //   document.getElementById("fermerSubMenu").style.marginTop="30%";
  //   mySidebar.style.display = 'none';
  //   overlayBg.style.display = "none";
  // } 
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
    document.getElementById("clear").style.display="none";
    document.getElementById("fermerSubMenu").style.marginTop="62%";
}

// Close the sidebar with the close button
function w3_close() {
  var mySidebar = document.getElementById("mySidebar");
  var overlayBg = document.getElementById("myOverlay");
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
   document.getElementById("clear").style.display="block";
     document.getElementById("fermerSubMenu").style.marginTop="30%";
}
function DisplayMenuBar() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
// var largeur=document.documentElement.clientWidth
// console.log("hfhfhhhhhfhfhhfhff "+largeur);
// function myFunction() {
//   var w = window.outerWidth;
//   var h = window.outerHeight;
//   var txt = "Window size: width=" + w + ", height=" + h;
//   console.log("hfhfhhhhhfhfhhfhff "+ txt);
// }