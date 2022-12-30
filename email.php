<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';


   

if (isset($_POST['submit'])) {
    $message = 'nama: '.$_POST['nama'].'<br>';
    $message .= 'email: '.$_POST['email'].'<br>';
    $message .= $_POST['pesan'];

    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'kristinasinaga2710@gmail.com';
    $mail->Password = get_cfg_var('smtp_password');
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('kristinasinaga2710@gmail.com');

    $mail->addAddress('kristinasinaga2710@gmail.com');

    $mail->isHTML(true);

    $mail->Subject = $_POST['subject'];
    $mail->Body = $message;

    $mail->send();
    header('Location: index.php');

    
    
    
}
        
?>