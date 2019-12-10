<?php
session_start()
$rollno=$_SESSION['uid'];
$pass=$_POST['datasend'];
$q="select password from users where rollno='$rollno'";
$res=mysqli_query($con,$q);
while($result=mysqli_fetch_array($res))
{
     $re=$result['password'];
    if($re===$pass)
    {
        echo" data Match";
    }
    else
    {
         echo" data not Match";
    }
}

    
?>