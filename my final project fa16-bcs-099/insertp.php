<?php 
$con=mysqli_connect('localhost','root','','project');
extract($_POST);
if(isset($_POST['submit'])){
$q="INSERT INTO users( name,usr_id, picture, fathername, Dob, password, class_id, notification) VALUES ('$name','$user_id','','$fathername','$dob','$password','$class_id','$notification')";
$result=mysqli_query($con,$q);
    if($result){
        echo("data inserted succefully");
        header('location:admindash.php');
    }
    else{
        echo("error occor");
    }
}
?>