<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/admin.css">
    <title>Exercise php 2</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img src="../public/img/logo.svg" alt="logo" width="32" height="32">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">client</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">admin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">consigne</a>
            </li>
        </ul>
    </nav>
</header>
<main>

    <div class="row w-100">
        <div class="col-4">
            <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list"
                   href="#etape1" role="tab" aria-controls="home">etape 1 creer les interfaces</a>
                <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list"
                   href="#etape2" role="tab" aria-controls="profile">etape 2 partie admin</a>
                <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list"
                   href="#list-messages" role="tab" aria-controls="messages">etape 3 partie client</a>
            </div>
        </div>
        <div class="col-8">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="etape1" role="tabpanel" aria-labelledby="list-home-list">
                    <ul class="list-group">
                        <li class="list-group-item">1. afficher la bonne partie lors du click sur les liens du header
                        </li>
                        <li class="list-group-item">2. selectionner le bon css en fonction du lien choisis</li>
                        <li class="list-group-item">3. creer les vue pour l'admin</li>
                        <li class="list-group-item">4. creer les vue pour le client</li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="etape2" role="tabpanel" aria-labelledby="list-profile-list">
                    <ul class="list-group">
                        <li class="list-group-item">1. ajouter la reduction</li>
                        <li class="list-group-item">2. modifier la reduction</li>
                        <li class="list-group-item">3. ajouter une essence</li>
                        <li class="list-group-item">4. recuperer les valeurs de l'essence</li>
                        <li class="list-group-item">5. modifier les valeurs de l'essence</li>
                        <li class="list-group-item">6. supprimer une essence</li>
                        <li class="list-group-item">7. ajouter une personne blacklister</li>
                        <li class="list-group-item">7. modifier les informations dune personne blacklister</li>
                        <li class="list-group-item">8. supprimer une personne blacklister</li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                    <ul class="list-group">
                        <li class="list-group-item">1. afficher les essences créés</li>
                        <li class="list-group-item">2. afficher le ticket contenant le type dessence / le prix total /
                            le prix payé / le prenom et le nom de la personne on part du principe
                            que si la personne paye par carte il a forcement le montant exact
                        </li>
                        <li class="list-group-item">3. afficher la partie de paiement par money pour quil rentre
                            l'argent demandé
                        </li>
                        <li class="list-group-item">4. afficher si le montant est correct (afficher le ticket) ou non
                        </li>
                        <li class="list-group-item">5. verifier si il est blacklister ou non</li>
                        <li class="list-group-item">6. si il est blacklister prevenir que sa carte est bloquer</li>
                        <li class="list-group-item">7. verifier si il est membre ou non</li>
                        <li class="list-group-item">7. si oui verifier si il a la reduction</li>
                        <li class="list-group-item">8. appliquer la reduction</li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...
                </div>
            </div>
        </div>
    </div>
</main>

<script src="../public/js/jquery-3.5.1.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"
        defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"
        defer></script>
</body>
</html>

