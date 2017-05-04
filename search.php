<?php
$server="localhost";
$user="root";
$pass="";
$dbn="cms";
$mysqli= new mysqli($server,$user,$pass,$dbn);
$query="SELECT * FROM users";
$conn_user=$mysqli->query($query) or die('error_log(message)');

if (isset($_POST['submit'])) { 
	$mail= $_POST['mail'];
	if (isset($_POST['mail']) or isset($_POST['pass'])) {
		$query="SELECT * FROM users WHERE email LIKE '$mail'";
		$conn_user=$mysqli->query($query) or die('error_log(message)');
		if ($conn_user == $mail) {
			header('location: home.php');
		}else{
			die();
		}
						# code...
	}
	}
?>
<!doctype html>
<html>
<head><title>search</title></head>
<body>
	<form method="POST">
	mail<input type="text" name="mail"  />
	pass<input type="text" name="pass"/>
	<input  type="submit" name="submit" value="search" id="del"><br>
	</form>
</body>
</html>




