<?php
$username = "root";
$password = "sonyvaio";
$dbname = "todo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}  
$d = date("Y-m-d");
$name = $_GET['new_task'];
$name = mysql_real_escape_string($name);
$sql = "insert into todoapp (task,time) values ('$name','$d')";
$conn->query($sql);
$query=mysql_query("Select * from to_do where task='$name'");
while($row=mysql_fetch_assoc($query)){
			$new_task_details=$row['task'];
			$new_task_time=$row['time'];
			$new_task_id=$row['id'];
		}
		mysql_close();
		echo '<tr class="row_details"><td>'.$new_task_id.'</td><td>'.$new_task_details.'</td><td>'.$new_task_time.'</td><td><button class="delete_button" id='.$new_task_id.'>Delete</button></td></tr>';
	
?>
