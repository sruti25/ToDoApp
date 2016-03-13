<html>
<head>
	<title> Todo App </title>
</head>
<?php
$servername = "localhost";
$username = "root";
$password = "sonyvaio";
$dbname = "todo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}  

?>
<body>
	<table border = "1">
	<tr>
		<th> ID </th> <th> Task </th> <th> Date </th>
	</tr>
	<?php
	$sql = "SELECT * FROM todoapp";
	$result = $conn->query($sql);
	if($result->num_rows>0)
	{
		while($row = $result->fetch_assoc()) { ?>
			<tr>
			<td><?php echo "$row[id]";?> </td>
			<td><?php echo "$row[task]";?> </td>
			<td><?php echo "$row[time]";?> </td>
			<td><button id="<?php echo $row[id]?>">Delete</button></td>
			</tr>
		<?php }
	} ?>

	</table>
</body>
</html>
