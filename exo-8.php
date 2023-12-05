<?php
/**
 * Exercice 8: Trouver les Éléments Communs
 * Objectif: Trouver les éléments communs entre deux tableaux.
 * 
 * Entrée: [1, 2, 3], [2, 3, 4]
 * Sortie attendue: [2, 3]
 * Solution:
 * 
 * DÉBUT ALGORITHME
 *     tableau1 = [1, 2, 3]
 *     tableau2 = [2, 3, 4]
 *     communs = []
 *     POUR CHAQUE nombre1 DANS tableau1
 *         POUR CHAQUE nombre2 DANS tableau2
 *             SI nombre1 == nombre2
 *                 communs[] = nombre1
 *             FIN SI
 *         FIN POUR
 *     FIN POUR
 *     AFFICHER communs
 * FIN ALGORITHME
 */

$tableau1 = [1, 2, 3];
$tableau2 = [2, 3, 4];
$communs = [];
for ($i = 0; $i < count($tableau1); $i++) {
    for ($j = 0; $j < count($tableau2); $j++) {
        if ($tableau1[$i] == $tableau2[$j]) {
            $communs[] = $tableau1[$i];
        }
    }
}
print_r($communs);