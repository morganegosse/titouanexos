<?php
/*
 * ne pas modifier ces valeurs
 * */
$receveur = rand(5,8);
$codeTest = rand(5,8);
$envoyeur = rand(5,8);
$array = [
    "mail"=>25,
    "receveur" => $receveur,
    "envoyeur" => $envoyeur,
    "codeEnvoyeur" => 80,
    "annee" => 70,
    "codeTest" => $codeTest
];
$arrayFalse = [
    "mail"=>25,
    "codeEnvoyeur" => 80,
    "annee" => 70,
    "codeTest" => $codeTest
];

/*
 * codez ici
 * */