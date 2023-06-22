<?php
$age = array("Peter" => "35","Ben" => "37", "Joe" => "43");
echo "Ben is " . $age['Ben'] . " years old. ";
?>
<br>
<?php
$age = array("Peter" => "37", "Ben" => "37", "Joe" => "43");
foreach($age as $x => $x_value)
{
    echo "Key=" .$x . ",Value=" . $x_value;
    echo "<br>"; 
}
?>
