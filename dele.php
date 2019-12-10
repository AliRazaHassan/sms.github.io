<?php

$con=mysqli_connect('localhost','root','','project');
$rollno=$_POST['data'];
    $q="DELETE FROM `users`where rollno='$rollno'";
   $result=mysqli_query($con,$q);

    




?>


