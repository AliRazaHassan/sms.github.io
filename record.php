<?php
$con=mysqli_connect('localhost','root','','project');
extract($_POST);
if(isset($_POST['submit']))
{
    $q="UPDATE `users` SET `name`='$name',`fathername`='$fathername',`Dob`='$dob',`password`='$password',`notification`='$notification' WHERE rollno='$rollno'";
    $result=mysqli_query($con,$q);
    if($result)
    {
    echo"result updated succefully";
        header('location:admindash.php');
        
    }
    else{
        echo"some error eccor";
    }
    
}


?>