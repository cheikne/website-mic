<!DOCTYPE html>
<html>
<title>Edition des Recherche</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link href='https://css.gg/arrow-left.css' rel='stylesheet'>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/accesPartenaire/accesPartenaire.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

<nav class="w3-sidebar w3-bar-block w3-collapse w3-animate-left w3-card" style="z-index:3;width:250px;z-index:3;width:250px;background-color:#1e4356;" id="mySidebar">
  <div class="sidebar-header"  style=" background: rgb(128, 128, 128); margin-top: 1;">
      <div class="imgcontainer">
      <div class="px-4">
         
      </div> 
          <ul class="users">
              <li class="person" data-chat="person1">
                  <div class="user">
                      <img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
                      <span class="status userCuurent"></span>
                  </div><br><br>
                  <p class="name-time">
                      <span class="name w3-text-white">{{ Auth::user()->name }}</span>
                  </p>
              </li><br><br><br>
          </ul>
      </div>
  </div>
  <a class="w3-bar-item w3-button w3-hide-large w3-text-white w3-large" href="javascript:void(0)" onclick="w3_close()">Close <i class="fa fa-remove"></i></a>
  <a class="w3-bar-item w3-a  w3-text-white" href="/Accueil/Acces-Partenaire" style="background-color:#1e4356; " >Acces-Partenaire</a>
  <!--button class="w3-bar-item w3-button" id="event" onclick="editRecherche(this.id)">Modifier Publication</button-->
  <a class="w3-bar-item w3-button w3-text-white" href="/Accueil/Acces-Partenaire/Recherche">Ajouter Publication</a>
  <!--button class="w3-bar-item w3-button" id="delete" onclick="displaydeleteOneRecherche(this.id)">Supprimer Publication</button-->
  <button class="w3-bar-item w3-button w3-text-white" onclick="displayAllRecherche()">Afficher tout</button>
</nav>

<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

<div class="w3-main" style="margin-left:250px;">

<div id="myTop" style="background-color:#5D6D7E;" class="w3-container w3-top w3-theme w3-large">
  <p><i class="fa fa-bars w3-button w3-hide-large w3-xlarge" onclick="w3_open()"></i>
  <span id="myIntro" class="w3-hide w3-text-white">Recherche:Publication</span></p>
</div>

<header class="w3-container w3-theme" style="padding:64px 32px;  background-color: #5D6D7E;">
  <h1 class="w3-xxxlarge w3-text-white">Recherche:Publication</h1>
</header>
<div class="w3-container" style="padding:32px">
  <div id="ContentEvent">
   
    
    <form>
        <fieldset>
         
          <!-- Email input -->
          <div class="form-outline mb-4">
              <label class="form-label" for="form4Example1">Date</label>
              <input type="date" id="dte" class="form-control" required/>
          </div>
           <div class="form-outline mb-4">
              <label class="form-label" for="form4Example1">Titre</label>
              <input type="text" id="titre" class="form-control" required/>
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
            @php($a=1)
           @foreach($id_theses as $id_these) 
          <div class="form-check">
            <input class="form-check-input radios" type="radio" name="flexRadioDisabled"  value="{{$id_these}}">
            <label class="form-check-label" for="flexRadioDisabled">
                R{{$id_these->id_these}}
            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          </div>
             @php($a++)
        @endforeach
         </div><br>
          <!-- Submit button -->
          <button type="button" class="btn btn-primary btn-block mb-4" onClick='InsererNewRecherche()'>
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
<script type="text/javascript" src="{{asset('js/accesPartenaire/editRecherche.js')}}"></script>
</body>
</html> 
