<!-- Créez une fonction “tri” qui prend en paramètres un tableau de nombres nommé
“numbers” et une variable “order” qui contient “asc” ou “desc”. A l’aide de la fonction
sort() d’un algorithme développé par vos soins, cette fonction doit trier le tableau dans
l’ordre ascendant ou décroissant, selon le paramètre passé, puis retourner le tableau. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job09</title>
    <script src='./script.js'></script>
</head>
<body>
    <script>
        let numbers = [3, 1, 4, 2, 5];
        let order = "asc";
        let result = tri(numbers, order);
        console.log(result);
    </script>
</body>
</html>