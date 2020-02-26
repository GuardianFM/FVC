<?php
session_start();
include "./dbconnection.php";
 
 $email=$_POST['user_email'];
 $pass=$_POST['user_password'];
  $CheckSQL = "SELECT * FROM pcr_user WHERE Email='$email'";
 
 $check = mysqli_fetch_array(mysqli_query($connect,$CheckSQL));
 
 if(isset($check)){

 echo 'Email Already Exist';

 }
 else{
     
     
 $Sql_Query = "INSERT INTO `pcr_user`(`UserName`, `Email`, `Password`) VALUES ('$email','$email','$pass')";

 if(mysqli_query($connect,$Sql_Query))
{
 echo 'Registration Successfully';
  $_SESSION['email']=$email;
 }
else
{
 echo 'Something went wrong';
 }
 }
 
 mysqli_close($connect);
 ?>

