<?php
$con=mysqli_connect('localhost','root','','book');
$ab=$_POST['select'];

if($ab==1)
{
    $search=$_POST['search'];
    $q="select * from books where id='$search'";
    $res=mysqli_query($con,$q);
    ?><table border="5px"> <thead>
        <td>ISBN No</td>
        <td>Title</td>
        <td>Author</td>
        <td>Price</td>
    </thead><?php
    while($ab=mysqli_fetch_array($res))
    {
        ?>
        <tr>
        <td><?php echo $ab['id']?></td>
        <td><?php echo $ab['title']?></td>
        <td><?php echo $ab['author']?></td>
        <td><?php echo $ab['price']?></td>
    
    </tr>
    <?php
           }
    ?>
           </table><?php
}
else if($ab==2){
     $search=$_POST['search'];
    $q="select * from books where title='$search'";
    $res=mysqli_query($con,$q);
    ?><table border="5px"> <thead>
        <td>ISBN No</td>
        <td>Title</td>
        <td>Author</td>
        <td>Price</td>
    </thead><?php
    while($ab=mysqli_fetch_array($res))
    {
        ?>
        <tr>
        <td><?php echo $ab['id']?></td>
        <td><?php echo $ab['title']?></td>
        <td><?php echo $ab['author']?></td>
        <td><?php echo $ab['price']?></td>
    
    </tr>
    <?php
           }
    ?>
           </table><?php
    
}
else{
     $search=$_POST['search'];
    $q="select * from books where author='$search'";
    $res=mysqli_query($con,$q);
    ?><table border="5px"> <thead>
        <td>ISBN No</td>
        <td>Title</td>
        <td>Author</td>
        <td>Price</td>
    </thead><?php
    while($ab=mysqli_fetch_array($res))
    {
        ?>
        <tr>
        <td><?php echo $ab['id']?></td>
        <td><?php echo $ab['title']?></td>
        <td><?php echo $ab['author']?></td>
        <td><?php echo $ab['price']?></td>
    
    </tr>
    <?php
           }
    ?>
           </table><?php
}

?>