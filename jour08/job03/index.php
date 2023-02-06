<!-- Reprenez votre fichier index.php. Toujours sans utiliser de fichier css, ajouter des
classes tailwind à votre footer afin de le rendre coloré et aligné. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>job03</title>
</head>
<body class="m-0">
    <header class="bg-yellow-500">
        <nav class="relative container h-100">
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

    <footer class="bg-blue-400 h-24">
        <ul class="flex flex-wrap justify-items-center gap-20 text-red-800 font-bold">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="index.php">Connexion</a></li>
            <li><a href="index.php">Inscription</a></li>
            <li><a href="index.php">Rechercher</a></li>
        </ul>
    </footer>
</body>
</html>