<?php 
	error_reporting(E_ALL);
	ini_set('display_errors','on');

	$host = 'localhost';
	$user = 'mysql';
	$password = 'mysql';
	$dbName = 'test';

	$link = mysqli_connect($host,$user,$password,$dbName)
		or die(mysqli_error($link));

	$query = "SELECT * FROM employees WHERE id >0";
	$result = mysqli_query($link,$query) or die (mysqli_error($link));
	?>
	<table>
	<?php  
	while ($row = mysqli_fetch_assoc($result)){
		echo 
		'<tr>
			<td>'.$row["id"].'</td>
			<td>'.$row["имя"].'</td>
			<td>'.$row["фамилия"].'</td>
			<td>'.$row["возраст"].'</td>
			<td>'.$row["зарплата"].'</td>
		</tr>';
	}
	?>
	</table>
