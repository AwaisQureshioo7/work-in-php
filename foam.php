<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <section class = "container">
        <div class="row justify-content-center">
            <div class="col-6">
                <form method ="post" >
                <label>user name</label>
                <input type="text" name = "username" placeholder = "Enter your Name" class ="form-control">
                <label>user Email</label>
                <input type="text" name = "useremail" placeholder = "Enter your Name" class ="form-control">
                <label>user Phone</label>
                <input type="text" name = "PhoneNo" placeholder = "Enter your Name" class ="form-control">
                <label>user Massage</label>
                <input type="" name = "userMassage" placeholder = "Enter your massage" class ="form-control">
                <button class ="btn" name ="butt" >Sumbit Form</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
   <?php
     if(isset($_POST{"butt"})){
        $name = $_POST["username"];
        $email = $_POST["useremail"];
        $phone = $_POST["PhoneNo"];
        $Massage = $_POST["userMassage"];
        echo "User name :".$name."<br>"."User Email :".$email."<br>"."User phone :".$phone."<br>"."User Massage :".$Massage ; 
   }
   ?>