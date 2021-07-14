<!DOCTYPE html>
<html>
<title>Partenaires du Porjet</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="{{ asset('css\footer.css') }}">
  <link rel="stylesheet" href="{{ asset('css\menu.css') }}">
  <link rel="stylesheet" href="{{ asset('css\actualite.css') }}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('js\LoadInfopartenaire.js') }}"></script>
<!-- <script type="text/javascript" src="{{ asset('js\SubsMenuProjetPartenaire.js') }}"></script> -->
<script type="text/javascript" src="{{ asset('js\actualite.js') }}"></script>
<script type="text/javascript" src="{{ asset('js\accesPartenaire\accesPartenaire.js') }}"></script>
<body>
	<div class="w3-top">
       @include('projet-fin-etude.header')
  </div><br><br><br><br><br>
  <a class="w3-text-blue w3-pandding" href="#">{{$path}}</a>
<div class="w3-row-padding w3-content w3-container w3-animate-zoom" style="max-width:1200px;margin-left: 0;">
    <div class="w3-twothird" style="margin-left: 30px;width: 50%;"> 
    	 <div class="w3-display-container w3-text-white">
    	 		<img src="{{asset('image/lancemntprojet.jpeg')}}" alt="Notebook" style="width:90%;height: 200px;">
    	 		<div class="w3-display-topleft w3-container w3-jumbo w3-text-black"><p>Actualites</p></div>
    	 		 <!-- <div class="w3-display-middle w3-large w3-jumbo">Actualites</div> -->
    	 </div>
    	 <div id="resume_actu">
	    	 <h2 class="w3-text-blue">Titre de l'actualites </h2>
	        <div class="w3-justify"  style="width:90%;">
	          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	        </div>
	      </div>
      </div>

  <div class="w3-third ">
    <div class="w3-container-fluid w3-light-grey"style="width: 160%;margin-top: 10px;">
      <h2 class="w3-blue" style="text-align:center;margin: 0;">Actualites</h2>
     <div class="w3-content w3-container-fluid" style="margin-top:4px">
      @php($i=0)
      @foreach($actu as $value)
        <div class="w3-row ">

            <div class="w3-third" style="width:130px;">
              <figure class="snip1374"><img src="{{$value->urlImg}}" style="width:100%;min-height:100px"></figure>
            </div>
            <div class="w3-twothird ">
            <h3>{{$value->date}}</h3>
            <h5 id="titre{{$i}}">{{$value->titre}}</h5>
            <p>
             <a class="w3-text-blue" href="#" onclick="displayActu('{{$i}}','titre{{$i}}')">Decouvrir.......</a>
             <p id ="{{$i}}" style="display:none">{{$value->resumer}}</p>
            </p>
          </div>
        </div>
        @php($i++)
        @endforeach
      </div>
    </div>
  </div>
</div>


  <div id="footer">
      <footer style="z-index:10" id="myFooter" >@include('projet-fin-etude.footer')</footer>         
    </div>
</body>