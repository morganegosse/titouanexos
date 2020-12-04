<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>PHP basic</title>
</head>
<body>
<header>
    <nav class="nav">
        <a class="nav-link text-capitalize" href="../condition/condition.php">condition</a>
        <a class="nav-link text-capitalize" href="../loop/loop.php">loop</a>
        <a class="nav-link text-capitalize" href="array.php">array</a>
        <a class="nav-link text-capitalize" href="../index.php">home</a>
    </nav>
</header>
<main>
    <div class="row mt-5">
        <div class="col-4">
            <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action" data-toggle="list" href="#exo1" role="tab" aria-controls="home">exo 1</a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="#exo2" role="tab" aria-controls="profile">exo 2</a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="#exo3" role="tab" aria-controls="messages">exo 3</a>
            </div>
        </div>
        <div class="col-8">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="exo1" role="tabpanel" aria-labelledby="list-home-list">
                    <div class="card">
                        <h5 class="card-header text-capitalize">exo 1</h5>
                        <div class="card-body">
                            <h5 class="card-title">Sécurité avant tout préambule</h5>
                            <p class="card-text w-75">Vous etes informaticien dans une société spécialisé dans la sécurité informatique et
                            votre mission consiste a tester la sécurité des données </p>
                            <h5 class="mt-5">Consigne</h5>
                            <p class="card-text w-75"> Votre premier test porte sur les valeurs d'un tableau a afficher,
                                pour cela vous allez devoir afficher une valeur générer par un programme deja fait et verifier
                                son intégrité avec l'index 3 correspondent. pour coder
                                rendez vous dans le dossier du projet dans array/exo1.php</p>

                            <h5 class="mt-5">valeur a disposition</h5>
                            <ul>
                                <li>le tableau contenant les valeurs -> $array</li>
                                <li>le programme préfait qui genere la valeur -> $value</li>
                            </ul>

                            <h5 class="mt-5">retour attendu</h5>
                            <p>si correct "correct <em>valeur du tableau</em>" si incorrect "incorrect <em>valeur attendu</em> != <em>valeur dans le tableau</em></p>

                            <h5 class="mt-5">votre resultat</h5>
                            <?php require_once 'exo1.php' ?>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="exo2" role="tabpanel" aria-labelledby="list-profile-list">
                    <div class="card">
                        <h5 class="card-header text-capitalize">exo 2</h5>
                        <div class="card-body">
                            <h5>Consigne</h5>
                            <p class="card-text w-75">Une modification a été apporté au tableau, ce dernier s'est vu rajouter des clés afin d'identifier de quel
                                partie provenait chaque chiffre. vous devez desormais verifier pour la valeur dont la clé est "receveur" si le chiffre correspond a celui de
                                "envoyeur". pour coder rendez vous dans le dossier du projet dans array/exo2.php</p>

                            <h5 class="mt-5">valeur a disposition</h5>
                            <ul>
                                <li>le tableau des données -> $array</li>
                                <li>la valeur de l'envoyeur -> $envoyeur</li>
                                <li>la valeur du receveur -> $receveur</li>
                            </ul>

                            <h5 class="mt-5">retour attendu pour chaque année</h5>
                            <p>si correspond "correct la valeur est <em>afficher la valeur grâce a la clé</em> si c'est incorrect "incorrect valeur attendu <em>valeur du receveur</em> != <em>valeur de l'envoyeur</em></p>

                            <h5 class="mt-5">votre resultat</h5>
                            <?php require_once 'exo2.php' ?>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="exo3" role="tabpanel" aria-labelledby="list-messages-list">
                    <div class="card">
                        <h5 class="card-header text-capitalize">exo 3</h5>
                        <div class="card-body">
                            <h5>Consigne</h5>
                            <p class="card-text w-75">Votre resposnable vous dit desormais que c'est possible que les index receveur
                                et envoyeur n'existe pas, vous devez trouvez un moyen de vérifiez que lorsque on tombe sur l'index receveur ou
                                envoyeur si la valeur correspond avec celle attendu par le code de test. on part du principe que
                                si l'index receveur existe l'index envoyeur existe forcement. pour coder rendez vous dans le dossier du projet dans array/exo3.php</p>

                            <h5 class="mt-5">valeur a disposition</h5>
                            <ul>
                                <li>le tableau des données -> $array</li>
                                <li>le tableau des données sans les bons index pour tester le code-> $arrayFalse</li>
                                <li>la valeur de l'envoyeur -> $envoyeur</li>
                                <li>la valeur du receveur -> $receveur</li>
                                <li>le code a verifier -> $codeTest</li>
                            </ul>

                            <h5 class="mt-5">retour attendu pour chaque année</h5>
                            <p>l'archive date de <em> date de l'archive</em> ou alors si il n'y en a pas <em>aucune archive en date de depart</em></p>

                            <h5 class="mt-5">votre resultat</h5>
                            <?php require_once 'exo3.php' ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous" defer></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous" defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous" defer></script>
</body>
</html>