
function addNewEvents(){
  document.getElementById('ContentEvent').innerHTML=`
     <form>
      <fieldset>
        <!-- <legend>Evenement</legend> -->
        <div class="form-outline mb-4">
          <label class="form-label" for="form4Example1">Date</label>
          <input type="date" id="dte" class="form-control" required/>
        </div>

        <!-- Email input -->
          <label class="form-label" for="form4Example2">Titre de l'Evenenement</label>
        <div class="form-outline mb-4">
          <input type="text" id="titre" class="form-control" required/>
        </div>

        <!-- Message input -->
        <div class="form-outline mb-4">
          <label class="form-label" for="resumer">Resumer</label>
          <textarea class="form-control" id="form4Example3" rows="10" required></textarea>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4" onClick='InsererNewEvent()'>
          Enregistrer
        </button>
      </fieldset>
    </form>
  `;
}

function editEvents(){
  document.getElementById('ContentEvent').innerHTML=`
     <div class="chat-search-box w3-right" id="contentSearch">
        <label>Entrer la date de de l'evenement</label>
        <div class="input-group">
            <input type="Search" class="form-control" id='dte_serach' placeholder="aaaa-mm-jjj" required>
            <div class="input-group-btn">
                <button type="button" class="btn btn-info w3-light-blue" onclick='getOneEvents()'>
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </div><br><br><br><br><br>
    <div id='resultat'></div>
  `;

}


function InsererNewEvent(){
  var dte = document.getElementById('dte').value;
  var titre = document.getElementById('titre').value;
  var resumer = document.getElementById('resumer').value;
  var url = "/Accueil/Acces-Partenaire/insertNewEvent?dte="+date+"&resumer="+resumer+"&titre="+titre;
  SendToServer(url,callback,false);
}

function getOneEvents(){
  var dte_serach = document.getElementById('dte_serach').value;
  var url = "/Accueil/Acces-Partenaire/getOneEvents?dte="+dte_serach;
  SendToServer(url,callback,'resultat');
}

function UpdateEvent(id){
  alert(id);
   var titreT = document.getElementById('titreT').value;
   var resumerT = document.getElementById('resumerT').value;
   var dteT = document.getElementById('dteT').value;
  var url = "/Accueil/Acces-Partenaire/UpdateOneEvents?id="+id+"&titreT="+titreT+"&resumerT="+resumerT+"&dte="+dteT;
  SendToServer(url,callback,false);
}

function displayAllEvents(){
   var url = "/Accueil/Acces-Partenaire/displayAllEvents";
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