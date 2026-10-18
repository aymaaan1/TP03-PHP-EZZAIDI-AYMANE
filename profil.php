<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
echo "Bienvenue " . htmlspecialchars($_SESSION['login']) . " ! <a href='deconnexion.php'>Se déconnecter</a>";
