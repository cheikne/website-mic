

<div class="w3-container">
<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:400px;border:2px solid white;border-radius: 10px;">
  
      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
        <h2>Login</h2>
      </div>

      <form class="w3-container">
        <div class="w3-section">
          <label><b>Email</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Email..." id="emailUser" required>
          <label><b>Mot de passe</b></label>
          <input class="w3-input w3-border" type="text" placeholder="Entrer Mot de Passe" id="pwd" required>
          <button class="w3-button w3-block w3-blue w3-section w3-padding" id="idconnexion" type="button">Connexion</button>
          <input class="w3-check w3-margin-top" type="checkbox"> Rappelle toi de moi
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
        <span class="w3-right w3-padding w3-hide-small"><a href="#">Mot de passe oublier</a></span>
      </div>

    </div>
  </div>
  <p id="error"></p>
</div>