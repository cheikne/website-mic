<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css\footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css\menu.css') }}">
    <link rel="stylesheet" href="{{asset('css\realisation.css' )}}">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
     <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="{{ asset('js\LoadInfopartenaire.js') }}"></script>
    <title>Realisation</title>
  </head>
  <body class="bg-gray-50">
  <div class="w3-top">
      @include('projet-fin-etude.header')
  </div><br><br><br><br><br>       
   @foreach($theses as $these)
      <div class="w3-content" style="max-width:100%;">
       <div class="w3-row w3-margin">
       <a href="#">
            <div class="w3-third snip1374">
              <img src="{{asset($these->img) }}" style="width:90%;min-height:100px;padding:40px;">
            </div>
            <div class="w3-twothird w3-container text-center text-lg">
              <h4><div class="bg-yellow-500 text-black">{{$these->titre_these}}</div></h4>
             
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
       </div>
  @endforeach
      <footer> @include('projet-fin-etude.footer')</footer> 
  </body>
</html>
