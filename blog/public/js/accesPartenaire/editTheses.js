function ModificationThese(event,edit,id_button){
	// event.preventDefault();
	$(document).ready(function(){
		const innerText = $("#"+edit).text();
		// alert(innerText);
		document.getElementById(edit).innerHTML=`<div class="form-outline">
					  <textarea class="form-control" id='${edit}' rows="15" column='20' autofocus>${innerText}</textarea>
					</div>
			`;
		$("#"+id_button).style.display="block";

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

function LogoutUser(id_user){
	alert("fjjjjjjjjjjjjjjjjjjjjjjj"+id_user);
	var date = new Date();
 	var minu = date.getMinutes();
    var heure = date.getHours();
    var time  = heure+":"+minu;
	$(document).ready(function(){
	   $.ajax({
        type:"get",
        url:"updateTableLog",
        data:{
        	id:id_user,
        	time:time
        }
   ,success : function(){
   	alert("aaaaaaaaaaaaaaaaaaaaaaa");
   }});
});

}