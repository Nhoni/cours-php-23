<?php 
/**
 * Exercice 9: Nombre Premiers
 * Objectif: Générer une liste de nombres premiers jusqu'à un certain nombre.
 * 
 * Entrée: 10
 * Sortie attendue: [2, 3, 5, 7]
 * Solution:
 * 
 * DÉBUT ALGORITHME
 *     nombre = 10
 *     premiers = []
 *     POUR i DE 2 À nombre
 *         estPremier = Vrai
 *         POUR j DE 2 À i
 *             SI i % j == 0 ET i != j
 *                 estPremier = Faux
 *             FIN SI
 *         FIN POUR
 *         SI estPremier
 *             premiers[] = i
 *         FIN SI
 *     FIN POUR
 *     AFFICHER premiers
 * FIN ALGORITHME
 */


$nombre = 10;
$premiers = [];
for ($i = 2; $i <= $nombre; $i++) {
    $estPremier = true;
    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0) {
            $estPremier = false;
        }
    }
    if ($estPremier) {
        $premiers[] = $i;
    }
}
print_r($premiers);