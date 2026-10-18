<?php
require_once 'config.php';
include 'includes/entete_inc.php';
include 'includes/menu_inc.php';

if (!file_exists('data/notes.csv')) {
    exit("Aucune note enregistrée.");
}
$f = fopen('data/notes.csv', 'r');
if (!$f) {
    exit("Erreur d'ouverture du fichier.");
}

echo "<table><tr><th>Nom</th><th>Info</th><th>Math</th><th>Moyenne</th><th>Mention</th></tr>";
$total = 0;
$nb = 0;
while (($l = fgetcsv($f, 1000, ';')) !== false) {
    $moy = ($l[1] + $l[2]) / 2;
    $total += $moy;
    $nb++;
    echo "<tr><td>" . htmlspecialchars($l[0]) . "</td><td>$l[1]</td><td>$l[2]</td><td>$moy</td><td>" . mention($moy) . "</td></tr>";
}
fclose($f);
echo "</table>";
echo "Moyenne générale : " . round($total / $nb, 2);

include 'includes/pied_inc.php';
