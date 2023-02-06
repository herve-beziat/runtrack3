<!-- Créez un fichier index.php contenant les balises html de base (doctype, html, head,
body). Dans votre body, créez un header avec une navigation et un footer contenant une
liste de quatre liens (Accueil, Inscription, Connexion et Rechercher). Ils doivent tous
pointer vers votre page index.php.

Ajoutez une section avec un formulaire de création de compte contenant :
● Des inputs radios pour la civilité
● Des inputs de type text pour prénom, nom et adresse
● Des inputs de type email pour l’adresse email
● Des inputs de type password pour le password et sa validation
● Des checkbox pour choisir ses passions (informatique, voyages, sport, lecture)
● Un bouton pour valider le formulaire -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>job02</title>
</head>
<body class="m-0">
    <header class="bg-yellow-500 h-32">
        <nav class="relative container">
            <ul  class="flex flex-wrap content-evenly gap-10" >
                <li><a href="index.php">Accueil</a></li>
                <li><a href="index.php">Connexion</a></li>
                <li><a href="index.php">Inscription</a></li>
                <li><a href="index.php">Rechercher</a></li>
            </ul>
        </nav>

    </header>

    <section>
        <form action="" method="post">
                <label>Civilité:</label>
                <input type="radio" name="gender" value="male" checked> Male
                <input type="radio" name="gender" value="female"> Female
            <br>
                <label>Prénom:</label>
                <input type="text" name="firstname" required>
            <br>
                <label>Nom:</label>
                <input type="text" name="lastname" required>
            <br>
                <label>Adresse:</label>
                <input type="text" name="address" required>
            <br>
                <label>Email:</label>
                <input type="email" name="email" required>
            <br>
                <label>Mot de passe:</label>
                <input type="password" name="password" required>
            <br>
                <label>Confirmez le mot de passe:</label>
                <input type="password" name="confirm_password" required>
            <br>
                <label>Mes passions:</label>
            <br>
                <input type="checkbox" name="passions[]" value="informatique"> Informatique
                <input type="checkbox" name="passions[]" value="voyages"> Voyages
                <input type="checkbox" name="passions[]" value="sport"> Sport
                <input type="checkbox" name="passions[]" value="lecture"> Lecture
            <br>
                <input type="submit" value="Valider">
        </form>



    </section>

    <footer>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="index.php">Connexion</a></li>
            <li><a href="index.php">Inscription</a></li>
            <li><a href="index.php">Rechercher</a></li>
        </ul>
    </footer>
</body>
</html>