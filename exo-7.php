<?php 
/**
 * Exercice 7: Palindrome
 * Objectif: Vérifier si une chaîne est un palindrome.
 * 
 * Entrée: "radar"
 * Sortie attendue: Vrai
 * Solution:
 * 
 * DÉBUT ALGORITHME
 *     chaine = "radar"
 *     inversée = ""
 *     POUR CHAQUE caractère DANS chaine
 *         inversée = caractère + inversée
 *     FIN POUR
 *     SI chaine == inversée
 *         AFFICHER Vrai
 *     SINON
 *         AFFICHER Faux
 *     FIN SI
 * FIN ALGORITHME
 */

$chaine = "radar";
$inversee = "";
for ($i = 0; $i < strlen($chaine); $i++) {
    $inversee = $chaine[$i] . $inversee;
}
if ($chaine == $inversee) {
    echo "Vrai";
} else {
    echo "Faux";
}