<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Se connecter</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="connect-form">
    <form class="login-form" action="traitement.php" method="post">
    <input name="email" type="email" placeholder="Email" required><br>
        <input name="pseudo" type="text" placeholder="Pseudo" required><br>
        <input name="mdp" type="password" placeholder="Mdp" required><br>
        <button type="submit">S'inscrire</button>
    </form>
    <a href="index.php"> Se connecter </a>
</div>

    



</body>

</html>
