<?php
header("Refresh:2;url= ../loading/index.php");

$servername = "localhost";
$username = "root";
$password = "";
$db = "samba";

// Creating connection
$conn = new mysqli($servername, $username, $password,$db);

// Checking connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "INSERT INTO samba (username, email , password)
              VALUES('username', 'password', 'email') ";


?>
