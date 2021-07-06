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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('js\LoadInfopartenaire.js') }}"></script>
<script type="text/javascript" src="{{ asset('js\SubsMenuProjetPartenaire.js') }}"></script>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="3">
  <div class="w3-top">
       @include('projet-fin-etude.header')
  </div>
<div style="display: flex;">
  <div>
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
<div class="w3-main" style="margin-left:250px" >       
  <br><br><br><br><br><br>
    @yield('IconPartenaire')
      <!--  <div class="w3-container imgPartenaire" style="margin-left:50px;">

        <div class="w3-container">
          <div class="container">
            <h1 class="heading" data-target-resolver></h1>
          </div><br>
          <img src="{{asset('image/partenaire.png')}}" class="w3-border" alt="Norway" style="padding:4px;width:100%">
          <h2>Lancement du Club des Femmes de Managem</h2>
          <p>
            Afin de promouvoir le leadership des femmes au sein de Managem et renforcer leur impact dans la transformation de notre Groupe, Managem a créé Le Club des Femmes, à l’occasion de la Journée Internationale de le Femme.
            Ce Club, annoncé par M. Imad Toumi , PDG du Groupe, dans le cadre du lancement de notre feuille de route Diversité & Inclusion, est un espace privilégié qui permettra à nos Managemiennes de pleinement développer leurs talents et de réaliser leur potentiel. il a été agréé de créer un Club des Femmes, sous le sponsoring de Naoual Zine, Directrice Générale Reminex & Projets
          </p>
        </div>
        </div> -->
      @yield('DescriptivePartners')
      @yield('actualites')
</div>
</div><br><br><br><br><br>
<div id="footer" style="z-index:1;" >
  <footer id="myFooter" >@include('projet-fin-etude.footer')</footer>         
</div>
<script type="text/javascript" src="{{ asset('js\image3D.js') }}"></script>
</body>
</html>