<!DOCTYPE html>
<html>
<title>Edition des Evenements</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="{{asset('js/accesPartenaire/editEvenement.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/accesPartenaire/accesPartenaire.css')}}">
<style>
body {font-family: "Roboto", sans-serif}
.w3-bar-block .w3-bar-item {
  padding: 16px;
  font-weight: bold;
}
#content {
    width: 100%;
    padding: 20px;
    min-height: 100vh;
    transition: all 0.3s;
}

/*Barre de recherche****************************************/

chat-search-box {
    -webkit-border-radius: 3px 0 0 0;
    -moz-border-radius: 3px 0 0 0;
    border-radius: 3px 0 0 0;
    padding: .75rem 1rem;
}
input[type=Search]:{
  width: 20%;
}
.chat-search-box .input-group .form-control {
    -webkit-border-radius: 2px 0 0 2px;
    -moz-border-radius: 2px 0 0 2px;
    border-radius: 2px 0 0 2px;
    border-right: 0;

}

.chat-search-box .input-group .form-control:focus {
    border-right: 0;
}

.chat-search-box .input-group .input-group-btn .btn {
    -webkit-border-radius: 0 2px 2px 0;
    -moz-border-radius: 0 2px 2px 0;
    border-radius: 0 2px 2px 0;
    margin: 0;
}

.chat-search-box .input-group .input-group-btn .btn i {
    font-size: 1.2rem;
    line-height: 100%;
    vertical-align: middle;
}

/*@media (max-width: 767px) {
    .chat-search-box {
        display: none;
    }
}*/
</style>
<body>

<nav class="w3-sidebar w3-bar-block w3-collapse w3-animate-left w3-card" style="z-index:3;width:250px;" id="mySidebar">
  <div class="sidebar-header">
      <div class="imgcontainer">
          <ul class="users">
              <li class="person" data-chat="person1">
                  <div class="user">
                      <img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
                      <span class="status userCuurent"></span>
                  </div><br>
                  <p class="name-time">
                      <span class="name">{{ Auth::user()->name }}</span>
                  </p>
              </li>
          </ul>
      </div>
  </div>
  <a class="w3-bar-item w3-button w3-hide-large w3-large" href="javascript:void(0)" onclick="w3_close()">Close <i class="fa fa-remove"></i></a>
  <button class="w3-bar-item w3-button w3-blue" >Acces-Partenaire</button>
  <button class="w3-bar-item w3-button"  onclick="editEvents()">Modifier Evenenement</button>
  <button class="w3-bar-item w3-button" onclick="addNewEvents()">Ajouter Evenenement</button>
  <button class="w3-bar-item w3-button" onclick="deleteOneEvent()">Supprimer Evenenement</button>
  <button class="w3-bar-item w3-button" onclick="displayAllEvents()">Afficher tout</button>
</nav>

<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

<div class="w3-main" style="margin-left:250px;">

<div id="myTop" class="w3-container w3-top w3-theme w3-large w3-blue">
  <p><i class="fa fa-bars w3-button w3-blue w3-hide-large w3-xlarge" onclick="w3_open()"></i>
  <span id="myIntro" class="w3-hide">Evenenement:Visites et Conferences</span></p>
</div>

<header class="w3-container w3-theme w3-blue" style="padding:64px 32px;">
  <h1 class="w3-xxxlarge">Evenenement:Visites et Conferences</h1>
</header>
<div class="w3-container" style="padding:32px">
  <div id="ContentEvent">
    <div class="chat-search-box w3-right" id="contentSearch">
        <label>Entrer la date de de l'evenement</label>
        <div class="input-group">
            <input type="Search"  id='dte_serach' class="form-control" placeholder="aaaa-mm-jjj">
            <div class="input-group-btn">
               <button type="button" class="btn btn-info w3-light-blue" onclick='getOneEvents()'>
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </div><br><br><br><br><br>
    <div id='resultat'></div>
  </div>

  </div>

</div> 
</body>
</html> 
