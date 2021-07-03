<!DOCTYPE html>
<html>
<title>Partenaires du Porjet</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="{{ asset('css\footer.css') }}">
  <link rel="stylesheet" href="{{ asset('css\menu.css') }}">
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
       @yield("header")
  </div>
<div style="display: flex;">
    <nav class="w3-bar-block w3-collapse w3-large  w3-animate-left" id="mySidebar">
      <a href="javascript:void(0)" onclick="HiddenSubsMenuBar()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
        <i class="fa fa-remove"></i>
      </a>
      <h5 class="w3-bar-item"><b>Partenaires Industriels</b></h5>
      <a class="w3-bar-item w3-button w3-hover-yellow " id="partners"  href="/Accueil/Partenaire-Projet/Managem">Industrie Managem</a>
      <a class="w3-bar-item w3-button w3-hover-yellow " id="partners" href="/Accueil/Partenaire-Projet/Reminex">Industrie Reminex</a>
      <a class="w3-bar-item w3-button w3-hover-yellow " id="partners"  href="/Accueil/Partenaire-Projet/Mascir">Industrie Macsir</a>
      <h5 class="w3-bar-item"><b>Partenaires Academiques</b></h5>
      <a class="w3-bar-item w3-button w3-hover-yellow " id="partners" href="/Accueil/Partenaire-Projet/UCA">Academie UCA</a>
      <a class="w3-bar-item w3-button w3-hover-yellow " id="partners"  href="/Accueil/Partenaire-Projet/ENIM">Academie ENIM</a> 
      <a class="w3-bar-item w3-button w3-hover-yellow " id="partners" href="/Accueil/Partenaire-Projet/ENSIAS">Academie ENSIAS</a> 
      <a class="w3-bar-item w3-button w3-hover-yellow " id="partners" href="/Accueil/Partenaire-Projet/CNRST">Centre CNRST</a> 
  </nav>
<!-- <div class="w3-overlay w3-hide-large" onclick="HiddenSubsMenuBar()" style="cursor:pointer" title="close side menu" id="myOverlay"></div> -->
<div class="w3-main" style="margin-left:40px;margin-top: 120px;">
       @yield('DescriptivePartners')
       <br><br>

    <div class="w3-twothird w3-container" >
      <h1 style="text-align: center;">Les actualites du partenaire</h1>
      </div>

      <div class="w3-content" >

      <div class="w3-row w3-margin">

        <div class="w3-third">
          <img src="http://www.managemgroup.com/sites/default/files/2021-06/tri-k%20%21.jpg" style="width:100%;min-height:320px">
        </div>
        <div class="w3-twothird w3-container">
          <h3 class="w3-blue">2021-06-24</h3>
          <h2>Démarrage de la mine de tri-k en guinée et production du premier lingot d’or</h2>
          <p>
            Le Groupe Managem a le plaisir d’annoncer que la mine d’or de Tri-K en Guinée, dans la région de Mandiana, a réalisé la première coulée le 23 juin 2021, suite à la finalisation des travaux de construction.
            La mine de Tri-K consolide la présence du Groupe en République de Guinée et appuie sa détermination à se positionner parmi les plus importants producteurs d’or de taille intermédiaire en Afrique de l’Ouest. Cette concrétisation, témoin du savoir-faire, de l’expertise et résilience de nos équipes, renforce la position de Managem comme un acteur majeur de la dynamique économique locale avec plus de 800 emplois à terme, tout en créant de la valeur partagée et durable pour nos investisseurs et toutes nos parties prenantes.
          </p>
        </div>
      </div>
      <div class="w3-row w3-margin">
        <div class="w3-twothird w3-container">
          <h2 class="w3-right">Nouveau programme de mentorat scolaire : Parrainons nos jeunes étudiants</h2><br><br><br>
          <p>
            Dans le cadre de l’initiative MA3AN dédiée au développement du mécénat de compétences auprès de nos collaborateurs, et afin de continuer la dynamique de l’Excellence scolaire des enfants de nos collaborateurs ; Managem lance un programme de Mentorat scolaire au profit des enfants de nos collaborateurs
            Ce programme de Mentorat sollicite les collaborateurs du Groupe pour accompagner et coacher nos enfants qui sont inscrits dans les mêmes écoles et universités d’où le collaborateur est diplômé.
          </p>
        </div>
        <div class="w3-third">
          <img src="http://www.managemgroup.com/sites/default/files/2021-06/mentoring.png" style="width:100%;min-height:200px">
        </div>
      </div>
      <div class="w3-row w3-margin">

      <div class="w3-third">
        <img src="http://www.managemgroup.com/sites/default/files/2021-06/club%20des%20femmes.jpg" style="width:100%;min-height:200px">
      </div>
      <div class="w3-twothird w3-container">
        <h2>Lancement du Club des Femmes de Managem</h2>
        <p>
          Afin de promouvoir le leadership des femmes au sein de Managem et renforcer leur impact dans la transformation de notre Groupe, Managem a créé Le Club des Femmes, à l’occasion de la Journée Internationale de le Femme.
          Ce Club, annoncé par M. Imad Toumi , PDG du Groupe, dans le cadre du lancement de notre feuille de route Diversité & Inclusion, est un espace privilégié qui permettra à nos Managemiennes de pleinement développer leurs talents et de réaliser leur potentiel. il a été agréé de créer un Club des Femmes, sous le sponsoring de Naoual Zine, Directrice Générale Reminex & Projets
        </p>
      </div>

      </div>
      <div class="w3-row w3-margin">
        <div class="w3-twothird w3-container">
          <h2 class="w3-right">Manarola</h2><br><br><br>
          <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </p>
        </div>
        <div class="w3-third">
          <img src="{{asset('image/img2.png')}}" style="width:100%;min-height:200px">
        </div>
      </div>
      <div class="w3-row w3-margin">

        <div class="w3-third">
          <img src="{{asset('image/img1.jpg')}}" style="width:100%;min-height:200px">
        </div>
        <div class="w3-twothird w3-container">
          <h2>Corniglia</h2>
          <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </p>
        </div>

      </div>
      <div class="w3-row w3-margin">
        <div class="w3-twothird w3-container">
          <h2 class="w3-right">Riomaggiore</h2><br><br><br>
          <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </p>
        </div>
        <div class="w3-third">
          <img src="{{asset('image/img2.png')}}" style="width:100%;min-height:200px">
        </div>
      </div>
    </div>
</div>
</div>
    <div id="footer">
      <footer style="z-index:10" id="myFooter" >@yield("footer")</footer>         
    </div>
</body>
</html>