<?php
include('navhead.php');
?>

<!-- start banner Area -->
<section class="banner-area relative" id="home">
<div class="container">
		<div class="row fullscreen align-items-center justify-content-center">
			<div class="banner-content col-lg-6">
				<h1 class="text-uppercase">
					DICTS System <br>
					Portal
				</h1>
				<p>
					The collection of all systems that support the unit.
				</p>
			</div>
			<div class="col-lg-6 d-flex img-right">
				<table border="0" style="width:100%">
					<tr>
						<th class="thead" colspan="2">Portal Statistics</th>
					</tr>
					<tr>
						<th>
							Total Users
							<p>(
								<?php
							if(isset($_SESSION["webmail"])) {
								$result = mysqli_query($bd, "SELECT * FROM portal_users")or die(mysql_error());

								$row = mysqli_num_rows($result); 
								echo $row;
							}
							?>
							)</p>
						</th>
						<th>
							Systems
						<p>(
							<?php
								if(isset($_SESSION["webmail"])) {
										$result = mysqli_query($bd, "SELECT * FROM portal_systems")or die(mysql_error());

								$row = mysqli_num_rows($result); 
								echo $row;
								}
							?>
						)</p>
						</th>
					</tr>
					<tr>
						<td>
							Interns
						<p>(
							<?php
              
		                      $userintern ="Intern";
							  if(isset($_SESSION["webmail"])) {
							         $result = mysqli_query($bd, "SELECT * FROM portal_users WHERE user_type = '$userintern'");
							        
							         $row = mysqli_num_rows($result); 
									 echo $row;
									}
							 ?>
							)</p>
						</td>
					</tr>
					<tr>
						<td>
							Administrators
						<p>(
							<?php
              
		                      $useradmin ="Administrator";
							  if(isset($_SESSION["webmail"])) {
							         $result = mysqli_query($bd, "SELECT * FROM portal_users WHERE user_type = '$useradmin'");
							         
							         $row = mysqli_num_rows($result); 
									 echo $row;
									
									}
							 ?>
							)</p>
							
						</td>
					</tr>
					<tr>
						<td>
							Managers
						<p>(
							<?php
              
		                      $userman ="Manager";
							  if(isset($_SESSION["webmail"])) {
							         $result = mysqli_query($bd, "SELECT * FROM portal_users WHERE user_type = '$userman'");
							         
							         $row = mysqli_num_rows($result); 
									 echo $row;
									
									}
							 ?>
							)</p>
							
						</td>
					</tr>
				</table>
			</div>
		</div>
</div>
</section>
<!-- End banner Area -->

<?php
include('footend.php');
?>