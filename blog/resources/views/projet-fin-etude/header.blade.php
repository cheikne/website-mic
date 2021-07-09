  <div class="w3-bar w3-blue-grey w3-top w3-left-align w3-large" style="height: 110px;">
    <a class="w3-bar-item w3-button w3-right w3-hover-white w3-hide-medium w3-hide-large" href="javascript:void(0)" onclick="DisplaySubsMenuBar()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <div class="w3-display">
      <div>
        <a href="#" class="w3-bar-item w3-xxlarge w3-text-white" style="text-decoration: none;">Logo</a>
         <!-- <div class="search-container w3-bar-item w3-hide-small w3-hide-medium" style="margin-left:250px">
              <form class="searchBar" style="margin:auto;max-width:350px;z-index: 1;">
                <input type="text" id="searchInput" name="search" placeholder="Recherche ....">
                <button type="button" class="searchButton w3-grey"><i class="fa fa-search"></i></button>
            </form>
          </div> -->
            <div class="chat-search-box" id="contentSearch">
            <div class="input-group">
                <input class="form-control" placeholder="Search">
                <div class="input-group-btn">
                    <button type="button" class="btn btn-info">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
          </div>
      <div class="w3-right">
        <a href="#" class="w3-bar-item w3-button w3-hide-small" id="fonctionnalites">Acces Partenaires</a>
        <a href="#" class="w3-bar-item w3-button w3-hide-small" id="fonctionnalites">Anglais</a>
        <a href="/Accueil/Contact" class="w3-bar-item w3-button w3-hide-small" id="fonctionnalites">Contact</a>
      </div><br><br>
    </div>
      <div>
        <div style="margin-left:0px;" class="w3-right">
            <a href="/Accueil" class="w3-bar-item w3-button w3-hide-small w3-hover-light-grey {{$is_home?'actives':''}}" id="header">
                Accueil
          </a>

          <a href="/Accueil/Partenaire-Projet" class="w3-bar-item w3-button w3-hide-small w3-hover-light-grey {{$is_projetParteners?'actives':''}}" id="header">Partenaire du Projet</a>
          <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-light-grey {{$is_realisation?'actives':''}}" id="header">Realisations</a>
          <a href="/Accueil/Evenements" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-light-grey {{$is_event?'actives':''}}" id="header">Evenements</a>
          <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-light-grey {{$is_research?'actives':''}}" id="header">Recherche Scientifique</a>
          <a href="/Accueil/Actualites" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-light-grey {{$is_actu?'actives':''}}" id="header">Actualites</a>

      </div>
    </div>
  </div>
  </div>
    <div id="navDemo" class="w3-bar-block w3-light-blue w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:106px">
            <a href="#band" class="w3-bar-item w3-button w3-padding-large" onclick="DisplaySubsMenuBar()">Accueil</a>
            <div>
              <div id="subsMenuPartners">
                <a href="#tour" class="w3-bar-item w3-button w3-padding-large" onclick="DisplaySubsMenuBar()">Partenaire du Projet</a>
              </div>
              <div id="DisplaySubsMenuPartners" class="w3-hide"></div>
            </div> 
            <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="DisplaySubsMenuBar()">Realisations</a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="DisplaySubsMenuBar()">Evenements</a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="DisplaySubsMenuBar()">Recherche Scientifique</a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="DisplaySubsMenuBar()">Actualites</a>
          </div>
  <style type="text/css">
  .actives{
  background-color:     #87CEFA;
  color: black;
}
</style>