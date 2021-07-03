// $(document).ready(function(){
//      $(".partners").click(function(){
      // var idCurrent=$(this).attr('id');
      
      
//     });
// });

    function handle(){
      var w = window.outerWidth;
      var h = window.outerHeight;
      var mySidebar = document.getElementById("mySidebar");
      // alert("l'événement resize a été déclenché."+h+"  height  "+w);
      if(w>900){
        mySidebar.style.display = 'none';
        console.log("la taillle de la fenetre");
      }
      if(w<993)
        mySidebar.style.display = 'block';
      // return true;
    }    
    // function handle2(evnt){
    //   var w = window.outerWidth;
    //   var h = window.outerHeight;
    //   if(w<994){
    //     document.getElementById('footer').style.width="80%";
    //     console.log("jhdcgsfbffksjbfssbv width :"+h+"  height : "+w);
    //   }
    //   return true;
    // }
    window.addEventListener("resize",function(){
      handle();
      // console.log("la taillle de la fenetre");
    });
    // window.onresize = handle2;

function SendToServer(url,callback,id) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      callback(id,this.responseText);
    }
  };
  xhttp.open("GET", url, false);
  xhttp.send();
}
const callback = function(id,response){
   document.getElementById(id).innerHTML = response;
};


function DisplaySubsMenuBar() {
  var mySidebar = document.getElementById("mySidebar");
  // var overlayBg = document.getElementById("myOverlay");
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    // overlayBg.style.display = "none";
    mySidebar.style.width="20%";
  } else {
    mySidebar.style.display = 'block';
    // overlayBg.style.display = "block";
    mySidebar.style.width="60%";
  }
}

function HiddenSubsMenuBar() {
  var mySidebar = document.getElementById("mySidebar");
  // var overlayBg = document.getElementById("myOverlay");
  mySidebar.style.display = "none";
  // overlayBg.style.display = "none";
  mySidebar.style.width="20%";
}