<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css\footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css\menu.css') }}">
    <link rel="stylesheet" href="{{asset('css\realisation.css' )}}">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <script type="text/javascript" src="{{ asset('js\LoadInfopartenaire.js') }}"></script>
    <title>Realisation</title>
  </head>
  <body class="bg-gray-50">
  <div class="w3-top">
      @include('projet-fin-etude.header')
  </div><br><br><br><br><br>    
  <div class="w3-content" style="max-width:80%;;">   
   @foreach($theses as $these)
      
       <div class="w3-row w3-margin" style="margin-left: 20%;">
       <a href="/Accueil/Realisation/These" onclick="LoadDataOneThese({{$these->id_these}})">
            <div class="w3-third snip1374 w3-center" style="padding:0px;">
              <img src="{{asset($these->img) }}" style="width:500px;min-height:150px;padding:40px;">
            </div>
            <div class="w3-twothird w3-container text-center text-lg">
              <h4><div class="bg-blue-500 text-black">{{$these->titre_these}}</div></h4>
             
              <p class="text-black">
              {{$these->objectif}}
              </p>
              <p class="text-black">
              {{$these->nom_thesard}}
              </p>
              <p class="text-black">
              {{$these->encadrant}}
              </p>
             
            </div>
            </a>
       </div>
       
  @endforeach
  </div>
      <footer> @include('projet-fin-etude.footer')</footer> 
  </body>
</html>
