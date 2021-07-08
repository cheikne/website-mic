  <div class="w3-bar w3-blue-grey w3-top w3-left-align w3-large" style="height: 110px;">
    <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="DisplaySubsMenuBar()"><i class="fa fa-bars"></i></a>
    <div class="w3-display">
      <div>
        <a href="#" class="w3-bar-item w3-xxlarge w3-text-white" style="text-decoration: none;">Logo</a>
         <div class="search-container w3-bar-item w3-hide-small w3-hide-medium" style="margin-left:250px">
              <form class="searchBar" style="margin:auto;max-width:350px;z-index: 1;">
                <!-- <input type="text" id="searchInput" placeholder="Recherche....." name="search2"> -->
                <input type="text" id="searchInput" name="search" placeholder="Recherche ....">
                <button type="button" class="searchButton w3-grey"><i class="fa fa-search"></i></button>
            </form>
          </div>
      <div class="w3-right">
        <a href="#" class="w3-bar-item w3-button w3-hide-small" id="fonctionnalites">Acces Partenaires</a>
        <a href="#" class="w3-bar-item w3-button w3-hide-small" id="fonctionnalites">Anglais</a>
        <a href="/Accueil/Contact" class="w3-bar-item w3-button w3-hide-small" id="fonctionnalites">Contact</a>
      </div><br><br>
    </div>
      <div>
        <div style="margin-left:0px;" class="w3-right">
            <a href="/Accueil" class="w3-bar-item w3-button w3-hide-small w3-hover-yellow {{$is_home?'actives':''}}" id="header">
                Accueil
          </a>

          <a href="/Accueil/Partenaire-Projet" class="w3-bar-item w3-button w3-hide-small w3-hover-yellow {{$is_projetParteners?'actives':''}}" id="header">Partenaire du Projet</a>
          <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-yellow {{$is_realisation?'actives':''}}" id="header">Realisations</a>
          <a href="/Accueil/Evenements" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-yellow {{$is_event?'actives':''}}" id="header">Evenements</a>
          <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-yellow {{$is_research?'actives':''}}" id="header">Recherche Scientifique</a>
          <a href="/Accueil/Actualites" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-yellow {{$is_actu?'actives':''}}" id="header">Actualites</a>

          <div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
            <a href="#band" class="w3-bar-item w3-button w3-padding-large" onclick="DisplaySubsMenuBar()">BAND</a>
            <a href="#tour" class="w3-bar-item w3-button w3-padding-large" onclick="DisplaySubsMenuBar()">TOUR</a>
            <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="DisplaySubsMenuBar()">CONTACT</a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="DisplaySubsMenuBar()">MERCH</a>
          </div>

      </div>
    </div>
  </div>
  </div>
  <style type="text/css">
  .actives{
  background-color: blue;
  color: black;
}
</style>