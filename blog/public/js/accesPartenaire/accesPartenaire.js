
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
    var x=0,delai=0;
    if(minu+1>=60){
        x = (minu+1)-60;
        var b= heure+1;
        delai = b+":"+x;
    }else{
        var a = minu+1;
        delai = heure+":"+a+":"+"00";
    }
    var url = "/Accueil/updateTableLog?id="+id_user+"&heure="+time+"&delai="+delai;
    SendToServer(url,callback,false);
    alert(delai);
   
}

setInterval(UserOnline, 7000);
//Pour les users qui sont en ligne
var is_rechargeOnline="oui";
function UserOnline(){
    var url = "/Accueil/AllUserOnline?is_recharge="+is_rechargeOnline;
    var id ='userOnline';
    SendToServer(url,callback4,id);
    is_rechargeOnline="non";
    console.log('La fonctions setInterval a chaque cinq secondes online');

}

////////////////////////////////////////////////////////////////////
function RechargeUserOnline(){
    var x="oui";
    var url = "/Accueil/AllUserOnline?is_recharge="+x;
    var id ='userOnline';
    SendToServer(url,callback,id);
    // console.log('La fonctions re- setInterval a chaque cinq secondes');

}
////////////////////////////////////////////////////////////////////
//Pour les users qui se sont deconnectes recemment
var setIntervalUserLogout = setInterval(UserLogout, 5000);
var is_recharge="oui";
var compteur=0;
var nbreEnregist=-1;
function UserLogout(){
    var date = new Date();
    var minu = date.getMinutes();
    var heure = date.getHours();
    var time  = "0"+heure+":"+minu+":"+"00";
     // alert("je suis dans le user logout"+time);
    var url ="/Accueil/UserLogoutRecent?is_recharge="+is_recharge+"&compteur="+compteur+"&nbreEnregist="+nbreEnregist+"&time="+time;
    SendToServer(url,callback2,'user_logout');
    compteur =1;
    if(is_recharge =="non")
     document.getElementById('nbrEnr').click();
    is_recharge='non';
    // console.log('La fonctions setInterval pour logout  a chaque cinq secondes');
}
//Get le nombre d'enregistrement 
function getNbreEnregtActivite(nbr){
    nbreEnregistActivite = nbr;
}
function getNombreEnregistrem(nbr){
    nbreEnregist=nbr;
    // alert("nbre"+nbr);
}
// Recharger les personnes les nouvelles personnes qui se sont recemment deconnecter
function RechargerUserLogout(){
    var x='oui';
    compteur =1;
     var url ="/Accueil/UserLogoutRecent?is_recharge="+x+"&compteur="+compteur+"&nbreEnregist="+nbreEnregist;
    SendToServer(url,callback,'user_logout');
    // if(is_recharge=="non")
    //     document.getElementById('nbrEnr').click();
    //  document.getElementById('is_recharge').style.display="none";
    console.log('La fonctions RechargerUserLogout');

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
var setIntervalActivite = setInterval(getActiviteRecente,5000);
var is_rechargeActivite="oui";
var nbreEnregistActivite=-1;
function getActiviteRecente(){
    var url ="/Accueil/Acces-Partenaire/getActiviteRecente?is_recharge="+is_rechargeActivite+"&nbreEnregist="+nbreEnregistActivite;
    SendToServer(url,callback3,'activite');
    if(is_rechargeActivite=="non")
        document.getElementById('nbrEnrActivite').click();
    is_rechargeActivite='non';
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

// function HideButtonCharge() {
//     document.getElementById('is_recharge').style.display="none";
//     setIntervalUserLogout = setInterval(UserLogout,15000);
// }
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
          document.getElementById(id).innerHTML=response;
         // console.log(response);
        // alert(response);
     }
     // else
        // alert(response);
};
////////////////////////////////////////////////
const callback4 = function(response,id){
    if(id){
        // if(response=="sup" || response=="inf"){
        //     RechargeUserOnline();
        // }else if(response !="egaux")
          document.getElementById(id).innerHTML=response;
         // console.log(response);
        // alert(response);
     }
     // else
        // alert(response);
};

const callback2 = function(response,id){
    if(response =='egaux'){
        // document.getElementById('is_recharge').style.display="block";
        // document.getElementById('is_recharge').style.color="#E0FFFF";
        // clearInterval(setIntervalUserLogout);
        // hideButtonCharge = setTimeout(HideButtonCharge,80000);
        console.log(response);
    }else{
       RechargerUserLogout();
    }
};
const callback3 = function(response,id){
    if(response=="egaux"){
        console.log(response);
    }else if(response=="sup" || response =="inf"){
        document.getElementById('nbrEnrActivite').click();
        is_rechargeActivite="oui";
        getActiviteRecente();
    }else{
        var res = response;
        document.getElementById(id).innerHTML=res;
    }
};

 UserOnline();
 UserLogout();
 getActiviteRecente();

 deleteThese = setInterval(function(){DeleteTheseInTableActivite();},5000);
function DeleteTheseInTableActivite(){
    var date = new Date();
    var minu = date.getMinutes();
    var time = date.getHours();
    var heure  = time+ ':'+minu+":"+"00";
    var url = "/Accueil/Acces-Partenaire/DeleteTheseInTableActivite?heure="+heure;
    SendToServer(url,callback,false);
    // alert("ffffffffffffffffffffff"+id);
}