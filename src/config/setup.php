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
		adress TEXT,
		zipcode TEXT,
		city TEXT,
		love INT,
		orientation TEXT,
		biography TEXT,
		interests TEXT,
		age TEXT,
		latitude TEXT,
		longitude TEXT,
		tags TEXT,
		notif INT)");

	$bdd->query("CREATE TABLE likes(
		id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
		creator_id INT UNSIGNED NOT NULL,
		-- titre varchar(255) COLLATE utf8_bin NOT NULL,
		img_id INT UNSIGNED NOT NULL)");

	$bdd->query("CREATE TABLE images(
		id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
		titre varchar(255) COLLATE utf8_bin NOT NULL,
		creator_id int(10) UNSIGNED NOT NULL,
		date_creation datetime NOT NULL)");

	$bdd->query("CREATE TABLE matche(
		id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
		user_one varchar(255) COLLATE utf8_bin NOT NULL,
		user_two varchar(255) COLLATE utf8_bin NOT NULL,
		answer varchar(255) COLLATE utf8_bin NOT NULL,
		time datetime NOT NULL)");


}
catch (Exception $error)
{
	print "Error while connecting to the new database !: " . $error->getMessage() . "<br/>";
	die();
}
?>
