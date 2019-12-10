<?php
$con=mysqli_connect('localhost','root','','project');
$section=$_POST['section_id'];
$classId=$_POST['class_id'];

$q="SELECT users.rollno,users.name AS 'UserName',section.name AS 'Section Name',class.Name AS 'Class Name' from ((users inner JOIN section on users.class_id=section.class_id) INNER JOIN class on users.class_id=class.class_id) where section.sect_id='$section' AND class.class_id='$classId'";

//echo($q);
$query=mysqli_query($con,$q);

if(mysqli_num_rows($query))
{
    
while($result=mysqli_fetch_array($query))
{
    ?>
    <tr>
       <td><?php echo $result['rollno']?></td>
        <td><?php echo $result['UserName']?></td>
        <td><?php echo $result['Section Name']?></td>
        <td><?php echo $result['Class Name']?></td>
        
         <td><input type="radio" value="Present" checked name="present<?php echo $result['rollno']?>" onclick="abc(this.value,<?php echo $result['rollno']?>,<?php echo $section?>,)">P
         <input type="radio" value="Absent"  name="present<?php echo $result['rollno']?>" onclick="abc(this.value,<?php echo $result['rollno']?>,<?php echo $section?>)">A</td>
  
         
    </tr>
    <?php
        
}
                              }else{
    echo(" no results founds");
}

?>