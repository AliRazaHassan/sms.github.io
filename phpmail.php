<?php
session_start();
$rollno=$_SESSION['uid'];
echo $rollno;

$con=mysqli_connect('localhost','root','','project');
$q="select name from users where rollno='$rollno'";
$result=mysqli_query($con,$q);
while($res=mysqli_fetch_array($result))
{
    $name=$res['name'];
}




    $na=$name;
    $email="alih0780@gmial.com";
    $comment=$_POST['message'];
    $to="raistalalkhan@gmail.com";
    $headers="From:$name<$email>";
    $message="Name:$na\n\nEmail:$email\n\n Subject:$subject\n\nMessage:$comment";
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
    $mail->addAddress($to, $na);                 
    $mail->isHTML(true);                                 
    $mail->Subject = 'Thanks For Your Time';
    $mail->Body    = $comment;
    $mail->send();

 header('location:student_d.php');

?>