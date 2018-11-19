  <?php
  session_start();
          include("connection.php"); // connect to the database
            include("session.php");

    $myfriend=$_GET['delete'];
    $me= $_SESSION["webmail"];
    
     $query = mysqli_query($bd, "delete from portal_users WHERE webmail = '" . $_GET["delete"] . "' AND webmail != '" . $_SESSION["webmail"] . "'");
     {
		echo "<script type=\"text/javascript\">
							alert(\"Member has been removed\");
							window.location='member.php';
						</script>";	
		}
  ?>