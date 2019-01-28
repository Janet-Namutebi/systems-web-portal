<?php
include('navhead.php');
?>

<!-- Start about Area -->
<section class="about-area" id="appoinment">
	<div class="container-fluid">

		<div id="myModal" class="modal">
		  	<div class="modal-content">
		  		<span class ="close" onclick="myspan()">&times;</span>
		  		 <h4>Register New Member</h4>
			    	 <form class="login100-form validate-form" action ="user.php" method ="post" >
				<div class="wrap-input100 validate-input m-b-25">
					<input class="input100" type="text" name="firstname" required="required" placeholder="firstname">
					
				</div>
				<div class="wrap-input100 validate-input m-b-25">
					<input class="input100" type="text" name="lastname" required="required" placeholder="lastname">
					
				</div>
				<div class="wrap-input100 validate-input m-b-25">
					<select class="input100" name="user_type" required="required">
						<option value="Intern">Intern</option>
						<option value="Administrator">Administrator</option>
					</select>
					
				</div>

				<div class="wrap-input100 validate-input m-b-20">
					<input class="input100" type="text" name="webmail" required="required" placeholder="webmail">
					
				</div>

				<div class="wrap-input100 validate-input m-b-25">
					<input class="input100" type="password" name="password" required="required" placeholder="password">
					
				</div>
				<div class="wrap-input100 validate-input m-b-25">
					<input class="input100" type="password" name="pass" required="required" placeholder="password">
					
				</div>

				<div class="container-login100-form-btn">
					<input type="submit" name="register" value="register" class="login100-form-btn">
				</div>
			</form>
		</div>
			
		</div>
		<div class="row d-flex justify-content-end">
			<div class="col-lg-6 col-md-12 about-right no-padding">
				<p><button type="button" class="btn btn-primary" onclick="myFunction()">Add New User</button></p> <br>
				<h6 style="color: #02234D">Interns</h6>
		    	 <?php
                   
                  $userintern ="Intern";
				  if(isset($_SESSION["webmail"])) {
				         $result = mysqli_query($bd, "SELECT * FROM portal_users WHERE user_type = '$userintern' AND webmail !='".$_SESSION["webmail"]."'")or die(mysql_error());
				        
				         if(mysqli_num_rows($result)) {
				                 while($row = mysqli_fetch_array($result)) {
				                 echo '<p><div class="row"><div class="col-sm-4">';
				                 echo $row["firstname"]; 
				                 echo "  ";
				                 echo $row["lastname"];   
				                 echo '</div><div class="col-sm-4">';  
				                 echo "  ";
				                 echo '<a href="remove_member.php?delete=' .$row['webmail'].' ">  Remove</a> ';
				                 echo '</div><div class="col-sm-4">';  
				                 echo "  ";
				                 echo '<a href="edit.php?email=' .$row['webmail'].' ">  Edit</a> ';
				                 echo "</div></div> </p>";   
				                 }  
				             }
				      }
		    	 ?>
			</div>
			<div class="col-lg-6 col-md-12 about-right no-padding">
				<h6 style="color: #02234D">Administrators</h6>
		    	 <?php
               
                  $useradmin ="Administrator";
				  if(isset($_SESSION["webmail"])) {
				         $result = mysqli_query($bd, "SELECT * FROM portal_users WHERE user_type = '$useradmin' AND webmail !='".$_SESSION["webmail"]."'")or die(mysql_error());
				        
				         if(mysqli_num_rows($result)) {
				                 while($row = mysqli_fetch_array($result)) {
				                 echo '<div class="row"><div class="col-sm-4">';
				                 echo $row["firstname"]; 
				                 echo "  ";
				                 echo $row["lastname"];   
				                 echo '</div><div class="col-sm-4">';  
				                 echo "  ";
				                 echo '<a href="remove_member.php?delete=' .$row['webmail'].' ">  Remove</a> ';
				                 echo '</div><div class="col-sm-4">';  
				                 echo "  ";
				                 echo '<a href="edit.php?email=' .$row['webmail'].' ">  Edit</a> ';
				                 echo "</div></div>";   
				                 }  
				             }
				      }
		    	 ?>
			</div>
		</div>
	</div>
</section>
<!-- End about Area -->


<?php
include('footend.php');
?>