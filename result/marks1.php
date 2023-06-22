<?php

var_dump($_GET);

$roll_no=$_GET('roll_no');

echo "<br> $roll_no";

$mark=[];

$marks1 = array("Tamil" => "89", "English" => "90","Maths" => "91" , "Science" => "88" , "Social" => "96" );
$marks2 = array("Tamil" => "88", "English" => "90","Maths" => "91" , "Science" => "88" , "Social" => "96" );
$marks3 = array("Tamil" => "87", "English" => "90","Maths" => "91" , "Science" => "88" , "Social" => "96" );
$marks4 = array("Tamil" => "86", "English" => "90","Maths" => "91" , "Science" => "88" , "Social" => "96" );
$marks5 = array("Tamil" => "85", "English" => "90","Maths" => "91" , "Science" => "88" , "Social" => "96" );
$marks6 = array("Tamil" => "84", "English" => "90","Maths" => "91" , "Science" => "88" , "Social" => "96" );
$marks7 = array("Tamil" => "83", "English" => "90","Maths" => "91" , "Science" => "88" , "Social" => "96" );
$marks8 = array("Tamil" => "82", "English" => "90","Maths" => "91" , "Science" => "88" , "Social" => "96" );
$marks9 = array("Tamil" => "81", "English" => "90","Maths" => "91" , "Science" => "88" , "Social" => "96" );
$marks10 = array("Tamil" => "80", "English" => "90","Maths" => "91" , "Science" => "88" , "Social" => "96" );

$students = array(
    '1001' => $marks1,
    '1002' => $marks2,
    '1003' =>  $marks3,
    '1004' =>$marks4,
    '1005' => $marks5,
    '1006' =>$marks6,
    '1007' =>$marks7,
    '1008' =>$marks8,
    '1009' =>$marks9,
    '1010' =>$marks10
 );

 //var_dump($students);

/*
if($roll_no == '1001') {
    $mark = $marks1;
} elseif($roll_no == '1002') {
    $mark = $marks2;
} elseif($roll_no == '1003') {
    $mark = $marks3;
} elseif($roll_no == '1004') {
    $mark = $marks4;
} elseif($roll_no == '1005') {
    $mark = $marks5;
} elseif($roll_no == '1006') {
    $mark = $marks6;
} elseif($roll_no == '1007') {
    $mark = $marks7;
} elseif($roll_no == '1008') {
    $mark = $marks8;
} elseif($roll_no == '1009') {
    $mark = $marks9;
} elseif($roll_no == '1010') {
    $mark = $marks10;
} else {
    $mark = [];
}
*/

/*switch($roll_no) {
    case "1001":
        $mark= $marks1;
        break;
    case "1002":
        $mark= $marks2;
        break;
    case "1003":
        $mark= $marks3;
        break;
    case "1004":
        $mark= $marks4;
        break;
    case "1005":
        $mark= $marks5;
        break;                    
    case "1006":
        $mark= $marks6;
        break;
    case "1007":
        $mark= $marks7;
        break;
    case "1008":
        $mark= $marks8;
        break;
    case "1009":
        $mark= $marks9;
        break;
    case "1010":
        $mark= $marks10;
        break;
    default:
        $mark = [];
                                                                                                                                                                                    
}*/

