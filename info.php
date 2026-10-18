<?php
$civilite = $_GET['sexe'] == 'F' ? 'Madame' : 'Monsieur';
echo "Bonjour $civilite " . htmlspecialchars($_GET['prenom']) . " " . htmlspecialchars($_GET['nom']);
