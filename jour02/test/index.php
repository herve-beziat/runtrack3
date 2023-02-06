<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <h1>The Document Object</h1>
    <h2>The querySelector() Method</h2>

    <p>Add a background color to the first element with class="example":</p>

    <p class="example">I am a paragraph.</p>
    <p class="example">I am a paragraph25.</p>

        <script>
            // document.querySelector(".example").style.backgroundColor = "red";
            $( document ).ready(function() {
                $(".example").style.backgroundColor = "red";
            });
        </script>
    
</body>
</html>