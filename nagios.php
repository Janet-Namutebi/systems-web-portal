<?php
include('nav.php');
?>
		<div class="container-fluid text-center">
			<h1>DICTS NETWORKS PORTAL </h1>
			<div class="row">
				<div class="col-sm-8"><h3>Nagios</h3></div>
				<div class="col-sm-4">
					<p>Logged in as <br>
						<?php
						
						include('session.php'); 
						?>
					 
						<a href="session.php?log=true"><button type="button" class="btn btn-primary">logout</button></a></p>
				</div>
			</div>

			<br><br>

			  <div class="row">
			    <div class="col-sm-12">
			    	<iframe src=nagios width="1200px" height="700px"></iframe>
			    </div>
		</div>
	</div>

</body>
</html>