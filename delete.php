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

$del = $_POST["del_id"];
$sql = "delete from todoapp where id = $del";
$conn->query($sql);
?>
