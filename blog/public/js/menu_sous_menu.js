document.getElementById("partenaire").addEventListener("mouseover",()=>{
    document.getElementById("sous_menu").style.display="block";
    document.getElementById("sous_menu").innerHTML=`
            <ul class="nav">
                <div>
                    <h2>Industrie et Application</h2>
                    <li><a href="#">Managem</a></li><br>
                    <li><a href="#">MascIR</a></li> <br>
                    <li><a href="#">Reminex</a></li>
               </div>
                <div>
                    <h2>Intitutions Academique</h2>
                    <li><a href="#">UCA</a></li><br>
                    <li><a href="#">ENSIAS</a></li><br>
                    <li><a href="#">CRNST</a></li><br>
                    <li><a href="#">ENIM</a></li>
                </div>
        </ul>

    `;
     document.getElementById("sous_menu").style.backgroundColor="grey";
  });
  document.getElementById("partenaire").addEventListener("focusout",()=>{
    document.getElementById("sous_menu").style.display="none";
  });