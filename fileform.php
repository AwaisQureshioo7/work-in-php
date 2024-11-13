<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
  <style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
        
    }
    body{
        background-image: url('user-data/mag.jpg');
        background-repeat: no-repeat;
        background-size: cover;
    }
    .main{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 60px;
        border-top-left-radius: 50px;
        border-bottom-right-radius: 100px;
        color: red;
        font-weight: 550;
        font-size: 20px;
        background: rgba( 255, 255, 255, 0.25 );
            /* background: rgba(white); */
            box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
            backdrop-filter: blur( 4px );
           -webkit-backdrop-filter: blur( 4px );
           
    }

    .main1{
        background-color: ;
        line-height: 3;
    }

  </style>
<body>
    
   <section class="container"></section>
     <div class="main col-5">
        <center>
     <h4 style="color :white;">Appaly For JOB Form</h4>
     </center>
        <div class="col-12 main1">
            <form action="" method="post" enctype="multipart/form-data">
                <label for="">Your Name</label>
                <input type="text" value="" name="username" class="form-control" placeholder="Enter your name ">
                <label for="">Your Phone#</label>
                <input type="number" value="" name="userphone" class="form-control" placeholder="Enter your pH#">
                <label for="">Your Email</label>
                <input type="email" value="" name="useremail" class="form-control" placeholder="Enter your Email">
                <label for="">Your CV</label>
                <input type="file" value="" name="file" class="form-control" placeholder="">
                <button name="btn" class="form-control btn-dark mt-4">submit</button>
            </form>
        </div>
     </div>
   </section>
</body>
</html>


 <?php
//  echo"<pre>";
//      $us = $_FILES['file'];
//     print_r($_FILES);
//     echo"</pre>";
    if(isset($_POST['btn'])){
        if(isset($_POST['username'],$_POST['userphone'],$_POST['useremail'],$_FILES['file'])){
        $uname =  $_POST['username'];
        $uphone =  $_POST['userphone'];
        $uemail =  $_POST['useremail'];
        
        $ucv =  $_FILES['file'];
        
        $file_name  = $_FILES['file']['name'];
        $file_temp_name  = $_FILES['file']['tmp_name'];
        $file_size  = $_FILES['file']['size'];
        $file_ext = $_FILES['file']['type'];
        $location = 'user-data/';
        $size = 2 * 1024 * 1024;
        $allowed_type = ['image/jpg', 'image/jpeg', 'image/png','image/jfif' , 'image/pdf'];
        if($file_size < $size && in_array($file_ext , $allowed_type) ){
            if(  move_uploaded_file($file_temp_name,'user-data/'.$file_name) ){
            }
        }
        else{
            echo 'File size is too large';            
            // echo 'File type is not allowed only'.$allowed_type."allowed";
        }

        $serverName = 'localhost';
        $userName = 'root';
        $password = '';
        $dbName = 'aptech';
        
        $con = mysqli_connect($serverName,$userName,$password,$dbName) or  die(' not contected') ;

        if($uname && $uphone && $uemail && $ucv && $file_name && $file_size && $file_ext){
            $query = "INSERT INTO lg (name, Phone , email , cvname)
            VALUE('$uname','$uphone','$uemail','$file_name')";
            $result = mysqli_query($con,$query);
             if($result){
               echo "<script>alert('Data inserted successfully')</script>";
             }
             else{
                echo "<script>alert('Error in inserting data')</script>";
             }
        }else{
            echo "<script>alert('Fill all fields')</script>";
        }
     
    }
    }
    
 ?>