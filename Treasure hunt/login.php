<?php
 if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      session_start();



 if (isset($_POST['btn-login'])) {
require("config.php");
 $query  = $mysql_connect->query("SELECT firstname,email, password,level FROM users1 WHERE email='".$_POST['emailR']."' and password='".$_POST['passwordR']."'");
 $row=$query->fetch_array();
 $count = $query->num_rows; // if email/password are correct returns must be 1 row
  if ($count==1) {
	  
 $_SESSION['userSession'] = $row['email'];
  $_SESSION['userName'] = $row['firstname'];
  $_SESSION['levelNo']=$row['level'];
  header("Location:questions2.php");
 } else {

  $msg = "<div class='alert alert-danger'>
     <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Invalid Username or Password !
    </div>";
	echo "$msg";
 }

}
}   
   ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Treasure Hunt</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="style/button.css" type="text/css">
<link rel="stylesheet" href="style/label1.css" type="text/css">
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
.section {
	clear: both;
	padding: 0px;
	margin: 0px;
}

/*  COLUMN SETUP  */
.col {
	display: block;
	float:left;
	margin: 1% 0 1% 0%;
}
.col:first-child { margin-left: 0; }

/*  GROUPING  */
.group:before,
.group:after { content:""; display:table; }
.group:after { clear:both;}
.group { zoom:1; /* For IE 6/7 */ }
/*  GRID OF TWO  */
.span_2_of_2 {
	width: 100%;
}
.span_1_of_2 {
	width: 100%;
}

/*  GO FULL WIDTH AT LESS THAN 480 PIXELS */

@media only screen and (max-width: 480px) {
	.col { 
		margin: 1% 0 1% 0%;
	}

	 label{
		 color:white;
		 font-size:15px;
	 }
	 .button{
font-size:18px;
width:100px;
}
input[type=text],[type=password] {
    width: 75%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
	height:5px;
}
}
@media only screen and (max-width: 480px) {
	 .span_1_of_2 { width: 100%; }
	 .span_2_of_2{width: 50%;}
	 
}
</style>
<body>
<form class="form-horizontal" role="form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Treasure Hunt</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#"><span class="glyphicon glyphicon-home"> Home</a></li>
        </ul>
      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="#leaderboard" data-toggle="modal" data-target="#leaderboard"><span class="glyphicons glyphicons-group"></span> Leaderboard</a></li>
        
        <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Register</a></li>
        <li class=active><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="section group">
 <div class="col span_1_of_2">
 <form class="form-horizontal" role="form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
         <center><h3 style="color:white;">Login to continue....</h3></center>
			<br>
								
			
				<label class="control-label col-sm-4"  for="email1">Email:</label>
					<div class="col-sm-6"> 
						<input type="text" class="form-control" name="emailR" id="email1" placeholder="Enter email" required />
					</div>
					
								
			
				<label class="control-label col-sm-4" for="passwordR">Password:</label>
					<div class="col-sm-6"> 
						<input type="password" class="form-control" name="passwordR" id="passwordR"  placeholder="" pattern=".{5,}"  title="5 characters minimum" required />
					</div>
			

<div class="col-sm-12 col-lg-12 col-md-6 col-xs-6">
<center>
<button type="submit" class="button" name="btn-login"style="vertical-align:middle"><span>Login</span></button>
</center>
</div>
</form>
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