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
	$query = "DELETE FROM employees WHERE id =".$_GET["del"];
	$result = mysqli_query($link,$query) or die (mysqli_error($link));
?>