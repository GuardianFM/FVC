<!DOCTYPE html>
//<?php 
//function fetch_customer_data() {

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
body {
  background: rgb(204,204,204); 
}
page {
  background: white;
  display: block;
  margin: 0 auto;
  margin-bottom: 0.5cm;
  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
}
page[size="A4"] {  
  width: 21cm;
  height: 29.7cm; 
}
page[size="A4"][layout="landscape"] {
  width: 29.7cm;
  height: 21cm;  
}
page[size="A3"] {
  width: 29.7cm;
  height: 42cm;
}
page[size="A3"][layout="landscape"] {
  width: 42cm;
  height: 29.7cm;  
}
page[size="A5"] {
  width: 14.8cm;
  height: 21cm;
}
page[size="A5"][layout="landscape"] {
  width: 21cm;
  height: 14.8cm;  
}
@media print {
  body, page {
    margin: 0;
    box-shadow: 0;
  }
}    


</style>
</head>
<body>
    <page size="A4"><div class="bs-example" style="width:70%;">
    <br>
     <br>
      <br>
    <h3 style="text-align: center;">Apply Form</h3>
    <br>
    <br>
    <table class="table">
        
        <tbody>
            <tr>
                <td>NAME</td>
                <td>Clark</td>
                
            </tr>
            <tr>
                <td>Date of Birth</td>
                <td>John</td>
                
            </tr>
            <tr>
                <td>Address</td>
                <td>Peter</td>
            </tr> 
            
             <tr>
                <td>POST/zip Code</td>
                <td>Clark</td>
                
            </tr>
            <tr>
                <td>Which City you are from ?</td>
                <td>John</td>
                
            </tr>
            <tr>
                <td>Program of Interest</td>
                <td>Peter</td>
            </tr> 
        
        
         <tr>
                <td>Please Indicate Subject of Interest</td>
                <td>Clark</td>
                
            </tr>
            <tr>
                <td>Qualification Name</td>
                <td>John</td>
                
            </tr>
            <tr>
                <td>Country of Interest</td>
                <td>Peter</td>
            </tr> 
            
            
             <tr>
                <td>Have you taken any English Language Tests (ex. TOEFL/IELTS etc):</td>
                <td>Peter</td>
            </tr> 
        
        
         <tr>
                <td>If yes, English Test Score</td>
                <td>Clark</td>
                
            </tr>
            <tr>
                <td>For assistance in preparing for English exam, please select one:</td>
                <td>John</td>
                
            </tr>
            <tr>
                <td>Message</td>
                <td>Peter</td>
            </tr> 
            
            
            
            
            
            
        </tbody>
    </table>
</div>

<iframe src="upload/CV/page.pdf" type="application/pdf" style="width:600px; height:500px;" frameborder="0"></iframe>


</page>
</body>
</html>';



echo $output;
//  return $output;
//
//}





//include('pdf.php');
//$file_name = md5(rand()) . '.pdf';
//$html_code = '<link rel="stylesheet" href="bootstrap.min.css">';
//$html_code .= fetch_customer_data();
//$pdf = new Pdf();
//$pdf->load_html($html_code);
//$pdf->render();
//$file = $pdf->output();
//file_put_contents($file_name, $file);
//
//require 'class/class.phpmailer.php';
//$mail = new PHPMailer;
//$mail->IsSMTP();        //Sets Mailer to send message using SMTP
//$mail->Host = 'send.one.com';  //Sets the SMTP hosts of your Email hosting, this for Godaddy
//$mail->Port = 2525;         //Sets the default SMTP server port
//$mail->SMTPAuth = true;       //Sets SMTP authentication. Utilizes the Username and Password variables
//$mail->Username = 'info@etaksi.co.uk';     //Sets SMTP username
//$mail->Password = 'etaksi2009';     //Sets SMTP password
//$mail->SMTPSecure = 'tls';       //Sets connection prefix. Options are "", "ssl" or "tls"
//$mail->From = 'info@etaksi.co.uk';   //Sets the From email address for the message
//$mail->FromName = 'Guardian FM HR';   //Sets the From name of the message
//$mail->AddAddress('aliahmed6834@gmail.com', 'Guardian FM HR');  //Adds a "To" address
////$mail->addCC('accounts@guardianfm.co.uk', 'Guardian FM HR');
////$mail->addCC('hr@guardianfm.co.uk', 'Guardian FM HR');
//$mail->WordWrap = 50;       //Sets word wrapping on the body of the message to a given number of characters
//$mail->IsHTML(true);       //Sets message type to HTML				
//$mail->AddAttachment($file_name);         //Adds an attachment from a path on the filesystem
//$mail->Subject = 'Officer ';   //Sets the Subject of the message
//$mail->Body = 'Please Find The Officer ';    //An HTML or plain text message body
//if ($mail->Send()) {        //Send an Email. Return true on success or false on error
//    $message = '<label class="text-success">Agreement Details has been send successfully...</label>';
//}
//unlink($file_name);








//}

?>
                