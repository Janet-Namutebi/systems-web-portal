<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
<!-- Mobile Specific Meta -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Favicon-->
<link rel="shortcut icon" href="img/fav.png">
<!-- Author Meta -->
<meta name="author" content="Colorlib">
<!-- Meta Description -->
<meta name="description" content="">
<!-- Meta Keyword -->
<meta name="keywords" content="">
<!-- meta character set -->
<meta charset="UTF-8">
<!-- Site Title -->
<title>DICTS Network Portal</title>

<!--===============================================================================================-->  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--===============================================================================================-->      
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="icon" type="image/png" href="/netportal/images/mak.jpg"/>

<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Courgette|Dancing+Script|Great+Vibes|Tangerine" rel="stylesheet"> 
<!--
CSS
============================================= -->
<link rel="stylesheet" href="/netportal/css/main.css">
<link rel="stylesheet" href="css/linearicons.css">=
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/nice-select.css">
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/main.css">

<script>

// When the user clicks the button, open the ADD 
function myFunction() {
	// Get the ADD
	var modal = document.getElementById('myModal');
	modal.style.display ="block"
}

// When the user clicks on <span> (x), close the ADD
function myspan() {
	// Get the <span> element that closes the ADD
	var span = document.getElementsByClassName("close")[0];
  	modal.style.display = "none";
}

// When the user clicks anywhere outside of the ADD, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</head>
<body>

<!-- Start Header Area -->
<header class="default-header">
	<div class="container">
		<div class="header-wrap">
			<div class="header-top d-flex justify-content-between align-items-center">
				<div class="logo">
					<p style="color:#338DFF"><a href="#home"><img src="/netportal/images/mak.jpg" width="100px" height="70px" alt="">DICTS SYSTEM PORTAL</a></p>
				</div>
				<?php
				    session_start();
				    echo '<p style="color:#338DFF">';
				    echo "Logged in as";
				    echo '<br>';
					include('session.php');
					echo "</p>";
					include('connection.php'); //database connection
				?>
				<div class="main-menubar d-flex align-items-center">
					<nav class="hide">
						<a href="home.php">Home</a>
						<a href="sys.php">Systems</a>
						<a href="mem.php">Users</a>
						<a href="pro.php">Settings</a>
						<a href="session.php?log==true"><button type="button" class="btn btn-primary">logout</button></a>
					</nav>
					<div class="menu-bar"><span class="lnr lnr-menu"></span></div>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- End Header Area -->