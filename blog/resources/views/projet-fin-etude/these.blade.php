<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-light-grey w3-padding-64 w3-margin-bottom w3-center">
  <h1 class="w3-jumbo">{{$globthese->titre_these}}</h1>
</div>

<div class="w3-row-padding w3-content" style="max-width:1400px">
  <div class="w3-twothird">
    <img src="{{asset($globthese->img)}}" alt="Notebook" style="width:100%">
    <h2>Objectfis de la Thèse</h2>
    <div class="w3-justify">
      <p>{{$globthese->objectif}}</p>
    </div>
  </div>
  <div class="w3-third">
    <div class="w3-container w3-light-grey">
      <h2>Valeur ajouter</h2>
      <p class="w3-justify">{{$globthese->valeur_ajouter}}</p>
    </div>
    <br>
    <div class="w3-container w3-light-grey w3-justify">
      <h2>{{$globthese->problematique}}</h2>
      <p class="w3-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <br>
  </div>
</div>

</body>
</html>
