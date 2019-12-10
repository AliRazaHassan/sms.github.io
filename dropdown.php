<?php
$con=mysqli_connect('localhost','root','','project');
$nameid=$_POST['datapost'];
$q="select * from section where class_id='$nameid'";
$result=mysqli_query($con,$q);
while($rows=mysqli_fetch_array($result))
{
   ?>
    <option value="<?php echo $rows['sect_id'] ?>"><?php echo $rows['name'] ?> </option><?php 
}
?>