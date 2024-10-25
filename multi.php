<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     
  <?php

  $sub1 = 80;
  $sub2 = 70;
  $sub3 = 60;
  $sub4 = 65;
 ?>
  <table>
  <?php
  $marks = [
    "AK Qureshi" => array("Math" => $sub1,"English" => $sub2,"urdu" => $sub3,"science" => $sub4),
    "Awais Qureshi" => array("Math" => $sub1,"English" => $sub1,"urdu" => $sub2,"science" => $sub4),
    "itz Awais" => array("Math" => $sub3,"English" => $sub2,"urdu" => $sub3,"science" => $sub4) 
  ];
  ?>
  </table>
  <?php
  $tl = 0;
  $percentage = 0;
  foreach($marks as $student => $subjects ){
    echo "Student Name: ".$student."<br>";
    foreach($subjects as $subject => $mark){
        $tl = $mark + $tl;
        $percentage = $tl / 400 * 100;
        echo $subject."-". $mark."<br>";
    }
    echo "<br>";
    echo "Total: ".$tl."<br>";
    echo "Percentage: ".round($percentage)."%<br>";
    $tl = 0;
    if($percentage <= 80){
        echo "Grade A";
    }
    elseif($percentage <= 70){
        echo "Grade B";
    }
    elseif($percentage <= 60){
        echo "Grade C";
    }
    else{
        echo "Grade D";
    }
    echo "<br><br>";
  }
  

  ?>

</body>
</html>