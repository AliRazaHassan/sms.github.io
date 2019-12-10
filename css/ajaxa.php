<?php
$con=mysqli_connect('localhost','root','','formdb');


?>
<html>
<head>
    <meta charset="UTF-8">
    <title>AJax Form</title>
    
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
   <div class="container col-lg-6">
     <h2 class="text-center text-danger"> Get data From the Data base Using Ajax</h2>
     <form action="">
         Username:<input type="text" name=""  class="form-control"><br>
          Username:<input type="text" name="" class="form-control"><br>
        Class <select class="form-control" onchange=" myfun(this.value)">
             <option value="">Select Any One</option><?php
         $q="select * from class";
             $result=mysqli_query($con,$q);
         while($rows=mysqli_fetch_array($result)){
             ?>
             <option value="<?php
            echo $rows['id'];?>"><?php
            echo $rows['class'];?></option>
             <?php
         }
         
         ?>
         </select><br>
          Section:<select name="" id="dataget" class="form-control crl12">
            <option value=""> Choose Any One</option>
         </select><br>
         <button class="btn btn-primary"
         >Submit</button>
     </form>
   </div>
   <script>
    function myfun(datavalue){
        $.ajax({
           url:'view.php',
            type:'POST',
            data:{datapost:datavalue},
            success:function(result){
                $('#dataget').html(result);
            },
           error: function () {
        alert("error");
    }
        });
        
    
    }
    </script>
    
</body>
</html>