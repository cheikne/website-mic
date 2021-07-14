<!DOCTYPE html>
<html>
<head>
<title>Acces-Partenaire-Theses</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto"> -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('js/accesPartenaire/editTheses.js')}}"></script>
</head>
<body>
@if($response)
<div class="w3-light-grey w3-padding-64 w3-margin-bottom w3-center">
  <h1 class="w3-jumbo">{{$response->titre_these}}</h1>
</div>

<div class="w3-row-padding w3-content w3-container" style="max-width:1400px;margin:20px">
  <div class="w3-twothird" style="margin-left: 30px;width: 50%;">
    <img src="{{asset('image/lancemntprojet.jpeg')}}" alt="not found" style="width:90%;height: 200px;">
    <h2>Valeur ajoutee</h2>
    <div id="valeur_ajoutee" class="w3-light-grey" style="width:90%;">{{$response->valeur_ajoute}}
    <button class="w3-btn w3-blue w3-right" onclick="ModificationThese(event,'valeur_ajoutee',{{$response->id_these}},'RecordingVA')">edit</button></div>
    <button class="w3-btn w3-blue w3-right" style="display:none;" id="RecordingVA">Enregistrer</button>
    <div class="w3-justify">

    </div>
    <h2>Resultats</h2>
    <div class="w3-justify" style="width:90%;">
      <div id ="Resultats" class="w3-light-grey">{{$response->resultats}}</div>
      <button class="w3-btn w3-blue w3-right" onclick="ModificationThese(event,'resultats',{{$response->id_these}},'RecordingRes')">edit</button>
      <button class="w3-btn w3-blue w3-right" style="display:none;" id="RecordingRes">Enregistrer</button>
    </div>
  </div>
  <div class="w3-third">
    <div class="w3-container w3-light-grey" style="width: 150%;margin-top: 10px;">
      <h2>Problematique de la these</h2>
      <p class="w3-justify" id="Problematique">{{$response->objectif}}</p>
      <button class="w3-btn w3-blue w3-right" onclick="ModificationThese(event,'Problematique',{{$response->id_these}},'RecordingProb')">edit</button>
      <button class="w3-btn w3-blue w3-right" style="display:none;" id="RecordingProb">Enregistrer</button>
    </div>
    <br>
    <div class="w3-container w3-light-grey w3-justify" style="width: 150%;margin-top: 10px;">
      <h2>Obectifs</h2>
      <p class="w3-justify" id="objectif">{{$response->resultats}}</p>
      <button class="w3-btn w3-blue w3-right" onclick="ModificationThese(event,'objectif',{{$response->id_these}},'RecordingObj')">edit</button>
      <button class="w3-btn w3-blue w3-right" style="display:none;" id="RecordingObj">Enregistrer</button>
    </div>
    <br>
    <div class="w3-container w3-light-grey w3-justify">
      <h3>Nom des Thsards</h3>
      <p class="w3-justify">Les nom des thesards</p>
    </div>
  </div>
</div>
@endif
</body>
</html>
