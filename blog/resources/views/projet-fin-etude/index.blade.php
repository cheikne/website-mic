<!DOCTYPE html>
<head>
  <title>Page d'accueil</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="{{ asset('css\footer.css') }}">
  <link rel="stylesheet" href="{{ asset('css\menu.css') }}">
  <!-- <link rel="stylesheet" href="{{ asset('css\SubsMenu.css') }}"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="{{ asset('js\LoadInfopartenaire.js') }}"></script>
</head>
<body>
  <div class="w3-top" style="z-index:1000;">
      @include('projet-fin-etude.header')
  </div><br><br><br><br><br>
<div class="w3-row-padding w3-content" style="max-width:1400px;margin-left: 0;">
    <div class="w3-twothird" style="width: 700px;">
      <div class="bd-example">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators ">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active w3-black"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1" class="w3-black"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2" class="w3-black"></li>
        </ol>
        <div class="carousel-inner"  style="border:2px solid black;">
          <div class="carousel-item active">
            <img src="{{asset('image/MANAGEM.png')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('image/ENIM.png')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('image/UCA.jpg')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
          </div>
        </div>
        <a  class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span  class="carousel-control-prev-icon w3-black" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon w3-black" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div><br><br>

  <nav class="col-sm-10 col-4">
   <ul class="nav nav-pills flex-row">
        <li class="nav-item">
          <a class="nav-link active" href="#section1">Context General</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#section3"> Projet MIC</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#section3">Objectifs</a>
        </li>        
        <li class="nav-item">
          <a class="nav-link active" href="#section2">Evenements</a>
        </li>
     </ul>
</nav><br>

    <!-- <div class="w3-third">
    <div class="w3-container-fluid w3-light-grey"style="width: 150%;">
      
    </div>
  </div> -->
  <!-- <h2 class="w3-blue" style="text-align:center;margin: 0;">Evenements</h2> -->
</div>

    <div class="w3-third w3-animate-right">
    <div class="w3-container-fluid w3-light-grey"style="width: 130%;margin-top: 10px;">
      <h2 class="w3-blue" style="text-align:center;margin: 0;">Actualites recentes</h2>
     <div class="w3-content w3-container-fluid" style="margin-top:4px">
       @php($i=0)
       @foreach($actu as $value)
        <div class="w3-row ">

            <div class="w3-third" id="id_img{{$i}}" style="width: 20%;display: block;">
              <figure class="snip1374"><img src="{{$value->urlImg}}" style="width:100%;min-height:100px"></figure>
            </div>
            <div class="w3-twothird w3-container" id="{{$i}}">
            <h7>{{$value->date}}</h7>
            <h5 class="w3-text-blue-grey w3-hover-text-blue">{{$value->titre}}</h5>
            <p class="w3-monospace w3-large">
             <div class="w3-button w3-white w3-border w3-round-small" id="current{{$i}}" onclick="displayActuRecent('id_img{{$i}}','resume{{$i}}','current{{$i}}','{{$i}}')">Decouvrir  +</div>
              <div id="resume{{$i}}" style="display:none">{{$value->resumer}}</div>
            </p>
          </div>
        </div>
         @if($i==2)
            <a class="w3-text-blue w3-right-align" href="/Accueil/Actualites">Voir plus d'actulaites</a>
          @endif
        @php($i++)
        @endforeach
      </div>
    </div>
  </div>


<!-- 
  <div class="col-sm-9 col-8">
    <div id="section1" class="bg-success">    
      <h1>Section 1</h1>
      <p>Try to scroll this section and look at the navigation list while scrolling!</p>
    </div>
    <div id="section2" class="bg-warning"> 
      <h1>Section 2</h1>
      <p>Try to scroll this section and look at the navigation list while scrolling!</p>
    </div>        
    <div id="section3" class="bg-secondary">         
      <h1>Section 3</h1>
      <p>Try to scroll this section and look at the navigation list while scrolling!</p>
    </div>
  </div> -->

 <!--   <div class="w3-light-grey w3-padding-64 w3-margin-bottom w3-center">
  <h1 class="w3-jumbo">Projet MIC</h1>
</div>
 -->

    <div class="w3-row-padding w3-content w3-container" style="max-width:1400px;">
      <div class="w3-twothird" style="width: 50%;"  id="section1" >
        <h2 class="w3-text-blue">Context</h2>
        <div class="w3-justify">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
         <img src="{{asset('image/partenaire.png')}}" alt="Notebook" style="width:100%">
      </div>
      <div id="section2"> 
      <div class="w3-third" style="margin-top: 150px;">
        <div class="w3-container-fluid w3-light-grey"style="width: 150%;">
          <h2 class="w3-blue" style="text-align:center;margin: 0;">Evenements Recents</h2>
         <div class="w3-content w3-container-fluid " style="margin:40px;">
            @for($i=0;$i<3;$i++)
              <div class="w3-row ">

                  <div class="w3-third">
                    <figure class="snip1374"><img src="{{asset('image/img2.png')}}" style="width:100%;min-height:100px"></figure>
                  </div>
                  <div class="w3-twothird w3-container">
                  <h2>5 Terre</h2>
                  <p>
                   Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
                   <a class="w3-text-blue" href="#">Lire suite.......</a>
                  </p>
                </div>
                 @if($i==2)
                  <a class="w3-text-blue" href="#">Afficher tout</a>
                @endif
              </div>
            @endfor
          </div>
        </div>
      </div>
      </div>
      </div><hr>
    <div class="w3-row-padding w3-content" id="section3" style="max-width:1400px">
      <div class="w3-twothird">
        <!-- <img src="{{asset('image/img1.jpg')}}" alt="Notebook" style="width:100%"> -->
        <h2 class="w3-blue">Objectifs</h2>
        <div class="w3-justify">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
        <div class="w3-third">
          <div class="w3-container-fluid w3-light-grey">
            <h2 class="w3-blue" style="width: 100%;margin-left: 0;">Qu'est ce le MIC</h2>
            <p class="w3-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
      </div>
    </div>
</div>

<!-- /888888888888888888888888888888888888888888888888888 -->

  <hr style="border:3px solid blue;">
  <div>
  <footer>  @include('projet-fin-etude.footer')</footer>
</div>
</body>
</html>