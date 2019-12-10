<?php


	    $name=$_POST['name'];
		$message=$_POST['message'];
		$email=$_POST['email'];
   require 'PHPMailer-master\PHPMailerAutoload.php';
    $mail= new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPDebug = 1;                                                                        
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl'; 
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 465;
    $mail->Username = 'alih0780@gmail.com';                 
    $mail->Password = 'AliRazaHassan';                           
    $mail->setFrom('alih0780@gmail.com', 'Student');
    $mail->addAddress($email, $name);                 
    $mail->isHTML(true);                                 
    $mail->Subject = 'Thanks For Your Time';
    $mail->Body    = $message;
    $mail->send();

 header('location:student_d.php');
?>
