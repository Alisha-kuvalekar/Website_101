<?php
$x = $_POST['usernam'];
$y = $_POST['password'];
$z = $_POST['email'];
$a = $_POST['address'];
$b =$_POST['about_you'];
$servername="localhost";
$username="root";
$password="";
$dbname = "create_database";

// Create connection
$conn = mysqli('$servername', '$username', '$password', '$dbname');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
//$sql = "$sql = "SELECT * FROM `account`";
$sql = "INSERT INTO 'account' (Username, email, password, address, about_you) VALUES ('$x','$z','$y','$a','$b');


if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>