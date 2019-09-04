<?php
require 'database.php';

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=matcha;charset=utf8', 'root', 'root');
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$bdd->exec("SET NAMES 'UTF8'");
	$bdd->query("DROP DATABASE IF EXISTS matcha");
	$bdd->query("CREATE DATABASE matcha");
	$bdd->query("use matcha");

	$bdd->query("CREATE TABLE user(
				id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
				login TEXT NOT NULL,
				name TEXT NOT NULL,
				last_name TEXT NOT NULL,
				mail TEXT NOT NULL,
				password TEXT NOT NULL,
				validate TEXT NOT NULL,
				genre TEXT,
				location TEXT,
				orientation TEXT,
				biography TEXT,
				interests TEXT,
				age TEXT,
				notif INT)");

}
catch (Exception $error)
{
	print "Error while connecting to the new database !: " . $error->getMessage() . "<br/>";
	die();
}
?>
