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
<script type="text/javascript" src="{{ asset('js\SubsMenuProjetPartenaire.js') }}"></script>
<script type="text/javascript" src="{{ asset('js\actualite.js') }}"></script>
<body>
	<div class="w3-top">
       @include('projet-fin-etude.header')
  </div><br><br><br><br><br>
  <a class="w3-text-blue w3-pandding" href="#">{{$path}}</a>
  <div class="w3-content" >
      <div class="w3-container">
				<h1 >Actualites Managem</h1>
			</div>
			@include('projet-fin-etude.actualitePartners.actuManagem')
			<div class="w3-container">
				<h1 >Actualites Reminex</h1>
			</div>
			@include('projet-fin-etude.actualitePartners.actuReminex')
			<div class="w3-container">
				<h1 >Actualites MASCIR</h1>
			</div>
					@include('projet-fin-etude.actualitePartners.actuMascir')
			<div class="w3-container">
				<h1 >Actualites UCA</h1>
			</div>
					@include('projet-fin-etude.actualitePartners.actuUCA')
			<div class="w3-container">
				<h1 >Actualites ENIM</h1>
			</div>
					@include('projet-fin-etude.actualitePartners.actuENIM')
			<div class="w3-container">
				<h1 >Actualites ENSIAS</h1>
			</div>
					@include('projet-fin-etude.actualitePartners.actuENSIAS')
			<div class="w3-container">
				<h1 >Actualites CNRST</h1>
			</div>
			<div class="w3-container">
					@include('projet-fin-etude.actualitePartners.actuCNRST')
			</div>
	</div>

  <div id="footer">
      <footer style="z-index:10" id="myFooter" >@include('projet-fin-etude.footer')</footer>         
    </div>
</body>