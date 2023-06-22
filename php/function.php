<?php 
/*declare(strict_types=1);
//srictt requirement
function addthese(int $a, int $b) {
    return $a + $b;
}
echo addthese(5,"5days");
/* since strict is enabled and "5 
days" is not an integer, an error
will be thrown*/ 
?>

<?php
function writemessage() {
    echo "Hi this is me kumaran";
}
writemessage();
?>
<br>
<?php
function familyname($fname) {
    echo "$fname familyisgood.<br>";
}
familyname("Jani");
familyname("Hege");
familyname("Stale");
familyname("Kai Jim");
familyname("Borge");
?>
<?php
function familyyear($sname,$year) {
    echo "$sname i was born in . $year <br>";
}
familyyear("Kumaran","2005");
familyyear("Shravan","2007");
familyyear("Karthikeyan","1975");
familyyear("Kaivtha","1979");
?>
<?php
/*function addnumbers(int $a, int $b) {
    return $a + $b;
}
echo addnumbers(5,"5 days");
/*since strict is no enabbled "5 days"
is changed to int(5), and it will return 10*/
?>
<?php //fdeclare(strict_types=1);
//strict requirement ?>
<?php 
function setheight(int $minheight =50) {
    echo "The height is:
    $minheigh <br>";
}
settheight(350);
setheight();
setheight();
setheight(135);
setheight(80);
?>
<?php 
function add_five(&$value) {
    $value += 5;
}
$num =2;
add_five($num);
echo $num;
?>

