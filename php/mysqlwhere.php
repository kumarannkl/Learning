<?php
$servername="localhost";
$username="root";
$passowrd="";
$dbname="myDB";


$connection=mysqli_connect($servername,$username,$passowrd,$dbname);

if(!$connection){
    die("Conecton failed:" . mysqli_connect_error());

}
$sql=" SELECT id,firstname,lastname FROM MyGuests";