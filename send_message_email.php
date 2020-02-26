<?php


include "./dbconnection.php";


    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message =$_POST['message'];
   
  send_email($name,$email,$phone,$message);


    function send_email($name,$email,$phone,$message){
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
   
<table class="table">
        
        <tbody>
            <tr>
                <td>NAME</td>
                <td>' . $name . '</td>
                
            </tr>
            <tr>
                <td>Email</td>
                <td>' . $email . '</td>
                
            </tr>
            <tr>
                <td>Phone</td>
                <td>' . $phone . '</td>
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
$mail->Subject = "User Message";   //Sets the Subject of the message
$mail->Body = "$output";    //An HTML or plain text message body
if ($mail->Send()) {        //Send an Email. Return true on success or false on error
    $message = '<label class="text-success">Agreement Details has been send successfully...</label>';
}

    
    
    
    
    
}



    
    
    




?>
