<?php
session_start();
include "./dbconnection.php";
 
 $email=$_POST['user_email'];
 $pass=$_POST['user_password'];
 $Sql_Query = "select * from pcr_user where Email = '$email' and Password = '$pass'";
 $check = mysqli_query($connect,$Sql_Query);
 
 if(mysqli_num_rows($check)){
     
     
     
      $row = mysqli_fetch_assoc($check);
      $_SESSION['email']=$row['Email'];
  $_SESSION['user_id']=$row['id'];
     echo "success";
  }
 else{
 echo "Invalid Username or Password Please Try Again";
 }
 
 mysqli_close($connect);
 ?>