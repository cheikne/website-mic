<!DOCTYPE html>
<html>
<title>Edition des Actualités</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://css.gg/arrow-left.css' rel='stylesheet'>
  <script type="text/javascript" src="{{asset('js/accesPartenaire/editActualite.js')}}"></script>
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

<nav class="w3-sidebar w3-bar-block w3-collapse w3-animate-left w3-card" style="z-index:3;width:250px;background-color:#1e4356;" id="mySidebar">
  <div class="sidebar-header" style=" background: rgb(128, 128, 128);margin-top: 1;">
      <div class="imgcontainer">     
      <ul class="users">
              <li class="person" data-chat="person1">
                  <div class="user">
                      <img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
                      <span class="status userCuurent"></span>
                  </div><br>
                  <p class="name-time">
                      <span class="name w3-text-white">{{ Auth::user()->name }}</span>
                  </p>
              </li>
          </ul>
      </div>
  </div>
  <a class="w3-bar-item w3-button w3-hide-large w3-text-white w3-large" href="javascript:void(0)" onclick="w3_close()">Close <i class="fa fa-remove"></i></a>
  <a class="w3-bar-item w3-a  w3-text-white" href="/Accueil/Acces-Partenaire"  style="background-color:#1e4356;" >Acces-Partenaire</a>
  <!--button class="w3-bar-item w3-button" id="event" onclick="editActualite(this.id)">Modifier Actualité</button-->
  <a class="w3-bar-item w3-button w3-text-white" href="/Accueil/Acces-Partenaire/Actualites">Ajouter Actualité</a>
  <!--button class="w3-bar-item w3-button" id="delete" onclick="displaydeleteOneActualite(this.id)">Supprimer Actualité</button-->
  <button class="w3-bar-item w3-button w3-text-white" onclick="displayAllActualite()">Afficher tout</button>
</nav>

<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

<div class="w3-main" style="margin-left:250px;">

<div id="myTop"  style="background-color:#5D6D7E;" class="w3-container w3-top w3-theme w3-large">
  <p><i class="fa fa-bars w3-button w3-hide-large w3-xlarge" onclick="w3_open()"></i>
  <span id="myIntro" class="w3-hide w3-text-white">Actualité</span></p>
</div>

<header class="w3-container w3-theme" style="padding:64px 32px; background-color: #5D6D7E;">
  <h1 class="w3-xxxlarge w3-text-white">Actualité</h1>
</header>
<div class="w3-container" style="padding:32px">
  <div id="ContentEvent">
    <!--div class="chat-search-box w3-right" id="contentSearch">
    <label>Entrer la date de l'actualité</label>
        <div class="input-group">
            <input type="Search"  id='dte_serach' class="form-control" placeholder="aaaa-mm-jjj">
            <div class="input-group-btn">
               <button type="button" class="btn btn-info w3-light-blue" id= "actu" onclick="getOneActualite(this.id)">
                    <i class="fa fa-search"></i>
                </button>
            </div> 
        </div-->
        <form action="/Accueil/Acces-Partenaire/Actualites" method="POST" enctype="multipart/form-data">
         {{ csrf_field() }}
        <fieldset>
         
          <div class="form-outline mb-4">
            <label class="form-label" for="form4Example1">Date</label>
            <input type="date" name="dte" class="form-control" required/>
          </div>
  
            <label class="form-label" for="form4Example2">Titre de l'Actualité</label>
          <div class="form-outline mb-4">
            <input type="text" name="titre" class="form-control" required/>
          </div>
  
          <div class="form-outline mb-4">
            <label class="form-label" for="form4Example3">Resumer</label>
            <textarea class="form-control" name="resumer" rows="10" required></textarea>
          </div>
          <div class="custom-file">
              <input type="file" class="custom-file-input" name="image">
              <label class="custom-file-label" for="form4Example4">Selectionner  l'image</label>
         </div> <br><br>
         
          <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">
            Enregistrer
          </button>
        </fieldset>
      </form>
    </div><br><br><br><br><br>
    <div id="resultat"></div>
  </div>

  <div class="w3-text-red" style="display: none;padding: 10px;font-size:2em;" id="aucun_donnee">Aucun donnees trouves avec cette date</div>
  </div>

</div> 

</body>
</html> 
