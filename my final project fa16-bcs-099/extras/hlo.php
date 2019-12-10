<?php
$name=$_POST['name'];
$father=$_POST['fathername'];
echo("your name is:".$name." and fathername is ".$father);
$con=mysqli_connect('localhost','root','','shafi') ;
if($con)
{
    echo("ok ");
}
else{
    echo("not connected");
}
$query="insert into  usman(Name,fathername) VALUES ('$name','$father')";
$hasan=mysqli_query($con,$query);
if($hasan)
{
    echo("new record addded");
    header('location:Ajaxjs.php');
}else{
    echo("Error");
}




?>