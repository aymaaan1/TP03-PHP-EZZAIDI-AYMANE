<pre>
<?php
$resultats = [];
$f = fopen('data/notes.csv', 'r');
while (($l = fgetcsv($f, 1000, ';')) !== false) {
    $resultats[] = ['nom' => $l[0], 'info' => $l[1], 'math' => $l[2], 'moyenne' => ($l[1] + $l[2]) / 2];
}
fclose($f);

file_put_contents('data/notes.json', json_encode($resultats));
print_r(json_decode(file_get_contents('data/notes.json'), true));

echo serialize($resultats), "\n\n", json_encode($resultats);
?>
</pre>
