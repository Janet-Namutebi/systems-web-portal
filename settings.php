<?php
include('nav.php');
?>
<div style="margin-left:15%;padding:1px 16px;height:700px;">
  <div class="container-fluid text-center">
			<h1>DICTS NETWORKS PORTAL </h1>
			<div class="row">
				<div class="col-sm-8"><h3>Settings</h3></div>
				<div class="col-sm-4">
					<p>Logged in as <br>
						<?php
						
						include('session.php'); 
						?>
					 
						<a href="session.php?log=true"><button type="button" class="btn btn-primary">logout</button></a></p>
				</div>
			</div>
             
             <br><br>

			  
			<div class="col-sm-6">
			    	<div class="thumbnail">
			    	 <h4>Your Profile</h4>
			    	 <br>
			    	 <?php
                      include('connection.php'); //database connection
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
			    </div>
			</div>
		</div>

		</div>
</div>

</body>
</html>
