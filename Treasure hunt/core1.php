<?php

function getQuestion($level)
{	
 require "config.php";
 $query  = $mysql_connect->query("select question from qa1 where levelno=".$level);
 $row=$query->fetch_array();
 return $row['question'];
       
}
 
function printhtml(){echo'
<form method=post action=" htmlspecialchars($_SERVER["PHP_SELF"])">
<center><input type="text" class="form-control" name="ans1" id="ans1" required/>
<button type=submit class=button name="submitBtn" id="submitBtn">Submit</button>&nbsp';
}
function hasImage($level)
{
	  require "config.php";
	
	$query  = $mysql_connect->query("select hasImage from qa1 where levelno=".$level);
 $row=$query->fetch_array(); 
 if($row['hasImage']=='yes')
 {
 return true;
 }
 else return false;
}
 
  function getImage($level)
  {
	  require "config.php";
	
	 $query  = $mysql_connect->query("select imagepath from qa1 where levelno=".$level);
 $imagerow=$query->fetch_array();
 return $imagerow['imagepath'];

  }  


function update($level)
{
    require "config.php";
   if($_SESSION['levelNo']<30)
   {	   
   $query = "update users1  set level=level+1,time='".time()."'where email='".$_SESSION['userSession']."';";
	
	$query_run = mysqli_query($mysql_connect, $query);
   }
}
function checkAnswer($ans,$levelNo) 
{
	
   require "config.php";
	
	$query  = $mysql_connect->query("select answer from qa1 where levelno=".$levelNo);
 $row=$query->fetch_array();
       if(strcasecmp($ans,$row['answer'])==0)
		
         return true;
		
      else return false;
	
  
} 

  function loggedin()
  {
	  require "config.php";
	  if(isset($_SESSION['userSession']) && !empty($_SESSION['userSession'])) {
		return true;
	} else {
		return false;
	}
  }
  ?>