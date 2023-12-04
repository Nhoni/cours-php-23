<?php

/**
 * Le traitement du formulaire se fait ici.
 * Notre algorithme doit faire les choses suivantes :
 * - Récupérer les données du formulaire
 * - Vérifier que les données sont valides
 * - Si les données sont valides, on affiche un message de bienvenue et récapitulatif
 */

// Récupération des données du formulaire grâce à la superglobale $_POST
if(isset($_POST['name'])) {
    isValid(
        $name = $_POST['name'], // name
        $age = $_POST['age'], // age
        $amount = $_POST['amount'], // amount
    );
}

/**
 * Vérification des données
 * Voici les règles de validation :
 * - L'âge doit être supérieur ou égal à 18 ans
 * - Le montant doit être supérieur ou égal à 1000
 */

// On commence par vérifier l'âge
function isAdult($age) {
    return $age >= 18;
}

// On vérifie ensuite le montant
function isValidAmount($amount) {
    return $amount >= 1000.00;
}

// On vérifie que les données sont valides
function isValid($name, $age, $amount) {
    if (isAdult($age) && isValidAmount($amount)) {
        echo 'Bienvenue ' . $name . ', vous avez ' . $age . ' ans et votre solde est de ' . $amount . '€';
    } else {
        echo 'Désolé, les données saisies ne sont pas valides. Vous devez être majeur et le premier dépôt doit être supérieur ou égal à 1000€';
    }
}