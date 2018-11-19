<?php
include('nav.php');
?>
<div style="margin-left:15%;padding:1px 16px;height:700px;">
  <div class="container-fluid text-center">
			<h1>DICTS NETWORKS PORTAL </h1>
			<div class="row">
				<div class="col-sm-8"><h3>Our Systems</h3></div>
				<div class="col-sm-4">
					<p>Logged in as <br>
						<?php
						
						include('session.php'); 
						?>
					 
						<a href="session.php?log==true"><button type="button" class="btn btn-primary">logout</button></a></p>
				</div>
			</div>
             
             <br><br>

			  <div class="row">
			    <div class="col-sm-4">
			    	<div class="thumbnail">
			    	 <img src="images/nagios.png">
			    	 <a href="nagios.php"><button type="button" class="btn btn-link"><h4>Nagios</h4></button></a>
			    	 
			    </div>
			</div>

			<div class="col-sm-4">
			    	<div class="thumbnail">
			    	 <img src="images/netflow.png">
			    	<a href="netflow.php"><button type="button" class="btn btn-link"><h4>Netflow</h4></button></a>
			    </div>
			</div>
			   <div class="col-sm-4">
			    	<div class="thumbnail">
			    	 <img src="images/cact.png"> 
			    	<a href="cact.php"><button type="button" class="btn btn-link"><h4>Cacti</h4></button></a>
			    </div>
			</div>
			        
			    
			  </div>

			  <br><br>
			
			  <div class="row">
				<?php
						include('connection.php'); //database connection
						$userintern ="Intern";
						if(isset($_SESSION["webmail"])) {
								$result = mysqli_query($bd, "SELECT * FROM portal_systems")or die(mysql_error());
								
								if(mysqli_num_rows($result)) {
										while($row = mysqli_fetch_array($result)) {
										echo '<div class="row"><div class="col-sm-4">'; 
										echo "  ";
										echo '<p style="color: rgba(0,168,255,0.5);font-size: 60px;">'.$row["systemname"].'</p>'; 
										echo '<a href="'.$row["systemlink"].'">'.$row["systemname"].'</a> ';
										  
										echo "</div></div>";   
										}  
									}
							}
						?>
			  </div>

			   <br><br>
			
			  <div class="row">
			
			
			    
			  </div>

		</div>
</div>

</body>
</html>
