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
	$query = "INSERT INTO `employees`(`имя`, `фамилия`, `возраст`, `зарплата`) VALUES('".$_POST["btn1"]."','".$_POST["btn2"]."','".$_POST["btn3"]."','".$_POST["btn4"]."')";		
	$result = mysqli_query($link,$query) or die (mysqli_error($link));
	$query = "SELECT * FROM employees WHERE id >0";
	$result = mysqli_query($link,$query) or die (mysqli_error($link));
?>
	<table id="lol"> 
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