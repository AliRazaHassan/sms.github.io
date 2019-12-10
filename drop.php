<?php
$con=mysqli_connect('localhost','root','','project');
$nameid=1;
$q="select course.course_id AS 'course_id',course.name AS'name' from courseclass INNER JOIN course on course.course_id=courseclass.course_id where class_id='$nameid'";
$res=mysqli_query($con,$q);
while($rows=mysqli_fetch_array($res))
{
   ?><option value="<?php echo $rows['course_id'] ?>"><?php echo $rows['name'] ?> </option><?php
}

    
?>