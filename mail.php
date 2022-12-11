<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';

    // create an instance; passing `true` enables exceptions;
    $mail = new phpmailer(true);
    $mail->isSMTP();                                             //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                                 //Set the SMTP server to gmail
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'dreemerups@gmail.com';                           //your gmail
    $mail->Password   = 'xxyxsadbpmwawend';                        //SMTP password you can get it via the second part verification from your google account.
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = mailer::ENCRYPTION_STARTTLS`
    
    //Content format
    $mail->isHTML(true);        //Set email format to HTML
    $mail->CharSet = "UTF-8"; 

?>