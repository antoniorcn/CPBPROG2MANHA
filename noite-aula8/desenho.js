var canvas = document.getElementById("canvas");
var ctx = canvas.getContext("2d");
var img = new Image();
var audio = new Audio();
audio.src = "vaca.mp3";
ctx.fillStyle = "#FF0000";
ctx.fillRect(100, 200, 400, 200);

ctx.strokeStyle = "#000000";
ctx.rect(0, 0, 800, 600);
ctx.stroke();

ctx.beginPath();
// ctx.scale(0.5,0.5);
ctx.moveTo(0, 0);
ctx.lineTo(800, 600);
ctx.stroke();

var grd=ctx.createLinearGradient(500,300,800,300);
grd.addColorStop(0,"red");
grd.addColorStop(1,"blue");

ctx.fillStyle=grd;
ctx.fillRect(500,100,300,200);

canvas.addEventListener("click", processaMouse, false);




function carregaVaca() {
  img.src = "vaca.jpg";
}

function drawVaca() {
  ctx.drawImage(img, 0, 0, 1024, 703, 0, 0, 100, 70);
}

function processaMouse( e ) {
  //console.log("Clicado");
  //console.log( e );
  if ( (e.offsetX > 0 && e.offsetX < 100) &&
       (e.offsetY > 0 && e.offsetY < 70) ) {
        console.log("Clicou na vaca");
        audio.play();
  }
}
