<style>
modaloverlay{
  background:rgba(0,0,0,0.8);
  bottom:0;
  left:0;
  opacity:0;
  pointer-events:none;
  position:fixed;
  right:0;
  top:0;
  -webkit-transition: opacity 400ms ease-in;
  -moz-transition: opacity 400ms ease-in;
  transition: opacity 400ms ease-in;
  z-index:-1;
  display: none;
  &:target{
    display: block;
    opacity:1;
    pointer-events:auto;
    z-index:99999;
  }
  
  .modal{
    background-color:white;
    height: 100%;
    position:relative;
    margin:0 auto;
    padding:3em;
    overflow-y: scroll;
    -webkit-overflow-scrolling: touch;
    @media (min-width: 60em) {
      height:75%;
  	 margin:5% auto;
  	 max-height: 57em;
      max-width:66em;
      width:85%;
	
  	}
	> iframe, > div{
		border:none;
		width:100%;
		height:100%;
    }
  }
  @media only screen and (min-width: 60em) {
    th ,thead,tbody,table,td{
        display: block;
    }
}

  .close{
    background-color:turquoise;
    color:white;
    font-size:24px;
    padding:8px 12px;
    position:absolute;
    right:0;
    text-align:center;
    text-decoration:none;
    top:0;
    z-index: 1;
  }
}

</style>

<div class="modal-header">
      <h1 class="text-center" style="color:white;"> Profile </h1>
	</div>
<div class="account" style="background-color:#dfc12a;">	
   
	   <table class="table">
		<thead>
		  
		</thead>
		
	
		<tbody>
		<tr>
			<th>Name: 
			<?php echo($_SESSION['userName'])?></th>
		  </tr>
		<?php         
		   require "config.php";
		  $query  = $mysql_connect->query("select level,email,college,mobile from users1 where email='".$_SESSION['userSession']."'");
			$rows=$query->fetch_array();
			echo("<tr><th>Current level: ".$rows['level']."</th></tr>" );
			echo("<tr><th>Email: ".$rows['email']."</th></tr>" );
			echo("<tr><th>College: ".$rows['college']."</th></tr>" );
			echo("<tr><th>Mobile: ".$rows['mobile']."</th></tr>" );
			//echo("<tr><th>Current level</th><th>:".$rowspos['level']."</th></tr>" );
			$query=$mysql_connect->query("select email from users1 order by level desc ,time asc; ");
		     $count=$query->num_rows;
			 $position=0;
			for($i=0;$i<$count;$i++)
			{
				$query_row=$query->fetch_array();
				if($query_row['email']==$_SESSION['userSession'])
					$position=$i+1;
			}
			echo("<tr><th>Position: ".$position."</th></tr>" );
	    ?>
		
		</tbody>
	  </table>
	</div>