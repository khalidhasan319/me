<?php
  
 require 'assets/vendor/class.phpmailer.php';

require 'assets/vendor/class.smtp.php';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/PHPMailerAutoload.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }





$mail = new PHPMailer;

//Enable SMTP debugging. 
$mail->SMTPDebug = 3;                               
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "hasanadi358@gmail.com";                 
$mail->Password = "fahim1569";                           
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";                           
//Set TCP port to connect to 
$mail->Port = 587;                                   

$mail->From = "hasanadi358@gmail.com";
$mail->FromName = "hasanadi358@gmail.com";

$mail->addAddress("hasanadi358@gmail.com", "Receiver");

$mail->isHTML(true);

$mail->Subject = "Website Mail Testing";
$mail->Body = "<i>Mail body in HTML</i>";
$mail->AltBody = "This is the plain text version of the email content";

if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
    echo "Message has been sent successfully";
}
?>
