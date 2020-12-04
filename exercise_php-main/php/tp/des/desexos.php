<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>les dés</title>
</head>
<body>
    <header class="text-center">
        <h1>Les dés</h1>
    </header>
    <main class="d-flex flex-column align-items-center">
        <!--submit = envoie . dans form il faut forceme retrouvr 'action' et 'method'-->
        <form action="" method="post" class="d-flex align-items-center flex-column"> 
            
        <!--'name' et 'id' noter la meme chose'-->
            <input type="submit" value="jouer" name="submit" class="btn btn-primary mt-3">
        </form>
        <?php
        /* rand : cest une onction qui permet de générer un nbr aléatoiret qui prend comme parametre un nbr mini et maxi */
        /* isset : verifier si une variable à été déclarer*/
        if (isset($_POST['submit'])){
            $joueur = rand(1,6);
            $numero = 4;
            $ordi = rand(1,6);
        if($joueur===$ordi){
            echo "égalité".$joueur."avec".$ordi ;
        }elseif ($joueur<$ordi) {
            echo "le joueur à jouer le numero".$joueur."alrs que l'ordi  jouer le numero".$ordi."donc vous avez perdu";
        }else{
            echo "vous avez joué le numero".$joueur."alors que l'ordi a joué le numero".$ordi."vous avez gagner";
        }          
    }




        ?>
        </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous" defer></script>
    </body>
    </html>