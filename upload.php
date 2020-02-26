<?php

/* Getting file name */
include "./dbconnection.php";
$id = $_POST['id'];
$name = $_POST['name'];
$filename = $_FILES['attach']['name'];
$filename1 = $_FILES['attach_trans']['name'];
$filename2 = $_FILES['attach_IELTS']['name'];
/* Location */

$ext = pathinfo($_FILES['attach']['name'], PATHINFO_EXTENSION);
$ext1 = pathinfo($_FILES['attach_trans']['name'], PATHINFO_EXTENSION);
$ext2 = pathinfo($_FILES['attach_IELTS']['name'], PATHINFO_EXTENSION);



$filename_1 = $id . "." . $name .".CV". "." .$ext;
$filename_2 = $id . "." . $name .".transcript". "." .$ext;
$filename_3 = $id . "." . $name .".IELTS". "." .$ext;

$location = "upload/CV/".$filename_1;
$location1 = "upload/transcript/".$filename_2;
$location2 = "upload/IELTS/".$filename_3;



$location_db = "http://localhost/pcg_site/upload/CV/".$filename_1;
$location1_db = "http://localhost/pcg_site/upload/transcript/".$filename_2;
$location2_db = "http://localhost/pcg_site/upload/IELTS/".$filename_3;



$uploadOk = 1;
$database_flag = 1;


$imageFileType = pathinfo($location,PATHINFO_EXTENSION);
$imageFileType1 = pathinfo($location1,PATHINFO_EXTENSION);
$imageFileType2 = pathinfo($location2,PATHINFO_EXTENSION);
//$imageFileType = pathinfo($location,PATHINFO_EXTENSION);

/* Valid Extensions */
$valid_extensions = array("pdf","doc","docx");
/* Check file extension */
if( !in_array(strtolower($imageFileType),$valid_extensions) ) {
   $uploadOk = 0;
}
if( !in_array(strtolower($imageFileType1),$valid_extensions) ) {
   $uploadOk = 0;
}
if( !in_array(strtolower($imageFileType1),$valid_extensions) ) {
   $uploadOk = 0;
}

if($uploadOk == 0){
   echo 0;
}else{
   /* Upload file */
//   if(move_uploaded_file($_FILES['attach_IELTS']['tmp_name'],$location2)){
//     // echo $location;
//   }else{
//      echo 0;
//   }
    
    
    move_uploaded_file($_FILES['attach_IELTS']['tmp_name'],$location2);
    move_uploaded_file($_FILES['attach']['tmp_name'],$location);
    move_uploaded_file($_FILES['attach_trans']['tmp_name'],$location1);
    
    $database_flag = 0 ;
    
    
}




if($database_flag == 0){
  
    
    $sql = "SELECT * FROM `focus_user_document` where User_id='$id'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result);
    if (mysqli_num_rows($result) > 0) {
         $query = mysqli_query($connect, "UPDATE `focus_user_document` SET `Cv_path`='$location_db',`transcript_path`='$location1_db',`IELTS_path`='$location2_db',`path1`='$location',`path2`='$location1',`path3`='$location2' WHERE User_id='$id'");
    } else {
       $query = mysqli_query($connect, "INSERT INTO `focus_user_document`(`User_id`,`Cv_path`, `transcript_path`, `IELTS_path`, `path1`, `path2`, `path3`) VALUES ('$id','$location_db','$location1_db','$location2_db','$location','$location1','$location2')");
    }
    
    
    
    
}else{
 
  
}
