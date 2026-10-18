<pre>
<?php
require 'config.php';

echo 'Hello PHP', "\n";

$x = 1;
$_x = 2;
$Prix_HT = 60;
$état = "ok";
$a = 5;
$A = 10;
echo "$x $_x $Prix_HT $état | a=$a A=$A\n";

echo ETABLISSEMENT, " ", NOTE_MIN, " ", NOTE_MAX, " ", SEUIL, "\n";
var_dump(defined('SEUIL'), defined('INCONNUE'));

$prix_ht = 60;
$tva = 20;
$prix_ttc = $prix_ht * (1 + $tva / 100);
echo "Le prix TTC du produit est de $prix_ttc €.\n";

$test = (string) 42;
var_dump($test);
var_dump((bool) 0, (bool) 0.0, (bool) "0", (bool) "", (bool) "abc", (bool) [], (bool) null);
var_dump((int) 3.9, (int) "12abc", (float) "1.5e3", (int) true);
echo 255, " ", 0xFF, " ", 0377, " ", 0b11111111, "\n";

$traitees = "égales à";
$ici = 2;
echo 'Ahmed a dit : "J\'ai réussi"', "\n";
echo 'Voulez-vous supprimer C:\*.*?', "\n";
echo 'Ceci n\'affichera pas \n de nouvelle ligne', "\n";
echo 'Les variables ne seront pas $traitees $ici', "\n";
echo "Les variables seront $traitees $ici", "\n";

echo trim("*Bonjour les développeurs*", "*"), "\n";
$mot = "Bonjour";
for ($i = 0; $i < strlen($mot); $i++) {
    echo $mot[$i], "\n";
}
?>
</pre>
