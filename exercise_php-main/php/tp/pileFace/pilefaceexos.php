<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Pile ou face</title>
</head>
<body>
    <header class="text-center">
        <h1>Pile ou Face</h1>
    </header>
    <main class="d-flex flex-column align-items-center">
        <form action="" method="post" class="d-flex flex-column align-items-center">
            <div class="d-flex flex-row align-items-center">
                <select class="custom-select" name="joueurChoix">
                    <option selected value="3">Choose your side</option>
                    <option value="1">pile</option>
                    <option value="2">face</option>
                </select>
                <input type="submit" value="Défier" name="playerSelect" class="btn btn-primary mt-3">
            </div>

            <input type="submit" value="Laisser l'ordi choisir" name="ordiSelect" class="btn btn-primary mt-5">    
             <!-- submit cré ton bouton et name sur le bouton     -->
        </form>
        <?php
        

          if (isset($_POST["playerSelect"])){
            $choixjoueur=$_POST["joueurChoix"]; /* comprend tout mon bloc 'select'*/ /*clef:'joueurChoix' => valeur "1" ou "0"*/
              echo $choixjoueur; 
              $piece=rand(1,2);
             if ($choixjoueur==$piece){
                echo "vous avez gagner"; ?>
                <!-- ternaire    : si piece = 1 alors(?) img pile si non ( :) img face  -->
                <img src="<?php echo ($piece===1)?"img/pile.png":"img/face.png"?>" alt="images"> 
                <?php 
            }else {
                echo "vous avez perdu".$piece; ?>
                <img src="<?php echo ($piece===1)?"img/pile.png":"img/face.png"?>" alt="images"> 
                <?php
            }            
          }
         /* formulaire = $_post[
            "champ1" => valeur,
            "champ2" => valeur
          ]*/
                          
        ?>
    </main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous" defer></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous" defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous" defer></script>
</body>
</html>