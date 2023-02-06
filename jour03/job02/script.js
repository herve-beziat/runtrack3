// Dans cet exercice, 6 images s’assemblent pour former un arc-en-ciel, il vous faudra les
// mélanger puis les remettre en ordre.

// Le but de ce job sera dans un premier temps de créer une balise <button>. Cette balise
// servira à mélanger l’ensemble des images de l’arc-en-ciel.
// Par la suite, vous devrez faire en sorte qu’il soit possible de remettre les images dans le
// bon ordre, en utilisant un ou plusieurs conteneurs.
// Une fois que les 6 images sont ordonnées, un message s’affiche en dessous :
// Si l'arc-en-ciel est bien reconstitué, le message “Vous avez gagné” s’affiche en vert.
// Sinon, le message “Vous avez perdu” s’affiche en rouge.

// Récupère le bouton pour mélanger les images
let shuffleButton = document.getElementById("shuffle-button");

// Récupère les conteneurs pour les images
let imageContainers = document.querySelectorAll(".image-container");

// Tableau d'images de l'arc-en-ciel
const rainbowImages = ["image1.jpg", "image2.jpg", "image3.jpg", "image4.jpg", "image5.jpg", "image6.jpg"];

