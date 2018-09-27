function mudarParagrafo() {
  var p = document.getElementById("p2");
  p.style = "color:red; font-size:200%";
  p.innerHTML += " Modificado por javascript";
}

function insereTabuada() {
  var p = document.getElementById("p3");
  var num = 7;
  p.innerHTML += "<br/>";
  for (var i = 1; i <= 10; i++) {
    var res = num * i;
    p.innerHTML += num  + " X " + i + " = " + res + " <br/>";
  }
}

function resetar() {
  var p2 = document.getElementById("p2");
  p2.innerHTML = "Meu segundo paragrafo";
  p2.style="";
  var p3 = document.getElementById("p3");
  p3.innerHTML = "Meu terceiro paragrafo";
}
