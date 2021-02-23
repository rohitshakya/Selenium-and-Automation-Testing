<!--
 * Author : Rohit Shakya
 * Date   : May-2020
 * Editor : Sublime text
 * Local server: Xampp
 * title : Insert into database 
 -->
<!DOCTYPE html>
<html>
<head>
	<title>HomePage</title>
</head>
<body style="background: orange;">
<a href="home1.html">Click here to go back<br></a>
<form action="" method="POST">
  <input type="text" name="name">
  <button type="submit">submit</button>
</form>
</body>
</html>
<?php
$servername = "localhost";
$dbusername = "root";
$password = "";
$fname=$_POST['name'];

// Create connection
$conn = new mysqli($servername, $dbusername, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
	// Create database

$sql = "CREATE DATABASE IF NOT EXISTS mydb"; //date base creation if not exist, otherwise it does nothing
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully<br>";
} else {
  echo "Error creating database: " . $conn->error;
}
$database="mydb";
$conn = new mysqli($servername, $dbusername, $password,$database); //select database
if ($conn->query($sql) === TRUE) {
  echo "Database selected successfully<br>";
} else {
  echo "Error creating database: " . $conn->error;
}

$sql = "INSERT INTO `story`(`title`, `description`) VALUES ('$fname','shakya')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully<br>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
	
$conn->close();
?>
		