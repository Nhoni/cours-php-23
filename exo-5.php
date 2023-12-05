<?php 
/**
 * Exercice 5: FizzBuzz
 * Objectif: Pour chaque nombre de 1 à N, imprimer "Fizz" si le nombre est divisible par 3, "Buzz" s'il est divisible par 5, "FizzBuzz" s'il est divisible par les deux, sinon imprimer le nombre.
 * 
 * Entrée: 5
 * Sortie attendue: 1, 2, Fizz, 4, Buzz
 * Solution:
 * 
 * DÉBUT ALGORITHME
 *    nombre = 5
 *     POUR i DE 1 À nombre
 *         SI i % 3 == 0 ET i % 5 == 0
 *             AFFICHER "FizzBuzz"
 *         SINON SI i % 3 == 0
 *             AFFICHER "Fizz"
 *         SINON SI i % 5 == 0
 *             AFFICHER "Buzz"
 *         SINON
 *             AFFICHER i
 *         FIN SI
 *     FIN POUR
 * FIN ALGORITHME * 
 */

$nombre = 5;
for ($i = 1; $i <= $nombre; $i++) {
    $output = "";
    if ($i % 3 == 0) {
        $output .= "Fizz";
    }
    if ($i % 5 == 0) {
        $output .= "Buzz";
    }
    echo $output ?: $i;
}