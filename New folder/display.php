<?php

$con=mysqli_connect('localhost','root','','ajaxcrud');
$q="select * from ajaxinsert";
$query=mysqli_query($con,$q);
if(mysqli_num_rows($query)>0){
    while($reslt=mysqli_fetch_array($query))
    {
        ?>
        <tr>
            <td><?php echo $reslt['id']?></td>
            <td><?php echo $reslt['username']?></td>
            <td><?php echo $reslt['password']?></td>
             <td><?php echo $reslt['selection']?></td>
        </tr>
        <?php
    }
}



?>