<?php 
error_reporting(E_ALL);
	ini_set('display_errors','on');

	$host = 'localhost';
	$user = 'mysql';
	$password = 'mysql';
	$dbName = 'test';

	$link = mysqli_connect($host,$user,$password,$dbName)
		or die(mysqli_error($link)).

	mysqli_query($link, "SET NAMES 'utf8'");
	$query = "SELECT * FROM `employees` WHERE `id`> 0 LIMIT ".$_GET['get'].",3";
	$result = mysqli_query($link,$query) or die (mysqli_error($link));
	while ($row = mysqli_fetch_assoc($result)){
		var_dump($row);
		echo '<br>';
	}