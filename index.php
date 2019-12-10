<?php
$con=mysqli_connect('localhost','root','','project');
session_start();
if(isset($_SESSION['uid']))
{
    echo("<h1> You are Already Login</h1>");exit();
    
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="css/hover-min.css">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
</head>
<body>
    <div class="abc">
          
           <div class="container">
        
        <form action="index.php" method="post">
       <div class="card crl12" style="width: 30rem;">
  <img class="card-img-top" src="images/logo-login-2.jpg" alt="Card image cap">
  <div class="card-body crl1">
  
  <select name="select" id=""required class="form-control-sm" style="margin-bottom:20px;" onchange="myfun(this.value)">
      <option value="" selected=selected>Select your Option</option>
      <?php $query="select * from username";
          $result=mysqli_query($con,$query);
          while($row=mysqli_fetch_array($result))
          {
           ?>   
            <option value="<?php echo $row['usr_id'] ?>"><?php echo $row['username'] ?></option> <?php
          }
          
          ?>
      </select>
    
  
  
   <input type="text" name="rollno"placeholder="" id="asd" required class="form-control">
   <br>
   <br>
   <input type="password" name="password" placeholder="password" required style="width:100%;" id="myInput">
   
   <br>
   <br>
   <input type="checkbox" onclick="myFunction()"><b style="color:white">Show Password</b>   <br>
   <br>
   <input type="submit" name="submit" value="Login"  class="form-control">
   <br><br>
   
   <input type="reset" name="reset" id="abs">
    <p style="color:red">forget password???<a href="login.php"> click here</a></p>
     </div>
</div>  
</form>
        </div>    
    </div>
    <script>
function myFunction() {
  var x =document.getElementById("myInput");
  if (x.type =="password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</body>
</html>
<?php

if(isset($_POST['submit']))
{
    $con=mysqli_connect('localhost','root','','project');
$sel=$_POST['select'];    
    if($sel==1)
    {
        
        
    $username=$_POST['rollno'];
    $pass=$_POST['password'];
        $q="select * from users where rollno='$username'and password='$pass'";
        $res=mysqli_query($con,$q);
        $row=mysqli_num_rows($res);
        if($row<1)
        {
?>
            <script>
                alert("USERNAME OR PASSWORD DOESNOT MATCH");
 window.open('index.php','_self');</script>
               
        <?php
        }
        else{
            $data=mysqli_fetch_assoc($res);
            $id=$data['rollno'];
            
            $_SESSION['uid']=$id;
            header('location:student_d.php');
            exit();
            
        }
        
}
      else if($sel==2){
    
    
        
        
          $username=$_POST['rollno'];
    $pass=$_POST['password'];
      
        
         $q="select * from admin where admin_id='$username'AND password='$pass'";
        $res=mysqli_query($con,$q);
        $row=mysqli_num_rows($res);
        if($row<1)
        {
?>
            <script>
                alert("USERNAME OR PASSWORD DOESNOT MATCH");
 window.open('index.php','_self');</script>
              
               
        
        <?php
        }
        else{
            $data=mysqli_fetch_assoc($res);
           
            $_SESSION['uid']=$data['admin_id'];
            header('location:admindash.php');
            
        }
        
        
    }
    }
    
    

else{
    exit();
}

?>