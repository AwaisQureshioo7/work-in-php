<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            background-image: url('imges/back.avif');
            background-size: cover;
            
        }
        .login-form{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .login-form input{
            margin-bottom: 20px;
            background-color: transparent;
            box-shadow: 0px 0px 15px red;
        }
        .login-form label{
            color: white;
            text-shadow: 0px 0px 20px red;
            margin-bottom: 10px;
        }
        .login-form h1{
            text-align: center;
            margin-bottom: 40px;
            font-size: 30px;
            font-weight: bold;
            color: white;
        }
        .login-form h2{
            text-align: center;
            margin-bottom: 40px;
            font-size: 30px;
            font-weight: bold;
            color: red;
        }
        .login-form img{
            height: 100px;
            opacity: 0.7;
        }
        .btn{
            background-color: blue !important;
            color: white;
        }
       
    </style>
</head>
<body>
  


    
   <section class="container">
     <div class="row">
        <div class="justify-content-center col-6 login-form">
            <div class="col-4 row">
                <img src="imges/images.jpeg" alt="" class=" col-6">
            <h1 class="col-3">Its AWaIs </h1>
            </div>
             <h2>Wellcome back </h2>
            <form action="" method="post">
            <label for="">Name</label>
                <input type="text" placeholder="Enter your email" name="Admin" class="form-control" 
                value="">
                <label for="">Email</label>
                <input type="email" placeholder="Enter your email" name="email" class="form-control" 
                value="">
                <label for="">Password</label>
                <input type="password" placeholder="Enter your Password" name="Password" class="form-control" value="">
                <input type="submit" value="Login" class="btn form-control" name="button">
            </form>
        </div>
     </div>
   </section>
</body>
</html>

<?php

session_start();
if(isset($_SESSION['Admin'])){
   header('location:cnt.php');
}
else{
    $serverName = 'localhost';
     $userName = 'root';
     $password = '';
     $dbName = 'control_penal';
     $con  = mysqli_connect($serverName, $userName, $password,$dbName) or die('Conection field'); 

    if(isset($_POST['button'])){
        $user = $_POST['Admin'];
        $email = $_POST['email'];
        $pass = $_POST['Password'];
    
    
        $qurey = "SELECT * from Addmin_penal where name = '$user' && Email = '$email' && password =  '$pass' ";
        $result = mysqli_query($con, $qurey);
         if($assoc = mysqli_fetch_assoc($result)){
             $_SESSION['Admin'] = $user;
             header('location:cnt.php');
    
         }else{
             echo '<script>alert("field to registered")</script>';
         }
    
    }

}

   




?>