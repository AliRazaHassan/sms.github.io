<html>
<head>
    <meta charset="UTF-8">
    <title>Ajax Post</title>
     <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    
    <div class="conatiner">
        <p class="any"> this text is goona change</p>
        <button class="btn btn-primary btnclick" id="any">
        Click Here    
        </button>
    </div>
    <script>
        $(document).ready(function(){
            $('#any').click(function(){
                $.post('hlo.php',{
                    
                    
                     fathername:"Muhammad Sadiq"
                    name:"Ali Raza Hassan"
                      
                       
                },function(data,status){
                    $('#any').html(data);
                    alert(status); 
                    
                });
            });
        });
    </script>
</body>
</html>