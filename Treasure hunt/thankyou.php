<?php
session_start();
require "security.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Treasure Hunt</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="style/button.css" type="text/css">
<link rel="stylesheet" href="style/label.css" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
.button {
    background-color: #4CAF50; 
    border: none;
    color: white;
	width:30%;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}

.button1 {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
@media only screen and (max-width: 480px) {
 img {
    width: 100%;
    height: 100%;
}
h2{
	font-size:20px;
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
      <a class="navbar-brand" href="index.php">Treasure Hunt</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="http://www.csequest.com/"><span class="glyphicon glyphicon-home"> Home</a></li>
		</ul>
      <ul class="nav navbar-nav navbar-right">
	   <li><a href="#instructions" data-toggle="modal" data-target="#instructions"><span class="glyphicons glyphicons-group"></span> Instructions</a></li>
	    <li><a href="#leaderboard" data-toggle="modal" data-target="#leaderboard"><span class="glyphicons glyphicons-group"></span> Leaderboard</a></li>
        
		<li><a href="#account" data-toggle="modal" data-target="#account"><span class="glyphicons glyphicons-group"></span> <?php echo("{$_SESSION['userName']}") ?></a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
	  
    </div>
  </div>
</nav>

<center><img style="width:30%; height:30%;" src="assets/bg3.png"></center>
<center><h2 style="font-weight: bold;">You found the treasure!! </h2>

<h2 style="font-weight: bold;">Thank you for participating</h2></center>
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

<div class="modal fade" id="account" role="dialog">
		
<div class="modal-dialog">
			
<div class="modal-content" style="background-color:#696969;">
				
<div class="modal-body">
					
<button type="button" class="close" data-dismiss="modal">&times;</button>
					
<?php include "account.php"; ?>
				
</div>
			
</div>
		
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


</body>
</html>

