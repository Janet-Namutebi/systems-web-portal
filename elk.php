<?php
include('nav.php');
?>
<body>

		<div class="container-fluid text-center">
			<h1>DICTS NETWORKS PORTAL </h1>
			<div class="row">
				<div class="col-sm-8"><h3>Elasticsearch Logstash Kibana</h3></a></div>
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
			    	<iframe src=elk width="1200px" height="800px"></iframe>
			    </div>
		</div>
	</div>

</body>
</html>