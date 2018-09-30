<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "create_database";

// Create connection
$conn = new mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE login (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
Username VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
)";

$sql = "INSERT INTO `login`(`id`, `Username`, `Password`) VALUES (3,\'ankita\',\'ankita@12345\')";
echo "insert dada succesfully";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>