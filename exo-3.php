<?php 


/**
 * Exercice 3: Factorielle
 * Objectif: Trouver la factorielle d'un nombre.
 * Entrée: 4
 * Sortie attendue: 24 (1*2*3\*4)
 * 
 */
$nombre = 4;
$factorielle = 1;
for ($i = 1; $i <= $nombre; $i++) {
    $factorielle = $factorielle * $i;
}
echo $factorielle;