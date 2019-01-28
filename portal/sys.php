<?php
include('navhead.php');
?>


<!-- Start feature Area -->
<section class="feature-area section-gap" id="service">
	<div class="container">

		<p><button type="button" class="btn btn-primary" onclick="myFunction()">Add New System</button></p>

		<div id="myModal" class="modal">
		  	<div class="modal-content">
		  		<span class ="close" onclick="myspan()">&times;</span>
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

		<div class="row">
		<?php
			if(isset($_SESSION["webmail"])) {
					$result = mysqli_query($bd, "SELECT * FROM portal_systems")or die(mysql_error());

					if(mysqli_num_rows($result)) {
						while($row = mysqli_fetch_array($result)) {

							if(count($row) < 4){
								echo '<div class="col-lg-6">';
								echo '<div class="single-feature d-flex flex-row pb-30"><div class="desc">'; 
								echo "  ";
								echo '<h4 class="text-uppercase">'.$row["systemname"].'</h4>'; 
								echo '<p><a target="newtab" href="'.$row["systemlink"].'">'.$row["systemname"].'</a></p>';
								  
								echo "</div></div></div>";
							}
							elseif(count($row) > 4) {
							 	# code...
								echo '<div class="col-lg-6">';
								echo '<div class="single-feature d-flex flex-row pb-30"><div class="desc">'; 
								echo "  ";
								echo '<h4 class="text-uppercase">'.$row["systemname"].'</h4>'; 
								echo '<p><a target="newtab" href="'.$row["systemlink"].'">'.$row["systemname"].'</a></p>';
							  
								echo "</div></div></div>";
							}
							else {
								echo '<div class="col-lg-6">';
								echo '<div class="single-feature d-flex flex-row pb-30"><div class="desc">'; 
								echo "  ";
								echo '<h4 class="text-uppercase">'.$row["systemname"].'</h4>'; 
								echo '<p><a target="newtab" href="'.$row["systemlink"].'">'.$row["systemname"].'</a></p>';
							  
								echo "</div></div></div>";
							}
						    
						}
					}
			}
			?>
			<!--<div class="feature-area section-gap">
				<frameset>
					<frame name="newtab"></frame>
				</frameset> -->
			</div>
		</div>
	</div>
</section>
<!-- End feature Area -->


<?php
include('footend.php');
?>