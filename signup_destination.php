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
<body>
	<?php
		if(isset($_POST['submit'])){
			$first = $_POST['first_name'];
			$last = $_POST['last_name'];
			$email = $_POST['email'];
			$pass = $_POST['password'];

			if(empty($first) || empty($last) || empty($email) || empty($pass) ){
				echo "Can't leave any field empty !";
			}
			else{
				$sql = "INSERT INTO users_info(first_name,last_name,email,password) " . "VALUES('$first','$last','$email','$pass')";
				$res = mysqli_query($conn,$sql);
				if(!$res){
					die("Query Failed ! " . mysqli_error($conn));
				}
				else{
					echo "";
				}
			}
		}
		else{
			echo "problem !";
		}
	?>
<h1>Welcome</h1>

</body>
</html>