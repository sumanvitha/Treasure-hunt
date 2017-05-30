<style>


// Modal
.modaloverlay{
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
      <h2 class="text-center" style="color:white;"> Leaderboard </h2>
	</div>
  
<div class="leaderboard" style="background-color:#dfc12a;>	
   <div class="leaderboard">	
	   <table class="table">
		<thead>
		  <tr>
			<th>Rank</th>
			<th>name</th>
		  </tr>
		</thead>
	</thead>
</div>	
		<tbody>
		<?php         
		   require "config.php";
			$query = "select firstname,lastname from users1 order by level desc,time asc limit 10;";
			if($query_run = mysqli_query($mysql_connect, $query)) {
				$rows = mysqli_num_rows($query_run);
				if($rows > 0) {
					for($i=0;$i<$rows;$i++){
						$query_row = mysqli_fetch_assoc($query_run);
						$fname = $query_row['firstname'];
						$lname = $query_row['lastname'];

						echo '<tr>
								<th>'.($i+1).'</th>
								<th>'.ucfirst($fname).' '.ucfirst($lname).'</th>
							</tr>';
					      }
					
						
						}
					}
					
				
			
	    ?>
		</tbody>
	  </table>
	</div>