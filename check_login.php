<?php
$conn = new mysqli("ssdb-xxx.mysql.database.azure.com", "bootcamp@ssdb-xxx", "wC!viIkBek@6");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$conn -> select_db("ssbootcamp");

$username = ($_POST['username']);
$password = ($_POST['password']);

// To protect MySQL injection, sanitize user input.
// mysqli_real_escape_string escapes special characters in a string for use in an SQL statement
//$username = mysqli_real_escape_string($conn, $username);
//$password = mysqli_real_escape_string($conn, $password);

$query = $conn->query("SELECT * FROM `users` WHERE username = '$username' and password = '$password'");
if (mysqli_num_rows($query)) {
	session_start();
	$_SESSION['username']=$username;
	header("location:home.php");
} else {
	echo 'Invalid Login';
}

/*
// To protect MySQL injection, use prepared statements
$stmt = $conn->prepare('SELECT * FROM users WHERE username = ? AND password = ?');
$stmt->bind_param('ss', $username, $password);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows) {
	session_start();
	$_SESSION['username']=$username;
	header("location:home.php");
} else {
	echo 'Invalid Login';
}
*/
