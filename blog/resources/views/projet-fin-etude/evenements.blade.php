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
  </div><br><br><br><br><br><br>
    <!-- <video autoplay muted loop id="myVideo">
      <source src="https://www.youtube.com/watch?v=6nLG7e8jH6k">
      Your browser does not support HTML5 video.
    </video> -->
    <!-- <div class="container myVideo"> -->
      
  <div class="w3-content">
      <div class="w3-row w3-margin">
        <div class="w3-third">
          <iframe  id="myVideo"  width="300" height="200" src="https://www.youtube.com/embed/6nLG7e8jH6k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="w3-twothird w3-container content">
          <h2>5 Terre</h2>
          <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </p>
        </div>
      </div>
      <div class="w3-row w3-margin">
        <div class="w3-third">
          <iframe  id="myVideo"  width="300" height="200" src="https://www.youtube.com/embed/6nLG7e8jH6k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="w3-twothird w3-container content">
          <h2>5 Terre</h2>
          <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </p>
        </div>
      </div>
      <div class="w3-row w3-margin">
        <div class="w3-third">
          <iframe  id="myVideo"  width="300" height="200" src="https://www.youtube.com/embed/6nLG7e8jH6k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="w3-twothird w3-container content">
          <h2>5 Terre</h2>
          <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </p>
        </div>
      </div>
    </div>

    <div class="content">
      <h1>Heading</h1>
      <p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei. Id qui nemore latine molestiae, ad mutat oblique delicatissimi pro.</p>
      <button id="myBtn" onclick="PlayVideos()">Pause</button>
    </div>

    <footer>  @include('projet-fin-etude.footer')</footer>
  </body>
</html>