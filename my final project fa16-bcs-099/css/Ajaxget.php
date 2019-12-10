<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <div class="conatiner">
       <p id="change"> this is giong to be change</p>
       <button class="btn btn-primary btnclick" id="onchange">Click</button>
    </div>
    <script type="text/javascript">
  $(document).ready(function(){
      $('#onchange').click(function(){
          $.get('hi.html',function(data,status){
              $('#change').html(data);
              alert(status);
          })
      })
  })
    </script>
</body>
</html>