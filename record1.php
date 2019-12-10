<?php
$con=mysqli_connect('localhost','root','','project');
extract($_POST);
if(isset($_POST['submit']))
{
    echo $exam;
    $q="UPDATE `marks` SET marks='$marks',`examtype`='$exam' WHERE id='$id12'";
    $result=mysqli_query($con,$q);
    if($result)
    {
    echo"result updated succefully";
        header('location:admindash.php');
        
    }
    else{
        echo"some error eccor";
    }
    
}


?>