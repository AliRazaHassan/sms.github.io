<?php
session_start();
/*$con=mysqli_connect('localhost','root','','shafi');
$query="select * from usman";
$star=mysqli_query($con,$query);
?><table border="5" width="80%">
<tr><th>Name</th> <th>Fathername</th></tr>
<?php
while($data=mysqli_fetch_array($star))
{
?> 
     <tr><td><?php echo $data['Name']?></td> </tr> <?php  
    
}
    ?>
</table>

<?php

$con=mysqli_connect('localhost','root','','formdb');
$idi =$_POST['datapost'];

$q="select * from section where id='$idi'";
$result=mysqli_query($con,$q);
while($row=mysqli_fetch_array($result)){
             ?>
             <option value=""><?php
            echo $row['Section'];?></option>
            <?php}
$ali=$_POST['data'];
if($ali=='student')
{
    echo("Enter your Rollno");
}
else if($ali=='admin')
{
    return("enter Username");
}
$con=mysqli_connect('localhost','root','','ajaxcrud');
extract($_POST);
if(isset($_POST['submit'])){
    $q="INSERT INTO ajaxinsert(username,password,selection,picture) VALUES ('$usr','$password','$asd','$hassan')";
        $query=mysqli_query($con,$q);
    header('location:ajaxinsert.php');
}*/
if(isset($_SESSION["uname"]))
{
$con=mysqli_connect('localhost','root','','project');
 $ab=$_POST['select'];
if($ab==2)
{
    $asb=$_SESSION["uname"];
    $q="select password from admin where admin_id='$asb' ";
    $result=mysqli_query($con,$q);
    $pass=$_POST['password'];
    while($res=mysqli_fetch_array($result))
    {
        $ali=$res['password'];
        if($ali==$pass)
        {
            header('location:admindash.php');
        }
        else{
            header('location:index.php');
        }
    }
}
    else{
         $asb=$_SESSION["uname"];
    $q="select password from users where rollno='$asb' ";
    $result=mysqli_query($con,$q);
    $pass=$_POST['password'];
    while($res=mysqli_fetch_array($result))
    {
        $ali=$res['password'];
        if($ali==$pass)
        {
            header('location:student_d.php');
        }
        else{
            header('location:index.php');
        }
    }
    }
}
/*else{
    echo("<h1>You are Not Login</h1>");
    header('location:index.php');
}*/
?>