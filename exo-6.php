<?php 
/**
 * Exercice 6: Compter les Voyelles
 * Objectif: Compter le nombre de voyelles dans une chaîne.
 * 
 * Entrée: "Algorithmique"
 * Sortie attendue: 5
 * Solution:

 * DÉBUT ALGORITHME
 *     chaine = "Algorithmique"
 *     voyelles = ["a", "e", "i", "o", "u", "y"]
 *     nombreVoyelles = 0
 *     POUR CHAQUE caractère DANS chaine
 *         SI caractère EST DANS voyelles
 *             nombreVoyelles = nombreVoyelles + 1
 *         FIN SI
 *     FIN POUR
 *     AFFICHER nombreVoyelles
 * FIN ALGORITHME
 */

$chaine = "Algorithmique";
$voyelles = ["a", "e", "i", "o", "u", "y"];
$nombreVoyelles = 0;
for ($i = 0; $i < strlen($chaine); $i++) {
    if (in_array($chaine[$i], $voyelles)) {
        $nombreVoyelles++;
    }
}
echo $nombreVoyelles;