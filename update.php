<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
    }
   .update-main {
    position: absolute;
    top: 40%;
    left: 85%;
    transform: translate(-50%, -50%);
   }
</style>
<body>
    <?php
    include("session.php");
    include("header.php");
     include("conection.php");
     $getdata = $_GET['id'];
     $qur = "SELECT * FROM users where id = $getdata";
     $qryrun = mysqli_query($con,$qur) or die("qurey field");
    //  if( $num1 = mysqli_num_rows($qryrun) > 0){
         $row = mysqli_fetch_assoc($qryrun);
    //  }
    
    ?>
  
    <section class="container update-main">
        <div class="row">
            <div class="col-6">
                <form action="" method="post">
                    <label for="">id</label>
                    <input type="text" name="up-id" placeholder="id" class="form-control" value="<?php echo $row['id'];?>">
                    <label for="">Name</label>
                    <input type="text" name="up-name" placeholder="Enter your Name" class="form-control" value="<?php echo $row['Name']; ?>">
                    <label for="">Email</label>
                    <input type="text" name="up-email" placeholder="Enter your Email" class="form-control" value="<?php   echo $row['Email']; ?>">
                    <label for="">Phone</label>
                    <input type="text" name="up-phone" placeholder="Enter your phone num" class="form-control" value="<?php  echo $row['phone'];?>">
                     <input type="submit" name="update-btn" class="form-control btn-danger" value="Update">
                </form>
            </div>
        </div>
    </section>
</body>
</html>
<?php

if(isset($_POST['update-btn'])){
    $up_id = $_POST['up-id'];
    $up_name = $_POST['up-name'];
    $up_email = $_POST['up-email'];
    $up_phone = $_POST['up-phone'];
    
    $up_query = "UPDATE users  SET 
    id= $up_id, 
    Name = '$up_name' ,
     Email = '$up_email' , 
     phone = $up_phone  
      WHERE  id = $getdata" ;
    $updatrun = mysqli_query($con,$up_query);
     if($updatrun){
        echo "<script>alert('your record updated')</script>";
        header("location: cnt.php");
     }
    
}

?>