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
        <form action="" method="post" class="d-flex align-items-center flex-column">
            <input type="submit" value="jouer" name="submit" class="btn btn-primary mt-3">
        </form>
        <?php
            if (isset($_POST['submit'])) {
                $joueur = rand(1,6);
                $ordi = rand(1,6);
                if ($joueur === $ordi) {
                    echo "<h2>égalité l'ordi a eu ".$ordi." et le joueur a eu ".$joueur."</h2>";
                }elseif ($joueur > $ordi) {
                    echo "<h2>Vous avez gagné l'ordi a eu ".$ordi." et le joueur a eu ".$joueur."</h2>";
                }else {
                    echo "<h2>Vous avez perdu l'ordi a eu ".$ordi." et le joueur a eu ".$joueur."</h2>";
                }
            }
        ?>
    </main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous" defer></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous" defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous" defer></script>
</body>
</html>