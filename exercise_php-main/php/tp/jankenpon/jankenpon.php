<?php
//fonction pour selectionner l'image a afficher ne fonction du choix
function selectImage($choix){
    $stone = "img/stone.png";
    $scissors = "img/scissors.png";
    $paper = "img/paper.png";

    switch ($choix) {
        case '0':
            return $stone;
            break;
        case '1':
            return $paper;
            break;
        case '2':
            return $scissors;
            break;
        default:
            return false;
            break;
    }
}

function winCondition($joueurChoix, $ordiChoix){
    if ($joueurChoix == $ordiChoix) {
        return "égalité";
    }elseif (($joueurChoix === "0" && $ordiChoix === 1) || ($joueurChoix === "1" && $ordiChoix === 2) || ($joueurChoix === "2" && $ordiChoix === 0)) {
        return "ordi win";
    }elseif (($joueurChoix === "1" && $ordiChoix === 0) || ($joueurChoix === "2" && $ordiChoix === 1) || ($joueurChoix === "0" && $ordiChoix === 2)) {
        return "joueur 1 win";
    }
}

/*
si le bouton submit est trigger et que le choix n'est pas le premier
car le premier cest juste le texte demandant de choisir pierre feuille ou ciseaux
*/
if (isset($_POST['submit']) && $_POST['joueurChoix'] != "3") {
    $joueur = $_POST['joueurChoix'];
    $ordi = rand(0,2);
    $srcJoueur = selectImage($joueur);
    $srcOrdi = selectImage($ordi);
}
?>
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
        <?php
        /*
        si le choix est  egale au premier alors on re precise de sleectionner autre chose
        sinon si le bouton est trigger et que le choix est different de celui de base alors
        on passe a la suite
        */
        ?>
        <section class="d-flex flex-row  justify-content-around w-100 mt-5">
        <?php
            if (isset($_POST['submit']) && $_POST['joueurChoix'] === "3") {
                ?><h2 class="mt-5">Veuillez choisir votre methode de combat</h2><?php
            }elseif (isset($_POST['submit']) && $_POST['joueurChoix'] < "3") {
                for ($i=0; $i <2 ; $i++) {?>
                    <div class="d-flex flex-column align-items-center">
                        <h2><?php echo ($i == 0)? "Joueur 1" : "Ordi"; ?></h2>
                        <img class="w-25 h-50" src="<?php echo ($i == 0)? $srcJoueur : $srcOrdi;  ?>" alt="image joueur">
                    </div>
                <?php
                }
        ?></section><?php
                ?><h2 class="mt-5 text-capitalize"><?php echo winCondition($joueur, $ordi) ?></h2><?php
            }elseif (isset($_POST['submit']) && ($srcJoueur === false || $srcOrdi === false) && isset($_POST['submit'])) {
                ?><h2 class="mt-5">Merci de ne pas modifier les valeurs du select 😑</h2><?php
            }
        ?>
        
    </main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous" defer></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous" defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous" defer></script>
</body>
</html>