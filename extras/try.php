<?php 
$con=mysqli_connect('localhost','root','','formdb');

$q="select * from section where id='1'";
$result=mysqli_query($con,$q);
while($row=mysqli_fetch_array($result)){
             
        
            echo $row['Section'];}
?>
