<?php 
/**
 *  Exercice 2: Somme des Nombres
* Objectif: Calculer la somme de tous les nombres jusqu'à un nombre donné
* Entrée: 5
* Sortie attendue: 15 (1+2+3+4+5)
*/

/**
 * calculer les sommes des nombres;
 * dans un tableau(1+2+3+4+5)
 * sortie = "15";
 */


   $Numb = array(1,2,3,4,5);
   $sum = 0;
      
   foreach ($Numb as $value) {
      $sum += $value;
   }
      
   echo $sum; 