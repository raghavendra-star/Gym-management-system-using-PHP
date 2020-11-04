<!DOCTYPE html>
<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "loginsystem";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query = "SELECT * FROM `Trainer`";

// for method 1

$result1 = mysqli_query($connect, $query);



?>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  </head>
  <body>

    <!--NAVBAR-->
    <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="admin-panel.php" style="color: cyan"> <img  class="rounded" alt="..." src="images/logo.jpg" width="30px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="admin-panel.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="member_details.php">Members</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Trainer.php">Trainers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="package.php">Package</a>
      </li>

       <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
      
     
    </ul>

    
    <?php
                if (isset($_SESSION['u_id'])) {
              echo '<form action="index.php" method="POST">
                      <button type="submit" name="submit">logout</button>
                        </form>'; 
                                 } else{
              
              echo '<form action="index.php" method="POST">
                              
                                          
                        </form>
                      <a href="index.php" class="btn btn-success"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>';

              
            }
           
            ?>
  </div>
</nav>
      
    <!--jumbotron-->
       
 <div class="jumbotron" style="border-radius:0;background:url('images/31.jpg');background-size:cover;height:400px;"><marquee style="color:green; font-size: 30px;font-style:italic;"><b>ARMSTRONG GYM</b></marquee>  </div>

   <div class="container-fluid">
    <div class="row">
        <div class="col-md-4" >
            <div class="list-group">
                <li class="list-group-item " style="background: black;color:white;font-size: 20px; "><i class="fa fa-users" aria-hidden="true"></i> <b>Members</b></li>
 
                  
                <a href="member_details.php" class="list-group-item" style="color:black;"><u>Member details</u></a>
                <a href="package.php" class="list-group-item"  style="color:black;"><u>Package details</u></a>
                
                


            </div>
            
                 
            
        </div>

        <!--new-->
        <div class="col-md-4">
            <div class="list-group">
<li  class="list-group-item" style="color:white;background: black;font-size: 20px;"><i class="fa fa-user-secret" aria-hidden="true"></i> <b>Trainer</b></li>
 
<a href="trainer.php" class="list-group-item " style="color:black;"><u>Trainer details</u></a> 
<a href="add_trainer.php" class="list-group-item " style="color:black;"><u>Add new Trainer</u></a>


         
            </div> 
          </div>


          <div class="col-md-4">
            <div class="list-group">
<li  class="list-group-item" style="color:white;background: black;font-size: 20px;"><i class="fa fa-inr" aria-hidden="true"></i> <b>Payment</b></li>
 
                <a href="payment.php" class="list-group-item"  style="color:black;"><u>Payment Details</u></a>
                <a href="new payment.php" class="list-group-item"  style="color:black;"><u>New Payments</u></a>
 
      


         
            </div> 
          </div>


        </div> <hr style="border-color:green;"></div>
           


       
        
           <div class="container-fluid">
    <div class="row">
            <div class="col-md-8">
            <div class="card">
                
     <div class="card-body" style="background-color:black;color:white;">
                <h1><i class="fa fa-chevron-down" aria-hidden="true"></i> Register new members</h1>
                <label>BELOW</label>

                </div> 
                <div class="card-body"></div>
                <form class="form-group" action="func.php" method="post">
                <label>first name:</label>
<input type="text" name="fname" class="form-control"><br>
                    <label>last name:</label>
<input type="text" name="lname" class="form-control"><br> 
 <label>email</label>
                    <input type="text" name="email" class="form-control"><br>
                    <label>Member ID</label>
<input type="text" name="contact" class="form-control"><br>        
 <label>Trainer </label> 
 <select class="form-control" name="docapp">

            <?php while($row1 = mysqli_fetch_array($result1)):;?>

            <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>

            <?php endwhile;?>

        </select>
        <br><br><br>
                                        
  <input type="submit" class="btn btn-success" name="pat_submit" value="Register">       
  <a href="func.php" class="btn btn-light"></a>
                    
                    
                </form>
                </div>
      </div>
       <div class="col-md-3" >
        <img  class="rounded" alt="..." src="images/rock2.jpg" width="410px" height="230px"><br><br>
        <img  class="rounded" alt="..." src="images/work.jpg" width="410px" height="230px"><br><br>
        <img  class="rounded" alt="..." src="images/john.jpg" width="410px" height="230px"><br><br>
         
        
        
            

            
        </div>
       </div>
       <hr style="border-color:green;">
 

       <div class="jumbotron ">
        <center><h1>WELCOME TO ARMSTRONG GYM</h1></center>
        <p>Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins</p>
        <a href="#" class="btn btn-primary">Read MOre</a>
        
      </div>

   
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

     </body>
    
</html>
   