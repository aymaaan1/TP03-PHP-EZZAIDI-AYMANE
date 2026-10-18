<?php
session_start();

if (!empty($_POST['login'])) {
    $_SESSION['login'] = $_POST['login'];
    setcookie("dernier_login", $_POST['login'], time() + 86400, "/");
    header("Location: profil.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Connexion</title></head>
<body>
<form method="post">
    Login : <input name="login" value="<?= htmlspecialchars($_COOKIE['dernier_login'] ?? '') ?>">
    <button>Se connecter</button>
</form>
</body>
</html>
