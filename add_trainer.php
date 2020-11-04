<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
    <title>Add Trainer details</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<div class="jumbotron" style="background: url('images/2.jpg') no-repeat;background-size: cover;height: 300px;"></div>   

 <div class="container">
<div class="card">
     <div class="card-body" style="background-color:black;color:white;">
         <div class="row">
             <div class="col-md-1">
    <a href="admin-panel.php" class="btn btn-light ">Go Back</a>
             </div>
            
     <div class="card-body" style="color:#ffffff;">
         <div class="card-body">
   
        <tbody>
         
        </tbody>
    </table>
    <div class="card-body" style="background-color:black;color:FFFFFF;">
                <h3>Register new Trainer</h3>
                </div> 
                <div class="card-body" style="background-color:grey">
                <form class="form-group" action="func.php" method="post">
                <label>Trainer ID</label>
<input type="text" name="Trainer_id" class="form-control"><br>
 <label>Name</label>
                    <input type="text" name="Name" class="form-control"><br>
                    <label>Phone</label>
<input type="text" name="phone" class="form-control"><br> 
<input type="submit" class="btn btn-primary" name="tra_submit" value="Register">
</form></div>
     </div>
    </div>
    </div>
    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </div>
    </body>
</html>