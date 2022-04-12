<?php
  session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
	  $username = $_POST["username"];
	  $password = $_POST["password"]; 
		
      if($username == "test" && $password == "1234") {
         //session_register("myusername");
        $_SESSION['logged_user'] = $username;
         
         header("location: Home.html");
      }else {
         echo "<script> alert('You have entered a wrong username or password!!!!')</script>";
      }
   }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="src/styles/loginformStyles.css">
</head>
<body>

<div class="form-style-6">
<h1>Login With Us</h1>
<form method = "POST" action="">
<input type="text" id="uname" name="uname" placeholder="Your Username" />
<input type="password" id="pwd" name="pwd" placeholder="Password" /><br/><br/>
<input type="submit" value="Login" /><br/><br/>
</form>
</div>

</body>
</html>