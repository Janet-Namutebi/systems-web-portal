<!DOCTYPE html>
<html lang="en">
<head>
	<title>DICTS Network Portal </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/mak.ico"/>

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	
	<div class="container-login100" style="background-image: url('images/mak.jpg');background-color: rgba(0,168,255,0.5 );">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form" action ="portal/user.php" method ="post" >
				<span class="login100-form-title p-b-37">
					DICTS Network Portal
				</span>

				<div class="wrap-input100 validate-input m-b-20">
					<input class="input100" type="text" name="webmail" required="required" placeholder="webmail">
					
				</div>

				<div class="wrap-input100 validate-input m-b-25">
					<input class="input100" type="password" name="password" required="required" placeholder="password">
					
				</div>

				<div class="container-login100-form-btn">
					<input type="submit" name="login" value="Login" class="login100-form-btn">
				</div>
			</form>

			
		</div>
	</div>
	
	<!--<script src="js/main.js"></script> -->

</body>
</html>



   