$(document).ready(function(){
  $("#displayPlusActu").click(function(){
    $("#plusActualtes").slideToggle("slow");
  });
   $("#displayPlusActuReminex").click(function(){
    $("#plusActualtesReminex").slideToggle("slow");
  });
   $("#displayPlusActuMascir").click(function(){
    $("#plusActualtesMascir").slideToggle("slow");
  });
   $("#displayPlusActuUCA").click(function(){
    $("#plusActualtesUCA").slideToggle("slow");
  });
   $("#displayPlusActuENIM").click(function(){
    $("#plusActualtesENIM").slideToggle("slow");
  });
   $("#displayPlusActuENSIAS").click(function(){
    $("#plusActualtesENSIAS").slideToggle("slow");
  });
   $("#displayPlusActuCNRST").click(function(){
    $("#plusActualtesCNRST").slideToggle("slow");
  });
});
$(".hover").mouseleave(
  function () {
    $(this).removeClass("hover");
  }
);

function displayActu(id,titre){
  $(document).ready(function(){
    var innerText = $("#"+id).text();
    var titreActu = $("#"+titre).text();
    $("#resume_actu").html(`
      <h2 class="w3-text-blue">${titreActu}</h2>
      <div class="w3-justify"  style="width:90%;">
        <p>${innerText}</p>
      </div>
      `);
  });
}