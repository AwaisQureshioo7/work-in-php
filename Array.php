<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php

// $ak = array("Awais","Ubaid","Salik","Hammad","Atif");
// change value
// $ak [1] = "Ali";
//    echo "Name :".$ak[1]."<br>"."Name :".$ak[0]; 
   // var_dump($ak);

//    $bk = ["Awais","Qureshi","Great"];
// foreach($bk as $kb){
//     echo $kb."<br>";
// };



// Associative array 

//    $ass = ["user1"=>"Awais","Phone"=> 312585,"Email"=>"Ak123@gmail.com","Address"=>"sector 7bsurjanit town karachi"];
//    $ass1 = ["user2"=>"Ubaid","Phone"=> 322885,"Email"=>"Ub123@gmail.com","Address"=>"sector 7bsurjanit town karachi"];
//    $ass2 = ["user3"=>"Noor","Phone"=> 38575,"Email"=>"noor123@gmail.com","Address"=>"block 2 defance  karachi"];
//    $ass3 = ["user4"=>"Zahak","Phone"=> 312585,"Email"=>"Zk123@gmail.com","Address"=>"sector 7bsurjanit town karachi"];

//    foreach($ass as $a =>$b ){
//     echo $a.$b."<br>";
//     echo "<br>";
//    };
//    echo "<br>";
//    foreach($ass1 as $i =>$f ){
//     echo $i.$f."<br>";
//     echo "<br>";
//    };
//    echo "<br>";
//    foreach($ass2 as $n =>$m ){
//     echo $n.$m."<br>";
//     echo "<br>";
//    };
//    echo "<br>";
//    foreach($ass3 as $o =>$p ){
//     echo $o.$p."<br>";
//     echo "<br>";
//    };
// Add value in Array
     
    //   $i = array("Awais","Qureshi");
    //   $i[] = "speacail";
    //   echo $i[1];
    
// Add value in Associative array
    //  $k = [ "Name" =>"Awais","Work" => "php"];
    //  $k ["Want"] = "Developer"; 
    //  $k ["age"] = 30;
    //  $k ["age"]  = 40; 
    //  echo $k["age"];
     
// function push array
    // $lb = ["Awais","001","here"];
    //   array_push($lb,"only","Ak");
    //   foreach($lb as $bl){
    //     echo $bl."<br>";
    //   };


    // remove values in array

    // $cl = ["Ak","Qureshi",5254,001,554];
    // //  array_splice($cl,3,2);
    // unset($cl[3]);
    //  foreach($cl as $lc){
    //     echo $lc."<br>";
    //  };

//   remove values in  Associative array
      
    //  $dk = array("Name"=>"zohaib","Name2" =>"Zahak","Name3" =>"Ak","Num1" => 5540 ,"num2" =>002);
    //  unset($dk ["Name2"], $dk["Name3"]);
    //  foreach($dk as $kd => $ld){
    //     echo $kd.":".$ld;
    //  };

    // sort function in Array

    // $ak = ["Awais","Ubaid","iffra","Robab"];
    // // sort($ak);
    // rsort($ak);
    // foreach($ak as $ka){
    //     echo $ka."<br>";
    // };
    $zk = array("fge"=>2,"bag"=>8,"cat"=>12,"eat"=> 6,"Age4"=>4,"tree"=>10);
    ksort($zk);
    foreach($zk as $kz =>$z){
         echo $kz.$z."<br>";
    }
?>
</body>
</html>