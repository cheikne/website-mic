  <div class="w3-bar w3-blue-grey w3-top w3-left-align w3-large" style="height: 100px;">
    <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="DisplaySubsMenuBar()"><i class="fa fa-bars"></i></a>
    <div class="w3-display">
      <div>
        <a href="#" class="w3-bar-item w3-xxlarge w3-text-white" id="header">Logo</a>
      <div class="w3-right">
      <button onclick="document.getElementById('id01').style.display='block'" class="w3-bar-item w3-button w3-hide-small w3-large">Acces Partenaires</button>
        <a href="#" class="w3-bar-item w3-button w3-hide-small" id="header">Anglais</a>
        <a href="#" class="w3-bar-item w3-button w3-hide-small" id="header">Contact</a>
      </div><br><br>
    </div>
      <div>
        <div style="margin-left:0px;z-index: -1;" class="w3-right">
          <a href="/Accueil" class="w3-bar-item w3-button w3-hide-small w3-hover-yellow" id="header">Accueil</a>
          <a href="/Accueil/Partenaire-Projet" class="w3-bar-item w3-button w3-hide-small w3-hover-yellow" id="header">Partenaire du Projet</a>
          <a href="/Accueil/Realisation" class="w3-bar-item w3-button w3-hide-small w3-hover-yellow" id="header">Realisations</a>
          <a href="/Accueil/Evenements" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-yellow" id="header">Evenements</a>
          <a href="/Accueil/Recherche_scientifique" class="w3-bar-item w3-button w3-hide-small w3-hover-yellow" id="header">Recherche Scientifique</a>
          <a href="/Accueil/Actualites" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-yellow" id="header">Actualites</a>
        <div class="search-container w3-bar-item w3-hide-small w3-hide-medium">
            <!-- <input type="text" placeholder="Search.." name="search" style="color:black; width:200px" >
              <button class="w3-hover-black" style="height: 35px;"  type="submit"><i class="fa fa-search"></i></button> -->
              <form class="searchBar" style="margin:auto;max-width:250px;z-index: 1;">
                <input type="text" id="searchInput" placeholder="Recherche....." name="search2">
                <button type="button" id="searchButton"style="width: 40px;"><i class="fa fa-search"></i></button>
            </form>
       </div>

      </div>
    </div>
  </div>
  </div>
  @include('projet-fin-etude/login')