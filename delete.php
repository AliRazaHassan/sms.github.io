<?php
$con=mysqli_connect('localhost','root','','project');
extract($_POST);
if(isset($_POST['delete']))
{
    $q="select * from users where rollno='$rollno'";
   $result=mysqli_query($con,$q);
    
}



?>