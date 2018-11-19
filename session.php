<?php
include('connection.php'); //database connection
//logout function
function logout(){
         unset($_SESSION['webmail']);
         header('Location:index.php');
         exit();
       }
if(isset($_SESSION["webmail"])) {
         $result = mysqli_query($bd, "SELECT * FROM `portal_users` WHERE `webmail`='".$_SESSION["webmail"]."' LIMIT 1");
        
         if(mysqli_num_rows($result)) {
                 while($row = mysqli_fetch_array($result)) {
                 //$login_session = $row['username'];
                 $_SESSION["webmail"] = $row["webmail"];
                 echo $row["firstname"]; 
                 echo "  ";
                 echo $row["lastname"];     
                 }  
             }
    }
    elseif (isset($_GET['log'])) {
         logout();
    }
    else{
    echo "<script type=\"text/javascript\">
                               alert(\"Sorry, please login \");
                              window.location='index.php';
                               </script>";
                       }
    



?>