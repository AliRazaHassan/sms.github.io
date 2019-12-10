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
    <title>Student Home</title>
    <link rel="stylesheet" href="cards.css">
    <link rel="stylesheet" href="new.css">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

     <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="flexslider.css">
     <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"
  integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw"
  crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/hover-min.css">

<link rel="stylesheet" href="css/lightbox.min.css">
</head>
<body>
    <div class="banner">
        <header >
            <div class="hat"> <h1><i class="fa fa-graduation-cap"></i><span class="">Student BLOCK</span> </h1></div>
            <div class="left">
                <form action="">

                    <button type="button" class="button1 hvr-wobble-skew" data-toggle="modal" data-target="#mymodal123">Change Password</button>
                </form>
            </div>
            <div class="clearfix"></div>
            <button onclick="topFunction()" id="myBtn"  class="hvr-buzz"title="Go to top"><i><img src="images/app-1646212_640.png" alt="" style="width:15px; hieght:5px;"></i></button>
            </header>
            <div class="navbar1">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav m-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#ab">About</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#ser">Services</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#lec">Leactures</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#gal">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#cont">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Sign Out </a>
      </li>
    </ul>
  </div>
</nav>
       </div>



        <!-- card group start here-->
     <div class="animated rubberband card-group">
  <div class="card">
    <img class="card-img-top" src="images/back-to-school-1576790_1920.jpg" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">Jawad Ali</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class=" card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="images/boy-286240_1920.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">THE GRAND OFFICE</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="images/read-316507_1280.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Jawad Ali</h5>
      <p class="card-text">this is how its work in a organization. we are looking for you !!! apply now </p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>
  </div>
   <!-- card group end  here-->




   <!--about class strat from here -->
<div class="container" id="ab">
    <div class="about">
       <h2>About Us </h2>
       <p style="color: forestgreen;font-size: :22; ">What we are </p>
       <div class="row">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate autem non dolores repellat quas ex itaque quod nisi esse consectetur ducimus adipisci eum voluptates voluptatibus molestias, omnis sunt. Rerum, error.</p>
           <div class="col-md-4 crl1 about_grid  hvr-ripple-out">
           <i class="fa fa-amazon"></i>
           <h2>Acadmics</h2>
           <p>Information About Foundation </p>
           <button class="more-bttn hvr-grow " data-toggle="modal" data-target="#mysmg" data-lightbox="example-set">
               READ MORE
           </button>
           </div>
            <div class="col-md-4 crl2 about_grid  hvr-ripple-out">
           <i class="fa fa-graduation-cap"></i>
           <h2>Personal Information</h2>
           <p>See your Profile</p>
                     <button class="more-bttn hvr-grow" data-toggle="modal" data-target="#mymodel1234"data-lightbox="example-set">
                     Show

           </button>


           </div>
            <div class="col-md-4
            crl3 about_grid  hvr-ripple-out">
           <i class="fa fa-tags"></i>
           <h2>Admission</h2>
           <p>Addmssion Information </p>
           <button class="more-bttn hvr-grow" data-toggle="modal" data-target="#mysmg" data-lightbox="example-set">
               READ MORE
           </button>
           </div>
       </div>

    </div>
</div>

 <!-- about class ends here-->








 <!-- service  start here-->

 <div class="container-fluid crl5" id="ser">&emsp;
  <div class="container ">
     <h1>SERVICES
     </h1>
     <h3>Best Services</h3>
     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, mollitia, inventore. Eveniet, numquam nostrum veniam ratione sapiente accusamus dolore ad ut temporibus iste laborum eum consequuntur laudantium! Molestiae deserunt, nesciunt.</p>
     <div class="row">
  <div class="col-sm-6 crl7">
    <div class="card  hvr-ripple-out">
      <div class="card-body crl8" >
        <h5 class="card-title">Special Courses</h5>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum neque ea aperiam quos quis quaerat autem expedita pariatur voluptate quo quae nihil, magnam quas itaque tempore dolore eligendi ad, excepturi.</p>
         <button class="btn btn-primary hvr-bob" type="button"  data-toggle="modal" data-target="#mymodel12">Registered Now</button>
      </div>
    </div>
  </div>
  <div class="col-sm-6 crl7">
    <div class="card  hvr-ripple-out">
      <div class="card-body crl8">
        <h5 class="card-title">Computer Courses</h5>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam sed esse doloribus dolorum consectetur dicta repellat aperiam incidunt recusandae possimus. Nostrum officiis esse porro voluptatum aperiam tempore minus temporibus rem..</p>

       <button class="btn btn-primary hvr-bob" type="button"  data-toggle="modal" data-target="#mymodel12">Registered Now</button>




      </div>
    </div>
  </div>
</div>
 <div class="row">
  <div class="col-sm-6 crl7">
    <div class="card  hvr-ripple-out">
      <div class="card-body crl8">
        <h5 class="card-title">Attandance</h5>
        <p class="card-text"> Your daily wise attandance and plz check your attandce daily basis .and maintain your attandance 80% for inconviniance</p>
          <button class="btn btn-primary hvr-bob" type="button"  data-toggle="modal" data-target="#attandance">Attendance Details</button>
      </div>
    </div>
  </div>
  <div class="col-sm-6 crl7">
    <div class="card  hvr-ripple-out">
      <div class="card-body crl8">
        <h5 class="card-title">Marks</h5>
        <p class="card-text">Marks of your subjects that are Available regarding your subjects.plz check your marks and if found any bug tell us within three days </p>
        <button class="btn btn-primary hvr-bob" type="button"  data-toggle="modal" data-target="#marks">Marks Details</button>
      </div>
    </div>
  </div>
</div>
  </div>
  </div>

      <div class="galerry"  id="gal">
          <div class="container">
          <h1>our gallery</h1>
          <div class="Gallery-grids">
              <div class="row">
                  <div class="col-md-4 col-sm-4 col-6 gallery_grid_img">
                      <a href="images/back-to-school-1576790_1920.jpg" data-lightbox="example-set" class="hvr-grow" data-title=""> <img class="img-fluid" src="images/back-to-school-1576790_1920.jpg" alt=""/></a>
                  </div>
                  <div class="col-md-4 col-sm-4 col-6 gallery_grid_img">
                      <a href="images/book-863418_1920.jpg" data-lightbox="example-set" data-title="" class="hvr-grow" > <img class="img-fluid" src="images/book-863418_1920.jpg" alt=""/></a>
                  </div>
                  <div class="col-md-4 col-sm-4 col-6 gallery_grid_img">
                      <a href="images/books-1845614_1920.jpg" data-lightbox="example-set" data-title="" class="hvr-grow" > <img class="img-fluid" src="images/books-1845614_1920.jpg" alt=""/></a>
                  </div>
                  <div class="col-md-4 col-sm-4 col-6 gallery_grid_img">
                      <a href="images/boy-286240_1920.jpg" data-lightbox="example-set" data-title="" class="hvr-grow" > <img class="img-fluid" src="images/boy-286240_1920.jpg" alt=""/></a>
                  </div>
                  <div class="col-md-4 col-sm-4 col-6 gallery_grid_img">
                      <a href="images/read-316507_1280.jpg" data-lightbox="example-set" data-title="" class="hvr-grow" > <img class="img-fluid" src="images/read-316507_1280.jpg" alt=""/></a>
                  </div>
                   <div class="col-md-4 col-sm-4 col-6 gallery_grid_img">
                      <a href="images/thailand-1822451_1920.jpg" data-lightbox="example-set" data-title="" class="hvr-grow" > <img class="img-fluid" src="images/thailand-1822451_1920.jpg" alt=""/></a>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!--  cards class starts from here  --->
    <div class="container-fluid " style="background-color:black;height:100%;" id="lec">
   .
    <div class="container">
        <h1 class="text-center" style="color:white;letter-spacing: 13px;"> LECTURES</h1>
        <h2 class="text-center" style="margin-top:25px;    letter-spacing: 13px; color:red;">BOARD OF GOVERNERS</h2>
    </div>
    .
 <div class="container crl71" >
         <div class="card  crl311">
         <div class="img-box"> <img src="dataimages/card1optional.jpg" alt=""></div>
         <div class="content">
             <h2> DR MUBASSHIR<br><span>
                DEPARTMENT OF COMPUTER SCIENCE
             </span></h2>
             <p> Lorem ipsum dolor sit amet consectetur adipisicing elit Eum expedita quae facere animi impedit   cumque.</p>

         <ul>
             <li> <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
             <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
             <li> <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
         </ul> </div>
         </div>
            <div class="card  crl311">
         <div class="img-box">
             <img src="dataimages/imagescard2.jpg" alt="">
         </div>
         <div class="content">
             <h2> DR ALEX<br><span>
                WEB DESIGNER
             </span></h2>
             <p> Lorem ipsum dolor sit amet consectetur adipisicing elit Eum expedita quae facere animi impedit   cumque.</p>

         <ul>
             <li> <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
             <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
             <li> <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
         </ul></div>
         </div>
            <div class="card  crl311">
         <div class="img-box"> <img src="dataimages/card2optional.jpg" alt=""></div>
         <div class="content">
             <h2>DR SAM BILLINGS<br><span>
                 DEPARTMENT OF SCIENCE
             </span></h2>
             <p> Lorem ipsum dolor sit amet consectetur adipisicing elit Eum expedita quae facere animi impedit   cumque.</p>

         <ul>
             <li> <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
             <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
             <li> <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
         </ul> </div>
         </div>


    </div>
    </div>
  <!--  cards class Ends  here  --->

 <!--- contact --->
 <div class="contact" id="cont">
    .
     <div class="fine">
     <form action="contact_insert.php" method="post" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-3 crl0">

      <input type="email" class="form-control hvr-grow" id="inputEmail4" placeholder="Email" style="border-color:white;  color:white;" name="email">
    </div>
    <div class="col-md-3 mb-3 crl0">
      <input type="text" class="form-control hvr-grow" id="validationTooltip05" placeholder="Phone" required style="border-color:white; background-color:white;  color:white;">
    </div>
    <div class="form-group col-md-3 crl0">

      <input type="text" class="form-control hvr-grow" id="input" placeholder="Your Name" style="border-color:white; background-color:white; color:white;" name="name">
    </div>
    <div class="form-group col-md-6 crl0">

      <input type="text-field" class="form-control hvr-grow" id="inputPassword4"; placeholder="meassage" style="border-color:white; background-color:white;" name="message">
    </div>
    <div class="form-group col-md-1 hvr-grow" style="margin-top:120px; margin-left:40px;"></div>

  </div>

  <center><button type="submit" class="btn btn-primary crl35 hvr-grow" style="border-color:white; background-color:white;">Submit</button></center>
</form>
</div>
 </div>
 <!-- contact ends here>


   <!--- footer strart from here --->
   <div class="footer">
       <div class="container">
           <div class="row">
             <div class="col-md-4 crl14">
                  <h1>News latter:</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, ut totam sit enim, excepturi explicabo dicta obcaecati, accusamus nemo voluptates architecto  Saepe.</p>
                  <div class="ali" style="display: inline;">
                  <form action="phpmail.php" method="post">
                <input type="text" class="raza" name="message">
                <button  type="submit" class="hvr-grow">
                <i class="fa fa-envelope"></i>
                </button>
                </form>
                </div>
               </div>
               <div class="col-md-4 crl22">
                   <h1>follow us</h1>
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, ut totam sit enim, excepturi explicabo dicta obcaecati.</p>
                   <div class=" wa">
                      <div class="sa hvr-pulse-grow"><a href="https://www.facebook.com/profile.php?id=100006213304136&ref=bookmarks"target="_blank" class="hvr-grow"><i class="fa fa-facebook"></i></a></div>
                      <div class="sa hvr-pulse-grow"><a href="https://www.instagram.com/ali4898hassan/?hl=en"target="_blank" class="hvr-grow"> <i class="fa fa-instagram"></i></a></div>
                      <div class="sa hvr-pulse-grow"><a href="https://twitter.com/alih0780" class="hvr-grow" target="_blank"><i class="fa fa-twitter"></i></a> </div>
                   </div>
               </div>
               <div class="col-md-4 crl13">
                <h1>contact us</h1>
                <i class="fa fa-marker hvr-grow"></i><span>us: force academy 80800</span>
                <br>
                 <i class="fa fa-phone hvr-grow"></i><span>contact:+923030132434</span>
                <br>
                 <i class="fa fa-envelope-open hvr-grow"></i><span>Email:mjawadazad@gmail.com</span>
               </div>
           </div>
       </div>
   </div>
<!---  footer ends here--->





  <!-- model class start from here  -->
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
                    <form id="ab" action="insertsp.php" method="post">



                      <div class="form-group">



                   <label for="">Enter Your Old Password</label>
                  <input type="password" name="old" class="form-control" id="oldi">
                  <br>
                  <span id="massage"> </span>

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
                    <br>
                     <label for="">Course</label>
                   <select name="course" id="" class="form-control">
                       <option value="" select="select">
                           select one of the them
                       </option>
                        <?php
             $con=mysqli_connect('localhost','root','','project');
                 $q="SELECT * FROM `special courses`";
                 $query=mysqli_query($con,$q);

                 while($result=mysqli_fetch_array($query))
                 {
                     ?>
                <option value=" <?php  echo $result['sepc_id'] ?>"> <?php  echo $result['name']; ?></option>
                     <?php
                 }
             ?>

                   </select>
                  <br>

                  <br>

                    <input type="submit" name="submit" class="form-control-sm btn btn-primary" value="ADD COURSE"  id="my">
                    <input type="reset"class="btn btn-warning">
                    <br>
                     </div>
</form>


               </div>
          </div>

       </div>



   </div>
   </center>
  <!-- modal class end here  -->
  <!---  new modal class start from here --->





<div class="new modal" id="mysmg">

    <div class="modal-form">
    <div class="modal-content">
        <div class="header">
            <i class="fa fa-tape"></i>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            <h2 style="color: red ;text-align: center; font-family: fantasy"> Acadmic Carrier</h2>

        </div>
        <div class="modal-body">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas quos illo neque atque nobis obcaecati, debitis magni provident magnam architecto dolores incidunt, veritatis, accusantium dicta beatae quam iure accusamus eaque!.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium perspiciatis consequatur impedit fugiat laudantium modi deleniti sed alias voluptas, eligendi distinctio qui quam nisi suscipit perferendis vitae in quidem enim.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis laborum ratione, aperiam aliquam error quidem alias, voluptates soluta laudantium reprehenderit ullam. Et rerum quibusdam possimus eum repellat, dolores commodi aut.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis nostrum, quia sit cupiditate consequatur minus modi alias earum suscipit, rerum numquam, fuga. Inventore adipisci tenetur quis explicabo nemo facere accusamus!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum aspernatur deserunt iusto consectetur illum ullam nulla alias soluta, maiores id veritatis ipsam ut, ea. Perferendis dicta, illum ipsam ea quis.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla labore corrupti quis id deserunt autem laudantium iusto maxime neque eligendi dolores fugit cumque itaque facilis pariatur, dolorum voluptatum, est, provident.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, adipisci, temporibus consectetur perspiciatis eveniet quibusdam nemo vitae repellat nisi tenetur nulla architecto aspernatur nam ea quo accusamus obcaecati sapiente eum.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis non doloribus, ad culpa vel voluptas fuga laborum, ut! Eligendi minima eveniet labore nesciunt accusamus soluta non, sequi ratione corrupti nostrum.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero cum vel autem eius unde magni adipisci voluptate maiores cumque, debitis neque pariatur eaque repellat, nemo quisquam ullam ducimus. Ab, rem.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit quibusdam, est doloribus sed excepturi autem, maiores vel optio ex minima magni inventore tempore. Quidem, atque laborum, dolorum possimus in iste.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil assumenda nesciunt impedit illo ratione sunt eum animi amet commodi sequi. Tenetur nisi, quia eveniet voluptatibus dolorem optio, voluptatum architecto. Ipsum.
            </p>
        </div>
    </div>

    </div>
</div>



 <!--- new model class ends here ---->

 <!--- special model class strat from here --->



  <center> <div class="animated swing modal " id="mymodel1234">
          <div class="modal-form">
            <div class="modal-content">
               <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                   <i class="fa fa-Amazon"></i><span>Profiles</span>
                      </div>
                    <div class="modal-body">
                    <form>
                               <br><br><br>
                                <div class="co">
                                <table class="table table-responsive-sm table-bordered table-striped">
                                <thead>
                                   <th>Rollno</th>
                                   <th>Name</th>
                                   <th>Fathername</th>
                                   <th>Class</th>
                                    <th>Notification</th>
                                 <th>Dob</th>

                                </thead>
                               <tbody id="anyone">
                                    <?php

                         $rollno=$_SESSION['uid'];
                         $con=mysqli_connect('localhost','root','','project');
                         $q="select * from users where rollno='$rollno'";
                         $resu=mysqli_query($con,$q);
                         $rows=mysqli_num_rows($resu);
                         if($rows<1)
                         {
                             ?><tr> <td><?php echo("no result FOund")?></td> </tr><?php
                         }
                         else{

                             while($result=mysqli_fetch_array($resu)){
                                 ?>
                                 <tr> <td><?php echo $result['rollno']?></td>
                                 <td><?php echo $result['name']?></td>
                                 <td><?php echo $result['fathername']?></td>
                                 <td><?php echo $result['class_id']?></td>
                                <td><?php echo $result['notification']?></td
                                 <td><?php echo $result['Dob']?></td>
                                 </tr>
                                 <?php

                             }
                         }






                         ?>
                               </tbody>
                                 </table>
                                </div>
    <input type="submit" style="width=100%; color:white background-color:black; "name="ok" value="Oka">
</form>

                    </div>
               </div>
          </div>
       </div>
           </center>





 <!--- special model class ends here --->

  <!-----Passsword enters here  ----->
   <center> <div class="animated swing modal " id="mymodal123">
          <div class="modal-form">
            <div class="modal-content">
               <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                   <i class="fa fa-Amazon"></i><span> Password</span>
                      </div>
                    <div class="modal-body">
                    <form action="changepass.php" method="post" name="form1">
                    <div class="form-group">
                    <label for="">Enter old password</label>
                    <input type="password"class="form-control" name="old" required>

                    </div>
                      <div class="form-group">
                    <label for="">Enter new password</label>
                    <input type="password"class="form-control" name="newpassword" id="first" required>

                    </div>
                     <div class="form-group">
                    <label for="">Confirm password</label>
                    <input type="password"class="form-control" name="confirmpassword" id="match" required><span id="message"></span>

                    </div>
                    <input type="submit" name="submit" class="form-control-sm btn btn-primary" value="Update">
                    <input type="reset"class="btn btn-warning">
                    <br>
</form>

                    </div>
               </div>
          </div>
       </div>
           </center>



    <!---- modla password class end here --->

  <!---- modal marks class starts here ----->
    <!---- modal marks class  here ----->
   <center>
        <div class="animated swing modal" id="marks">
            <div class="modal-form">

                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <i class="fa fa-Amazon"></i><span> Marks Sheet</span>
                    </div>
                    <div class="modal-body">

                        <form>

                            <table class="table table-responsive-sm table-bordered table-striped">

                                <thead>
                                    <tr>
                                        <th>Rollno</th>
                                        <th>Class_ID</th>
                                        <th>Course_ID</th>
                                        <th>Marks</th>
                                        <th>Exam Type</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    <?php

                         $rollno=$_SESSION['uid'];
                         $con=mysqli_connect('localhost','root','','project');
                         $q="select * from marks where rollno='$rollno'";
                         $resu=mysqli_query($con,$q);
                         $rows=mysqli_num_rows($resu);
                         if($rows<1)
                         {
                             ?><center>
                                    <tr>
                                        <td>
                                            <?php echo("no result FOund")?>
                                        </td>
                                    </tr></center>

                                    <?php
                         }
                         else{

                             while($result=mysqli_fetch_array($resu)){
                                 ?>
                                    <tr>

                                        <td>
                                            <?php echo $result['rollno']?>
                                        </td>
                                        <td>
                                        <?php echo $result['class_id']?>
                                        </td>
                                        <td>
                                            <?php echo $result['course_id']?>
                                        </td>

                                        <td>
                                            <?php echo $result['marks']?>
                                        </td>

                                        <td>
                                            <?php echo $result['examtype']?>
                                        </td>

                                    </tr>
                                    <?php

                             }
                         }






                         ?>
                                </tbody>

                            </table>


                            <input type="submit" name="submit" class="form-control-sm btn btn-primary" value="OK">


                        </form>

                    </div>


                </div>
            </div>
        </div>

</center>
    <!---- modal marks class Ends here ----->
    <!---- modal attandance class starts here ----->
      <center> <div class="animated swing modal " id="attandance">
          <div class="modal-form">
            <div class="modal-content">
               <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                   <i class="fa fa-Amazon"></i><span> Attandance</span>
                      </div>
                    <div class="modal-body">
                    <form>
                    <table class="table table-responsive-sm table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Rollno</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Section_iD</th>
                    </tr>
                </thead>
                  <tbody>

                     <?php

                         $rollno=$_SESSION['uid'];
                         $con=mysqli_connect('localhost','root','','project');
                         $q="select * from attandance where rollno='$rollno'";
                         $resu=mysqli_query($con,$q);
                         $rows=mysqli_num_rows($resu);
                         if($rows<1)
                         {
                             ?><tr> <td><?php echo("no result FOund")?></td> </tr><?php
                         }
                         else{

                             while($result=mysqli_fetch_array($resu)){
                                 ?>
                                 <tr> <td><?php echo $result['rollno']?></td>
                                 <td><?php echo $result['date']?></td>
                                 <td><?php echo $result['Status']?></td>
                                 <td><?php echo $result['sect_id']?></td>
                                 </tr>
                                 <?php

                             }
                         }






                         ?>


                  </tbody>
                   </table>

                    <input type="submit" name="submit" class="form-control
                    +sm btn btn-primary" value="OK">

</form>
             </div>
                    </div>
               </div>
          </div>

           </center>
    <!---- modal attandance class Ends here ----->

<script>
    $(document).ready(function(){
      $('#data').click(function(){
          var rolln=$('#rollno').val();
               var class_i= $("#ali option:selected").val();
                  $.ajax({
                      url:'ta.php',
                      type:'POST',
                      data:{rollno:rolln,class_id:class_i}

                      ,success:function(result){
                          $('#display').html(result);
                      },error:function(){
                          alert("error");
                      }
                  });
              });
    });

    </script>

  <script>

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>
<script>
$(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });</script>
            <script>
$('#first,#match').on('keyup',function(){
  if($('#first').val()==$('#match').val())
    {
        $('#message').html("<b>MATCHING </b>").css('color','green');

     } else{
         $('#message').html("not matching ").css('color','red');
     }
});
    </script>
                <script>
$('#oldi').on('keyup',function(){
var data= $('#oldi').val();
    $.ajax({
        url:'passmatch.php',
        type:'post',
        data:{datasend:data}
        success(function(response))
        {
        var res=response;
        alert(res);
       /*
         if($('#oldi').val()===res)
    {
        $('#massage').html("MATCHING").css('color','green');

     } else
           {
         $('#massage').html("Not matching ").css('color','red');

     }*/

    }
    });

});
    </script>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
<!-- Start of LiveChat (www.livechatinc.com) code -->
<script type="text/javascript">
window.__lc = window.__lc || {};
window.__lc.license = 10324177;
(function() {
  var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
  lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
})();
</script>
<noscript>
<a href="https://www.livechatinc.com/chat-with/10324177/">Chat with us</a>,
powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener" target="_blank">LiveChat</a>
</noscript>
<!-- End of LiveChat code -->
<div id="rt-c94afc8f27daa9059a5235357183c0b0"></div><script src="https://www.rumbletalk.com/client/?s5Y1SHdG&1"></script>

</body>
</html>