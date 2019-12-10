<?php

$con=mysqli_connect('localhost','root','','project');
$rollno=$_POST['data'];
$q="select * from marks where id='$rollno'";
$res=mysqli_query($con,$q);
 $response = array();
        while ($row=mysqli_fetch_assoc($res)) {
            $response=$row;
            echo json_encode($response);
        }

    
?>