@extends($cheminPage)
@section('header')  
  <div class="w3-bar w3-blue-grey w3-top w3-left-align w3-large" style="height: 100px ;">
    <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="DisplaySubsMenuBar()"><i class="fa fa-bars"></i></a>
    <div class="w3-display">
      <div>
        <a href="#" class="w3-bar-item w3-xxlarge w3-text-white" id="header">Logo</a>
      <div class="w3-right">
        <a href="#" class="w3-bar-item w3-button w3-hide-small" id="header">Acces Partenaires</a>
        <a href="#" class="w3-bar-item w3-button w3-hide-small" id="header">Anglais</a>
        <a href="#" class="w3-bar-item w3-button w3-hide-small" id="header">Contact</a>
      </div><br><br>
    </div>
      <div>
        <div style="margin-left:0px;">
          <a href="/Accueil" class="w3-bar-item w3-button w3-hide-small w3-hover-yellow" id="header">Accueil</a>
          <a href="/Accueil/Partenaire-Projet" class="w3-bar-item w3-button w3-hide-small w3-hover-yellow" id="header">Partenaire du Projet</a>
          <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-yellow" id="header">Realisations</a>
          <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-yellow" id="header">Evenements</a>
          <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-yellow" id="header">Recherche Scientifique</a>
          <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-yellow" id="header">Actualites</a>
        <div class="search-container w3-bar-item w3-hide-small w3-hide-medium">
            <input type="text" placeholder="Search.." name="search" style="color:black; width:200px" >
              <button class="w3-hover-black" style="height: 35px;"  type="submit"><i class="fa fa-search"></i></button>
         </div>
      </div>
    </div>
  </div>
  </div>
@endsection('header') 

@section('footer')
    <div class="container-fluid " style="background-color:#1C2833;color: white; width: 100%">
      <div class="col-md-2">
        <strong style="color: #fcba03;font-family: Times New Roman,Times,serif;">Managem</strong><br>
        <p class="contact">NOS PRODUITS</p>
        <p class="contact">QUI SOMMES-NOUS</p>
        <p class="contact">NOS ENGAGEMENTS</p>
        <p class="contact">INVESTISSEURS</p>
      </div>
      <div class="col-md-1">
        <strong style="color: #fcba03;font-family: Times New Roman,Times,serif;">Reminex</strong><br>
        <p class="contact">Info1</p>
        <p class="contact">Info2</p>
        <p class="contact">Info3</p>
        <p class="contact">Info4</p>
      </div>
      <div class="col-md-1">
        <strong style="color: #fcba03;font-family: Times New Roman,Times,serif;">Mascir</strong><br>
        <p class="contact">Info1</p>
        <p class="contact">Info2</p>
        <p class="contact">Info3</p>
        <p class="contact">Info4</p>
      </div>
      <div class="col-md-1">
        <strong style="color: #fcba03;font-family: Times New Roman,Times,serif;">UCA</strong><br>
        <p class="contact">Info1</p>
        <p class="contact">Info2</p>
        <p class="contact">Info3</p>
        <p class="contact">Info4</p>
      </div>
      <div class="col-md-1">
        <strong style="color: #fcba03;font-family: Times New Roman,Times,serif;">ENSIAS</strong><br>
        <p class="contact">Info1</p>
        <p class="contact">Info2</p>
        <p class="contact">Info3</p>
        <p class="contact">Info4</p>
      </div>
      <div class="col-md-1">
        <strong style="color: #fcba03;font-family: Times New Roman,Times,serif;">CNRST</strong><br>
        <p class="contact">Info1</p>
        <p class="contact">Info2</p>
        <p class="contact">Info3</p>
        <p class="contact">Info4</p>
      </div>
      <div class="col-md-1">
        <strong style="color: #fcba03;font-family: Times New Roman,Times,serif;">ENIM</strong><br>
        <p class="contact">Info1</p>
        <p class="contact">Info2</p>
        <p class="contact">Info3</p>
        <p class="contact">Info4</p>
      </div>
      <div class="col-md-2">
        <strong style="color: #fcba03;font-family: Times New Roman,Times,serif;">Abonnez-vous a nos Newsletter</strong><br><br>
        <input type="email" name="Subcribe" placeholder="Entrer votre email" class="form-control" required=""><button class="btn btn-success">Envoyer</button>
      </div>
    </div>
@endsection('footer');