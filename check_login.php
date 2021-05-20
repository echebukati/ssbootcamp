<?php
$conn = new mysqli("skillsoftdb-xxx.mysql.database.azure.com", "bootcamp@skillsoftdb-xxx", "wC!viIkBek@6");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$conn -> select_db("skillsoftbootcamp");

$username = ($_POST['username']);
$password = ($_POST['password']);

// To protect MySQL injection, sanitize user input.
// mysqli_real_escape_string escapes special characters in a string for use in an SQL statement
//$username = mysqli_real_escape_string($username);
//$password = mysqli_real_escape_string($password);

$query = $conn->query("SELECT * FROM `users` WHERE username = '$username' and password = '$password'");
if (mysqli_num_rows($query)) {
	echo 'Valid Login';
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
	echo 'Valid Login';
} else {
	echo 'Invalid Login';
}
*/