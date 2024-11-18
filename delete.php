<?php

include("conection.php");
 
$getdelete = $_GET['id'];

$del_query = "DELETE FROM users WHERE id = $getdelete";
$del_result = mysqli_query($con,$del_query);
if($del_result){
  header("location:cnt.php");
}else{
    
}

?>