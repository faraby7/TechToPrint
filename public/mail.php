
  <?php

if (!empty($_POST['Name']) && !empty($_POST['email']) && !empty($_POST['Num'])) { 
  
  sleep(3);
  session_start();
// require_once 'mailerClass/class.php';
 require_once 'PhpMail/mailerClass/PHPMailerAutoload.php';
 
 $mail = new PHPMailer;
 
 //Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
$mail->AddEmbeddedImage($_SESSION['id_image'], '1');

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
	
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "mido.berrada95@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "123456azerty";

//Set who the message is to be sent from
$mail->setFrom('mido.berrada95@gmail.com', 'mido');

//Set an alternative reply-to address
//$mail->addReplyTo('replyto@example.com', 'First Last');

//Set who the message is to be sent to
$mail->addAddress('mido.berrada95@gmail.com', 'youssef');

//Set the subject line
$mail->Subject = 'ClientTechToPrint ';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));

$mail->Body = ' <!DOCTYPE html>
<html>
<head>
<style >

h2 {
   font: 400 18px/1.6 "Source Sans Pro",sans-serif;
   font-size: 18px;
  margin: 3em auto;
  width: 98%;
  max-width: 360px;
  font-weight: 300;
  color:#Bfbf;
}


</style>
</head>
<body>
<p>
<h3>
First Name & Last Name : '.$_POST['Name'].''.$_SESSION['id_image'].' <br>
Email                  :'.$_POST['email'].'   <br>
phone number           : '.$_POST['Num'].'  <br>
Commentaire               : '.$_POST['Comments'].'  <br>
Country                   : '.$_POST['country'].'<br>
How did you hear about us?: '.$_POST['howdidyou'].'
</h3><br>



</p>
  <img src="cid:1" >
  
</body>
</html>';

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
$mail->isHTML(true);  
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} 

}
?>


