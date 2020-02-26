<?php


include "./dbconnection.php";




    $user_id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $street_address = $_POST['street_address'];
    $zip_code =$_POST['zip_code'];
    $u_email = $_POST['u_email'];
    $mobile = $_POST['mobile'];
    $which_city = $_POST['which_city'];
    $sb_int = $_POST['sb_int'];
    $qualification_name = $_POST['qualification_name'];
    $destination_country = $_POST['destination_country'];
    $language_tests = $_POST['language_tests'];
    $english_exam = $_POST['english_exam'];
    $message =$_POST['message'];
    $em_name = $_POST['em_name'];
    $em_phone = $_POST['em_phone'];
    $em_email = $_POST['em_email'];
   $em_address = $_POST['em_address'];
   $english_test_score =  $_POST['english_test_score'];
   $highest_qualification =  $_POST['highest_qualification'];
    $link1 ="abc";
    $link2 ="abc";
    $link3 ="abc";

    
    
    $fullname = $fname .' '. $lname;
    
    
    
$date1=date_create($dob);
$dob = date_format($date1,"Y-m-d");

    
$sql = "INSERT INTO `focusvisaconsultants_applicant`(`User_id`, `fname`, `lname`, `dob`, `street_address`, `zip_code`, `u_email`, `mobile`, `which_city`, `sb_int`, `qualification_name`, `destination_country`, `language_tests`, `english_exam`, `message`, `em_name`, `em_phone`, `em_email`, `em_address`, `link1`, `link2`, `link3`) 
VALUES ('$user_id', '$fname', '$lname','$dob', '$street_address', '$zip_code','$u_email', '$mobile', '$which_city', '$sb_int', '$qualification_name', '$destination_country', '$language_tests','$english_exam', '$message', '$em_name','$em_phone', '$em_email', '$em_address','$link1', '$link2', '$link3')";

if (mysqli_query($connect, $sql)) {
    echo "New record created successfully";
 send_email($fullname,$dob,$street_address,$zip_code,$which_city,$sb_int,$destination_country,$language_tests,$english_exam,$message,$english_test_score,$highest_qualification,$user_id,$qualification_name);
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}










function send_email($fullname,$dob,$street_address,$zip_code,$which_city,$sb_int,$destination_country,$language_tests,$english_exam,$message,$english_test_score,$highest_qualification,$user_id,$qualification_name){
    $output = '<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap 4 Simple Table</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style type="text/css">
    .bs-example{
    	margin: 20px;
        margin-left: auto;
        margin-right: auto;
    }
</style>
</head>
<body>
    <div class="bs-example" style="width:70%;">
 <h3 style="text-align: center;">Apply Form</h3>
    <br>
    <br>    


    <table class="table">
        
        <tbody>
            <tr>
                <td>NAME</td>
                <td>' . $fullname . '</td>
                
            </tr>
            <tr>
                <td>Date of Birth</td>
                <td>' . $dob . '</td>
                
            </tr>
            <tr>
                <td>Address</td>
                <td>' . $street_address . '</td>
            </tr> 
            
             <tr>
                <td>POST/zip Code</td>
                <td>' . $zip_code . '</td>
                
            </tr>
            <tr>
                <td>Which City you are from ?</td>
                <td>' . $which_city . '</td>
                
            </tr>
            <tr>
                <td>Program of Interest</td>
                <td>' . $highest_qualification . '</td>
            </tr> 
        
        
         <tr>
                <td>Please Indicate Subject of Interest</td>
                <td>' . $sb_int . '</td>
                
            </tr>
            <tr>
                <td>Qualification Name</td>
                <td>' . $qualification_name . '</td>
                
            </tr>
            <tr>
                <td>Country of Interest</td>
                <td>' . $destination_country . '</td>
            </tr> 
            
            
             <tr>
                <td>Have you taken any English Language Tests (ex. TOEFL/IELTS etc):</td>
                <td>' . $language_tests . '</td>
            </tr> 
        
        
         <tr>
                <td>If yes, English Test Score</td>
                <td>' . $english_test_score . '</td>
                
            </tr>
            <tr>
                <td>For assistance in preparing for English exam, please select one:</td>
                <td>' . $english_exam . '</td>
                
            </tr>
            <tr>
                <td>Message</td>
                <td>' . $message . '</td>
            </tr> 
            
            
            
            
            
            
        </tbody>
    </table>
</div>
</body>
</html>';
include "./dbconnection.php";

    
$path1;
$path2;
$path3;
$path = 'upload/transcript/1.Ali.transcript.pdf';
$sql = "SELECT * FROM `focus_user_document` WHERE User_id = 1  LIMIT 1";
    $result = mysqli_query($connect, $sql);

    $row = mysqli_fetch_array($result);
    if (mysqli_num_rows($result) > 0) {
        
         $path1 = $row['path1'];
        $path2= $row['path2'];
        $path3=$row['path3'];
    
    } else {
        
       
       
    }

include('pdf.php');
$file_name = md5(rand()) . '.pdf';
$html_code = '<link rel="stylesheet" href="bootstrap.min.css">';
$html_code .= $output;
$pdf = new Pdf();
$pdf->load_html($html_code);
$pdf->render();
$file = $pdf->output();
file_put_contents($file_name, $file);

require 'class/class.phpmailer.php';
$mail = new PHPMailer;
$mail->IsSMTP();        //Sets Mailer to send message using SMTP
$mail->Host = 'send.one.com';  //Sets the SMTP hosts of your Email hosting, this for Godaddy
$mail->Port = 2525;         //Sets the default SMTP server port
$mail->SMTPAuth = true;       //Sets SMTP authentication. Utilizes the Username and Password variables
$mail->Username = 'info@etaksi.co.uk';     //Sets SMTP username
$mail->Password = 'etaksi2009';     //Sets SMTP password
$mail->SMTPSecure = 'tls';       //Sets connection prefix. Options are "", "ssl" or "tls"
$mail->From = 'info@etaksi.co.uk';   //Sets the From email address for the message
$mail->FromName = 'Guardian FM HR';   //Sets the From name of the message
$mail->AddAddress('aliahmed6834@gmail.com', 'Guardian FM HR');  //Adds a "To" address
//$mail->addCC('accounts@guardianfm.co.uk', 'Guardian FM HR');
//$mail->addCC('hr@guardianfm.co.uk', 'Guardian FM HR');
$mail->WordWrap = 50;       //Sets word wrapping on the body of the message to a given number of characters
$mail->IsHTML(true);       //Sets message type to HTML				
$mail->AddAttachment($file_name); 
$mail->AddAttachment($path1);
$mail->AddAttachment($path2);
$mail->AddAttachment($path3);//Adds an attachment from a path on the filesystem
$mail->Subject = 'Officer ';   //Sets the Subject of the message
$mail->Body = 'Please Find The Officer ';    //An HTML or plain text message body
if ($mail->Send()) {        //Send an Email. Return true on success or false on error
    $message = '<label class="text-success">Agreement Details has been send successfully...</label>';
}
unlink($file_name);
    
    
    
    
    
}



mysqli_close($connect);

?>
