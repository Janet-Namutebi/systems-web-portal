<?php
include('navhead.php');
?>

<!-- Start consultans Area -->
<section class="consultans-area section-gap" id="consultant">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col-md-8 pb-80 header-text">
				<h4 style="color: #3374FF;font-family:'Courgette', cursive;">My Profile</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-12 vol-wrap">
				<div class="single-con">
					<div class="content">
						<?php
         
          $useradmin ="administrator";
		  if(isset($_SESSION["webmail"])) {
		         $result = mysqli_query($bd, "SELECT * FROM portal_users WHERE webmail ='".$_SESSION["webmail"]."'")or die(mysql_error());
		        
		         if(mysqli_num_rows($result)) {
		                 while($row = mysqli_fetch_array($result)) {
		                 echo '<div class="row"><div class="col-sm-4">';
		                 echo '<i class="material-icons" style="font-size:36px; color:rgb(51, 168, 255);">person</i>';
		                 echo '</div><div class="col-sm-4">';
		                 echo $row["firstname"]; 
		                 echo "  ";
		                 echo $row["lastname"];  
		                  echo "</div></div>";
		                  echo "<br>";
		                 echo '<div class="row"><div class="col-sm-4">';
		                 echo "Title";
		                 echo '</div><div class="col-sm-4">';
		                 echo $row["user_type"];    
		                  echo "</div></div>";
		                  echo "<br>";
		                  echo '<div class="row"><div class="col-sm-4">';
		                 echo '<i class="material-icons" style="font-size:36px; color:rgb(51, 168, 255);">contact_mail</i>';
		                 echo '</div><div class="col-sm-4">';
		                 echo $row["webmail"]; 
		                 echo "</div></div>";
		                 }  
		             }
		      }
    	 ?>
					<br>
					<p><a href="session.php?log==true"><button type="button" class="btn btn-primary">Edit Profile</button></a></p>
					 </div>
				</div>
			</div>	

		</div>
	</div>
</section>
<!-- End consultans Area -->


<?php
include('footend.php');
?>