<?php 
session_start();
//database connection
   $mysql_hostname = "localhost";
    $mysql_user = "root";
    $mysql_password = "";
    $mysql_database = "portal";
    $prefix = "";
    $bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database) or die("Could not connect database");

//addmember
function addmember($firstname, $lastname, $user_type, $webmail, $password, $pass){
	//declaring the variables to be stored in database
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$user_type = $_POST['user_type'];
	$webmail = $_POST['webmail'];
	$password = $_POST['password'];
	$pass = $_POST['pass'];

	global $bd; //database connection

	if (isset($firstname) && isset($password) && isset($pass) && isset($webmail) && isset($user_type) && isset($lastname)) {
		//check if the passwords match
		if (isset($password) !== isset($pass) ) {
			echo "<script type= 'text/javascript'>alert('the password do not match');</script>";
		}
		$hassedPasword = md5($password);
		//storing values of the variables to their corresponding fields in the login table
		echo $hassedPasword;
        
		$result = mysqli_query($bd, "INSERT INTO portal_users (firstname,lastname,webmail,password,user_type) VALUES ('$firstname','$lastname','$webmail','$hassedPasword','$user_type')");

		if($result){
			
			echo "<script type=\"text/javascript\">
							alert(\"New Member added\");
							window.location='member.php';
						</script>";
				}
	}

}

//call addmember function
if(isset($_POST['register'] )) {
	addmember($_POST['firstname'], $_POST['lastname'], $_POST['user_type'], $_POST['webmail'], $_POST['password'], $_POST['pass']);
}

//addsystem
function addsystem($systemname, $systemlink, $access_level){
	//declaring the variables to be stored in database
	$systemname = $_POST['systemname'];
	$systemlink = $_POST['systemlink'];
	$access_level = $_POST['access_level'];

	global $bd; //database connection
	if (isset($systemname) && isset($systemlink) && isset($access_level)) {
		//storing values of the variables to their corresponding fields in the login table    
        
		$result = mysqli_query($bd, "INSERT INTO portal_systems  (systemname,systemlink,access_level) VALUES ('$systemname','$systemlink','$access_level')");

		if($result){
			
			echo "<script type=\"text/javascript\">
							alert(\"New System added\");
							window.location='home.php';
						</script>";
				}
	}

}

//call addsystem function
if(isset($_POST['system_register'] )) {
	addsystem($_POST['systemname'], $_POST['systemlink'], $_POST['access_level']);
}


//login
function login($webmail, $password){
	global $bd; 
	$webmail = $_POST['webmail'];
    $password = $_POST['password'];
    $hassedPasword = md5($password);
    
    	//check if user exits
	 $consql = mysqli_query($bd, "SELECT * FROM portal_users WHERE webmail = '$webmail' AND password = '$hassedPasword' LIMIT 1");
	 $count = mysqli_num_rows($consql);
		   
		   if($count > 0){
				      	while ($rowcon =mysqli_fetch_array($consql, MYSQLI_ASSOC)) {
				      		$_SESSION['webmail'] = $webmail;
				      		$_SESSION['user_type'] = $rowcon['user_type'];
				      		if(isset($rowcon['user_type'])){
				      			
				      			header("location:/netportal/portal/home.php");
				      		}
				      	    else{
				      	    	header("location:/netportal/index.php");
				      	    }
				      	}
				      	
				       }
				       else{
				       	echo "<script type=\"text/javascript\">
				               alert(\"Sorry, You don't have an account with us, please consult your Manager for help \");
				              window.location='index.php';
			                   </script>";
                       }
                       mysqli_close($mysqli);

	       
}
//call login function

if (isset($_POST['login'])) {
	login($_POST['webmail'], $_POST['password']);
}

function editing_user($firstname, $lastname, $user_type, $webmail, $password, $pass){
	//declaring the variables to be stored in database
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$user_type = $_POST['user_type'];
	$webmail = $_POST['webmail'];
	$password = $_POST['password'];
	$pass = $_POST['pass'];

 
	if (isset($firstname) && isset($password) && isset($pass) && isset($webmail) && isset($user_type) && isset($lastname)) {
		//check if the passwords match
		if (isset($password) !== isset($pass) ) {
			echo "<script type= 'text/javascript'>alert('the password do not match');</script>";
		}
		$hassedPasword = md5($password);
		//storing values of the variables to their corresponding fields in the login table
		//echo $hassedPasword;

		$query = "UPDATE `portal_users` SET `firstname`='$firstname',`lastname`='$lastname',`webmail`='$webmail',`password`='$hassedPasword',`user_type`='$user_type' WHERE `webmail` = '$webmail'";
	  	 
		if(mysqli_query($bd, $query)){				
			echo "<script type=\"text/javascript\">
				alert(\"Member Details updated \");
				window.location='member.php';
			</script>";
		}
				
			
	}
}

//editing user
if(isset($_POST['save'])){
	editing_user($_POST['firstname'], $_POST['lastname'], $_POST['user_type'], $_POST['webmail'], $_POST['password'], $_POST['pass']);
}
 
?>