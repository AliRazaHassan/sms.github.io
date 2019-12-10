<html>
<head>
    <meta charset="UTF-8">
    <title>Assaingmnt #4</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <div>
        <h1 class="text-center text-danger bg-dark">Insert.php</h1>
    </div>
    <form  method="post" name="form" action="backend.php">
    <div class="form-group">
        ISBN <input type="text" name="isbn" class="form-control">
    </div>
    <div class="form-group">
      Author: <input type="text" name="author" class="form-control">
    </div>
    <div class="form-group">
        Title: <input type="text" name="title" class="form-control">
    </div>
    <div class="form-group">
       Price <input type="text" name="price" class="form-control">
    </div>
       <input type="submit" class="btn btn-primary" id="add" value="add book" name="submit">
    </form>
 
    </div>
    <div class="container">
        <form action="see.php" method="post">
            <select name="select" id="" class="form-control">
                <option value="" select="select"> Select One of the Follwing</option>
          <option value="1">
              ISBN
          </option>
                <option value="2">
              Title
          </option>
                <option value="3">
              Author
          </option>
                
            </select>
            <label for="Enter Search"></label>
            <input type="text" name="search" id="asan" class="form-control"><br>
            <input type="submit" name="submit" value="see result" class="btn btn-primary">
        </form>
        <div class="result">

        </div>
    </div>

    
</body>
</html>