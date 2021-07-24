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
var id="";
var id_th=0;
var is_insert="";
function UpdateThese(id,content,annuler,id_edit,id_these,id_user){
		$(document).ready(function(){
		const innerText = document.getElementById(content+"1").value;
		// alert(innerText);
		document.getElementById(content).innerHTML=innerText;
		document.getElementById(id_edit+"1").style.backgroundColor="#E0FFFF";
		document.getElementById(id_edit).style.display="block";
		document.getElementById(id).style.display="none";
		document.getElementById(annuler).style.display="none";
		var date = new Date();
	    var minu = date.getMinutes();
	    var heure = date.getHours();
	    var heure  = heure+ ':'+minu;
	    id  = id_user;
	    new_heure = heure;
	    if(id_th == id_these){
	    	is_insert = "non";
	    }else{
	    	is_insert ="oui";
	    }
		var url = "/Accueil/Acces-Partenaire/updateThese?id="+id_these+"&text="+innerText+"&attribut="+content+"&id_user="+id_user+"&heure="+heure+"&is_insert="+is_insert;
		SendToServer(url,callback,false);
		if(id_th == id_these){
			UpdateTheseInTableActivite(id,ancien_heure,new_heure);
			clearTimeout(deleteThese);
			deleteThese = setTimeout(function(){DeleteTheseInTableActivite(id,new_heure);},80000);
			console.log("juste pour faire update");
		}
		else{
			deleteThese = setTimeout(function(){DeleteTheseInTableActivite(id,new_heure);},80000);
			console.log("juste pour faire supprimer");
		}
		id_th = id_these;
		ancien_heure = heure;
	});
}


//Aller supprimer la modification une fois que le delai est termine
function DeleteTheseInTableActivite(id,heure){
	var url = "/Accueil/Acces-Partenaire/DeleteTheseInTableActivite?id="+id+"&heure="+heure;
	SendToServer(url,callback,false);
	alert("ffffffffffffffffffffff"+id);
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
     else
        alert(response);
};