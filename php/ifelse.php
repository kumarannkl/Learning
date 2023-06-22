<?php
$t = date("19");
if ($t < "20") {
    echo "Have a good day!";
}
echo "<br>";

?>
<?php
$t = date("21");
if ($t <"20") {
    echo "Have a good day!";
}      
else { 
    echo "Have a good night!";
}
?>
<?php
$t = date("22");
echo "<p>The hour (of the server) is" .$t;
echo ",and will give the following message:</P>";

if ($t <"10") {
    echo "Have a good morning!";
} elseif ($t <"20") {
    echo "Have a good day!";
}  else {
    echo "have a good night!";
}
?>
<?php
$favfootballteam = "tottenham";

switch ("tottenham") {
    case "tottenham":
    echo "Your favourite team is tottenham!";
    break;

    case "manunited":
    echo "Your favourite team is manunited!";
    break;

    case "baracelona":
    echo "Your favourite team is barcelona!";
    break;
    default:
    echo "Your favourite color is neither red, blue, nor green!";

}
?>
