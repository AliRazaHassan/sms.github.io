<html>
<head>
    <meta charset="UTF-8">
    <title>
    Insert into DataBase</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
</head>
<body>
    
  <div class="container">
      <h1 class="text-center text-danger bg-dark">Data Insert Into Data Base Using Ajax Php and MySqli</h1><br>
      <div class="col-lg-8 m-auto">
      <form action="view.php" method="post" id="ab" enctype="multipart/form-data">
      <div class="form-group">
          <label for="">Username</label><br>
          <input type="text" name="usr" class="form-control" required>
      </div>
       <div class="form-group">
          <label for="">Password</label><br>
          <input type="password" class="form-control" name="password" required>
      </div>
      <div class="form-group">
        <label for="">Section</label>
         <select name="asd" id="" class="form-control" required onchange="funcinsert()">
             <option value="" >select one of the follwing</option>
             <option value="bcs" class="form-control">bcs</option>
             <option value="bcs5A" class="form-control">bcs5A</option>
             <option value="bcs5B" class="form-control">bcs 5b</option>
         </select>
          
      </div>
      <div class="form-group">
      <label for="">Input file</label>
  <input type="file" class="form-control" id="customFileLang" lang="es">
</div>
       <input type="submit" name="submit" value="Submit" id="submit" class="btn-success">
       <button class="btn-primary" type="reset"> Clear</button>
        </form>
        </div>
      
  </div> 
  
  <div id="ali" class="container">
   <br><br>
   
    <h1 class="text-center text-danger bg-dark">Data Getting from Data Base</h1>
    <br>
    <button id="displaydata" class="btn btn-danger">Display Data</button>
    <table class="table table-striped table-bordered text-center">
        <thead>
            <td>Id</td>
            <td>Name</td>
            <td>Password</td>
            <td>Section</td>
        </thead>
        <tbody id="response">
            
        </tbody>
    </table>
  </div>
  <script>
      $(document).ready(function(){
            var form=$('#ab');
          $('#submit').click(function(){
              $.ajax({
                  url:form.attr("action"),
                  type:'post',
                  data:("#ab").serialize(),succsees:function(result){
                    console.log(result);                  
                      }
              });
          })
        $('#displaydata').click(function(){
           
            $.ajax({
                url:('display.php'),
                type:'post',
                success:function(responsedata){
                    $('#response').html(responsedata);
                }
                
            });
        });
           });
    </script>
</body>
</html>