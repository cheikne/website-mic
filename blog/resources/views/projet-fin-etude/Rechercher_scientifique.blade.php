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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
     <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
<body class="p-8  items-end">
<div class="w3-top">
      @include('projet-fin-etude.header')
</div><br><br><br><br><br>   
    <div class="container-fluid">

    @foreach($depots as $depot)
    @php($afficher=0)
    @php($d=1)
    <div id="{{$afficher}}"><h4 style="background-color: white;color:black;text-align:left;"><i class="fa fa-arrow-down"></i> recherche base sur l'analyseur en ligne</h4></div>
    <div id="{{$d}}">
    <div class="flex col-md-12 col-xs-12 col-lg-12"><img src="{{asset('images/images2.png')}}" alt="">
    <div class="px-2 text-lg bg-blue-100" style="text-shadow:0px 0px 1px;">
       {{$depot->resume}}
     <p ><a href="#">{{$depot->lien}}</a></p> 
   </div>
    </div>
    </div>
    </div>
    @php($afficher++)
    @php($d++)
    @endforeach
    <footer> @include('projet-fin-etude.footer')</footer> 
    <script>
            
            $(document).ready(function(){
            document.getElementById("{{$d}}").style.display="none";
            $("#{{$afficher}}").click(function(){
                $("#{{d}}").toggle();
            });
            });
 </script>
</body>
</html>