<?php
require_once 'config.php';
include 'includes/entete_inc.php';
include 'includes/menu_inc.php';

$notes = [
    "Mohamed" => 16, "Ahmed" => 14, "Hind" => 13, "Aicha" => 15,
    "Samir" => 13, "Zakaria" => 13, "Rafik" => 10, "Ilham" => 9,
    "Hamza" => 7, "Sami" => 7, "Noura" => 14
];
$modules = ["Algorithmique", "Base de données", "PHP"];

foreach ($modules as $m) {
    echo "$m ";
}
for ($i = 0; $i < count($modules); $i++) {
    echo $modules[$i] . " ";
}

function afficher($tab)
{
    echo "<table><tr><th>Nom</th><th>Note</th><th>Mention</th></tr>";
    foreach ($tab as $nom => $note) {
        $classe = $note < SEUIL ? "rouge" : "";
        echo "<tr class='$classe'><td>$nom</td><td>$note</td><td>" . mention($note) . "</td></tr>";
    }
    echo "</table>";
}

echo "<h2>Notes</h2>";
afficher($notes);

$somme = 0;
$max = $min = reset($notes);
$effectifs = [];
foreach ($notes as $note) {
    $somme += $note;
    $max = $note > $max ? $note : $max;
    $min = $note < $min ? $note : $min;
    $m = mention($note);
    $effectifs[$m] = ($effectifs[$m] ?? 0) + 1;
}
echo "Somme $somme, moyenne " . round($somme / count($notes), 2) . ", max $max, min $min<br>";
echo "Vérification : " . array_sum($notes) . " " . count($notes) . " " . max($notes) . " " . min($notes);
echo "<pre>";
print_r($effectifs);
echo "</pre>";

$t = $notes; ksort($t);
echo "<h2>Noms croissants</h2>"; afficher($t);
$t = $notes; arsort($t);
echo "<h2>Notes décroissantes</h2>"; afficher($t);
$t = $notes; krsort($t);
echo "<h2>Noms décroissants</h2>"; afficher($t);
$t = $notes; asort($t);
echo "<h2>Notes croissantes</h2>"; afficher($t);

$a = ["x" => 1, "y" => 2];
$b = ["y" => 2, "x" => 1];
echo "<pre>";
print_r($a + $b);
var_dump($a == $b, $a === $b);
echo "</pre>";

include 'includes/pied_inc.php';
