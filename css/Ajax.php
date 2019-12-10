<html>
<head>
    <meta charset="UTF-8">
    <title>Ajax</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/jquery.min.js">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
  
        
 <div class="container">
 <div id="Hassan">
     This text is going to bre change
 </div>
 <button class="btn btn-primary" id="change"
 
 > Click here</button>
  </div>
   
    <script>
        $(document).ready(function(){
            $('#change').click(function(){
                $('#Hassan').load('hi.html',function(){
                    alert("the text is changed now ");
                })
            })
        })
    </script>
   
</body>
</html>