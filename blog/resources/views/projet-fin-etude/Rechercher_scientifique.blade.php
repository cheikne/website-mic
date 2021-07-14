<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <style> 

         h4:link {
            text-decoration: none;
            }

            h4:visited {
            text-decoration: none;
            }

            h4:hover {
            text-decoration: underline;
            }

            h4:active {
            text-decoration: underline;
            }
</style>
    <title>Rechercher_scientifique</title>
</head>
<body class="items-end">
<div class="w3-top">
      @include('projet-fin-etude.header')
</div><br><br><br><br><br>   
    <div class="container-fluid">
    <div style="width: 20%;float:right" >

    <div class="input-group">
    <div class="input-group-prepend">
      <label class="input-group-text" for="inputGroupSelect01">Options</label>
    </div>
  <select class="custom-select" id="inputGroupSelect01">
        <option selected>Choose...</option>
        <option herf="1">These 1</option>
          <option herf="2">These 2</option>
          <option herf="3">Thèse 3</option>
          <option herf="3">Thèse 4</option>
          <option herf="3">Thèse 5</option>
          <option herf="3">Thèse 6</option>
          <option herf="3">Thèse 7</option>
      </select>
      <div class="btn btn-btn">Filtre</div>
  </div>

   
   </div>
    @foreach($depots as $depot)
  
    <div onclick="displayArticle({{$depot->id_rech}})"><h3 style="background-color:white;color:black;text-align:left;"><i class="fa fa-arrow-down"></i> recherche base sur l'analyseur en ligne</h3></div>
    <div id="{{$depot->id_rech}}" style="display: none;">
    <div class="flex col-md-12 col-xs-12 col-lg-12"><img src="{{asset('images/images2.png')}}" alt="">
    <div class="px-2 text-lg bg-blue-100" style="text-shadow:0px 0px 1px;">
       {{$depot->resume}}
     <p ><a href="#">{{$depot->lien}}</a></p> 
   </div>
    </div>
    </div>
    </div><br>
  
    @endforeach
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <footer> @include('projet-fin-etude.footer')</footer> 
    <script>
         function displayArticle(id){  
            $(document).ready(function(){
                $("#"+id).toggle("slow");
         
            });
         }
 </script>
</body>
</html>