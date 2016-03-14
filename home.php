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
			<tr class = "row_details">
			<td><?php echo "$row[id]";?> </td>
			<td><?php echo "$row[task]";?> </td>
			<td><?php echo "$row[time]";?> </td>
			<td><button id="<?php echo $row[id]?>">Delete</button></td>
			</tr>
		<?php }
	} ?>

	</table><br>
	<form>
	New Task:<br>
	<input type="text" id = "task" name="new_task" size = 20><button id="add">Insert</button>
	</form>
</body>
<script type="text/javascript" src="jquery-1.9.1.js"></script>
<script>
document.getElementById("add").onclick=function() {
var xhttp;
xhttp = new XMLHttpRequest();
var ins =document.getElementById("task").value;
alert(ins);
xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
		data = xmlhttp.responseText;
		$('.row_details').first().before(data);
	    }
	}
xhttp.open("GET", "insert.php?new_task="+ins, true);
xhttp.send();
}
</script>
</html>
