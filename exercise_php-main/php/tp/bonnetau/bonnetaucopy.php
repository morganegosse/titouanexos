<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>le bonnetau</title>
</head>
<body>
    <header class="text-center">
        <h1>Le bonnetau</h1>
    </header>
    <main class="text-center">
        <form action="" method="post" class="d-flex justify-content-around mt-5">  
            <!-- post came retourne un tableau associatif  -->
            <input type="submit" value="gobelet 1" name="g1" class="btn btn-primary mt-3">
            <!-- mes'key' ce sont mes 'name' 'g1' -->
            <input type="submit" value="gobelet 2" name="g2" class="btn btn-primary mt-3">
            <input type="submit" value="gobelet 3" name="g3" class="btn btn-primary mt-3">
        </form>
        <h2 class="mt-5">Où est la balle</h2>
        <?php
        $ball = rand(1,3);

            if(isset($_POST["g1"])&& $ball === 1 || isset($_POST["g2"])&& $ball === 2 || isset($_POST["g3"]) && $ball === 3){
                echo "vous avez gagner";
            }elseif(isset($_POST["g1"]) && $ball != 1 || isset($_POST["g2"]) && $ball != 2 || isset($_POST["g3"]) && $ball != 3){ 
                echo "vous avez perduuu looooseeeeer";
            }

        ?>
    </main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous" defer></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous" defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous" defer></script>
</body>
</html>