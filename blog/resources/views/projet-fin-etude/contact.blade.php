  <!DOCTYPE html>
  <html>
  <title>Partenaires du Porjet</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="{{ asset('css\footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css\menu.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="{{ asset('js\LoadInfopartenaire.js') }}"></script>
  <body>
   <div class="w3-top">
       @include('projet-fin-etude.header')
    </div><br><br><br><br><br><br><br>
    <a class="w3-text-blue" href="#">{{$path}}</a>
    <header class="w3-container">
        <h1 class="w3-container w3-jumbo" style="text-align:center;">Contact des Partenaires</h1>
      </header>

    <div class="w3-container" style="max-width:1000px;margin:16px;border:1px solid #ccc;margin-left:100px">
      <div class="w3-panel">
         <div class="w3-row">

            <div class="w3-col s9 w3-container">
              <h2>Porteurs du Projet</h2>
              <strong>El Hassan Abdel</strong><br>
               <strong>Instituts :</strong><span>Industrie Managem</span><br>
               <strong>Adresse du cabinet:</strong>
               <p>Tel :+212) 5 24 434885 - Fax: (+212) 5 24 43 44 94</p>
               <label></label>
                <strong>Email :</strong><label> porteur.projet@uca.ma</label>
            </div>
          </div><hr>
          <h2 class="w3-right w3-blue-gray w3-card-4">Les Etablissements</h2>
        @for($i=0;$i<4;$i++)
          <div class="w3-row">
            <div class="w3-col s9 w3-container">
              <h2 class="w3-card-4 w3-text-white" style="background-color:rgba(0, 0, 0, 0.5);padding: 10px;">FSSM de l' Universites Caddi Ayyad</h2>
              <div style="display:flex;margin: 10px;">
                <div>
                  <div>
                    <strong>Doyen de fssm:</strong><span>M.Mohamed EL ALAOUI TALIBI</span><br>
                    <strong>Adresse :</strong><span> Bd. Prince My Abdellah, B.P. 2390, 40000 Marrakech</span>
                    <p>Tel : (+212) 5 24 43 46 49</p>
                    <p>Fax : Fax: (+212) 5 24 43 67 69</p>
                  </div>
                  <h5 class="w3-text-blue w3-hover-text-grey">Encadrants</h5>
                  <strong>El Hassan Abdel</strong><br>
                   <strong>Adresse du cabinet:</strong>
                   <span>Tel :+212) 5 24 434885 - Fax: (+212) 5 24 43 44 94</span><br>
                   <label></label>
                    <strong>Email :</strong><label> encandrant.projet@uca.ma</label>
                </div>
                <div style="margin-left:200px;">
                  <h5 class="w3-text-blue">Thesards</h5>
                  <strong>Oussama Hassidi</strong><span> : These 1</span><br>
                  <p>Tel :+212) 5 24 434885</p>
                  <span>Email :</span><span> encandrant.projet@uca.ma</span>
                   <strong>Ahmed </strong><span> : These 2</span><br>
                   <sapn>Tel :+212) 5 24 434885</sapn><br>
                    <span>Email :</span><span> encandrant.projet@uca.ma</span>
                </div>
              </div>
            </div>
          </div><hr>
          @endfor
          <h2 class="w3-right w3-blue-gray w3-card-4">Les Industries</h2>
          @for($i=0;$i<4;$i++)
            <div class="w3-row">

            <div class="w3-col s9 w3-container">
              <h2 class="w3-card-4 w3-text-white" style="background-color:rgba(0, 0, 0, 0.5);padding: 10px;">Industrie Managem</h2>
              <strong>Adresse du Siege</strong><br>
              <p>Twin Center, Tour A, Angle Boulevards Zerktouni et Al Massira Al Khadra
                BP 5199, Casablanca. Maroc</p>
               <p>Tel :(+212) 5 22 95 65 65</p>
               <label></label>
                <strong>Email :</strong><label> porteur.projet@uca.ma</label>
            </div>
          </div><hr>
          @endfor

        </div>
    </div>

    <div id="footer" style="z-index:1;" >
    <footer id="myFooter" >@include('projet-fin-etude.footer')</footer>         
  </div>