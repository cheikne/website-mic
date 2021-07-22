<!DOCTYPE html>
<html>
<head>
<title>Acces-Partenaire-Theses</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto"> -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('js/accesPartenaire/editTheses.js')}}"></script>
</head>
<body>
@php($profil = Auth::user()->profil)
@php($userCurrent=0)
@if($lien != 'admin')
  @foreach($lien as $value)
    @if($value->id_user == Auth::user()->id)
      @php($userCurrent='bon')

      @break
    @endif
  @endforeach
  @if($userCurrent=='0')
    @php($userCurrent='pasbon')
  @endif
@endif

  @if($lien =='admin' || $userCurrent =='bon')
    <div class="w3-light-grey w3-padding-64 w3-margin-bottom w3-center" >
  <h1 class="w3-jumbo">{{$response->titre_these}}</h1>
</div>

<div class="w3-row-padding w3-content" style="max-width:1400px">
  <div class="w3-twothird">
    <img src="{{asset('image/lancemntprojet.jpeg')}}" alt="Notebook" style="width:100%">
    <h2>Valeur ajoutée</h2>
    <div class="w3-justify container">
      <div id="valeur_ajoutee">{{$response->valeur_ajoute}}</div>
      <button class="btn btn-primary" id="editv" onclick="ModificationThese('editv','valeur_ajoutee','RecordingVA')">Modifier</button>
    <div style="display: flex;">
          <button class="btn btn-primary" style="display:none;" id="RecordingVA" onclick="CancelUpdate('editv',this.id,'valeur_ajoutee')">Annuler</button>
          &nbsp;&nbsp;<button class="btn btn-primary" style="display:none;" id="RecordingVA1" onclick="UpdateThese(this.id,'valeur_ajoutee','RecordingVA','editv',{{$response->id_these}},{{ Auth::user()->id}})">Enregistrer</button>
      <p></p>
      </div>
   </div>
   <div class="w3-justify container">
   <h2>Resulatat</h2>
      <div id ="resultats">{{$response->resultats}}</div>
      <button class="btn btn-primary" id="editr" onclick="ModificationThese('editr','resultats','RecordingRes')">Modifier</button>
      <div style="display: flex;">
            <button class="btn btn-primary" style="display:none;" id="RecordingRes" onclick="CancelUpdate('editr',this.id,'resultats')">Annuler</button>
            &nbsp;&nbsp;<button class="btn btn-primary" style="display:none;" id="RecordingRes1"  onclick="UpdateThese(this.id,'resultats','RecordingRes','editr',{{$response->id_these}},{{ Auth::user()->id}})">Enregistrer</button>
        </div>
    </div>
  </div>
  <div class="w3-third">
 <!-- <div class='w3-light-grey'> -->
    <div class="w3-container ">
      <h2>Problematique de la these</h2>
       <div class="w3-justify container" id="Problematique">{{$response->problematique}}</div>
    </div>
     <button class="btn btn-primary" id="editp"    onclick="ModificationThese('editp','Problematique','RecordingProb')">Modifier</button>
     <div style="display: flex;">
      <button class="btn btn-primary" style="display:none;" id="RecordingProb"  onclick="CancelUpdate('editp',this.id,'Problematique')">Annuler</button>
      &nbsp;&nbsp; <button class="btn btn-primary" style="display:none;" id="RecordingProb1" onclick="UpdateThese(this.id,'Problematique','RecordingProb','editp',{{$response->id_these}},{{ Auth::user()->id}})">Enregistrer</button>
   <!-- </div> -->
     </div>
    <br>
    <div class="w3-container w3-light-grey w3-justify">
    <div>
      <h2>Obectifs</h2>
      <div class="w3-justify container"  id="objectif">{{$response->objectif}}</div>
      </div>
       <button class="btn btn-primary" id="edito" onclick="ModificationThese('edito','objectif','RecordingObj')">Modifier</button>
           <div style="display: flex;">
            <button class="btn btn-primary" style="display:none;" id="RecordingObj"  onclick="CancelUpdate('edito',this.id,'objectif')">Annuler</button>
           &nbsp;&nbsp; <button class="btn btn-primary" style="display:none;" id="RecordingObj1"  onclick="UpdateThese(this.id,'objectif','RecordingObj','edito',{{$response->id_these}},{{ Auth::user()->id}})">Enregistrer</button>
            </div>
    </div>
    <br>
    
    <div class="w3-container w3-light-grey w3-justify">
      <h2>Nom des Thsard</h2>
      <div class="w3-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitati.</div>
    </div>
  </div>
</div>
@else 
    <div class="w3-light-grey w3-padding-64 w3-margin-bottom w3-center">
      <h1 class="w3-jumbo">{{$response->titre_these}}</h1>
    </div>

    <div class="w3-row-padding w3-content w3-container" style="max-width:1400px;margin:20px">
      <div class="w3-twothird" style="margin-left: 30px;width: 50%;">
        <img src="{{asset('image/lancemntprojet.jpeg')}}" alt="not found" style="width:90%;height: 200px;">
        <h2>Valeur ajoutee</h2>
        <div id="valeur_ajoutee" class="w3-light-grey" style="width:90%;">{{$response->valeur_ajoute}}</div>
        <button class="btn btn-primary" onclick="ModificationThese(event,'valeur_ajoutee',{{$response->id_these}},'RecordingVA')"disabled>edit</button>
        <button class="btn btn-primary" style="display:none;" id="RecordingVA">Enregistrer</button>
        <div class="w3-justify">

        </div>
        <h2>Resultats</h2>
        <div class="w3-justify" style="width:90%;">
          <div id ="Resultats" class="w3-light-grey">{{$response->resultats}}</div>
          <button class="btn btn-primary" onclick="ModificationThese(event,'resultats',{{$response->id_these}},'RecordingRes')" disabled>edit</button>
          <button class="btn btn-primary" style="display:none;" id="RecordingRes">Enregistrer</button>
        </div>
      </div>
      <div class="w3-third">
        <div class="w3-container w3-light-grey" style="width: 150%;margin-top: 10px;">
          <h2>Problematique de la these</h2>
          <p class="w3-justify" id="Problematique">{{$response->problematique}}</p>
          <button class="btn btn-primary" onclick="ModificationThese(event,'Problematique',{{$response->id_these}},'RecordingProb')" disabled>edit</button>
          <button class="btn btn-primary" style="display:none;" id="RecordingProb">Enregistrer</button>
        </div>
        <br>
        <div class="w3-container w3-light-grey w3-justify" style="width: 150%;margin-top: 10px;">
          <h2>Obectifs</h2>
          <p class="w3-justify" id="objectif">{{$response->objectif}}</p>
          <button class="btn btn-primary" onclick="ModificationThese(event,'objectif',{{$response->id_these}},'RecordingObj')" disabled>edit</button>
          <button class="btn btn-primary" style="display:none;" id="RecordingObj">Enregistrer</button>
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
