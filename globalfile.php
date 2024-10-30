<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <section class ="container">
        <div class = "justify-content-center ">
            <div class = "col-6">
                <form  method="post" enctype ="multipart/form-data">
                    <label>user name</label>
                    <input type="text" name = "username">
                    <label>age</label>
                    <input type="text" name ="age">
                    <label>upload file</label>
                    <input type="file" name = "upfile">
                    <br>
                    <br>
                    <button name = "img-but" type ="submit">upload img</button>
                </form>
            </div>
        </div>
    </section>
</body>
</htm
  <?php
   if(isset($_FILES["upfile"])){
   
    $location = "user-data/";
    $file_name = $_FILES ["upfile"]["name"];
    $file_temp_name = $_FILES ["upfile"]["tmp_name"];
    $filesize = $_FILES ["upfile"]["size"];
    $size = 200000;
    if($filesize < $size){
        if(move_uploaded_file( $file_temp_name,$location.$file_name)){
            echo "File uploaded successfully";
        }
        else{
            echo "Error in uploading file";
        }
    }
    else{
        echo "<br>";
        echo "file size is too large";
    }
   }
   ?>