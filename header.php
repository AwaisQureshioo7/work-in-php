<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            overflow-x: hidden;
        }
        .main-sec{
            
        }
        .main1{
            color: white;
            background-color: #333;
            padding: 10px;
            margin-bottom: 20px;
        }
        .logo{
            text-align: center;
            margin-bottom: 20px;
            /* background-color: grey; */
            padding: 10px;
        }
        .logo p{
            margin-top: 10px;
            font-size: 20px;
            font-weight: bold;
        }
        .logo img{
            width: 50%;
            border-radius: 80px;
            height: auto;
        }
        .line{
            width: 100%;
            height: 2px;
            background-color: #ccc;
        }
        .buton {
            background-color: red;
            margin-left: -20px;
            color: white;
            padding: 15px;
            border: none;
            cursor: pointer;
            font-size: 20px;
            border-top-left-radius:10px;
            border-bottom-left-radius:10px;
            

        }
        .main-profile{
            height: fit-content;
            background-color: orange;
            border-end-end-radius:20px ;
            border-top-left-radius:20px ;
            
        }
        .profile{
            /* background-color: grey; */
            padding: 8px;
            margin-left: 70px;
            width: 70px;
        }
        .user-heading h3 ,h4 {
            margin: 20px 45px;
        }
        .usr-details{
            cursor: pointer;
            
        }
        .list{
            display: none;
        }
        .user-heading ul li{
            line-height: 3;
            margin: 10px 30px;
        }
        .user-heading ul,li,a{
            text-decoration: none;
            color: #ccc;
        }
        .drop i {
           margin-top: 30px;
           margin-left: -20px;
            font-size: 15px;
            cursor: pointer;
            
        }
        
        .drop h6{
            font-size: 17px;
            margin-top: 30px;
        }
        .fa-chevron-circle-down{
            position: relative;
        }
        .logout{
          background-color: #333;
         height: fit-content;
          padding: 30px 20px 10px  0px;
          text-align: center;
          cursor: pointer;
          position: absolute;
          right: 20px;
          top: 50px;
          font-size: 13px;
          width: fit-content;
          display: none;
        }
        .logout ul{
            list-style: circle;
        }
        .frm{
            position: absolute;
            top: 50%;
            left: 60%;
            transform: translate(-50%, -50%);
            width: 52%;
        }
    </style>
</head>
<body>
<section class="row  main-sec ">
    <div class="col-3 main1">
        <div class="col-8 logo">
            <img src="imges/17493.jpg" alt="" class="img-fluid">
            <p><?php echo $_SESSION['Admin']; ?></p>
        </div>
        <div class="line"></div>
        <div class="user-heading">
            <h3>dasboard</h3>
            <h4 style="color:red;" class="usr-details"><u>user</u></h4>
            <div class="list">
            <ul>
            <li><button type="button" class="btn btn-primary">Add User</button></li>
        <li><button type="button" class="btn btn-success">Read Users</button></li>
        <li><button type="button" class="btn btn-warning">Update Users</button></li>
        <li><button type="button" class="btn btn-danger">Delete Users</button></li>
            </ul>
            </div>
        </div>
    </div>

    <div class="col-6">
        <div class="buton col-1">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </div>
    </div>
    <div class="col-3 row  main-profile">
        <div class=" profile ">
            <img src="imges/images.jpeg" alt="" class="img-fluid">
            </div>
            <div class="col-4 drop">
            <h6>Mr Setting</h6>
        </div>
        <div class="col-2 drop ">
             <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
             <div class="logout">
                <ul>
             <li><a href="">setting</a></li>
             <li><a href="logout.php">logout</a></li>
             </ul>
             </div>
        </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function(){
        $(".fa-chevron-circle-down").click(function(){
            $(".logout").fadeToggle()
    })
    $(".usr-details").click(function(){
            $(".list").slideToggle()
    })
    })
   
</script>
</body>
</html>