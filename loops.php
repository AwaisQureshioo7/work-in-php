<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
    </style>
</head>
<body>
    <div style = " background-color: rgb(59,60,61);
background: linear-gradient(90deg, rgba(59,60,61,1) 0%, rgba(0,0,0,1) 100%, rgba(20,20,20,1) 100%, rgba(190,68,136,1) 100%);color:red; display:flex; gap:60px; margin-top:30px; padding:50px;">
    <div>
        <h3 style = "color:white;" >Table of 2</h3>
        <?php
    $tab = 2;
    for($i=1; $i<=10; $i++){
        echo $tab." * ".$i." = ".$tab*$i."<br>";
    };
    ?>
    </div>
    <div>
    <h3 style = "color:white;">Table of 3</h3>
        <?php
    $tab3 = 3;
    for($b =1; $b<=10; $b++){
        echo $tab3." * ".$b." = ".$tab3*$b."<br>" ;
    };
    ?>
    </div>
    <div>
    <h3 style = "color:white;">Table of 4</h3>
        <?php
    $tab4 = 4;
    for($b =1; $b<=10; $b++){
        echo $tab4." * ".$b." = ".$tab4*$b."<br>" ;
    };
    ?>
    </div>
    <div>
    <h3 style = "color:white;">Table of 5</h3>  
    <?php
    $tab5 = 5;
    for($b =1; $b<=10; $b++){
        echo $tab5." * ".$b." = ".$tab5*$b."<br>" ;
    };
    ?>
    </div>
    <div>
    <h3 style = "color:white;">Table of 6</h3>
        <?php
    $tab6 = 6;
    for($b =1; $b<=10; $b++){
        echo $tab6." * ".$b." = ".$tab6*$b."<br>" ;
    };
    ?>
    </div>
    <div>
    <h3 style = "color:white;">Table of 7</h3>
        <?php
    $tab7 = 7;
    for($b =1; $b<=10; $b++){
        echo $tab7." * ".$b." = ".$tab*$b."<br>" ;
    };
    ?>
    </div>
    <div>
    <h3 style = "color:white;">Table of 8</h3>
        <?php
    $tab8 = 8;
    for($c=1; $c<=10;$c++){
        echo $tab8."*".$c."=".$tab8*$c."<br>";
    };
    ?>
    </div>
    <div>
    <h3 style = "color:white;">Table of 9</h3>
        <?php
    $tab9 = 9;
    for($c =1;$c <=10;$c++){
        echo $tab9."*".$c."=".$tab9*$c."<br>";
    };
    ?>
    </div>
    <div>
    <h3 style = "color:white;">Table of 10</h3>
        <?php
    $tab10 = 10;
    for($c =1;$c <=10;$c++){
        echo $tab10."*".$c."=".$tab10*$c."<br>";
    };
    ?>
    </div>
    </div>


  
</body>
</html>