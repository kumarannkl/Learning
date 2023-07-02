<?php
$servername="localhost";
$username="root";
$password="";

$connection= mysqli_connect($servername,$username,$password);
if(!$connection) { 
    die("Connection failed:" . mysqli_connect_error());
}
$sql="DROP DATABASE myDB1";
if(mysqli_query($connection,$sql)) {
    echo "Database deleted successfully";
}
    else{
        echo "Error deleting database:" . mysqli_error($connection);
    }
    mysqli_close($connection);
    ?>
