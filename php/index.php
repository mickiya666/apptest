<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['user'] ?? '';
    $password = $_POST['password'] ?? '';
    
    if ($user === $valid_user && $password === $valid_password) {
        echo "<h1>Connected ! Welcome back :)</h1>";
    } else {
        echo "<h1>Échec de la connexion</h1>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST">
        <label>Utilisateur :</label>
        <input type="text" name="user"><br>
        <label>Mot de passe :</label>
        <input type="password" name="password"><br>
        <button type="submit">Se connecter</button>
    </form>
</body>
</html>