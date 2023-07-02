<?php
$servername= "localhost";
$username = "root";
$password = "";

// Create connection
$connection = mysqli_connect($servername,$username,$password);
// Check connection
if (!$connection) {
    die("Connection failed:" . mysqli_connect_error());
}
//Create databse
$sql ="CREATE DATABASE myDB";
if (mysqli_query($connection,$sql)) {
    echo "Database created successfully";
}
else {
    echo "Error creating database: " . mysqli_error($connection);
}
mysqli_close($connection);

?>