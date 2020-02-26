<?php

/* Getting file name */
include "./dbconnection.php";
//$id = $_POST['id'];
//
$path1;
$path2;
$path3;



 $sql = "SELECT * FROM `focus_user_document` WHERE User_id = 1  LIMIT 1";
    $result = mysqli_query($connect, $sql);

    $row = mysqli_fetch_array($result);
    if (mysqli_num_rows($result) > 0) {
        
         $path1 = $row['Cv_path'];
        $path2= $row['transcript_path'];
        $path3=$row['IELTS_path'];
     
    } else {
        
       
       
    }


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

