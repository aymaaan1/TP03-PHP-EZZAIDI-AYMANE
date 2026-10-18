<hr>
<?php
$fin = new DateTime("2027-01-31");
$jours = (new DateTime("today"))->diff($fin)->days;
echo date("d/m/Y") . " - " . $jours . " jours avant la fin du semestre";
?>
<br>
<?= checkdate(2, 29, 2026) ? "29/02/2026 valide" : "29/02/2026 invalide" ?>
</body>
</html>
