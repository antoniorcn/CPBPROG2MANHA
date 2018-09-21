var p = document.getElementById("p1");
console.log("Elemento p1: ");
console.log(p);
console.log("Texto antigo do paragrafo: ");
console.log(p.innerHTML);
p.innerHTML = "Novo paragrafo 1";
console.log("Texto novo do paragrafo: ");
console.log(p.innerHTML);
