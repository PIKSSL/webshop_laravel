<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="/../js/start.js" type="module"></script>
    <meta name="csrf-token" content=<?php $token = csrf_token(); echo $token; ?>>
    <title>György Krisztián</title>
</head>

<body>
    <main>
        <h1>Webshop</h1>
        <div class="products">

        </div>
    </main>
</body>

</html>