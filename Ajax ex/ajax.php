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

	$query = "SELECT * FROM employees WHERE id > 0 LIMIT 0,3";
	$result = mysqli_query($link,$query) or die (mysqli_error($link));
?>
<table>
<?php  
	if (isset($_GET['get'])){
		for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row){
			if ($row["имя"] == $_GET['get']){
				?> <td>id</td>
					<td>имя</td>
					<td>Фамилия</td>
					<td>возраст</td>
					<td>зарплата</td>
					<?php  
					echo '
				<tr>
				<td>'.$row["id"].'</td>
				<td>'.$row["имя"].'</td>
				<td>'.$row["фамилия"].'</td>
				<td>'.$row["возраст"].'</td>
				<td>'.$row["зарплата"].'</td></tr>';
			}
		}
	} 
	else{
		?> <td>Фамилия</td><?php  
		var_dump($_GET);
		for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row){
			echo '
			<tr>
			<td data-id='.$row["id"].' name='.$row["имя"].'>'.$row["имя"].'</td>
			</tr>';
		}
	}
 ?>
</table>