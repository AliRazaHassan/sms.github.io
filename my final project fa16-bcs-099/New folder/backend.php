<?php
$con=mysqli_connect('localhost','root','','book');
extract($_POST);
if(isset($_POST['submit'])){
$q="INSERT INTO books(id, title, author, price) VALUES ('$isbn','$title','$author','$price')";
mysqli_query($con,$q);}
?>