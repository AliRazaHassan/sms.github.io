<?php
$con=mysqli_connect('localhost','root','','project');
$rolno=$_POST['rollno'];
$sect_id=$_POST['section'];
$status=$_POST['value'];
$today = date("Y-m-d");

$q="INSERT INTO `attandance`( `date`, `rollno`, `sect_id`, `Status`) VALUES ('$today','$rolno','$sect_id','$status')";
$re=mysqli_query($con,$q);
if($re)
{
    echo("data inserted successfully");
}
else{
    echo("data is not inserted// or Already updated in that day.....");
}

?>