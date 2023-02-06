let clic = document.getElementById("button");
let compteur = document.getElementById("compteur");

clic.addEventListener("click", addone);

function addone() {
    compteur.innerHTML = parseInt(compteur.innerHTML) + 1;
}

