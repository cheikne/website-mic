<!DOCTYPE html>
<html>
<title>Partenaires du Porjet</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="{{ asset('css\footer.css') }}">
  <link rel="stylesheet" href="{{ asset('css\menu.css') }}">
  <link rel="stylesheet" href="{{ asset('css\evenements.css') }}">
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
<script type="text/javascript" src="{{ asset('js\evenements.js') }}"></script>
  <body>
    <div class="w3-top">
      @include('projet-fin-etude.header')
  </div><br><br><br><br><br>  
    <a class="w3-text-blue" href="#">{{$path}}</a>
  <div class="w3-row-padding w3-content w3-container w3-animate-zoom" style="max-width:1600px;margin-left: 0;">
    <div class="w3-twothird"> 
        <!-- <img src="img_notebook.jpg" alt="Notebook" style="width:100%"> -->
      <h2>Visites et Conference</h2>

      <div class="w3-row-padding w3-margin-top w3-container">
          @for($i=0;$i<7;$i++)
            <div class="w3-third" style="width:25%;margin-top: 10px;">
              <div class="w3-card">
                <div class="containerimg">
                <img src="{{asset('image/lancemntprojet.jpeg')}}" style="width:100%" class="image">
                <div class="overlay">
                  <div class="text">Visites</div>
                </div>
              </div>
                <div class="w3-container">
                  <h5>Une visite dans une institut </h5>
                  <a href="#" class="w3-text-blue">Dcecouvrir..</a>
                </div>
              </div>
            </div>
          @endfor
          <div class="w3-third" style="width:25%;">
              <div class="w3-card" >
               <iframe  id="myVideo"  width=100% height="200" src="https://www.youtube.com/embed/6nLG7e8jH6k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="w3-container">
                  <h5>Une visite dans une institut .</h5>
                  <a href="#" class="w3-text-blue">Dcecouvrir..</a>
                </div>
              </div>
            </div>
          </div>


    
    </div>
    <div class="w3-third">
        <div class="w3-container w3-light-grey">
          <h2>Titre de la visite</h2>
        <div class="w3-justify">
          <p>Le Groupe Managem a le plaisir d???annoncer que la mine d???or de Tri-K en Guin??e, dans la r??gion de Mandiana, a r??alis?? la premi??re coul??e le 23 juin 2021, suite ?? la finalisation des travaux de construction.</p>

            <p>La mine de Tri-K consolide la pr??sence du Groupe en R??publique de Guin??e et appuie sa d??termination ?? se positionner parmi les plus importants producteurs d???or de taille interm??diaire en Afrique de l???Ouest. Cette concr??tisation, t??moin du savoir-faire, de l???expertise et r??silience de nos ??quipes, renforce la position de Managem comme un acteur majeur de la dynamique ??conomique locale avec plus de 800 emplois ?? terme, tout en cr??ant de la valeur partag??e et durable pour nos investisseurs et toutes nos parties prenantes.</p>
        </div>
        </div>
      </div>
  </div>

    <!-- <div class="content">
      <h1>Heading</h1>
      <p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei. Id qui nemore latine molestiae, ad mutat oblique delicatissimi pro.</p>
      <button id="myBtn" onclick="PlayVideos()">Pause</button>
    </div -->>

    <footer>  @include('projet-fin-etude.footer')</footer>
  </body>
</html>