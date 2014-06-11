<?php
/* Connexion au serveur : dans cet exemple, en local sur le serveur d'évaluation
A MODIFIER avec vos valeurs */
$hostname = "localhost";
$database = "tonguer";
$username = "root";
$password = "root";

// Configuration des options

// Désactive l'émulateur de requêtes préparées
$pdo_options[PDO::ATTR_EMULATE_PREPARES] = false;

// Active le mode exception
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;

// Indique le charset
$pdo_options[PDO::MYSQL_ATTR_INIT_COMMAND] = "SET NAMES utf8";

// Connexion
try{
	$connect = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password, $pdo_options);
}catch (PDOException $e){
    echo "erreur : ".$e->getMessage();
}
	//echo("Connect okokok <br />");
?>