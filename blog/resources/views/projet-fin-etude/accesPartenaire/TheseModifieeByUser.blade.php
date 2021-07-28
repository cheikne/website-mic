<!DOCTYPE html>
<html>
<head>
<title>Acces-Partenaire-Theses</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('js/accesPartenaire/editTheses.js')}}"></script>
</head>
<body>

  <div class="w3-light-grey w3-padding-64 w3-margin-bottom w3-center d-flex flex-wrap" >
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div style="margin-top:10px"><a href="/Accueil/Acces-Partenaire"><i class="fa fa-mail-reply" style="font-size:48px;"></i></a></div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h1  style="text-align:center;">{{$response->titre_these}}</h1>
</div>

<div class="w3-row-padding w3-content" style="max-width:1400px">
  <div>
    <!-- <img src="{{asset('image/lancemntprojet.jpeg')}}" alt="Notebook" style="width:100%"> -->
     <div class="w3-justify container"id="editp1" style="background-color: {{$couleur->clor_pro}};">
      <h2>Problematique de la these</h2>
       <div class="w3-justify container" id="Problematique">{{$response->problematique}}</div><br>
        <button class="btn btn-primary" id="editp"    onclick="ModificationThese('editp','Problematique','RecordingProb')" disabled>Modifier</button>
        <div style="display: flex;">
      <button class="btn btn-primary" style="display:none;" id="RecordingProb"  onclick="CancelUpdate('editp',this.id,'Problematique')">Annuler</button>
      &nbsp;&nbsp; <button class="btn btn-primary" style="display:none;" id="RecordingProb1" onclick="UpdateThese(this.id,'Problematique','RecordingProb','editp',{{$response->id_these}},{{ Auth::user()->id}})">Enregistrer</button>
   </div>
    </div>

     <div class="w3-justify container id="edito1" style="background-color:{{$couleur->clor_obj}}">
      <h2>Obectifs</h2>
      <div class="w3-justify container"  id="objectif">{{$response->objectif}}</div> <br>
         <button class="btn btn-primary" id="edito" onclick="ModificationThese('edito','objectif','RecordingObj')" disabled>Modifier</button>
        <div style="display: flex;">
          <button class="btn btn-primary" style="display:none;" id="RecordingObj"  onclick="CancelUpdate('edito',this.id,'objectif')">Annuler</button>
         &nbsp;&nbsp; <button class="btn btn-primary" style="display:none;" id="RecordingObj1"  onclick="UpdateThese(this.id,'objectif','RecordingObj','edito',{{$response->id_these}},{{ Auth::user()->id}})">Enregistrer</button>
        </div>
     </div>


    <div class="w3-justify container" id="editv1" style="background-color: {{ $couleur->clor_va }}">
    <h2>Valeur ajoutée</h2>
      <div id="valeur_ajoutee">{{$response->valeur_ajoute}}</div><br>
      <button class="btn btn-primary" id="editv" onclick="ModificationThese('editv','valeur_ajoutee','RecordingVA')" disabled>Modifier</button>
    <div style="display: flex;">
          <button class="btn btn-primary" style="display:none;" id="RecordingVA" onclick="CancelUpdate('editv',this.id,'valeur_ajoutee')">Annuler</button>
          &nbsp;&nbsp;<button class="btn btn-primary" style="display:none;" id="RecordingVA1" onclick="UpdateThese(this.id,'valeur_ajoutee','RecordingVA','editv',{{$response->id_these}},{{ Auth::user()->id}})">Enregistrer</button>
      <p></p>
      </div>
   </div>
   <div class="w3-justify container " id="editr1" style="background-color: {{$couleur->clor_res}};">
   <h2>Resulatat</h2>
      <div id ="resultats">{{$response->resultats}}</div><br>
      <button class="btn btn-primary" id="editr" onclick="ModificationThese('editr','resultats','RecordingRes')" disabled>Modifier</button>
      <div style="display: flex;">
            <button class="btn btn-primary" style="display:none;" id="RecordingRes" onclick="CancelUpdate('editr',this.id,'resultats')">Annuler</button>
            &nbsp;&nbsp;<button class="btn btn-primary" style="display:none;" id="RecordingRes1"  onclick="UpdateThese(this.id,'resultats','RecordingRes','editr',{{$response->id_these}},{{ Auth::user()->id}})">Enregistrer</button>
        </div>
    </div>
    <br>
    <div class="container w3-justify" style="background-color: {{$couleur->clor_nameT}}">
      <h2>Nom des Thsard</h2>
      <div class="w3-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitati.</div>
    </div>
  </div>
</div>
</body>
</html>
