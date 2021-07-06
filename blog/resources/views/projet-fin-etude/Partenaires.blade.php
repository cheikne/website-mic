@extends($cheminPage)
@section('DescriptivePartners')

          <div class="w3-card-4" style="width:90%;margin-left: 7%;margin-top: 20%;">
              <header class="w3-container w3-blue">

                @if($detailInstituit->name=="Managem" || $detailInstituit->name=="Reminex" || $detailInstituit->name=="Mascir")
                  <h1>Industrie {{$detailInstituit->name}}</h1>
                @else
                  <h1>Academie  {{$detailInstituit->name}}</h1>
                @endif
              </header>
              <div class="w3-container">
                <p>{{$detailInstituit->description}}</p>
                <h1>Le role de {{ $detailInstituit->name }} dans le cadre du projet</h1>
                <p>{{$detailInstituit->role}}</p>
                @if($detailInstituit->name=="UCA")
                  <strong>Intitulé de la thèse 1:</strong><a href="#">: Développement d’un analyseur en ligne basé sur l’usage des technologies de 
                   traitement d’images et de Machine Learning pour la détermination temps réel des teneurs au sein 
                   des unités de flottation</a><br>
                  <strong>Intitulé de la thèse 2:</strong><a href="#">: : Développement de jumeaux numériques pour l’amélioration des performances 
                   opérationnelles des unités de production minières. Cas du procédé de traitement des minerais par 
                   flottation.</a><br><br>
                 <strong>Site Officiel UCA :</strong><a href="https://www.uca.ma/">https://www.uca.ma/</a><br><br>
                @endif
                @if($detailInstituit->name=="Managem")
                 <strong>Site Officiel Managem :</strong><a href="http://www.managemgroup.com/" style="color: blue;">http://www.managemgroup.com/</a>
                  <br><br>
                @endif
              </div>
            </div>

@endsection('DescriptivePartners')

@section('actualites')
  @php ($check=1)
  @foreach($detailActuali as $values)
      @if($check%2 !=0)
        <div class="w3-row w3-margin">
          <div class="w3-third">
            <img src={{$values->urlImg}} style="width:100%;min-height:320px">
          </div>
          <div class="w3-twothird w3-container">
            <h3 class="w3-blue">{{$values->date}}</h3>
            <h2>{{$values->titre}}</h2>
            <p>{{$values->context}} </p>
          </div>
        </div>
      @else
        <div class="w3-row w3-margin">
          <div class="w3-twothird w3-container">
            <h3 class="w3-blue">{{$values->date}}</h3>
            <h2 class="w3-right">{{ $values->titre }}</h2><br><br><br>
            <p>{{ $values->context }} </p>
          </div>
          <div class="w3-third">
            <img src={{$values->urlImg}} style="width:100%;min-height:200px">
          </div>
        </div>
      @endif
      @php ($check++)
    @endforeach
@endsection('actualites')
<script type="text/javascript">
   document.getElementById("imgPartners").style.display="none";
</script>