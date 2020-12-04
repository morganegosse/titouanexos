<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>jankenpon</title>
</head>
<body>
    <header class="mb-5 text-center text-capitalize">
        <h1>pierre feuille ciseaux</h1>
    </header>
    <main class="d-flex flex-column align-items-center">
        <form action="#" method="post" class="d-flex flex-column w-25 align-items-center">
            <select class="custom-select" name="joueurChoix">
                <option selected value="3">Choose your weapon</option>
                <option value="0">pierre</option>
                <option value="1">feuille</option>
                <option value="2">ciseaux</option>
            </select>
            <input type="submit" value="valider" name="submit" class="btn btn-primary mt-3">
        </form>
        
        <section class="d-flex flex-row  justify-content-around w-100 mt-5">
       <?php
        include_once("function.php");
        // pour relier la pagede ma foncion. include = inclu un fichier noramlement. include-once =je peux l'appeler qu'une seul fois dans mon projet
        if (isset($_POST['submit'])) {
            $choix = $_POST['joueurChoix'];
            $ordi = rand(0,2);
            // echo $choix."choix du joueur".$ordi."choix de l'ordi" ;
            // concaténation
            echo"<img src=\"".image($ordi)."\" alt=\"\">";
            echo"<img src=\"".image($choix)."\" alt=\"\">";
            gagnantPerdant($choix,$ordi);
        }
?>     
 
    </main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous" defer></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous" defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous" defer></script>
</body>
</html>