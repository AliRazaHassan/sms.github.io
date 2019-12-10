<html>
<head>
    <meta charset="UTF-8">
    <title>
    Lab work</title>
   
</head>
<body>
  <div class="container">
   <form action="labfinal.php" method="post" id="labf">
   <div class="form-group">
<label for="">Username</label>
     <input type="email" id="username" class="" required>
     
      </div>
         <div class="form-group">
<label for="">Password</label>
     <input type="password" id="p" class="" required>
     
      </div>
         <div class="form-group">
<label for="">Confirm Password</label>
     <input type="password" id="cp"class="" required>
     
      </div>
      <input type="submit" value="submit" class="btn btn-success" id="ad" >
    
      <input type="reset" class="btn btn-warning">
       </form>
       </div>
       
    </body>
    <script>
       /* $(document).ready(function(){
            $('#ad').click(function(){
                $
            });
        });*/
       function vaid(){ if(document.getElementById("p").value!=document.getElementById("cp").value){
            alert("Passord and confirm password not match");
        }else{
            
           
            document.getElementById("labf").submit();
           
                       }}
    </script>
</html>
