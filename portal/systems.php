<?php
include('nav.php');
?>

<div style="margin-left:15%;padding:1px 16px;height:700px;">
  <div class="container-fluid text-center">
			<h1>DICTS NETWORKS PORTAL </h1>
			<div class="row">
				<div class="col-sm-8"><h3>Systems</h3></div>
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
			    <div class="col-sm-6">
			    	<div class="thumbnail">
			    	 <h4>Register New System</h4>
			    	 <form class="login100-form validate-form" action ="user.php" method ="post" >
				<div class="wrap-input100 validate-input m-b-25">
					<input class="input100" type="text" name="systemname" required="required" placeholder="system name">
					
				</div>
				<div class="wrap-input100 validate-input m-b-25">
					<input class="input100" type="text" name="systemlink" required="required" placeholder="system link">
					
				</div>
				<div class="wrap-input100 validate-input m-b-25">
					<select class="input100" name="access_level" required="required">
						<option value="Intern">Intern</option>
						<option value="Administrator">Administrator</option>
                        <option value="Administrator">Manager</option>
					</select>
					
				</div>

				<div class="container-login100-form-btn">
					<input type="submit" name="system_register" value="register" class="login100-form-btn">
				</div>
			</form>
			    	 
			    </div>
			</div>

		</div>
</div>
</div>

</body>
</html>
