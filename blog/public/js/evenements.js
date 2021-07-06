
function PlayVideos() {
  var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");

  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}
