<!-- Dans cet exercice, 6 images s’assemblent pour former un arc-en-ciel, il vous faudra les
mélanger puis les remettre en ordre.

Le but de ce job sera dans un premier temps de créer une balise <button>. Cette balise
servira à mélanger l’ensemble des images de l’arc-en-ciel.
Par la suite, vous devrez faire en sorte qu’il soit possible de remettre les images dans le
bon ordre, en utilisant un ou plusieurs conteneurs.
Une fois que les 6 images sont ordonnées, un message s’affiche en dessous :
Si l'arc-en-ciel est bien reconstitué, le message “Vous avez gagné” s’affiche en vert.
Sinon, le message “Vous avez perdu” s’affiche en rouge. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./script.js" defer></script>
    <title>job02</title>
</head>
<body>
    <button id="shuffle-button">Mélanger l'arc-en-ciel</button>
    <div id="container1" class="image-container"></div>
    <div id="container2" class="image-container"></div>
    <div id="container3" class="image-container"></div>
    <div id="container4" class="image-container"></div>
    <div id="container5" class="image-container"></div>
    <div id="container6" class="image-container"></div>
    
</body>
</html>