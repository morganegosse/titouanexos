<?php
$route = (isset($_GET['side']))? $_GET['side'] : NULL;
    $css=$route;
    // ? = si (if)
    //  : = si non (else)
    // la ligne au dessus s'appelle une ternaire
    switch ($route){
        // side = c'est ma clé
        case 'client':
            require_once 'clientcontroler.php';
            break;

        case 'admin':
            require_once 'admincontroler.php';
            break;

        case 'consigne':
            require_once 'consignecontroler.php';
            break;
    }
    require_once 'view/template.php';