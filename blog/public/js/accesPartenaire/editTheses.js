function ModificationThese(buttonEdit,edit,id_button){
	// event.preventDefault();
	$(document).ready(function(){
		const innerText = $("#"+edit).text();
		// alert(innerText);
		document.getElementById(edit).innerHTML=`<div class="form-group">
					  <textarea class="form-control" id='${edit+"1"}' rows="20" column='20' autofocus>${innerText}</textarea>
					</div>
			`;
		document.getElementById(buttonEdit).style.display="none";
		document.getElementById(id_button).style.display="block";
		document.getElementById(id_button+'1').style.display="block";

	});
	// $(document).ready(function(){
	// 	   $.ajax({
 //            type:"get",
 //            url:"modificationThese",
 //            data:{
 //                edit:edit,
 //                id:id
 //            },
 //            success:function(result){
 //            	alert(result);
 //                document.getElementById(edit).innerHTML=`
					// <div class="form-outline">
					//   <textarea class="form-control" id="textAreaExample2" rows="8" autofocus></textarea>
					//   <label class="form-label" >${result}</label>
					// </div>
					// <div class="form-outline">
					//   <textarea class="form-control" id="textAreaExample3" rows="2"></textarea>
					//   <label class="form-label" for="textAreaExample3">Message</label>
					// </div>`;
     //        }
 //       });
	// })
	// document.getElementById(edit).innerHTML=`<h1>je suis fort blablabla</h1>`;
}
var updateThese="";
var deleteThese="";
var ancien_heure="";
var new_heure="";
var id_u=-1;
var id_th=-1;
var is_insert="";
function UpdateThese(id,content,annuler,id_edit,id_these,id_user){
		$(document).ready(function(){
		const innerText = document.getElementById(content+"1").value;
		// alert(innerText);
		document.getElementById(content).innerHTML=innerText;
		// document.getElementById(id_edit+"1").style.backgroundColor="#E0FFFF";
		document.getElementById(id_edit).style.display="block";
		document.getElementById(id).style.display="none";
		document.getElementById(annuler).style.display="none";
		var date = new Date();
	    var minu = date.getMinutes();
	    var time = date.getHours();
	    var heure  = time+ ':'+minu;
		var day = date.getDate()
		var month = date.getMonth() + 1
		var year = date.getFullYear()
		var fulldate = year +"-"+month+ "-"+day;
	    // var x=0,delai=0;
	    // if(minu+2 >=60){
	    // 	x = (minu+1) -60;
	    // 	delai = time+2+":"+x;
	    // }else if(minu+1<60){
	    // 	var a = minu+2;
	    // 	delai = time +":"+a;
	    // }

	    id_u  = id_user;
	    new_heure = heure;
	    id_th = id_these;
		var url = "/Accueil/Acces-Partenaire/updateThese?id="+id_these+"&text="+innerText+"&attribut="+content+"&id_user="+id_user+"&new_heure="+new_heure+"&date="+fulldate;
		SendToServer(url,callbackUpdateThese,false);
		// if(id_th == id_these){
		// 	UpdateTheseInTableActivite(id,ancien_heure,new_heure);
		// 	clearTimeout(deleteThese);
		// 	deleteThese = setTimeout(function(){DeleteTheseInTableActivite(id,new_heure);},80000);
		// 	console.log("juste pour faire update");
		// }
		// else{
			
			// console.log("juste pour faire supprimer");
		// }
		// ancien_heure = heure;
	});
}


//Aller supprimer la modification une fois que le delai est termine
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
function UpdateTheseInTableActivite(id,ancien_heure,new_heure){
	var url = "/Accueil/Acces-Partenaire/UpdateTheseInTableActivite?id="+id+"&ancien_heure="+ancien_heure+"&new_heure="+new_heure;
	SendToServer(url,callback,false);
}


//Annuer Update de la these
function CancelUpdate(id_edit,id_cancel,content){
	$(document).ready(function(){
		const innerText = document.getElementById(content+"1").value;
		document.getElementById(content).innerHTML=innerText;
		document.getElementById(id_cancel).style.display="none";
		document.getElementById(id_cancel+'1').style.display="none";
		document.getElementById(id_edit).style.display="block";
	});
}

// $(document).ready(function(){
// 	$("#valeur_ajoute").focusout(()=>{
// 		const innerText = $("#valeur_ajoute").text();
// 		$("#valeur_ajoute").text(innerText);
// 	});
// });

// function LoadDataContentThese(id){
// 	$(document).ready(function(){
// 		   $.ajax({
//             type:"get",
//             url:"modificationThese",
//             data:{
//             	id:id
//             },
//             success:function(result){
//                 document.getElementById('contentThese').innerHTML=`${{  result }}`;
          
//             }
//        });
// 	});
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
const callback = function(response,id){
    if(id){
         document.getElementById(id).innerHTML=response;
         // alert(response);
     }
};
const callbackUpdateThese = function(response,id){
    if(response=="update"){
    	
        console.log(response);
        // document.getElementById(id).innerHTML=response;
         // alert(response);
     }
     else
        console.log(response);
};