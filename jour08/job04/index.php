<!-- Reprenez votre fichier index.php. Toujours sans utiliser de fichier css, ajouter des
classes tailwind à votre footer afin de le rendre coloré et aligné. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>job04</title>
</head>
<body class="m-0">
    <header class="bg-yellow-500 h-24">
        <nav class="relative container">
            <ul  class="flex flex-wrap content-evenly gap-10" >
                <li><a href="index.php">Accueil</a></li>
                <li><a href="index.php">Connexion</a></li>
                <li><a href="index.php">Inscription</a></li>
                <li><a href="index.php">Rechercher</a></li>
            </ul>
        </nav>

    </header>

    <section class="w-[500px] my-0 mx-auto mt-[10%]">
        <form action="" method="post" class="w-full p-[30px] border border-solid border-gray-100 bg-white shadow-md[0_0_20px_0_rgba(0, 0, 0, 0.2)] shadow-lg[0_5px_5px_0_rgba(0, 0, 0, 0.24)]">
            <h1 class="my-0 mx-auto w-2/5 pb-2.5">Inscription</h1>

            <label>Civilité:</label>
            <input type="radio" name="gender" value="male" checked> Male
            <input type="radio" name="gender" value="female" > Female
            
            <label>Prénom:</label>
            <input type="text" name="firstname" class="inline-block w-full py-3 px-5 my-2 mx-0 border border-solid border-trueGray-300 box-border" required>
            
            <label>Nom:</label>
            <input type="text" name="lastname" class="inline-block w-full py-3 px-5 my-2 mx-0 border border-solid border-trueGray-300 box-border" required>
            
            <label>Adresse:</label>
            <input type="text" name="address" class="inline-block w-full py-3 px-5 my-2 mx-0 border border-solid border-trueGray-300 box-border" required>
            
            <label>Email:</label>
            <input type="email" name="email" class="inline-block w-full py-3 px-5 my-2 mx-0 border border-solid border-trueGray-300 box-border" required>
            
            <label>Mot de passe:</label>
            <input type="password" name="password" class="inline-block w-full py-3 px-5 my-2 mx-0 border border-solid border-trueGray-300 box-border" required>
            
            <label>Confirmez le mot de passe:</label>
            <input type="password" name="confirm_password" class="inline-block w-full py-3 px-5 my-2 mx-0 border border-solid border-trueGray-300 box-border" required>
            
            <label>Mes passions:</label>
            
            <input type="checkbox" name="passions[]" value="informatique"> Informatique
            <input type="checkbox" name="passions[]" value="voyages"> Voyages
            <input type="checkbox" name="passions[]" value="sport"> Sport
            <input type="checkbox" name="passions[]" value="lecture"> Lecture
            
            <input type="submit" value="Valider" class="bg-green-600 text-white py-3.5 px-5 my-2 mx-0 border-none cursor-pointer">
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