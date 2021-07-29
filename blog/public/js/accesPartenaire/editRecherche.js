
/*function addNewRecherche(){
  document.getElementById('ContentEvent').innerHTML=`
     <form>
      <fieldset>
       
        <!-- Email input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="form4Example1">Date</label>
            <input type="date" id="dte" class="form-control" required/>
        </div>
          <label class="form-label" for="form4Example2">lien du site de la Recherche</label>
        <div class="form-outline mb-4">
          <input type="text" id="lien" class="form-control" required/>
        </div>

        <!-- Message input -->
        <div class="form-outline mb-4">
          <label class="form-label" for="form4Example3">Resumer</label>
          <textarea class="form-control" id="resumer" rows="10" required></textarea>
        </div>
        <div class="row px-4">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioDisabled" >
          <label class="form-check-label" for="flexRadioDisabled">
              R1
          </label>
        </div>
       </div>
        <!-- Submit button -->
        <button type="button" class="btn btn-primary btn-block mb-4" onClick='InsererNewRecherche(event)'>
          Enregistrer
        </button>
      </fieldset>
    </form>
  `;
}*/

function editRecherche(events){
  // alert(events);
  document.getElementById('ContentEvent').innerHTML=`
     <div class="chat-search-box w3-right" id="contentSearch">
        <label>Entrer la date de la recherche</label>
        <div class="input-group">
            <input type="Search" class="form-control" id='dte_serach' placeholder="aaaa-mm-jjj" required>
            <div class="input-group-btn">
                <button type="button" class="btn btn-info w3-light-blue" onclick="getOneRecherhe('${events}')">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </div><br><br><br><br><br>
    <div id='resultat'></div>
  `;

}
function displaydeleteOneRecherche(delet){
   document.getElementById('ContentEvent').innerHTML=`
     <div class="chat-search-box w3-right" id="contentSearch">
        <label>Entrer la date de la recherche à supprimer</label>
        <div class="input-group">
            <input type="Search" class="form-control" id='delete_serach' placeholder="aaaa-mm-jjj" required>
            <div class="input-group-btn">
                <button type="button" class="btn btn-info w3-light-blue" onclick="getOneRecherche('${delet}')">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </div><br><br><br><br><br>
    <div id='resultat_delete'></div>
  `;
}
function ChercherRechWihtTitre(id){
  $(document).ready(function(){
    var value = $("#"+id).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
});
  });
  // }
  // document.getElementById('resKeyword').style.display="block";
  // var keyword = document.getElementById('dte_serachKeyWord').value;
  // var url = "/Accueil/Acces-Partenaire/Research_WithKeyWord?keyword="+keyword;
  // SendToServer(url,callback3,'resKeyword');
  // alert("ddddddddddddddddddddd");
}
//Fermer la boite de dialogue
function closeModal(id){
  document.getElementById(id).style.display='none';
}
function getOneRechWithKeyWord(){
  ChercherRechWihtTitre(); 
}

//Quand L'utilisateur click sur l'une des titres affiches
function AfficherRechTrouverAvecKeyword(id){
   // dte_serach = document.getElementById('dte_serach').value;
  var url = "/Accueil/Acces-Partenaire/SendEventsTrouverAvecKeyword?id="+id+"&check="+check;
    SendToServer(url,callback2,'resultat');
    document.getElementById('resKeyword').style.display="none";
}


function DeleteOneRecherche(id,check){
  var url = "/Accueil/Acces-Partenaire/DeleteOneReche?id="+id;
  if(check==-2){
    document.getElementById('success').innerHTML="Sppression avec Success";
    SendToServer(url,callback,false);
    document.getElementById('hide_actu').style.display="none";
  }else if(check==-1){
    SendToServer(url,callback,false);
    document.getElementById(id).style.display="none";
    displayAllRecherche();
  }
  // alert(check);
}

function DisplayChampedit(id,id_hiden,id_disp){
  //alert(id_disp);
 // document.getElementById(id_disp).style.display="none";
  document.getElementById(id_hiden).style.display="block";
 // document.getElementById(id).style.display="none";
  
}
function InsererNewRecherche(){
  var date = document.getElementById('dte').value
  var lien = document.getElementById('lien').value;
  var resumer = document.getElementById('resumer').value;
  var titre = document.getElementById('titre').value;
  var id="";
  radio = document.getElementsByClassName("radios");
  var i=0;
  for (i=0; i<radio.length;i++) {
      if(radio[i].checked ==true){
          id = radio[i].value;
        break; 
      }
    }
  // alert(id);
  var url = "/Accueil/Acces-Partenaire/insertNewRech?resumer="+resumer+"&lien="+lien+"&dte="+date+"&titre="+titre+"&these="+id;
  SendToServer(url,callback,false);
}

function getOneRecherche(check){
  var dte_serach="";

  if(check =='rech'){
    dte_serach = document.getElementById('dte_serach').value;
      // alert(check);
    var url = "/Accueil/Acces-Partenaire/getOneRech?dte="+dte_serach+"&check="+check;
    SendToServer(url,callback2,'resultat');
  }
  else{
    dte_serach = document.getElementById('delete_serach').value;
      // alert(check);
    var url = "/Accueil/Acces-Partenaire/getOneRech?dte="+dte_serach+"&check="+check;
    SendToServer(url,callback2,'resultat_delete');
  }
}



function UpdateRech(id,check){

  if(check==0){
    var lienT = document.getElementById('lienT').value;
    var resumerT = document.getElementById('resumerT').value;
    var dteT = document.getElementById('dteT').value;
   var url = "/Accueil/Acces-Partenaire/UpdateOneRech?id="+id+"&lienT="+lienT+"&resumerT="+resumerT+"&dte="+dteT;
   SendToServer(url,callback,false);
   document.getElementById('success').innerHTML="Mise en Jours faite avec Success";
 }else{
     var lienT = document.getElementById('lienT'+id).value;
    var resumerT = document.getElementById('resumerT'+id).value;
    var dteT = document.getElementById('dteT'+id).value;
    var titreT = document.getElementById('titreT'+id).value;
    alert(titreT);
   var url = "/Accueil/Acces-Partenaire/UpdateOneRech?id="+id+"&lienT="+lienT+"&resumerT="+resumerT+"&dte="+dteT+"&titreT="+titreT;
   SendToServer(url,callback,false);
   document.getElementById(check).style.display="none";
   // document.getElementById('success').innerHTML="Mise en Jours faite avec Success";
 }
}

function displayAllRecherche(){
   var url = "/Accueil/Acces-Partenaire/displayAllRech";
    SendToServer(url,callback,"ContentEvent");
}



//Requete Ajax
function  SendToServer(url,callback,id) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        callback(this.responseText,id);
    }
  };
  xhttp.open("get", url, true);
  xhttp.send();
}
var hideButtonCharge="";
const callback = function(response,id){
  if(id)
    document.getElementById(id).innerHTML=response;
  else
    alert(response);
};
const callback2 = function(response,id){
  if(response =="aucun_donnee"){
    document.getElementById('aucun_donnee').style.display="block";
  }else{
  if(id)
    document.getElementById('aucun_donnee').style.display="none";
    document.getElementById(id).innerHTML=response;
  // else
  //   alert(response);
  }
};


// Open and close the sidebar on medium and small screens
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Change style of top container on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("myTop").classList.add("w3-card-4", "w3-animate-opacity");
    document.getElementById("myIntro").classList.add("w3-show-inline-block");
  } else {
    document.getElementById("myIntro").classList.remove("w3-show-inline-block");
    document.getElementById("myTop").classList.remove("w3-card-4", "w3-animate-opacity");
  }
}

// Accordions
function myAccordion(id) {
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