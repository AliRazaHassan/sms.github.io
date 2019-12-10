<?php

session_start();
if(isset($_SESSION['uid']))
{
    echo"";
}
else{
    header('index.php');
}?>
<?php
$rollno=$_SESSION['uid'];

$con=mysqli_connect('localhost','root','','project');


  
    $oldpass=$_POST['old'];
    
    $q="select * from admin where admin_id='$rollno' and password ='$oldpass'";
    $res=mysqli_query($con,$q);
    $rows=mysqli_num_rows($res);
    if($rows<1)
    {
        ?>
        <script> alert("your old password doesnot match");</script>
        <?php
    }
    else{
        $new=$_POST['newpassword'];
    $q="UPDATE `users` SET password='$new' WHERE rollno='$rollno'";
         $re=mysqli_query($con,$q);
        if($re)
        {
            echo"password updated";
        }
        else{
            echo "password not updated";
        }
        
    }




?>