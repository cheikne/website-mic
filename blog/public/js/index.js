$(document).ready(()=>{
    $("#header").load("Vue/html/header.html");
    $("#footer").load("Vue/html/footer.html");
 });
function DisplayMenuBar() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
    $(".parteners").on('click',function(){
      var idCurent=$(this).attr('id');
      console.log($(this).attr('id'));
      return idCurent;
    });
  // function idPartener(){
  //   $(".parteners").on('click',function(){
  //     var idCurent=$(this).attr('id');
  //     console.log($(this).attr('id'));
  //     return idCurent;
  //   });
  // }
}
