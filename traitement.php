<?php 
session_start();


//connexion bdd
require_once('class_database.php');

$connexion_bdd = new database('db5000303643.hosting-data.io', 'dbs296630', 'dbu167304', '2p4!Z^Xf');
$bdd = $connexion_bdd->PDOConnexion();



//connexion user 
require_once('class_user.php');

$pseudo = !empty($_POST['pseudo']) ? $_POST['pseudo'] : NULL;
$mdp = !empty($_POST['mdp']) ? $_POST['mdp'] : NULL;

$user1= new user ($pseudo, $mdp);
$user1->connexion($bdd);


//inscription

require_once('class_signup.php');

$pseudo = !empty($_POST['pseudo']) ? $_POST['pseudo'] : NULL;
$mdp = !empty($_POST['mdp']) ? $_POST['mdp'] : NULL;
$email = !empty($_POST['email']) ? $_POST['email'] : NULL;

$user1= new signup ($pseudo, $mdp, $email);
$user1-> inscription($bdd);



