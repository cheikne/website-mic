
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

function LogoutUser(id_user){
    var date = new Date();
    var minu = date.getMinutes();
    var heure = date.getHours();
    var time  = heure+ ':'+minu;
    var url = "/Accueil/updateTableLog?id="+id_user+"&heure="+time;
    SendToServer(url,callback,false);
}

// setInterval(UserOnline, 5000);
//Pour les users qui sont en ligne
function UserOnline(){
    var url = "/Accueil/AllUserOnline";
    var id ='userOnline';
    SendToServer(url,callback,id);
    // console.log('La fonctions setInterval a chaque cinq secondes');

}
//Pour les users qui se sont deconnectes recemment
// setInterval(UserLogout, 6000);
function UserLogout(){
    var url ="/Accueil/UserLogoutRecent";
    SendToServer(url,callback,'user_logout');
    console.log('La fonctions setInterval a chaque cinq secondes');
}


//Implementation de la fonction pagination
function pagination(id,page,nbreId) {
   $(document).ready(function(){
    // var pageCurent = $("#"+page).text();
    // var pagenew = $("#"+id).txt();
    // var index;
    for(index=1;index<=nbreId;index++){
        if(index.toString() !=id){
            document.getElementById(index.toString()).style.display="none";
            // alert("id:"+index+"  page:"+page);
        }
    }
    document.getElementById(id).style.display="block";
    // $("#"+id).fadeIn();
});
}
//Implementation de la fonction des activites recentes Pour charger des donnees depuis BD

function getActiviteRecente(){
    var url ="/Accueil/Acces-Partenaire/getActiviteRecente";
    SendToServer(url,callback,'activite');
}
//Implementation de la fonction des activites recentes Pour charger des donnees depuis BD
function paginationActivite(id,page,nbreId){
    var index=1;
    for(index=1;index<=nbreId;index++){
        var check = "pag"+index;
        if( index!=id){
            document.getElementById(check).style.display="none";
            // alert("id:"+id+"  page:"+check);
        }
    }
    document.getElementById("pag"+id).style.display="block";
}

// Requete Ajax
function  SendToServer(url,callback,id) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        callback(this.responseText,id);
    }
  };
  xhttp.open("get", url, true);
  xhttp.send();
}
const callback = function(response,id){
    if(id){
         document.getElementById(id).innerHTML=response;
         // console.log(response);
     }
     else
        alert(response);
};

 UserOnline();
 UserLogout();
 getActiviteRecente();