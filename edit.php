<?php
include('nav.php');
?>
<div style="margin-left:15%;padding:1px 16px;height:700px;">
  <div class="container-fluid text-center">
			<h1>DICTS NETWORKS PORTAL </h1>
			<div class="row">
				<div class="col-sm-8"><h3>Users</h3></div>
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
			    	 <h4>Edit User</h4>
			    	 <?php
                      include('connection.php'); //database connection
                      
					  if(isset($_GET["email"])) {
					         $result = mysqli_query($bd, "SELECT * FROM portal_users WHERE webmail = '".$_GET["email"]."'")or die(mysql_error());
					        
					         if(mysqli_num_rows($result)) {
					                 while($row = mysqli_fetch_array($result)) {
					                ?>

                                       <form class="login100-form validate-form" action ="user.php" method ="post" >
				<div class="wrap-input100 validate-input m-b-25">
					<input class="input100" type="text" name="firstname" required="required" value="<?php echo $row['firstname'] ?>">
					
				</div>
				<div class="wrap-input100 validate-input m-b-25">
					<input class="input100" type="text" name="lastname" required="required" value="<?php echo $row['lastname'] ?>">
					
				</div>
				<div class="wrap-input100 validate-input m-b-25">
					<select class="input100" name="user_type" required="required">
						<option value="<? echo $row['user_type'] ?>">Intern</option>
                        <option value="Intern">Intern</option>
						<option value="Administrator">Administrator</option>
					</select>
					
				</div>

				<div class="wrap-input100 validate-input m-b-20">
					<input class="input100" type="text" name="webmail" required="required" value="<?php echo $row['webmail'] ?>">
					
				</div>

				<div class="wrap-input100 validate-input m-b-25">
					<input class="input100" type="password" name="password" required="required" placeholder="please enter password">
					
				</div>
				<div class="wrap-input100 validate-input m-b-25">
					<input class="input100" type="password" name="pass" required="required" placeholder="please confirm password">
					
				</div>

				<div class="container-login100-form-btn">
					<input type="submit" name="save" value="save" class="login100-form-btn">
				</div>
			</form>

                                    <?php
					                 }  
					             }
					      }
			    	 ?>
			    	 
			    </div>
			</div>

		
			</div>
		</div>

		
</div>
</div>

</body>
</html>
