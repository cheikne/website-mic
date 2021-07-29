var check=0;
/*function addNewActualite(){
  
  document.getElementById('ContentEvent').innerHTML= `
     <form action="/Accueil/Acces-Partenaire/Actualites" method="POST" enctype="multipart/form-data">
        <?php
        {{ csrf_field() }}
        ?>
      <fieldset>
        <!-- <legend>Evenement</legend> -->
        <div class="form-outline mb-4">
          <label class="form-label" for="form4Example1">Date</label>
          <input type="date" name="dte" class="form-control" required/>
        </div>

        <!-- Email input -->
          <label class="form-label" for="form4Example2">Titre de l'Actualité</label>
        <div class="form-outline mb-4">
          <input type="text" name="titre" class="form-control" required/>
        </div>

        <!-- Message input -->
        <div class="form-outline mb-4">
          <label class="form-label" for="form4Example3">Resumer</label>
          <textarea class="form-control" name="resumer" rows="10" required></textarea>
        </div>
        <div class="custom-file">
            <input type="file" class="custom-file-input" name="image">
            <label class="custom-file-label" for="form4Example4">Select image</label>
       </div> <br><br>
        <!-- Submit button -->
        <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">
          Enregistrer
        </button>
      </fieldset>
    </form>
  `;
}*/
function ChercherActuWihtTitre(id){
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
function closeModal(id){
  document.getElementById(id).style.display='none';
}
function getOneActuWithKeyWord(){
  ChercherActuWihtTitre(); 
}
function AfficherActuTrouverAvecKeyword(id){
  // dte_serach = document.getElementById('dte_serach').value;
 var url = "/Accueil/Acces-Partenaire/SendActuTrouverAvecKeyword?id="+id+"&check="+check;
   SendToServer(url,callback2,'resultat');
   document.getElementById('resKeyword').style.display="none";
}
function editActualite(events){
  // alert(events);
  document.getElementById('ContentEvent').innerHTML=`
     <div class="chat-search-box w3-right" id="contentSearch">
        <label>Entrer la date de de l'evenement</label>
        <div class="input-group">
            <input type="Search" class="form-control" id='dte_serach' placeholder="aaaa-mm-jjj" required>
            <div class="input-group-btn">
                <button type="button" class="btn btn-info w3-light-blue" onclick="getOneActualite('${events}')">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </div><br><br><br><br><br>
    <div id='resultat'></div>
  `;

}
function displaydeleteOneActualite(delet){
   document.getElementById('ContentEvent').innerHTML=`
     <div class="chat-search-box w3-right" id="contentSearch">
        <label>Entrer la date de l'actualité à supprimer</label>
        <div class="input-group">
            <input type="Search" class="form-control" id='delete_serach' placeholder="aaaa-mm-jjj" required>
            <div class="input-group-btn">
                <button type="button" class="btn btn-info w3-light-blue" onclick="getOneActualite('${delet}')">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </div><br><br><br><br><br>
    <div id='resultat_delete'></div>
  `;
}

function DeleteOneActualite(id,check){
  var url = "/Accueil/Acces-Partenaire/DeleteOneActu?id="+id;
  if(check==-2){
    document.getElementById('success').innerHTML="Sppression avec Success";
    SendToServer(url,callback,false);
    document.getElementById('hide_actu').style.display="none";
    displayAllActualite();
  }else if(check==-1){
    SendToServer(url,callback,false);
    // document.getElementById(id).style.display="none";
    displayAllActualite();
  }
  // alert(check);
}

function DisplayChampedit(id,id_hiden,id_disp){
 // alert(id_disp);
 // document.getElementById(id_disp).style.display="none";
  document.getElementById(id_hiden).style.display="block";
//  document.getElementById(id).style.display="none";
  
}
/*function InsererNewActualite(event){
   onclick='InsererNewActualite(event)'
  var image = document.getElementById('image').src;
 
  var date = document.getElementById('dte').value;
  var titre = document.getElementById('titre').value;
  var resumer = document.getElementById('resumer').value;
  var url = "/Accueil/Acces-Partenaire/insertNewActu?dte="+date+"&resumer="+resumer+"&titre="+titre+"&image="+image;
  SendToServer(url,callback,false);
}*/

function getOneActualite(check){
  var dte_serach="";

  if(check =='actu'){
    dte_serach = document.getElementById('dte_serach').value;
      // alert(check);
    var url = "/Accueil/Acces-Partenaire/getOneActu?dte="+dte_serach+"&check="+check;
    SendToServer(url,callback2,'resultat');
  }
  else{
    dte_serach = document.getElementById('delete_serach').value;
      // alert(check);
    var url = "/Accueil/Acces-Partenaire/getOneActu?dte="+dte_serach+"&check="+check;
    SendToServer(url,callback2,'resultat_delete');
  }
}

function UpdateActualite(id,check){
  if(check==0){
    var titreT = document.getElementById('titreT').value;
    var resumerT = document.getElementById('resumerT').value;
    var dteT = document.getElementById('dteT').value;
   var url = "/Accueil/Acces-Partenaire/UpdateOneActu?id="+id+"&titreT="+titreT+"&resumerT="+resumerT+"&dte="+dteT;
   SendToServer(url,callback,false);
   document.getElementById('success').innerHTML="Mise en Jours faite avec Success";
 }else{
     var titreT = document.getElementById('titreT'+id).value;
    var resumerT = document.getElementById('resumerT'+id).value;
    var dteT = document.getElementById('dteT'+id).value;
   var url = "/Accueil/Acces-Partenaire/UpdateOneActu?id="+id+"&titreT="+titreT+"&resumerT="+resumerT+"&dte="+dteT;
   SendToServer(url,callback,false);
   // document.getElementById('success').innerHTML="Mise en Jours faite avec Success";
   document.getElementById(check).style.display="none";
   toastr.success('Hi! I am success message.');
 }
}

function displayAllActualite(){
   var url = "/Accueil/Acces-Partenaire/displayAllActu";
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