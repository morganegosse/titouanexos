<?php
/*
 * ne pas modifier ces valeurs
 * */
$personne = rand(1, 2);
$hotesseFrancais = "oceane";
$hotesseEtrangere = "lea";
$nationalite = "";

if ($personne === 1){
  $nationalite = "francais";
  echo "la personne est ".$nationalite." et dit etre rediriger vers ".$hotesseFrancais;
}else{
  $nationalite = "etrangere";
  echo "la personne est ".$nationalite." et dit etre rediriger vers ".$hotesseEtrangere;
}