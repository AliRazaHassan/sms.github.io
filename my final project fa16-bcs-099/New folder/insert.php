<?php
$uname=$_REQUEST['uname'];
$msg=$_REQUEST['msg'];
$con=mysqli_connect('localhost','root','','chatbox');

mysqli_query("INSERT INTO chat(user_name,message) VALUES ('$uname','$msg')");
$result1=mysqli_query("select * from chat order by id DESC");
while($extract=mysqli_fetch_array($result1)){
    echo $extract['user_name'].":".$extract['message']."<br>";
}
?> 