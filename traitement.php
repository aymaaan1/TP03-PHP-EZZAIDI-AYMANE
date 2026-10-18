<?php
require 'config.php';

$nom = trim($_POST['nom'] ?? '');
$info = $_POST['note_info'] ?? '';
$math = $_POST['note_math'] ?? '';

if ($nom === '' || $info === '' || $math === '') {
    exit("Erreur : tous les champs sont obligatoires. <a href='saisie.html'>Retour</a>");
}
if ($info < NOTE_MIN || $info > NOTE_MAX || $math < NOTE_MIN || $math > NOTE_MAX) {
    exit("Erreur : les notes doivent être entre " . NOTE_MIN . " et " . NOTE_MAX . ". <a href='saisie.html'>Retour</a>");
}

echo "Nom : " . htmlspecialchars($nom) . "<br>Info : $info<br>Math : $math<br>";

$f = fopen('data/notes.csv', 'a');
fputcsv($f, [$nom, $info, $math], ';');
fclose($f);

echo "<a href='saisie.html'>Nouvelle saisie</a> | <a href='liste.php'>Liste</a>";
