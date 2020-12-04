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
            <a class="nav-link text-capitalize" href="condition.php">condition</a>
            <a class="nav-link text-capitalize" href="../loop/loop.php">loop</a>
            <a class="nav-link text-capitalize" href="../array/array.php">array</a>
            <a class="nav-link text-capitalize" href="../index.php">home</a>
        </nav>
    </header>
    <main>
        <div class="row mt-5">
            <div class="col-4">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" data-toggle="list" href="#exo1" role="tab" aria-controls="home">exo 1</a>
                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#exo2" role="tab" aria-controls="profile">exo 2</a>
                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#exo3" role="tab" aria-controls="messages">exo 3</a>
                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#exo4" role="tab" aria-controls="settings">exo 4</a>
                </div>
            </div>
            <div class="col-8">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="exo1" role="tabpanel" aria-labelledby="list-home-list">
                        <div class="card">
                            <h5 class="card-header text-capitalize">exo 1</h5>
                            <div class="card-body">
                                <h5 class="card-title">Office de tourisme</h5>
                                <p class="card-text w-75">Vous etes prestataire pour un office de tourisme et votre mission est développé une application
                                    permettant à l'accueil de rediriger les touristes venant se renseigner. Pour ce faire vous allez devoir passer par
                                    plusieurs étapes pour arriver au résultat final de l'application</p>
                                <h5 class="mt-5">Consigne</h5>
                                <p class="card-text w-75"> Pour créer votre application vous devez savoir si un touriste est étranger ou francais
                                dans le but de le rediriger vers la bonne hôtesse d'accueil, celle qui peut traduire pour les etranger ou celle qui parle uniquement francais
                                pour les touristes francais. pour coder rendez vous dans le dossier du projet dans condition/exo1.php</p>

                                <h5 class="mt-5">valeur a disposition</h5>
                                <ul>
                                    <li>la personne pouvant contenir 1 ou 2 pour un francais ou un etranger -> $personne</li>
                                    <li>le nom de l'hotesse pour les francais -> $hotesseFrancais</li>
                                    <li>le nom de l'hotesse pour les etrangés -> $hotesseEtranger</li>
                                    <li>la variable pour stocker la nationalité -> $nationalité</li>
                                </ul>

                                <h5 class="mt-5">retour attendu</h5>
                                <p>la personne est <em>francaise / entrangere</em> et doit etre rediriger vers l'hotesse <em>prenom de l'hotesse</em></p>

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
                                <p class="card-text w-75"> Maintenant que les touristes peuvent etre redirigé c'est plus simple ! sauf que pour la touriste ne parle que anglais
                                    et d'après les dernières stat les touristes sont francais anglais ou espagnol vous allez donc devoir redirigez vers l'une des trois hôtesses.
                                    pour coder rendez vous dans le dossier du projet dans condition/exo2.php</p>

                                <h5 class="mt-5">valeur a disposition</h5>
                                <ul>
                                    <li>la personne pouvant contenir 1 ou 2 ou 3 pour un francais ou un etranger -> $personne</li>
                                    <li>le nom de l'hotesse pour les francais -> $hotesseFrancais</li>
                                    <li>le nom de l'hotesse pour les anglais -> $hotesseAnglais</li>
                                    <li>le nom de l'hotesse pour les espagnol -> $hotesseEspagnol</li>
                                    <li>la variable pour stocker la nationalité -> $nationalité</li>
                                </ul>

                                <h5 class="mt-5">retour attendu</h5>
                                <p>la personne est <em> français / anglais / espagnol</em> et doit etre rediriger vers l'hotesse <em>prenom de l'hotesse</em></p>

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
                                <p class="card-text w-75">Maintenant que les touristes sont redirigés l'office de tourisme peut faire son travail mais vous vous rendez compte
                                    que si plusieurs nationalités vous vous rendez compte que le code sera vite long et difficile à la lecture en plus il ne sera optimiser de
                                    la meilleur des manières pour cela vous décidez d'y remédiez et de modifiez votre code pour coder rendez vous dans le dossier
                                    du projet dans condition/exo3.php</p>

                                <h5 class="mt-5">valeur a disposition</h5>
                                <ul>
                                    <li>la personne pouvant contenir 1 ou 2 ou 3 pour un francais ou un etranger -> $personne</li>
                                    <li>le nom de l'hotesse pour les francais -> $hotesseFrancais</li>
                                    <li>le nom de l'hotesse pour les anglais -> $hotesseAnglais</li>
                                    <li>le nom de l'hotesse pour les espagnol -> $hotesseEspagnol</li>
                                    <li>la variable pour stocker la nationalité -> $nationalité</li>
                                </ul>

                                <h5 class="mt-5">retour attendu</h5>
                                <p>la personne est <em> français / anglais / espagnol</em> et doit etre rediriger vers l'hotesse <em>prenom de l'hotesse</em></p>

                                <h5 class="mt-5">votre resultat</h5>
                                <?php require_once 'exo3.php' ?>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="exo4" role="tabpanel" aria-labelledby="list-messages-list">
                        <div class="card">
                            <h5 class="card-header text-capitalize">exo 4</h5>
                            <div class="card-body">
                                <h5>Consigne</h5>
                                <p class="card-text w-75">Quelque mois plus tard ils se rendent compte que pas assez d'anglais viennent comparer aux autres nationalités
                                    pour palier à ce problème si un client est anglais on lui donne une réduction utilisable n'importe où dans la ville où il est.
                                    Vérifiez si le client est anglais et si c'est un homme (une femme si vous voulez pour pas provoquez de debat inutile)
                                    pour coder rendez vous dans le dossier du projet dans condition/exo4.php</p>

                                <h5 class="mt-5">valeur a disposition</h5>
                                <ul>
                                    <li>la personne pouvant contenir 1 ou 2 ou 3 pour un francais ou un etranger -> $personne</li>
                                    <li>le nom de l'hotesse pour les francais -> $hotesseFrancais</li>
                                    <li>le nom de l'hotesse pour les anglais -> $hotesseAnglais</li>
                                    <li>le nom de l'hotesse pour les espagnol -> $hotesseEspagnol</li>
                                    <li>la variable pour stocker la nationalité -> $nationalité</li>
                                    <li>la reduction -> $reduction</li>
                                    <li>le genre de la personne 1 ou 2 pour homme ou femme -> $genre</li>
                                </ul>

                                <h5 class="mt-5">retour attendu</h5>
                                <p>la personne est <em>anglaise</em> et a une reduction de <em>reduction</em>%</p>

                                <h5 class="mt-5">votre resultat</h5>
                                <?php require_once 'exo4.php' ?>
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