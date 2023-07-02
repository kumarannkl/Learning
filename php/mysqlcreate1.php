<?php

$servername="localhost";
$username="root";
$password="";


$connection=mysqli_connect($servername,$username,$password,);
$sql="CREATE DATABASE myDB1";
if(mysqli_query($connection,$sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database:" . mysqli_error($connection); 
}
mysqli_close($connection);

?>
