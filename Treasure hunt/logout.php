<?php
    include("session.php");

   
   if(session_destroy()) {
		unset($_SESSION['userName']);		
      header("Location: welcome-page.php");
   }
?>