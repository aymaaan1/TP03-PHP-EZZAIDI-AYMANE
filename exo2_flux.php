<?php
require 'config.php';

foreach ([18, 15, 12, 10, 5] as $n) {
    echo "$n : " . mention($n) . "<br>";
}

$mois = date("m");
switch ($mois) {
    case "01": echo "Janvier"; break;
    case "02": echo "Février"; break;
    case "03": echo "Mars"; break;
    case "04": echo "Avril"; break;
    case "05": echo "Mai"; break;
    case "06": echo "Juin"; break;
    case "07": echo "Juillet"; break;
    case "08": echo "Août"; break;
    case "09": echo "Septembre"; break;
    case "10": echo "Octobre"; break;
    case "11": echo "Novembre"; break;
    case "12": echo "Décembre"; break;
    default: echo "Mois inconnu";
}

echo "<pre>";
for ($i = 1; $i <= 6; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "\n";
}
echo "</pre>";

$i = 0;
while ($i <= 20) {
    echo $i == 10 ? "<b>$i</b> " : "$i ";
    $i += 2;
}
echo "<br>";

for ($i = 0; $i <= 10; $i++) {
    if ($i % 2 != 0) {
        continue;
    }
    echo "$i ";
}
echo "<br>";

$i = 1;
while (true) {
    switch ($i) {
        case 5:
            echo "At 5<br>";
            break;
        case 10:
            echo "At 10; quitting<br>";
            break 2;
    }
    $i++;
}

$i = 0;
do {
    echo $i == 10 ? "<b>$i</b> " : "$i ";
    $i += 2;
} while ($i <= 20);
