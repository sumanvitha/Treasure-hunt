<?php
session_start();
require "security.php";
require "core1.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Treasure Hunt</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="style/button.css" type="text/css">
<link rel="stylesheet" href="style/image.css" type="text/css">
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
    width: 25%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
}

.button {
    background-color: #D2691E; 
    border: none;
    color: white;
	width:10%;
    padding: 5px 15px;
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
section {
	clear: both;
	padding: 0px;
	margin: 0px;
}

/*  COLUMN SETUP  */
.col {
	display: block;
	float:left;
	margin: 1% 0 1% 1.6%;
}
.col:first-child { margin-left: 0; }

/*  GROUPING  */
.group:before,
.group:after { content:""; display:table; }
.group:after { clear:both;}
.group { zoom:1; /* For IE 6/7 */ }
/*  GRID OF THREE  */
.span_2_of_3 { width: 100%; }
.span_3_of_3 { width: 50%; }

/*  GO FULL WIDTH BELOW 480 PIXELS */
@media only screen and (max-width: 480px) {
	.col {  margin: 1% 0 1% 0%; }
    .button{width:50%;}
	input[type=text] {
    width: 80%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
}
 img {
    width: 50%;
    height: 50%;
}
	.span_3_of_3, .span_2_of_3 { width: 100%; }
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
      
      <li><a href="#account" data-toggle="modal" data-target="#account"><span class="glyphicons glyphicons-group"></span> <?php echo("{$_SESSION['userName']}") ?></a></li>
      
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
	  
    </div>
  </div>
</nav>
<br>


<?php 
if($_SESSION['levelNo']<=18)
{	
   $l1=$_SESSION['levelNo'];
   $key1=@$_GET['urlmaker'];
   $key2=keymaker(@$_GET['i']);
if(@$_GET['i']>$l1)
   {   
       if($key1==$key2)
	 
	   $l1=@$_GET['i'];
   }
 /*  $key1=@$_GET['urlmaker'];
   $key2=keymaker($l1);
   $s1=false;
if($key1==$key2)
   {	   
 $s1=true;
}
*/
 $question=getQuestion($l1);
 $image=getImage($l1);
 echo("<center><h3 style='color:white;'>Level ".$_SESSION['levelNo'].":</h3></center>");
 echo("<center><h4 style='color:white;'>".$question."</h4></center>");
 if(hasImage($l1))
 {	 
 echo("<center><img src=".$image."></center>");
 }
 echo(printhtml());
  if(@$_GET['err']==1)
  { 
	  echo"<h5 style='color:red;'>Wrong answer try again</h5>";
}	  
if(isset($_POST['submitBtn']))
{
	$status=checkAnswer($_POST['ans1'],$l1);
	if($status)
	{
		update($l1);
		$l1=$l1+1;
		$contentid=keymaker($l1);
		header("location:questions2.php?&i=".$l1."&urlmaker=".$contentid."&err=0");
		$_SESSION['levelNo']+=1;
	}
	else
	{
				$contentid=keymaker($l1);
				
				header("location:questions2.php?&i=".$l1."&urlmaker=".$contentid."&err=1");
		
	}
}
}
else
{header("location:thankyou.php");}	

?>
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
		
</center>
</body>
</body>
</html>