<?php

/*if(isset($rollno) || isset($name) || isset($english) || isset($tamil) || isset($maths) || isset($science) || isset($social)) 
{*/



//error_reporting(0);
$servername="localhost";
$username="root";
$password="";
$dbname="myDB";

//Create connection
$connection=mysqli_connect($servername,$username,$password,$dbname);
//Check connection
if(!$connection) {
    die("Connection failed:"  . mysqli_connect_error());
}

$rollno=$_GET['rollno'];
$name=$_GET['name'];
$english=$_GET['english'];
$tamil=$_GET['tamil'];
$maths=$_GET['maths'];
$science=$_GET['science'];
$social=$_GET['social'];



$sql= "INSERT INTO results2s (rollno,studentname,tamil,english,maths,science,social) 
VALUES ($rollno ,'$name', $tamil, $english, $maths, $science, $social)";

if(mysqli_query($connection,$sql))
{
    echo "New values inserted successfully";

} else {
    echo "ERROR:" . $sql . "<br>" . mysqli_error($connection);

}
mysqli_close($connection);

?>