<?php
require "core1.php";
if(count($_POST)>0) {
	/* Form Required Field Validation */
	foreach($_POST as $key=>$value) {
	if(empty($_POST[$key])) {
	$message = ucwords($key) . " field is required";
	break;
	}
	}
	/* Password Matching Validation */
	if($_POST['passwordR'] != $_POST['confirmPassword']){ 
	$message = 'Passwords should be same<br>'; 
	}

	// Email Validation 
	if(!isset($message)) {
	if (!filter_var($_POST["emailR"], FILTER_VALIDATE_EMAIL)) {
	$message = "Invalid UserEmail";
	}
	}



	if(!isset($message)) {
		require("config.php");
   $status=0;
  
   $query1  = $mysql_connect->query("SELECT * FROM users1 WHERE email='".$_POST['emailR']."';");
 $row=$query1->fetch_array();
 $count = $query1->num_rows; 
 if($count==0)
 {
		$query = "INSERT INTO users1 VALUES( '" . $_POST["fname"] . "', '" . $_POST["lname"] . "', '" .$_POST["emailR"] . "', '" . $_POST["passwordR"] . "','".$_POST["collegeR"]."','".$_POST["mobileR"]."',1,".time().");"; 
       if(empty($mysql_connect->query($query))) {
	   $message = "<script>alert('Problem in registration. Try Again!')";
	   }
        else			
		{
			$message="<script>alert('You have registered successfully!')</script>";	
			$status=1;
			unset($_POST);
		} 	
		
		
	}
	

else
{
	$message="<script>alert('You are already registered')</script>";
}	
	if($status==0)
	echo "<center><h4 style='color:red;'>".$message."</h4></center>";
   else if($status==1)
	   echo($message);
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
<link rel="stylesheet" href="style/scrollbar.css" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="script/jquery.scrollpath.js"></script>
<script src="script/jquery.easing.js"></script>
<script src="script/scroll.js"></script>
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
}

@media only screen and (max-width: 480px) {
	 .span_1_of_2 { width: 100%; }
	 .span_2_of_2{width: 50%;}
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
      <a class="navbar-brand" href="Welcome-page.php">Treasure Hunt</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#"><span class="glyphicon glyphicon-home"> Home</a></li>
        </ul>
      <ul class="nav navbar-nav navbar-right">
	    <li><a href="#instructions" data-toggle="modal" data-target="#instructions"><span class="glyphicons glyphicons-group"></span> Instructions</a></li>
	    
	     <li><a href="#leaderboard" data-toggle="modal" data-target="#leaderboard"><span class="glyphicons glyphicons-group"></span> Leaderboard</a></li>
        <li class="active"><a href="#"><span class="glyphicon glyphicon-user"></span> Register</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="section group">
 <div class="col span_1_of_2">	
 <form class="form-horizontal" role="form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        
			
				<label class="control-label col-sm-4" for="fname">First Name:</label>
				<div class="col-sm-6"> 
					<input type="text" class="form-control" id="fname" name="fname" placeholder="First name" required />
				</div>
			
								
			
				<label class="control-label col-sm-4" for="lname">Last Name:</label>
					<div class="col-sm-6"> 
						<input type="text" class="form-control" id="lname" name="lname" placeholder=" Last name" required />
					</div>
			
								
			
				<label class="control-label col-sm-4"  for="email1">Email:</label>
					<div class="col-sm-6"> 
						<input type="text" class="form-control" name="emailR" id="email1" placeholder="Email" required />
					</div>
							
								
											
			
				<label class="control-label col-sm-4" for="passwordR">Password:</label>
					<div class="col-sm-6"> 
						<input type="password" class="form-control" name="passwordR" id="passwordR"  placeholder="minimum 5 characters" pattern=".{5,}"  title="5 characters minimum" required />
					</div>
			
			
			
				<label class="control-label col-sm-4" for="confirmPassword">Confirm Password:</label>
					<div class="col-sm-6"> 
						<input type="password" class="form-control" name="confirmPassword" id="confirmPassword" required />
					</div>
				
			
				<label class="control-label col-sm-4"  for="college1">College:</label>
					<div class="col-sm-6"> 
						<input type="text" class="form-control" name="collegeR" id="college1" placeholder="College name" required />
					</div>
							
								
			
				<label class="control-label col-sm-4"  for="mobile1">Mobile:</label>
					<div class="col-sm-6"> 
						<input type="text" class="form-control" name="mobileR" id="mobile11" pattern=[0-9]{10} title="Inavlid mobile format" placeholder="Mobile number" required />
					</div>
							
													
		
       <div class="col-sm-12 col-lg-12 col-md-6 col-xs-6">
		<center><button type="submit" class="button" style="vertical-align:middle"><span>Register</span></button></center>
       </div>
<br><br>
	  </form>
</div>
</div>
<script src="script/jquery.scrollpath.js"></script>
<script src="script/jquery.easing.js"></script>

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
		
</body>
</html>