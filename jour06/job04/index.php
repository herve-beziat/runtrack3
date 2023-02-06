<!-- Reprenez vos fichiers index.html et style.css.
Ajoutez en haut de la page, un <header> qui contient une liste de trois liens :
● Accueil,
● Présentation,
● Contact.
Lorsque la résolution est inférieure ou égale à 767px : Les liens disparaissent pour
laisser place à un hamburger button. Lorsque l’on clique sur celui-ci, les liens
apparaissent. Si on re-clique, les liens disparaissent. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <script src="./script.js" defer></script>
    <title>job04</title>
</head>
<body>
    <header>
        <ul>
            <li>Accueil</li>
            <li>Présentation</li>
            <li>Contact</li>
        </ul>
    </header>

    <a href="#" id="openBtn">
    <span class="burger-icon">
        <span></span>
        <span></span>
        <span></span>
    </span>
    </a>   
    
</body>
</html>