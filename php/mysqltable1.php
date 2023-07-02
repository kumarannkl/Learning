<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mydb2";

$connection=mysqli_connect($servername,$username,$password,$dbname);

$sql= "CREATE TABLE results2(
    rollno INT(6)  ,
    studentname VARCHAR(30) NOT NULL,
    tamil VARCHAR (30) NOT NULL,
    english VARCHAR(30) NOT NULL
    maths VARCHAR(30) NOT NULL,
    science VARCHAR(30) NOT NULL,
    social VARCHAR(30) NOT NULL,
    )";

    if(mysqli_query($connection,$sql)) {
        echo "Table result2 created successfully" ;
    } else {
        echo "Error creating table:" . mysqli_error($connection);
    }
    mysqli_close($connection);
    ?>

