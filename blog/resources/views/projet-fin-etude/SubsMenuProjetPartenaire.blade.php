<!DOCTYPE html>
<html>
<title>Partenaires du Porjet</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="{{ asset('css\footer.css') }}">
  <link rel="stylesheet" href="{{ asset('css\menu.css') }}">
  <link rel="stylesheet" href="{{ asset('css\image3D.css') }}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('js\LoadInfopartenaire.js') }}"></script>
<script type="text/javascript" src="{{ asset('js\SubsMenuProjetPartenaire.js') }}"></script>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="3">
  <div class="w3-top">
       @include('projet-fin-etude.header')
  </div>
<div style="display: flex;">
  <div style=" width: 110%;">
    <nav class="w3-bar-block w3-collapse w3-large  w3-animate-left" id="mySidebar">
      <a href="javascript:void(0)" onclick="HiddenSubsMenuBar()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
        <i class="fa fa-remove"></i>
      </a>
      <h5 class="w3-bar-item w3-button"><b>Partenaires Industriels</b></h5>
      <a class="w3-bar-item w3-button w3-hover-yellow hiddenImgPartners " id="partners"  href="/Accueil/Partenaire-Projet/Managem">Industrie Managem</a>
      <a class="w3-bar-item w3-button w3-hover-yellow hiddenImgPartners " id="partners" href="/Accueil/Partenaire-Projet/Reminex">Industrie Reminex</a>
      <a class="w3-bar-item w3-button w3-hover-yellow hiddenImgPartners " id="partners"  href="/Accueil/Partenaire-Projet/Mascir">Industrie Macsir</a>
      <h5><b>Partenaires Academiques</b></h5>
      <a class="w3-bar-item w3-button w3-hover-yellow hiddenImgPartners " id="partners" href="/Accueil/Partenaire-Projet/UCA">Academie UCA</a>
      <a class="w3-bar-item w3-button w3-hover-yellow hiddenImgPartners " id="partners"  href="/Accueil/Partenaire-Projet/ENIM">Academie ENIM</a> 
      <a class="w3-bar-item w3-button w3-hover-yellow hiddenImgPartners " id="partners" href="/Accueil/Partenaire-Projet/ENSIAS">Academie ENSIAS</a> 
      <a class="w3-bar-item w3-button w3-hover-yellow hiddenImgPartners " id="partners" href="/Accueil/Partenaire-Projet/CNRST">Centre CNRST</a> 
  </nav>
</div>
<!-- <div class="w3-overlay w3-hide-large" onclick="HiddenSubsMenuBar()" style="cursor:pointer" title="close side menu" id="myOverlay"></div> -->
<div class="w3-main" style="margin-left:20px;" >       
  <br><br><br><br><br><br>
  <a class="w3-text-blue" href="#">{{$path}}</a>
  @include($contentProjectPartners)
</div>
</div><br><br><br><br><br>
<div id="footer" >
  <footer id="myFooter" >@include('projet-fin-etude.footer')</footer>         
</div>
<script type="text/javascript" src="{{ asset('js\image3D.js') }}"></script>
</body>
</html>