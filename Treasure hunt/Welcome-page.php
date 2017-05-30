<!DOCTYPE html>
<html lang="en">
<head>
  <title>Treasure Hunt</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style/modal.css" type="text/css">
  <link rel="stylesheet" href="style/label1.css" type="text/css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<style>

body { 
    background-image: url('assets/th11.jpg');
    background-repeat: no-repeat;
    background-color:;
    background-attachment: fixed;
    background-position: center; 
    background-size:100% 100%;
}
input[type=text],[type=password] {
    width: 75%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
}
.navbar.transparent.navbar-inverse .navbar-inner {
    border-width: 0px;
    -webkit-box-shadow: 0px 0px;
    box-shadow: 0px 0px;
    background-color: rgba(0,0,0,0.0);
    background-image: -webkit-gradient(linear, 50.00% 0.00%, 50.00% 100.00%, color-stop( 0% , rgba(0,0,0,0.00)),color-stop( 100% , rgba(0,0,0,0.00)));
    background-image: -webkit-linear-gradient(270deg,rgba(0,0,0,0.00) 0%,rgba(0,0,0,0.00) 100%);
    background-image: linear-gradient(180deg,rgba(0,0,0,0.00) 0%,rgba(0,0,0,0.00) 100%);
}
@media only screen and (max-width: 480px){
body { 
    background-image:url('assets/th11.jpg');
    background-repeat: no-repeat;
    background-color:;
    background-attachment: fixed;
    background-position: center; 
	background-size:cover;
}	
}
</style>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="">Treasure Hunt</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="http://www.csequest.com/"><span class="glyphicon glyphicon-home"> Home</a></li>
        </ul>
      <ul class="nav navbar-nav navbar-right">
	     <li><a href="#instructions" data-toggle="modal" data-target="#instructions"><span class="glyphicons glyphicons-group"></span> Instructions</a></li>
	    <li><a href="#leaderboard" data-toggle="modal" data-target="#leaderboard"><span class="glyphicons glyphicons-group"></span> Leaderboard</a></li>
        <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Register</a></li>
        <li><a href="login.php" id="myBtn"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        
      </ul>
    </div>
  </div>
</nav>
 <div class="w3-row">
    <div class="w3-half">
      <img src="assets/th1.jpg" style="width:100%">
      <img src="assets/th6.jpg" style="width:100%">
    </div>

    <div class="w3-half">
      <img src="assets/th5.jpg" style="width:100%">
      <img src="assets/th2.jpg" style="width:100%">
    </div>
  </div>
 
<div class="modal fade" id="leaderboard" role="dialog">
<div class="modal-dialog">
			
<div class="modal-content" style="background-color:#696969;">
				
<div class="modal-body">
					
<button type="button" class="close" data-dismiss="modal">&times;</button>
					
<?php 
	include("leaderboard.php");
?>
				
</div>
			
</div>
		
</div>	
	
</div>
<div class="modal fade" id="instructions" role="dialog">
<div class="modal-dialog">
			
<div class="modal-content">
				
<div class="modal-body">
					
<button type="button" class="close" data-dismiss="modal">&times;</button>
					
<?php 
	include("instructions.php");
?>
				
</div>
			
</div>
		
</div>	
	
</div>
		
	
<script src="script/jquery.scrollpath.js"></script>
<script src="script/jquery.easing.js"></script>
</body>
</html>
