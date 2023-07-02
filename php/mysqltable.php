<?php
$servername="localhost";
$username="root";
$password="";
$database="myDB";

//Create connection
$connection = mysqli_connect($servername,$username,$password,$database);
//Check connection
if(!$connection){
    die("Connection failed:" . mysqli_connect_error());
}


//sql to create table


$sql= "CREATE TABLE results2S(
    rollno VARCHAR(6),
    studentname VARCHAR(30) NOT NULL,
    tamil VARCHAR(30) NOT NULL,
    english VARCHAR(30) NOT NULL,
    maths VARCHAR(30) NOT NULL,
    science VARCHAR(30) NOT NULL,
    social VARCHAR(30) NOT NULL
    )";


    if (mysqli_query($connection,$sql)) {
        echo "Table results2 created successfully";
    } else {
        echo "Error creating table:" . mysqli_error($connection);
    }
    mysqli_close($connection);
    ?>