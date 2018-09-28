function modificaP1() {
  var p1 = document.getElementById("p1");
  p1.innerHTML = "Novo Paragrafo 3 modificado pelo JS";
  p1.style = "color:red; font-size:200%";
}

function resetar() {
  var p1 = document.getElementById("p1");
  p1.innerHTML = "Paragrafo 3";
  p1.style = "";
}
