<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'server133.web-hosting.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'mailsend@dahunting.com';                 // Наш логин
$mail->Password = 'passwordsend';                           // Наш пароль от ящика
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
 
$mail->setFrom('mailsend@dahunting.com', 'dahunting.com');   // От кого письмо 
$mail->addAddress('chopikvitali@yandex.by');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Application from the site';
$mail->Body    = '
	User left their data <br> 
	User Name: ' . $name . ' <br>
	User e-mail: ' . $email . ' <br>
	User message: ' . $message . '';
$mail->AltBody = 'This is an alternate text';

if(!$mail->send()) {
    return false;
} else {
    return true;
}

?>