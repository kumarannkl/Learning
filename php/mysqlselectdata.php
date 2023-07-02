<?php
$servername="localhost";
$username="root";
$password="";
$dbname="myDB";

//Create connection
$connection=mysqli_connect($servername,$username,$password,$dbname);
//Check database
if(!$connection)
{
    die("Connection failed" . mysqli_connect_error()); 
}
$sql= "SELECT id,firstname,lastname FROM MyGuests";
$result= mysqli_query($connection,$sql);
var_dump($result);
echo "<br> <br>";
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "id:" . $row["id"] . "-Name: " . $row["firstname"]. " " .  $row["lastname"]. "<br>";
    }
    /*echo "<br> <br>";
    $row = mysqli_fetch_assoc($result);
    var_dump($row);
    echo "<br> <br>";
    $row = mysqli_fetch_assoc($result);
    var_dump($row);
    echo "<br> <br>";
    $row = mysqli_fetch_array($result);
    var_dump($row);
    echo "<br> <br>";
    $row = mysqli_fetch_array($result);
    var_dump($row);*/
    }else{
        echo "0 results";

    }
    mysqli_close($connection);
    ?>


