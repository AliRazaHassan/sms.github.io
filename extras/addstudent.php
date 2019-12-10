<?php include('header.php') ?>
<?php include('connect.php')?>
<html>
<head>
    <meta charset="UTF-8">
    <title>include student</title>
    <link rel="stylesheet" href="add.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container crl21" >
<center>
<h1>
Student Registration
</h1></center>
<hr>
<form action="">
    <br>
    <br>
<center><button class="btn btn-secondary hvr-bob" type="button"  data-toggle="modal" data-target="#mymodel">CLICK HERE TO START REGISTRATION</button></center> 
    
</form>
<br><br>
<hr>    



</div>
   <div class="container crl12">
       <center>
<h1>
Student Deletion &amp; Updation
</h1></center>
<hr>
 <center>
  <div class="form-row align-items-center crl31">
    <div class="col-auto my-1">
   
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" required>
        <option selected>Choose class</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
          <option value="1">4</option>
        <option value="2">5</option>
        <option value="3">6</option>
          <option value="1">7</option>
        <option value="2">8</option>
        <option value="3">9</option>
         <option value="3">10</option>
      </select>
    </div>
    <div class="crl123">
    <label class="sr-only" for="inlineFormInputName2">Name</label>
  <input type="text"  id="inlineFormInputName2" placeholder="Enter Roll no" required>
   </div>
    <div class="col-auto my-1">
      <button type="submit" class="btn btn-primary">Search</button>
      
    </div>
  </div>
  </center>
   </div>
   
   
   <!----- delete and updation -----><!-----Notify Student ------>
   
   
   
   
   
   
   <div class="container crl11">
       <center>
       <hr>
<h1>
Notify Student
</h1></center>
<hr>
 <center>
  <div class="form-row align-items-center crl31">
    <div class="col-auto my-1">
   
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" required>
        <option selected>Choose class</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
          <option value="1">4</option>
        <option value="2">5</option>
        <option value="3">6</option>
          <option value="1">7</option>
        <option value="2">8</option>
        <option value="3">9</option>
         <option value="3">10</option>
      </select>
    </div>
    <div class="crl123">
    <label class="sr-only" for="inlineFormInputName2">Name</label>
  <input type="text"  id="inlineFormInputName2" placeholder="Enter Roll no" required>
   </div>
    <div class="col-auto my-1">
      <button type="submit" class="btn btn-primary">Search</button>
      
    </div>
      <br>
      <div class="notify"
      >
         <br>
          <div class="form-group crl111">
          <br>
    <label for="exampleFormControlTextarea1">Enter  textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
      </div>
       
   </div>
       </center>
    </div>
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
    <!-------model class from here ------>
      <center> <div class="animated swing modal " id="mymodel"> 
          <div class="modal-form">
            <div class="modal-content">
               <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                   <i class="fa fa-Amazon"></i><span>Registration </span>
                      </div>
                    <div class="modal-body">
                    <form method="post" action="addstudent.php" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" name="name" class="form-control mb-2 mr-sm-2" placeholder="&emsp;Enter your Name">
                    <br>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                <br>
                
    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="class">
        <option selected>choose class</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
         <option value="3">4</option>
          <option value="1">5</option>
        <option value="2">6</option>
        <option value="3">7</option>
         <option value="3">8</option>
          <option value="1">9</option>
        <option value="2">10</option>
        
        
      </select>
  </div>
  <div class="form-group">
    <input type="text" name="fathernmae" placeholder="Father_Name" form-control mb-2 mr-sm-2 style="width:100%;border:none; border-bottom:2px solid gray ;margin-bottom:20px; border-radius: 10px;">
    <br>


     <input type="text" name="rollno" class="form-control mb-2 mr-sm-2" placeholder="&emsp;Enter Roll NO">
     <br>
     <label for="date_create">Dob</label>
     <input type="date" name="dob">
     
     <textarea name="address" placeholder="Enter the Adress"></textarea>
     
     <div class="custom-file">
  <input type="file" class="custom-file-input" id="customFileLang" lang="es" name="image">
  <label class="custom-file-label" for="customFileLang">Select Picture</label>
</div>
      <br>
      <br>

    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>

 <center> <button type="submit" class="btn btn-primary crl21" name="submit">Submit</button></center>
</form>
                    
                    </div>        
               </div>
          </div>        
       </div>   
           </center> 
           <!---model class ends here    ------->
           <!-- FLOATING CHAT -->
<div id="rt-c94afc8f27daa9059a5235357183c0b0"></div><script src="https://www.rumbletalk.com/client/?s5Y1SHdG&1"></script>
</body>
</html>
