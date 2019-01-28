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
			    	 <img src="images/documentation.png"> 
			    	<a href="doc.php"><button type="button" class="btn btn-link"><h4>Documentation</h4></button></a>
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
			   <div class="col-sm-4">
			    	<div class="thumbnail">
			    	 <img src="images/egroup.png"> 
			    	<a href="egroup.php"><button type="button" class="btn btn-link"><h4>Egroupware</h4></button></a>
			    </div>
			</div>
			    <div class="col-sm-4">
			    	<div class="thumbnail">
			    	 <img src="images/documentation.png"> 
			    	<a href="elk.php"><button type="button" class="btn btn-link"><h4>ELK</h4></button></a>
			    </div>
			</div>
			    <div class="col-sm-4">
			    	<div class="thumbnail">
			    	 <img src="images/netdot.png"> 
			    	<a href="netdot.php"><button type="button" class="btn btn-link"><h4>Nedot</h4></button></a>
			    </div>
			</div>
			  </div>
		</div>
</div>

</body>
</html>
