<?php
$cars = array("Volvo", "Lamborghini","Ferrari");
echo "I like " . $cars[0] . " , "
  . $cars[1] . " and " . $cars[2] . ".";
?>
<br>
<?php 
$cars = array("Mercedes", "BMW", "Lamborghini");
$arrlength = count($cars);
for($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
}