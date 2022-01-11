<?php
// exo 1
function returnTrue (): Bool {
    return true;
}

// exo 2

function returnString (String $string): String {
    return $string;
}

// exo 3

function combineString (String $string1, String $string2): String {
    return $string1.$string2;
}

// exo 4

function compareNumber (Int $number1, Int $number2): String {
    if ($number1 < $number2) {
        return "Le premier nombre est plus petit.";
    }
    elseif ($number1 > $number2) {
        return "Le premier nombre est plus grand.";
    }
    else {
        return "Les deux nombres sont égaux.";
    }
}

// exo 5

function combineStringNumber (String $string, Int $number): String {
    return $string.$number;
}

// exo 6

function helloPerson (String $firstname, String $name, Int $age): String {
    return "Bonjour ".$name." ".$firstname.", tu as ".$age." ans.";
}

// exo 7

/**
 * @param Int $age Take an Int as age.
 * @param String $gender Take "Homme" or "Femme".
 * @return String Return a string saying "you'r a --men/women-- and you are --Minor/Major--".
 */

function (Int $age, String $gender): String {
    if ($gender === "Homme") {
        if ($age >= 18) {
            return "Vous êtes un homme et vous êtes majeur.";
        }
        else {
            return "Vous êtes un homme et vous êtes mineur.";
        }
    }
    else if ($gender === "Femme"){
        if ($age >= 18) {
            return "Vous êtes une femme et vous êtes majeure.";
        }
        else {
            return "Vous êtes une femme et vous êtes mineure.";
        }
    }
    else {
        return "Vous devez entrer 'Homme' ou 'Femme' pour le genre et un nombre entier pour l'age.";
    }
}