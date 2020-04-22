<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bonjour <?php  if(isset($_SESSION['pseudo'])) {
        echo $_SESSION['pseudo'];
    }?>  </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="bonjour">
    <p>Bonjour <?php  if(isset($_SESSION['pseudo'])) {
        echo $_SESSION['pseudo'];
    }?> </p>
<button><a href="deconnect.php">Se déconnecter</a></button>
</div>

<body>
</HTML>    