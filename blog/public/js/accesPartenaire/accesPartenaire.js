
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

setInterval(UserOnline, 5000);
//Pour les users qui sont en ligne
function UserOnline(){
    var url = "/Accueil/AllUserOnline";
    var id ='userOnline';
    SendToServer(url,callback,id);
    // console.log('La fonctions setInterval a chaque cinq secondes');

}
//Pour les users qui se sont deconnectes recemment
var setIntervalUserLogout = setInterval(UserLogout, 15000);
var is_recharge="oui";
var compteur=0;
var nbreEnregist=-1;
function UserLogout(){
    var url ="/Accueil/UserLogoutRecent?is_recharge="+is_recharge+"&compteur="+compteur+"&nbreEnregist="+nbreEnregist;
    SendToServer(url,callback,'user_logout');
    compteur =1;
    is_recharge='non';
    // if(nbreEnregist !=-1)
     // document.getElementById('nbrEnr').click();
    // console.log('La fonctions setInterval a chaque cinq secondes');
}
//Get le nombre d'enregistrement 
// function getNombreEnregistrem(nbr){
//     nbreEnregist=nbr;
    // alert("nbre"+nbr);
// }


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
    if(id != 1)
        clearInterval(setIntervalUserLogout);
    if(id == 1)
        setIntervalUserLogout = setInterval(UserLogout, 15000);
    // $("#"+id).fadeIn();
});
}


//Implementation de la fonction des activites recentes Pour charger des donnees depuis BD
var setIntervalActivite = setInterval(getActiviteRecente,40000);
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
     if(id != 'pag1')
        clearInterval(setIntervalUserLogout);
    if(id == 'pag1')
        setIntervalUserLogout = setInterval(UserLogout, 15000);
}

//Recharger les personnes les nouvelles personnes qui se sont recemment deconnecter
function RechargerUserLogout(){
    is_recharge='oui';
    compteur =1;
     var url ="/Accueil/UserLogoutRecent?is_recharge="+is_recharge+"&compteur="+compteur+"&nbreEnregist="+nbreEnregist;
    SendToServer(url,callback,'user_logout');
    is_recharge='non';
    // document.getElementById('nbrEnr').click();

}
function HideButtonCharge() {
    document.getElementById('is_recharge').style.display="none";
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
var hideButtonCharge="";
const callback = function(response,id){
    if(id){
        if(response =='estConfirme'){
            document.getElementById('is_recharge').style.display="block";
            document.getElementById('is_recharge').style.color="#E0FFFF";
            hideButtonCharge = setTimeout(HideButtonCharge,20000);
        }else if(response=='rien_a_charger'){
            console.log(response);
        }else{
         document.getElementById(id).innerHTML=response;
         // console.log(response);
        // alert(response);
        }
     }
     else
        alert(response);
};

 UserOnline();
 UserLogout();
 getActiviteRecente();