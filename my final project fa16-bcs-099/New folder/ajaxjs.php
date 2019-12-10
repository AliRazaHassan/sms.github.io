<html>
<head>
    <meta charset="UTF-8">
    <title>AJAX</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
      <script type="text/javascript">
     function myfun(){
         var req=new XMLHttpRequest();
         req.open('GET','hi.html',true);
         req.send();
        req.onreadystatechange=function(){
            if(req.readyState==4 && req.status==200)
                {
                    document.getElementById("change").innerHTML=req.responseText;
                }
        }
     }
            function ne(){
           window.location=('view.php');}
        
    </script>
</head>
<body>
   <div class="conatiner">
       <div id="change">
          This text is goona be changed;           
       </div>
       <button class="btn btn-primary" onclick="myfun()">Click Here </button>
       <button class="btn btn-primary" id="hussa" onclick="ne()">Click here to see Request</button>
       
   </div>
  
</body>
</html>