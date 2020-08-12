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
	$query = "SELECT * from `employees` WHERE id=".$_GET["get"];
	$result = mysqli_query($link,$query) or die (mysqli_error($link));
	$row = mysqli_fetch_assoc($result);
	echo 
		'<table>
		<tr>
			<td>id</td>
			<td>имя</td>
			<td>фамилия</td>
			<td>возраст</td>
			<td>зарплата</td>
		</tr>';
	echo 
		'<tr>
			<td>'.$row["id"].'</td>
			<td>'.$row["имя"].'</td>
			<td>'.$row["фамилия"].'</td>
			<td>'.$row["возраст"].'</td>
			<td>'.$row["зарплата"].'</td>
		</tr>
		</table>';
?>