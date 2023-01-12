<?php

// Exo 1
$monTexte = "Ajourd'hui il fait -1000 degrés";
    echo $monTexte . "<br>";

$monTexte = addslashes($monTexte);
    echo $monTexte . "<br>";

echo "<br>";
// Exo 2
$textMinu ="demain je pars en voyage";
    echo $textMinu . "<br>";

$textMinu = ucfirst($textMinu);
    echo $textMinu . "<br>";

$textMinu = ucwords($textMinu);
    echo $textMinu . "<br>";

$textMinu = strtoupper($textMinu);
    echo $textMinu . "<br>";

echo "<br>";
// Exo 3
$para = "je suis en train d'écrire une chaine de 25 mots, il me manque encore quelques mots pour être opérationnel.
 Voilà on y est arrivé !!";
$para = str_word_count($para);// methode pour afficher le nombre de mots
    echo $para . "<br>";

echo "<br>";
// Exo 4
$choiceText = "Encore 6 mois et j'ai ma nouvelle maison";
$mots = explode(" ", $choiceText);

foreach ($mots as $mot) {
    echo "Mot: $mot <br>";
}

echo "<br>";
// Exo 5
$myArray = ["oeuf", "steak", "jambon", "couscous"];
$myChaineC = implode(" ",$myArray);
    echo $myChaineC;

echo "<br><br>";
// Exo 6
$choiceText2 = "je n'ai pas encore ma nouvelle maison";
    echo strrev($choiceText2);
    echo "<br>";
    echo str_shuffle($choiceText2);

echo "<br><br>";
// Exo 7
$textPhp = "<strong>Hello, </strong>nous apprenons <span style='color: blue'> PHP </span>";
    echo $textPhp;
    echo "<br>";
    echo strip_tags($textPhp);

echo "<br><br>";
// Exo 8
$text3 = "texte de mon choix";
    if (strlen($text3) < 500) {
        echo "|" .$text3;
    }

echo "<br><br>";
// Exo 9
$text4 = "encore un texte a faire";
    for ($i = 0; $i < strlen($text4); $i++) {
        echo $text4[$i] . "\n";
    }

echo "<br><br>";
// Exo 10
$text5 = "encore un nouveau texte";
    echo str_replace("texte","World","$text5");

echo "<br><br>";
// Exo 11
$text6 = "je dois faire un nouveau test";
    if (strpos($text6, 'test')) {
        echo "Le mot 'test' est présent dans la variable.";
    } else {
        echo "Le mot 'test' n'est pas présent dans la variable.";
    }

echo "<br><br>";
// Exo 12
$text7 = "je pense que c'est le dernier texte que j'écris";
$search = "je";

$position = strpos($text7, $search);
    if ($position === 0) {
        echo "'$search' a été trouver en début de chaîne";
    }

echo "<br><br>";
// Exo 13
$text8 = "je pense que c'est le dernier texte que j'écris ^^";
$search = "^^";

$position = strpos($text8, $search);
    if ($position === strlen($text8) -strlen($search)) {
        echo "'$search' a été trouver en fin de chaîne";
    }