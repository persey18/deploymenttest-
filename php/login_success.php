<?php
session_start();
if(!isset($_SESSION['myusername'])){ // Check if session is not registered, redirect back to main page. 
header("location:../home3.html");
}
?>

<html>
<body>
Login Successful <?php 
  if(isset($_SESSION['myusername']))// check if session is registered 
    {
      echo $_SESSION["myusername"]; //print username if its present 
  
    }
	?>
</body>
</html>

