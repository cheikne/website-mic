<!DOCTYPE html>
<html>
<title>Actualites</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><style>
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

@media (max-width: 767px) {
    .chat-search-box {
        display: none;
    }
}
</style>
<body>

<nav class="w3-sidebar w3-bar-block w3-collapse w3-animate-left w3-card" style="z-index:3;width:250px;" id="mySidebar">
  <a class="w3-bar-item w3-button w3-border-bottom w3-large" href="#"><img src="https://www.w3schools.com/images/w3schools.png" style="width:80%;"></a>
  <a class="w3-bar-item w3-button w3-hide-large w3-large" href="javascript:void(0)" onclick="w3_close()">Close <i class="fa fa-remove"></i></a>
  <a class="w3-bar-item w3-button w3-blue" href="#">Acces-Partenaire</a>
  <a class="w3-bar-item w3-button" href="#">Modifier actualités</a>
  <a class="w3-bar-item w3-button" href="#">Ajouter actualités</a>
  <a class="w3-bar-item w3-button" href="#">Supprimer actualités</a>
  <a class="w3-bar-item w3-button" href="#">Autre choses</a>
</nav>

<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

<div class="w3-main" style="margin-left:250px;">

<div id="myTop" class="w3-container w3-top w3-theme w3-large w3-blue">
  <p><i class="fa fa-bars w3-button w3-blue w3-hide-large w3-xlarge" onclick="w3_open()"></i>
  <span id="myIntro" class="w3-hide">Actualités: Industriels</span></p>
</div>

<header class="w3-container w3-theme w3-blue" style="padding:64px 32px">
  <h1 class="w3-xxxlarge">Actualités</h1>
</header>
<div class="w3-container" style="padding:32px">

   <div class="chat-search-box w3-right" id="contentSearch">
      <label>Entrer la date de l'actualites</label>
        <div class="input-group">
            <input type="Search" class="form-control" placeholder="12/2/2021">
            <div class="input-group-btn">
                <button type="button" class="btn btn-info w3-light-blue">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </div>



<!-- Textarea 2 rows height -->
 <form>
  <!-- Name input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form4Example1">Date</label>
    <input type="text" id="form4Example1" class="form-control" placeholder="Name" />
  </div>

  <!-- Email input -->
    <label class="form-label" for="form4Example2">Titre de l'actualites</label>
  <div class="form-outline mb-4">
    <input type="text" id="form4Example2" class="form-control" />
  </div>

  <!-- Message input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form4Example3">Resumer</label>
    <textarea class="form-control" id="form4Example3" rows="4"></textarea>
  </div>

  <!-- Checkbox -->
  <div class="form-check d-flex justify-content-center mb-4">
    <input
      class="form-check-input me-2"
      type="checkbox"
      value=""
      id="form4Example4"
      checked
    />
    <label class="form-check-label" for="form4Example4">
      Enregistrer
    </label>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">
    Enregistrer
  </button>
</form>




  </div>

</div>

<script>
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
</script>
     
</body>
</html> 
