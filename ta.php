<?php
$con=mysqli_connect('localhost','root','','project');
$rollno=$_POST['rollno'];
$classId=$_POST['class_id'];

$q=("select * from users where rollno=".$rollno) or die(mysqli_error());

//echo($q);
$query=mysqli_query($con,$q);
if(mysqli_num_rows($query))
{
    
while($result=mysqli_fetch_array($query))
{
    ?>
    <tr>
        <td><?php echo $result['rollno']?></td>
        <td><?php echo $result['name']?></td>
        <td><?php echo $result['fathername']?></td>
        <td><?php echo $result['Dob']?></td>
         <td><?php echo $result['class_id']?></td>
        <td><?php echo $result['notification']?></td>
        <td><button class="btn btn-warning hvr-pulse" onclick="javascript:edit_(<?php  echo($result['rollno']); ?>);" data-toggle="modal" data-target="#mymodel123">Edit</button></td>
          <td><button class="btn btn-danger hvr-pulse" onclick="javascript:delete_(<?php  echo($result['rollno']); ?>);" name="del">Delete</button>
          </td>
    </tr>
    <?php
        
}
                              }else{
    echo(" no results founds");
}





?>