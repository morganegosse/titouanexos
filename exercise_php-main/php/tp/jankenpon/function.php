<?php
// penser  à faire un fichier par function
function image(string $choix){ 
    // string = je veux du texte (c'est le type de ma variable le 'typage')
    $stone = "img/stone.png";
    $paper = "img/paper.png"; 
    $scissors = "img/scissors.png";

    switch ($choix) {
        // utilisation du switch car on sait exactement quel valeur on attend
        case '0':
            return $stone;
            break;
        case '1':
            return $paper;
            break;
        case '2':
            return $scissors;
            break;

    }
}
// return : si je veux réutiliser la donné
function gagnantPerdant (string $choix,string $ordi){
    if ($choix === $ordi) {
        echo "égalité";
    }elseif (($choix==="0" && $ordi==="2")|| ($choix==="1" && $ordi==="0") || ($choix==="2" && $ordi==="1")){
        echo "joueur à gagner";
    }elseif (($ordi==="0" && $choix==="2")|| ($ordi==="1" && $choix==="0") || ($ordi==="2" && $choix==="1")){
        echo "ordi à gagner";
    }
}