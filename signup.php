<?php
	$host = "localhost";
	$dbuser = "root";
	$pass = "";
	$dbname = "users";
	$conn = mysqli_connect($host,$dbuser,$pass,$dbname);

	if(mysqli_connect_errno()){
		die("Connection Failed! " . mysql_connect_error());
	}

?>

<html>
	<head>
		<title>Signup Page</title>
	</head>
<body>
	<form method="POST" action="signup_destination.php">
	  First name:<br>
	  <input type="text" name="first_name" />
	  <br>
	  Last name:<br>
	  <input type="text" name="last_name" />
	  <br>
	  Email:<br>
	  <input type="email" name="email" />
	  <br>
	  Password:<br>
	  <input type="password" name="password" />
	  <br>
	  <br>
	  <input type="submit" name="submit" value="submit" />
	</form> 

</body>
</html>