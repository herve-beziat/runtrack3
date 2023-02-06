let article = document.createElement("article");
article.innerHTML = "L'important n'est pas la chute, mais l'atterrissage.";
let estVisible = false;

function showhide() {
  if (!estVisible) {
    document.body.appendChild(article);
    estVisible = true;
  } else {
    document.body.removeChild(article);
    estVisible = false;
  }
}