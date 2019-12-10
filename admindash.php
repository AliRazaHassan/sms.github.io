<?php
session_start();
if(isset($_SESSION['uid']))
{
    
}
else{
   


    header('locaiton:index.php');
   
}

?>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/hover-min.css"><link rel="stylesheet" href="css/hover-min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="new.css">
     <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Admin Dashboard</title>
</head>
<body>
    <div  class="banner">
        <header >
            <div class="hat"> <h1><i class="fa fa-graduation-cap"></i><span class="">ADMIN BLOCK</span> </h1></div>
            <div class="left">
                <form action="">
                    
                    <button  class="button1 hvr-wobble-skew" type="button" id="modal" data-toggle="modal" data-target="#mymodel" >Change Password</button>
                     
                </form>
            </div>
              
            </header>
            <div class="navbar1">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav m-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#ab">Include</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#ser">Delete</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#lec">Notify</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#gal">Update</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#cont">Acadmic</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Sign Out </a>
      </li>  
    </ul>    
  </div>
</nav>
       </div>
    </div>
     <!----- student search---->
      <div class="container crl57">
         
         <h1 class="text-center bg-dark text-danger">STUDENT SEARCH</h1> 
        <br> <br>
        <button class="btn btn bg-primary bg-dark float-right" data-toggle="modal" data-target="#mymodel12">Insert Record</button>
         <form action="" id="" method="post"  name="aliraza">
            
            
             <select name="alih" id="ali" class="form-control-sm" required name="class_id">
                 <option value=""select=select>SELECT CLASS</option>
                  <?php
             $con=mysqli_connect('localhost','root','','project');
                 $q="select * from class";
                 $query=mysqli_query($con,$q);
             
                 while($result=mysqli_fetch_array($query))
                 {
                     ?>
                <option value=" <?php  echo $result['class_id'] ?>"> <?php  echo $result['Name']; ?></option>
                     <?php
                 }
             ?>
                 
             </select>
             <label for="" class="text-black-50">Rollno</label>
             <input type="number_format" class="form-control-sm" required name="rollno" id="rollno">
             <input type="button" class="form-submit btn-success" id="data" value=
"search" name="submit">
         </form>
         <div class="container">
            <table class="table table-striped table-bordered">
                <thead>
                    <th>Rollno</th>
                    <th>Name</th>
                    <th>FatherName</th>
                    <th>Dob</th>
                    <th>Class</th>
                    <th>Notification</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>
                <tbody id="display">
                    
                </tbody>
            </table>
         </div>
          
      </div>
   <!----- student search end here---->
    <!----- student Attandce---->
    
     <div class="container">
       <h1 class="text-center bg-dark text-danger">STUDENT ATTANDANCE</h1> 
        <br> <br>
         <form action="" id="" method="post"  name="aliraza" >
            
            
             <select name="alih" id="alih12" class="form-control-sm" required onchange="dropdown(this.value)">
                 <option value=""select=select>SELECT CLASS</option>
                  <?php
             $con=mysqli_connect('localhost','root','','project');
                 $q="select * from class";
                 $query=mysqli_query($con,$q);
             
                 while($result=mysqli_fetch_array($query))
                 {
                     ?>
                <option value=" <?php  echo $result['class_id'] ?>"> <?php  echo $result['Name']; ?></option>
                     <?php
                 }
             ?>
                 
             </select>
          <select name="" id="dataget" class="form-control-sm  " >
          <option value="">select one of follwing</option>
          </select>
         
             <input type="button" class="form-submit btn-success hvr-trim" id="gass" value=
"search" name="submit">
         </form>
         
         <div class="container">
            <table class="table table-striped table-bordered">
                <thead>
                    <th>Rollno</th>
                    <th>Name</th>
                    <th>Section</th>
                    <th>Class</th>
                    <th>Status</th>
                   
                </thead>
                <tbody id="display123">
                    
                </tbody>
            </table>
         </div>
         <br>
  
        </div>
         <!----- student Attandnce here---->
         <!----- student Marks ---->
        <div class="container">
             <h1 class="text-center bg-dark text-danger">STUDENT MARKS</h1> 
        <br> <br> 
      
         <form action="" id="" method="post"  name="aliraza" >
            
            
             <select name="alih" id="alih123" class="form-control-sm" required onchange="dropdown12(this.value)">
                 <option value=""select=select>SELECT CLASS</option>
                  <?php
             $con=mysqli_connect('localhost','root','','project');
                 $q="select * from class";
                 $query=mysqli_query($con,$q);
             
                 while($result=mysqli_fetch_array($query))
                 {
                     ?>
                <option value=" <?php  echo $result['class_id'] ?>"> <?php  echo $result['Name']; ?></option>
                     <?php
                 }
             ?>
                 
             </select>
          <select name="" id="dataview" class="form-control-sm">
          <option value="">select one of follwing</option>
          </select>
         
             <input type="button" class="form-submit btn-success" id="bass" value=
"search" name="submit">
         </form>
         
         <div class="container">
            <table class="table table-striped table-bordered">
                <thead>
                    <th>Rollno</th>
                    <th>Name</th>
                    <th>Course Name</th>
                    <th>Class Name</th>
                    <th>Marks</th>
                     <th>Exan Type</th>
                    <th>Action</th>
                   
                </thead>
                <tbody id="display1234">
                    
                </tbody>
            </table>
           
            
        </div>
    
      <!---- modal passsword starts from here ------->
      

       
       <center> <div class="animated swing modal " id="mymodel"> 
          <div class="modal-form">
            <div class="modal-content">
               <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                   <i class="fa fa-Amazon"></i><span> Password</span>
                      </div>
                    <div class="modal-body">
                    <form action="adminpass.php" method="post">
                    <div class="form-group">
                    <label for="">Enter old password</label>
                    <input type="password"class="form-control" name="old password">
                
                    </div>
                      <div class="form-group">
                    <label for="">Enter new password</label>
                    <input type="password"class="form-control" name="newpassword" id="first">
                
                    </div>
                     <div class="form-group">
                    <label for="">Confirm password</label>
                    <input type="password"class="form-control" name="confirmpassword" id="match">
                    
                
                    </div> <span id="message" class="hvr-pulse-grow"> </span>
                    <br><br> <input type="submit" name="submit" class="form-control-sm btn btn-primary hvr-pulse">
                    <input type="reset"class="btn btn-warning hvr-pulse">
                    <br>
</form>
                    
                    </div>        
               </div>
          </div>        
       </div>   
           </center> 
       
      
       
    <!---- modla password class end here --->
              <!---- modal INsert clkass starts from here ------->
      
  <div class="abc">
        <center> <div class="animated swing modal " id="mymodel12"> 
          <div class="modal-form">
            <div class="modal-content">
               <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                   <i class="fa fa-Amazon"></i><span> Registration</span>
                      </div>
                    <div class="modal-body">
                    <form id="ab" action="insertp.php" method="post">
                   
                    
                  
                      <div class="form-group">
                      <label for="">Name</label>
                    <input type="text"class="form-control" name="name">
                    <label for="">FatherName</label>
                    <input type="text"class="form-control" name="fathername" id="first">
                
                    <label for="">Date of Birth</label>
                    <input type="date"class="form-control" name="dob" id="dob">
                
                   
                    <label for="">Notification</label>
                    <input type="text"class="form-control" name="notification" id="noti">
                
                   
                    <label for="">Password</label>
                    <input type="password"class="form-control" name="password" id="pass">
                    <label for=""> class</label>
                   <select name="class_id" id="" class="form-control">
                       <option value="" select="select">
                           select one of the them
                       </option>
                        <?php
             $con=mysqli_connect('localhost','root','','project');
                 $q="select * from class";
                 $query=mysqli_query($con,$q);
             
                 while($result=mysqli_fetch_array($query))
                 {
                     ?>
                <option value=" <?php  echo $result['class_id'] ?>"> <?php  echo $result['Name']; ?></option>
                     <?php
                 }
             ?>
                      
                   </select> 
                      <label for="">User_id</label>
                   <select name="user_id" id="" class="form-control">
                       <option value="" select="select">
                           select one of the them
                       </option>
                       <?php
             $con=mysqli_connect('localhost','root','','project');
                 $q="select * from username";
                 $query=mysqli_query($con,$q);
             
                 while($result=mysqli_fetch_array($query))
                 {
                     ?>
                <option value=" <?php  echo $result['usr_id'] ?>"> <?php  echo $result['username']; ?></option>
                     <?php
                 }
             ?>
                   </select>                    
                
                  <br>
                   
                    <input type="submit" name="submit" class="form-control-sm btn btn-primary hvr-pulse" value="SAVE"  id="my">
                    <input type="reset"class="btn btn-warning hvr-pulse">
                    <br>
                     </div>  
</form>
                    
                         
               </div>
          </div>
                  
       </div>   
            
            
       
   </div>
   </center>  
    </div>
       
     
       
      
       
    <!---- modal INsert class end here --->
          <!--------- data edit  modal class starts from here----->
           <center> <div class="animated swing modal " id="mymodel123"> 
          <div class="modal-form">
            <div class="modal-content">
               <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                   <i class="fa fa-Amazon"></i><span> Registration</span>
                      </div>
                    <div class="modal-body">
                    <form id="ab1" action="record.php" method="post">
                   
                    
                  <div id="data"></div>
                      <div class="form-group">
                      <label for="">Name</label>
                    <input type="text"class="form-control" name="name" id="name">
                    <label for="">FatherName</label>
                    <input type="text"class="form-control" name="fathername" id="fathername">
                
                    <label for="">Date of Birth</label>
                    <input type="date"class="form-control" name="dob" id="dob1">
                
                   
                    <label for="">Notification</label>
                    <input type="text"class="form-control" name="notification" id="notification">
                
                   
                    <label for="">Password</label>
                    <input type="password"class="form-control" name="password" id="password">
                          <label> Rollno</label>
                   <input type="text" class="form-control hvr-pulse" id="roll" name="rollno">
                  
                    <input type="submit" name="submit" class="form-control-sm btn btn-primary hvr-pulse" value="SAVE"  id="my12">
                    <input type="reset"class="btn btn-warning hvr-pulse-grow">
                    <br>
                     </div>  
</form>
                    
                         
               </div>
          </div>
                  
       </div>   
            
            
       
   </div>
   </center>
          
          
          
          <!----- data edit modal class ends here ------> 
            <!-------- Data Edit Marks Starts Here ----->
            
            
                    <center> <div class="animated swing modal " id="mymodel1234"> 
          <div class="modal-form">
            <div class="modal-content">
               <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                   <i class="fa fa-Amazon"></i><span> Registration</span>
                      </div>
                    <div class="modal-body">
                    <form id="ab12" action="record1.php" method="post">
                   
                    
                  <div id="data"></div>
                      <div class="form-group">
                      <label for="">Rollno</label>
                    <input type="text"class="form-control" name="rollno" id="rollno12" disabled>
                    <label for="">Marks</label>
                    <input type="text"class="form-control" name="marks" id="marks">
                
                    <label for="">Exam Type</label>
                    <input type="text"class="form-control" name="exam" id="exam" >
                     
                    <input type="text"class="form-control hidden" name="id12" id="id">
                  
                    <input type="submit" name="submit" class="form-control-sm btn btn-primary hvr-pulse" value="SAVE"  id="my123">
                    <input type="reset"class="btn btn-warning hvr-pulse">
                    <br>
                     </div>  
</form>
                    
                         
               </div>
          </div>
                  
       </div>   
            
            
       
   </div>
   </center>
            
            
          <!-------- Data Edit Marks Ends Here ----->
          
           
       <script>
           $(document).ready(function(){
                     
              $('#data').click(function(){
          var rolln=$('#rollno').val();
               var class_i= $("#ali option:selected").val();
                  $.ajax({
                      url:'ta.php',
                      type:'POST',
                      datatype:'JASON',
                      data:{rollno:rolln,class_id:class_i}
                      
                      ,success:function(result){
                          $('#display').html(result);
                      },error:function(){
                          alert("error");
                      }
                  });
              });
                $('#my').click(function(){                     
              $.ajax({
                  url:'insertp.php',
                  type:'post',
                  data:("#ab").serialize(),succsees:function(result){
                    alert(result);                  
                      }
              });
            });

          
           });
           
    </script>
      <script>
                         function delete_(dees){
                  var conf=confirm("Are you sure to delete this Record");
                   if(conf==true)
                       {
                           
                           
                          $.ajax({
                              url:'dele.php',
                            type:'post',
                              data:{data:dees},
                              success:function(result){
                                 alert (result);
                              }
                          }); 
                       }
                            else{
                               alert("any thing");
                             }
        
                             
                             
               }
          function edit_(data)
          {
              $.ajax({
                  url:'edit.php',
                  datatype:'JSON',
                  type:'post',
                  data:{data:data},success:function(result){
                     var result = JSON.parse(result);
                      $("#name").val(result.name);
            $("#fathername").val(result.fathername);
            $("#dob1").val(result.dob);
         $("#notification").val(result.notification);
                      $("#roll").val(result.rollno);
                  }
              });
             
          
          }
        
    </script>
                     
                      <script>
$('#first,#match').on('keyup',function(){
  if($('#first').val()==$('#match').val())
    {
        $('#message').html("MATCHING").css('color','green');
     
     } else{
         $('#message').html("NOT MATCHING").css('color','red');
     } 
});
    </script>
   
      <script>
      
        function dropdown(datavalue){
    $.ajax({
        url: 'dropdown.php',
        type:'post',
        data:{datapost:datavalue},
        success:function(result)
        {
            $('#dataget').html(result);
            
        }
    });
         
           
        }
                         
    </script>
      <script>
      
        function dropdown12(datavalue){
    $.ajax({
        url: 'drop.php',
        type:'post',
        data:{datapost:datavalue},
        success:function(result)
        {
            $('#dataview').html(result);
            
        }
    });
         
           
        }
                         
    </script>
      <script>
             $('#gass').click(function(){
          var rolln=$('#rollno').val();
               var class_id= $("#alih12 option:selected").val();
                  var section_id= $("#dataget option:selected").val();
                  $.ajax({
                      url:'logic.php',
                      type:'POST',
                      datatype:'JASON',
                      data:{section_id:section_id,class_id:class_id}
                      
                      ,success:function(result){
                          $('#display123').html(result);
                      },error:function(){
                          alert("error");
                      }
                  });
              });
    </script>
      <script>
             $('#bass').click(function(){
          var rolln=$('#rollno').val();
               var class_id= $("#alih123 option:selected").val();
                  var course_id= $("#dataview option:selected").val();
                  $.ajax({
                      url:'newlogic.php',
                      type:'POST',
                      datatype:'JASON',
                      data:{course_id:course_id,class_id:class_id}
                      
                      ,success:function(result){
                          $('#display1234').html(result);
                      },error:function(){
                          alert("error");
                      }
                  });
              });
    </script>
      <script>
     
          function abc(value,rollno,section)
          {
              var val=value;
              var rollno=rollno;
              var section=section;
                  $.ajax({
                  url:'present.php',
                  type:'post',
                  data:{value:value,section:section,rollno:rollno},
                     success:function(response){
                         alert(response);
                     }
              });
          }
           function edot(data)
          {
              $.ajax({
                  url:'edit1.php',
                  datatype:'JSON',
                  type:'post',
                  data:{data:data},success:function(result){
                     var result = JSON.parse(result);
                      $("#rollno12").val(result.rollno);
            $("#marks").val(result.marks);
            $("#exam").val(result.examtype);
                      $("#id").val(result.id);
                  }
              });
             
          
          }
              
    </script>
       
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
<div id="rt-c94afc8f27daa9059a5235357183c0b0"></div><script src="https://www.rumbletalk.com/client/?s5Y1SHdG&1"></script>
  
</body>  