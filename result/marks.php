<?php

var_dump($_GET);

$roll_no = $_GET['roll_no'];

echo "<br> $roll_no";

$mark = [];

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
$names = array(
    '1001' => "Kumaran",
    '1002' => "Shravan",
    '1003' => "Shakthi",
    '1004' => "Sanjith",
    '1005' => "Soujith",
    '1006' => "Naveen",
    '1007' => "Siddharth",
    '1008' => "Sanjay",
    '1009' => "Ashwin",
    '1010' => "Dhanish",
);


function displayMarks($mark) {
    echo "<table>";
    echo "<tr>";
    echo "<th>Subject</th>";
    echo "<th>Marks</th>";
    echo  "</tr>";

    foreach($mark as $subject  => $value)      
    { 
       echo "<tr>";
       echo "<td>$subject </td>";
       echo "<td>$value </td>";
       echo "</tr>"; 
    } 
    

    echo "</table>";
    
}

//var_dump($names);

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
?>


<?php

$mark = null;

//Check if the marks exists for given roll no.  If so, assign to marks.
if(isset($students[$roll_no])){
    $mark = $students[$roll_no];
}



?>
<html>
    <head>
        <style>
            table {
                border-collapse: collapse;
                width: 500px;
                font-family: Arial, Helvetica, sans-serif;
            }
            td,th {
                text-align: left;
                padding: 6px;
                border:2px solid black;
            }
        </style>
    </head>
    <body>
        <h1>12TH SUBJECTWISE MARKS</h1>
        <?php  if($mark == null) {  ?>
        <h3> Entered roll no does not exist </h3>

        <?php 
        } 
        else {
            
            // echo "<h2>";
            echo "<h2> " . $names[$roll_no] . " </h3>";
            //echo "</h2>";
            
                           displayMarks($mark);
                           
             
       /*     
            ?>
       
       
       <table >
            <tr>
                <th> Subject</th>
                <th>Marks</th>
            </tr>
          
            <?php
            
            
             foreach($mark as $subject => $value)      
             { 
               
                ?>

            <tr>
                <td><?php echo $subject ?></td>
                <td><?php echo $value ?></td>
            </tr>

            <?php 
            } 
            
            ?>
  
        </table>
        <?php  
    */
    
    }  ?>
        <a href="index.html">back</a>
    </body>
</html>