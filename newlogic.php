<?php
$con=mysqli_connect('localhost','root','','project');
$section=$_POST['course_id'];
$classId=$_POST['class_id'];



$q="SELECT marks.id,users.rollno,users.name AS 'UserName',course.name AS 'Course Name',class.Name AS 'Class Name',marks.marks,marks.examtype  from ((marks inner JOIN course on marks.course_id=course.course_id) INNER JOIN class on marks.class_id=class.class_id) INNER JOIN users on marks.rollno=users.rollno where marks.class_id='$classId' AND marks.course_id='$section'";

//echo($q);
$query=mysqli_query($con,$q);

if(mysqli_num_rows($query)>0)
{
    
while($result=mysqli_fetch_array($query))
{
    ?>
    <tr>
       <td><?php echo $result['rollno']?></td>
        <td><?php echo $result['UserName']?></td>
        <td><?php echo $result['Course Name']?></td>
        <td><?php echo $result['Class Name']?></td>
          <td><?php echo $result['marks']?></td>
          <td><?php echo $result['examtype']?></td>
         <td><button class="btn btn-warning hvr-pulse" data-toggle="modal" data-target="#mymodel1234"onclick="javascript:edot(<?php echo $result['id']?>)">Edit</button></td>
         
    </tr>
    <?php
        
}
                              }else{
    echo(" no results founds");
}

?>