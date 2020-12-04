<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/<?php echo $css ?>.css">
    <title>Exercise php 2</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img src="public/img/logo.svg" alt="logo" width="32" height="32">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?side=client">client</a>
                <!-- ? = je lui passe des parametres qui la va etre 'side' qu'on definis nous meme-->
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?side=admin">admin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?side=consigne">consigne</a>
            </li>
        </ul>
    </nav>
</header>

<main class="d-flex flex-column justify-content-center align-items-center">
    <h1 class="text-capitalize text-center">Station la pompeuse</h1>
    <h2 class="text-capitalize text-center">client</h2>
    <?php
       
        echo (isset($content))?$content:'';
        
        // include : quand besoin d'utiliser des données qui viennent du fichier   
    ?>
</main>

<script src="public/js/jquery-3.5.1.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous" defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous" defer></script>
</body>
</html>