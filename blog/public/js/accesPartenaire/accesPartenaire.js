
$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
});

 var email;
 var pwd;
$(document).ready(function () {
$('#idconnexion').click(function () {
    try{
      email=document.getElementById("emailUser").value;
      pwd=document.getElementById("pwd").value;
      var url="CheckLoginUser?email="+email+"&pwd="+pwd;
       // SendToServer(url,callback);
       $.ajax({
            type:"get",
            url:"CheckLoginUser",
            data:{
                email:email,
                pwd:pwd
            },
            success:function(result){
                if(result!='checked'){
                    alert("Mot de passe ou email Incorrecte !!!");
                }else{
                    window.location.href="/Accueil/Acces-Partenaire";
                }
            }
       });
       }catch(error){
        console.log("Erreur = "+error);
    }
     });
});
// function Connection(){
//     console.log("salut tout monde");
// }

// function SendToServer(url,callback) {
    
//   var xhttp = new XMLHttpRequest();
//   xhttp.onreadystatechange = function() {
//     if (this.readyState == 4 && this.status == 200) {
//       callback(this.responseText);
//     }
//   };
//   xhttp.open("POST", url, true);
//   xhttp.send();
// }
// const callback = function(response){
//     alert(response);
//    document.getElementById("error").innerHTML = response;
// };