<?php
session_start();
if($_SESSION['user_type'] == "Manager"){
    ?>
<!DOCTYPE html>
<html>
<head>
     <title>DICTS Network Portal </title>
    <!--===============================================================================================-->  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->      
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/icons/mak.ico"/>

    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
<style>
body {
    margin: 0;
}

ul {
    list-style-type: none;
    margin: 0;
    padding-top: 10px;
    width: 10%;
    background-color: #f1f1f1;
    position: fixed;
    height: 100%;
    overflow: auto;
}

li a {
    display: block;
    color: #000;
    padding: 10px 20px;
    text-decoration: none;
}

li a.active {
    background-color: rgb(51, 168, 255);
    color: white;
}

li a:hover:not(.active) {
    background-color: rgba(189, 89, 212, 0.8);
    color: white;
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="manager.php">Home</a></li>
  <li><a href="member.php">Users</a></li>
  <li><a href="systems.php">Systems</a></li>
  <li><a href="settings.php">Settings</a></li>
  
</ul>


 <?php
}
elseif ($_SESSION['user_type'] == "Administrator") {
   ?>
    <!DOCTYPE html>
<html>
<head>
     <title>DICTS Network Portal </title>
    <!--===============================================================================================-->  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->      
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/icons/mak.ico"/>

    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
<style>
body {
    margin: 0;
}

ul {
    list-style-type: none;
    margin: 0;
    padding-top: 10px;
    width: 10%;
    background-color: #f1f1f1;
    position: fixed;
    height: 100%;
    overflow: auto;
}

li a {
    display: block;
    color: #000;
    padding: 10px 20px;
    text-decoration: none;
}

li a.active {
    background-color: rgb(51, 168, 255);
    color: white;
}

li a:hover:not(.active) {
    background-color: rgba(189, 89, 212, 0.8);
    color: white;
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="portal.php">Home</a></li>
 
  <li><a href="setting.php">Settings</a></li>
  
</ul>

   <?php
}

else{

?>
<!DOCTYPE html>
<html>
<head>
     <title>DICTS Network Portal </title>
	<!--===============================================================================================-->	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->		
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/icons/mak.ico"/>

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<style>
body {
    margin: 0;
}

ul {
    list-style-type: none;
    margin: 0;
    padding-top: 10px;
    width: 10%;
    background-color: #f1f1f1;
    position: fixed;
    height: 100%;
    overflow: auto;
}

li a {
    display: block;
    color: #000;
    padding: 10px 20px;
    text-decoration: none;
}

li a.active {
    background-color: rgb(51, 168, 255);
    color: white;
}

li a:hover:not(.active) {
    background-color: rgba(189, 89, 212, 0.8);
    color: white;
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="intern.php">Home</a></li>
 
  <li><a href="setting.php">Settings</a></li>
  
</ul>

<?php
  }
  
 
 
?>