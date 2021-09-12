<?php
require './PHPMailer/PHPMailerAutoload.php';
require './config.php';
require 'credentials.php';
$Id = $_GET['id'];
echo $Id;
$user_query = "SELECT email, username FROM users WHERE id='".$Id."'"; 

$result = mysqli_query($conn, $user_query);
$user = mysqli_fetch_assoc($result);

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = EMAILID;                 // SMTP username
$mail->Password = PASSWORD;                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom(EMAILID, 'Mailer');
$mail->addAddress($user['email']);     // Add a recipient
echo $user['email'];
// $mail->addAddress('ellen@example.com');               // Name is optional
 $mail->addReplyTo(EMAILID, 'Mailer');
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Link for Changing the password for BlogWorld';
$mail->Body    = 'Hello Author,<br>kindly click on the below link for Changing your login password.<br>
<a href="http://localhost/complete-blog-php//changepassword.php?id='.$Id.' ">Click Here</a> <br><br>Regards,<br>Admin<br>BlogWorld.' ;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    header('location: ' . BASE_URL . './login.php');
}

?>